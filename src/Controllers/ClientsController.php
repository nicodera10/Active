<?php

namespace App\Controllers;

use App\DAO\ClientsDAO;

class ClientsController extends Controller
{
    public function index()
    {
        echo 'Voici la liste des clients';
        $clients = new ClientsDAO;
        $allClients = $clients->readAll();
        echo $allClients;
    }
}