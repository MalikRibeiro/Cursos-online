<?php

class AutenticacaoController
{
    public function login()
    {
        include __DIR__ . '/../views/autenticacao/login.php';
    }
    public function cadastrar()
    {
        include __DIR__ . '/../views/autenticacao/cadastrar.php';
    }
    public function recuperar()
    {
        include __DIR__ . '/../views/autenticacao/recuperar.php';
    }
    
}
