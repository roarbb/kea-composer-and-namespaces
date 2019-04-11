<?php

namespace SwitchMedia\Kea;


use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Renderer
{
    public function render($templateVariables)
    {
        $loader = new FilesystemLoader(__DIR__ . '/templates');
        $twig = new Environment($loader);

        echo $twig->render('index.html', $templateVariables);
    }
}