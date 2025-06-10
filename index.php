<?php

if (!isset($_SESSION)) {
    session_start();
}

// Configuração do banco de dados
require_once __DIR__ . '/config/banco.php';

require_once __DIR__ . '/controllers/AutenticacaoController.php';
require_once __DIR__ . '/controllers/HomeController.php';
require_once __DIR__ . '/controllers/CursoController.php';

// Processar URL
$url = $_GET['url'] ?? '';
$url = explode("/", trim($url, '/'));

// Construir página
$pagina = $url[0] ?? '';
if (isset($url[1]) && !empty($url[1])) {
    $pagina .= "/{$url[1]}";
}

// Sistema de roteamento
try {
    match ($pagina) {
        'autenticacao/cadastrar' => (new AutenticacaoController())->cadastrar(),
        'autenticacao/recuperar' => (new AutenticacaoController())->recuperar(),
        'autenticacao/login'     => (new AutenticacaoController())->login(),

        'cursos/adicionar'       => (new CursoController())->adicionar(),
        'cursos/editar'          => (new CursoController())->editar((int)($_GET['id'] ?? 0)),
        'cursos/visualizar'      => (new CursoController())->visualizar((int)($_GET['id'] ?? 0)),
        'cursos'                 => (new CursoController())->listar(),

        'sobre'                  => (new HomeController())->sobre(),
        'contato'                => (new HomeController())->contato(),
        default                  => (new HomeController())->iniciar(),
    };
} catch (Exception $e) {
    // Em caso de erro, redirecionar para página inicial
    (new HomeController())->iniciar();
}