<?php
session_start();
require __DIR__ . "/controllers/HomeController.php";
require __DIR__ . "/controllers/CursoController.php";

$url = $_GET["url"] ?? "";
$url_parts = explode("/", $url);
$pagina = $url_parts[0] ?? "";
$id = $url_parts[2] ?? null;

if ($pagina == "" || $pagina == null) {
    $pagina = "login";
}

if ($pagina === "login" && $_SERVER["REQUEST_METHOD"] === "POST") {
    HomeController::login();
    exit;
}

switch ($pagina) {
    case "login":
        HomeController::login();
        break;
    case "logout":
        HomeController::logout();
        break;
    case "sobre":
        HomeController::sobre();
        break;
    case "contato":
        HomeController::contato();
        break;
    case "cursos":
        if (isset($url_parts[1])) {
            switch ($url_parts[1]) {
                case "novo":
                    CursoController::novo();
                    break;
                case "criar":
                    CursoController::criar();
                    break;
                case "ver":
                    CursoController::ver($id);
                    break;
                case "editar":
                    CursoController::editar($id);
                    break;
                case "atualizar":
                    CursoController::atualizar();
                    break;
                case "apagar":
                    CursoController::apagar($id);
                    break;
                default:
                    CursoController::index();
                    break;
            }
        } else {
            CursoController::index();
        }
        break;
    default:
        HomeController::login();
        break;
}
exit;

