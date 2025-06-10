<?php

class HomeController
{
    public function iniciar()
    {
        include __DIR__ . '/../views/home.php';
    }
    public function sobre()
    {
        include __DIR__ . '/../views/sobre.php';
    }
    public function contato()
    {
        include __DIR__ . '/../views/contato.php';
    }
}
