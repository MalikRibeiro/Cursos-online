<?php

namespace app\model;

use PDO;

class Usuario
{
    public static function buscarPorEmail(string $email)
    {
        global $pdo;
        $stmt = $pdo->prepare('SELECT * FROM tabela_usuarios WHERE email = ?');
        $stmt->execute([$email]);
        return $stmt->fetch();
    }
    // Outros métodos omitidos
}
