<?php

require_once __DIR__ . '/../config/banco.php';

class Usuario
{
    public static function buscarPorEmail(string $email)
    {
        $conn = Banco::getConn();
        $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email = ?');
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public static function authenticate(string $email, string $senha)
    {
        $usuario = self::buscarPorEmail($email);
        
        if ($usuario && $usuario['senha'] === md5($senha)) {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];
            
            return true;
        }
        
        return false;
    }

    public static function isLoggedIn()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        return isset($_SESSION['usuario_id']);
    }

    public static function getCurrentUser()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if (isset($_SESSION['usuario_id'])) {
            return [
                'id' => $_SESSION['usuario_id'],
                'email' => $_SESSION['email']
            ];
        }
        
        return null;
    }
}
