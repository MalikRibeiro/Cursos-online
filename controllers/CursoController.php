<?php

use app\model\Curso;

class CursoController
{
    public static function index()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
            exit;
        }
        // Obtém lista de cursos (use modelo Curso::todos ou similar)
        $cursos = Curso::todos();
        require __DIR__ . '/../views/cursos.php';
    }
    public static function novo()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
            exit;
        }
        require __DIR__ . '/../views/cursos-criar.php';
    }
    public static function criar()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'] ?? null;
            // ... obter outros campos ...
            if ($nome) {
                Curso::criar($nome /*, ... outros campos ... */);
            }
        }
        header("Location: ../cursos");
        exit;
    }
    public static function ver($idCurso)
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
            exit;
        }
        $curso = Curso::buscarPorId($idCurso);
        require __DIR__ . '/../views/cursos-detalhe.php';
    }
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
