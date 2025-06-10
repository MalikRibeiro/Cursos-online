<?php

namespace app\model;

use PDO;

class Curso
{
    public static function todos()
    {
        global $pdo;
        return $pdo->query('SELECT * FROM tabela_cursos')->fetchAll();
    }
    public static function buscarPorId(int $id)
    {
        global $pdo;
        $stmt = $pdo->prepare('SELECT * FROM tabela_cursos WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
