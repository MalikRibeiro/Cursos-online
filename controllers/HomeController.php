<?php

require_once __DIR__ . '/../models/Usuario.php';

class HomeController
{
    public static function iniciar()
    {
        include __DIR__ . '/../views/home.php';
    }
    
    public static function sobre()
    {
        include __DIR__ . '/../views/sobre.php';
    }
    
    public static function contato()
    {
        include __DIR__ . '/../views/contato.php';
    }
    
    public static function login()
    {
        $erro = '';
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $senha = $_POST['senha'] ?? '';
            
            if (!empty($email) && !empty($senha)) {
                if (Usuario::authenticate($email, $senha)) {
                    header("Location: ?url=cursos");
                    exit;
                } else {
                    $erro = "Email ou senha inválidos.";
                }
            } else {
                $erro = "Por favor, preencha todos os campos.";
            }
        }
        
        // Apresenta o formulário de login
        include __DIR__ . '/../views/login.php';
    }

    public static function logar() 
    {
        // Esta função é mantida para compatibilidade, mas redireciona para login()
        self::login();
    }

    public static function logout() 
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        session_destroy();
        header('Location: ?url=login');
        exit;
    }
}

