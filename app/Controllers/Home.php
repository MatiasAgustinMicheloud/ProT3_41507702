<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function quienes_somos()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }

    public function acerca_de()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }

    public function login()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/login');
        echo view('front/footer_view');
    }

    public function registro()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/registrarse');
        echo view('front/footer_view');
    }

    public function mclaren()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/mclaren');
        echo view('front/footer_view');
    }

    public function ferrari()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/ferrari');
        echo view('front/footer_view');
    }

    public function redbull()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/redbull');
        echo view('front/footer_view');
    }
}
