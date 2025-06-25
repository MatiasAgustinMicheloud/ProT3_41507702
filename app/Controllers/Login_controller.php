<?php
namespace App\Controllers;
use App\Models\Usuarios_model;
use CodeIgniter\Controller;

Class Login_controller extends BaseController{

    public function index(){

        helper(['form','url']);

        $data['titulo']='Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth(){

        $input = $this->validate([
            'email'=>[
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Ingrese su email',
                    'valid_email' => 'Ingrese un email valido'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required'=> 'Ingrese la contraseña'
                ]
            ]
        ]);

        if(!$input){

            $data['titulo']='Login';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/login', ['validation' => $this->validator]);
            echo view('front/footer_view');

        } else {

            $session = session();
            $model = new Usuarios_model();

            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $data = $model->where('email', $email)->first();

            // Si encuentra un registro con ese email ingresa
            if($data){
                $pass = $data['password'];
                $baja = $data['baja'];

                // si el usuario fue dado de baja ingresa
                if($baja == 'SI'){
                    $session->setFlashdata('fail', 'Este usuario fue dado de baja');
                    return redirect()->to('/login');
                }

                // se verifican los datos ingresados por el usuario
                $verify_pass = password_verify($password, $pass);
                // si el password es correcto ingresa
                if($verify_pass){
                    $ses_data = [
                        'id_usuario' => $data['id_usuario'],
                        'nombre' => $data['nombre'],
                        'apellido' => $data['apellido'],
                        'email' => $data['email'],
                        'usuario' => $data['usuario'],
                        'id_perfil' => $data['id_perfil'],
                        'logged_in' => TRUE
                    ];

                    $session->set($ses_data);

                    $session->setFlashdata('success', 'Bienvenido ' . $session->get('usuario'));
                    return redirect()->to('/panel');

                } else {
                    $session->setFlashdata('fail', 'Contraseña incorrecta');
                    return redirect()->to('/login');
                }

            } else {
                $session ->setFlashdata('fail', 'Usuario no encontrado');
                return redirect()->to('/login');
            }
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

}