<?php
 namespace App\Controllers;
 use App\Models\Usuarios_model;
 use CodeIgniter\Controller;

 Class Usuario_controller extends Controller{

    public function __construct(){
        helper(['form','url']);
    }

    public function create(){
        $data['titulo']='registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }


    public function formValidation(){
        $input = $this->validate([
            'nombre' => [
                'rules' => 'required|min_length[3]|max_length[50]',
                'errors' => [
                    'required' => 'El campo nombre es obligatorio',
                    'min_length' => 'La longitud mínima debe ser de 3 caracteres',
                    'max_length' => 'La longitud del nombre no debe superar los 50 caracteres'
                ]
            ],
            'apellido' => [
                'rules' => 'required|min_length[3]|max_length[50]',
                'errors' => [
                    'required' => 'El campo apellido es obligatorio',
                    'min_length' => 'La longitud mínima debe ser de 3 caracteres',
                    'max_length' => 'La longitud del apellido no debe superar los 50 caracteres'
                ]
            ],
            'usuario' => [
                'rules' => 'required|min_length[3]|max_length[20]',
                'errors' => [
                    'required' => 'El campo usuario es obligatorio',
                    'min_length' => 'La longitud mínima debe ser de 3 caracteres',
                    'max_length' => 'La longitud del usuario no debe superar los 50 caracteres'
                ]
            ],
            'email' => [
                'rules' => 'required|min_length[5]|max_length[100]|valid_email|is_unique[usuarios.email]',
                'errors' => [
                    'required' => 'El campo email es obligatorio',
                    'min_length' => 'La longitud mínima debe ser de 5 caracteres',
                    'max_length' => 'La longitud del email no debe superar los 100 caracteres',
                    'valid_email' => 'Ingrese un email valido',
                    'is_unique' => 'Este email ya esta registrado'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[100]',
                'errors' => [
                    'required' => 'El campo contraseña es obligatorio',
                    'min_length' => 'La longitud mínima debe ser de 5 caracteres',
                    'max_length' => 'La longitud no debe superar los 100 caracteres'
                ]
            ],
            'repetirPassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'El campo repetir contraseña es obligatorio',
                    'matches' => 'Las contraseñas no coiciden'
                ]
            ]
        ],);

        $formModel = new Usuarios_model();

        if(!$input){
            $data['titulo']='registro';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ]);

            session()->setFlashData('success', 'Usuario registrado con exito!');
            return $this->response->redirect('/login');
        }
    }
 }