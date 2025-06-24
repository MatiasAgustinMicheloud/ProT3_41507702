<?php
 namespace App\Controllers;
 use App\Models\Usuarios_model;
 use codeIgniter\Controller;

 Class Usuario_controller extends Controller{

    public function __construct(){
        helper(['form','url']);
    }

 }