<?php

namespace App\Core;

use PDO;
use PDOException;

class ConnexionDB {

    private static string $fichierConf = '../variables.conf';
    private static array $config;
    private static string $dbHost;
    private static string $dbPort;
    private static string $dbName;
    private static string $dbUser;
    private static string $dbPassword;

    //interdiction d'appeler le constructeur
    private function __construct()
    {
        trigger_error('L\'instanciation n\'est pas autorisée.', E_USER_ERROR);
    }

    // Chargement de la configuration dans une méthode statique distincte
    private static function loadConfig() {
        self::$config = parse_ini_file(self::$fichierConf, true);
        self::$dbHost = self::$config['DB_HOST'];
        self::$dbPort = self::$config['DB_PORT'];
        self::$dbName = self::$config['DB_NAME'];
        self::$dbUser = self::$config['DB_USER'];
        self::$dbPassword = self::$config['DB_PASSWORD'];
    }

    public static function getConnexion(){

        // Chargement de la configuration
        self::loadConfig();

        try {
            $db = new PDO(
                "mysql:host=". self::$dbHost .
                ";port=". self::$dbPort .
                ";dbname=".self::$dbName,
                self::$dbUser,
                self::$dbPassword
            );

            // Configuration de PDO pour lever des exceptions en cas d'erreur SQL
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }

        return $db;
    }
}