<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Pole Position';
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function acerca_de()
    {
        $data['titulo']='Acerca de';
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }

    public function login()
    {
        $data['titulo']='login';
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/login');
        echo view('front/footer_view');
    }

    public function registro()
    {
        $data['titulo']='registro';
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/registrarse');
        echo view('front/footer_view');
    }

    public function mclaren()
    {
        $data['titulo']='Pole Position - McLaren';
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/mclaren_view');
        echo view('front/footer_view');
    }

    public function ferrari()
    {
        $data['titulo']='Pole Position - Ferrari';
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/ferrari_view');
        echo view('front/footer_view');
    }

    public function redbull()
    {
        $data['titulo']='Pole Position - Red Bull';
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/redbull_view');
        echo view('front/footer_view');
    }
}
