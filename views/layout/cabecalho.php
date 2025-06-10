<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Catálogo de Cursos</title>
    <link rel="stylesheet" href="/assets/css/estilo.css">
</head>

<body>
    <header>
        <nav><a href="/views/home.php">Início</a> |
            <a href="/views/sobre.php">Sobre</a> |
            <a href="/views/contato.php">Contato</a> |
            <a href="/models/Curso.php">Cursos</a> |
            <?php if (isset($_SESSION['usuario'])): ?>
                <a href="/autenticacao/logout">Sair</a>
            <?php else: ?><a href="/views/login.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>
    <main>