<?php
session_start();  
require __DIR__.'/controllers/HomeController.php';
require __DIR__.'/controllers/CursoController.php';

$url = $_GET['url'] ?? '';
$url = explode('/', $url);
$pagina = $url[0] ?? '';

if ($pagina == '' || $pagina == null) {
    $pagina = 'login';
}

if ($pagina === 'login' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    HomeController::logar();
    exit;
}


match ($pagina) {
    'login'    => HomeController::login(),
    'logout'   => HomeController::logout(),
    'cursos'   => CursoController::index(),
    'cursos/novo'   => CursoController::novo(),
    'cursos/criar'  => CursoController::criar(),
    'cursos/ver'    => CursoController::ver($url[2] ?? null),
    'cursos/editar' => CursoController::editar($url[2] ?? null),
    'cursos/atualizar' => CursoController::atualizar(),
    'cursos/apagar'    => CursoController::apagar($url[2] ?? null),
    default => HomeController::login(),
};
exit; 
