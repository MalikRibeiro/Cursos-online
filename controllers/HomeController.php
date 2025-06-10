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
    public static function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['username'] ?? null;
            $senha   = $_POST['password'] ?? null;
            if (!is_null($usuario) && !is_null($senha) && Usuario::authenticate($usuario, $senha)) {
                header("Location: cursos");  // redireciona para lista de cursos após login
                exit;  // encerra o script após o redirecionamento:contentReference[oaicite:9]{index=9}.
            }
        }
        // Apresenta o formulário de login
        require __DIR__ . '/../views/login.php';
    }

    public static function logout()
    {
        session_destroy();
        header('Location: login');
        exit;
    }
}
