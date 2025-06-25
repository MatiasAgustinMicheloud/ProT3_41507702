<?php
namespace App\Controllers;
use CodeIgniter\Controller;

Class Panel_controller extends BaseController{

    public function index(){

        $session = session();
        // $usuario = $session->get('usuario');
        // $perfil = $session->get('id_perfil');

        $dataTitulo['titulo'] = 'Panel del usuario';
        echo view('front/head_view', $dataTitulo);
        echo view('front/navbar_view');
        echo view('back/usuario/usuario_logueado');
        echo view('front/footer_view');
        
    }

}