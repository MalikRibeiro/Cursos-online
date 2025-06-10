<?php

use app\model\Curso;

class CursoController
{
    public function listar()
    {
        $cursos = Curso::todos();
        include __DIR__ . '/../views/cursos/listar.php';
    }
    public function adicionar()
    {
        include __DIR__ . '/../views/cursos/adicionar.php';
    }
    public function editar(int $id)
    {
        $curso = Curso::buscarPorId($id);
        include __DIR__ . '/../views/cursos/editar.php';
    }
    public function visualizar(int $id)
    {
        $curso = Curso::buscarPorId($id);
        include __DIR__ . '/../views/cursos/visualizar.php';
    }
}
