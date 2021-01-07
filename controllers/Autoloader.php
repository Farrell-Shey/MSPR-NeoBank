<?php


namespace MSPR;


Abstract class Autoloader
{

    private static function loader($class)
    {
        var_dump($class);
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {

            // on vire le namespace pour require seulement le fichier de l'objet
            $class_name = str_replace(__NAMESPACE__ . '\\', '', $class);

            if (str_contains($class_name, 'View')) {

                require '../view/' . $class_name . '.php';

            } elseif (str_contains($class_name, 'Controller')) {

                require '../controller/' . $class_name . '.php';

            } else {

                require '../model/database/' . $class_name . '.php';

            }
        }
    }

    public static function Register()
    {
        spl_autoload_register(array(__CLASS__, 'loader'));
    }

}