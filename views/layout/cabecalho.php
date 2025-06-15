<?php
require_once __DIR__ . '/../../models/Usuario.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PreviewCursos</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <?php if (Usuario::isLoggedIn()): ?>
                    <li><a href="?url=cursos">Cursos</a></li>
                    <li><a href="?url=cursos/novo">Adicionar Curso</a></li>
                    <li><a href="?url=sobre">Sobre</a></li>
                    <li><a href="?url=contato">Contato</a></li>
                    <li><a href="?url=logout">Sair</a></li>
                <?php else: ?>
                    <li><a href="?url=login">Login</a></li>
                    <li><a href="?url=sobre">Sobre</a></li>
                    <li><a href="?url=contato">Contato</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main>

