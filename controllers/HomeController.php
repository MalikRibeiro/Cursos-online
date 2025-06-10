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

    public static function logar() {
        require_once __DIR__ . '/../config/banco.php';

        $conn = Banco::getConn();

        $email = $_POST['email'] ?? '';
        $senha = md5($_POST['senha'] ?? '');

        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $resultado = $stmt->get_result();
        $usuario = $resultado->fetch_assoc();

        if ($usuario && $usuario['senha'] === $senha) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];
            header('Location: ?url=cursos');
            exit;
        } else {
            echo "<p style='color:red;'>Email ou senha inválidos.</p>";
            include __DIR__ . '/../views/autenticacao/login.php';
        }
    }

    public static function logout() {
        session_destroy();
        header('Location: ?url=login');
        exit;
    }
}

