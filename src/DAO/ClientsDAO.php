<?php

namespace App\DAO;

class ClientsDAO extends DAO
{

    public function __construct()
    {
        $this->table = 'clients';
    }

}