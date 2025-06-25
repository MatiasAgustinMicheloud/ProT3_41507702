<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Pole Position';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function acerca_de()
    {
        $data['titulo']='Acerca de';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }

    // public function login()
    // {
    //     $data['titulo']='login';
    //     echo view('front/head_view', $data);
    //     echo view('front/navbar_view');
    //     echo view('back/usuario/login');
    //     echo view('front/footer_view');
    // }

    // se crea en usuario_controller

    // public function registro()
    // {
    //     $data['titulo']='registro';
    //     echo view('front/head_view', $data);
    //     echo view('front/navbar_view');
    //     echo view('back/usuario/registro');
    //     echo view('front/footer_view');
    // }

    public function mclaren()
    {
        $data['titulo']='Pole Position - McLaren';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/mclaren_view');
        echo view('front/footer_view');
    }

    public function ferrari()
    {
        $data['titulo']='Pole Position - Ferrari';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/ferrari_view');
        echo view('front/footer_view');
    }

    public function redbull()
    {
        $data['titulo']='Pole Position - Red Bull';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/redbull_view');
        echo view('front/footer_view');
    }
}
