<?php

namespace App;

class Autoloader{

    /**
     * Enregistre l'autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclu le fichier correspondant à notre class
     * @param string $class Le nom de la classe à charger.
     */
    static function autoload($class){
        if(strpos($class, __NAMESPACE__ . '\\') === 0){
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            $file = __DIR__ . '/' . $class . '.php';
            if (file_exists($file)){
                    require $file;
            }else{
                $file = __DIR__.'/ErrorController.php';
            }
        }
    }
}