<?php

namespace App\Controllers;

class ErrorController extends Controller
{
    public function index()
    {
        echo 'la page demandée n\'existe pas';
    }
}