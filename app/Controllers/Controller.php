<?php

namespace App\Controllers;

class Controller
{
    public function view(string $path, array $params = null)
    {
        require '../vendor/autoload.php';
        $loader = new \Twig\Loader\FilesystemLoader('../views');
        $twig = new \Twig\Environment($loader, [
            'cache' => false, //dirname(__DIR__) . '/tmp',
        ]);
        //ob_start();
        //$path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        //require(VIEWS . $path . '.php');
        /*if ($params) {
            $params = extract($params);
        }*/
        //$content = ob_get_clean();
        $content = $twig->render($path . '.twig', ['params' => $params]);
        require(VIEWS . 'layout.twig');
    }

}
