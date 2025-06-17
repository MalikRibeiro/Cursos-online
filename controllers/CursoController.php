<?php

require_once __DIR__ . '/../models/Curso.php';
require_once __DIR__ . '/../models/Usuario.php';

class CursoController
{
    private static function verificarAutenticacao()
    {
        if (!Usuario::isLoggedIn()) {
            header('Location: ?url=login');
            exit;
        }
    }
    
    public static function index()
    {
        self::verificarAutenticacao();
        $cursos = Curso::todos();
        require __DIR__ . '/../views/listar.php';
    }
    
    public static function novo()
    {
        self::verificarAutenticacao();
        require __DIR__ . '/../views/adicionar.php';
    }
    
    public static function criar()
    {
        self::verificarAutenticacao();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titulo = $_POST['titulo'] ?? '';
            $descricao = $_POST['descricao'] ?? '';
            $urlVideo = $_POST['url_video'] ?? '';
            
            if (!empty($titulo) && !empty($descricao)) {
                if (Curso::criar($titulo, $descricao, $urlVideo)) {
                    header("Location: ?url=cursos");
                    exit;
                }
            }
        }
        
        header("Location: ?url=cursos/novo");
        exit;
    }
    
    public static function ver($idCurso)
    {
        self::verificarAutenticacao();
        
        if (!$idCurso) {
            header("Location: ?url=cursos");
            exit;
        }
        
        $curso = Curso::buscarPorId($idCurso);
        
        if (!$curso) {
            header("Location: ?url=cursos");
            exit;
        }
        
        require __DIR__ . '/../views/visualizar.php';
    }
    
    public static function editar($idCurso)
    {
        self::verificarAutenticacao();
        
        if (!$idCurso) {
            header("Location: ?url=cursos");
            exit;
        }
        
        $curso = Curso::buscarPorId($idCurso);
        
        if (!$curso) {
            header("Location: ?url=cursos");
            exit;
        }
        
        require __DIR__ . '/../views/editar.php';
    }
    
    public static function atualizar()
    {
        self::verificarAutenticacao();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? '';
            $titulo = $_POST['titulo'] ?? '';
            $descricao = $_POST['descricao'] ?? '';
            $urlVideo = $_POST['url_video'] ?? '';
            
            if (!empty($id) && !empty($titulo) && !empty($descricao)) {
                if (Curso::atualizar($id, $titulo, $descricao, $urlVideo)) {
                    header("Location: ?url=cursos/ver/$id");
                    exit;
                }
            }
        }
        
        header("Location: ?url=cursos");
        exit;
    }
    
    public static function apagar($idCurso)
    {
        self::verificarAutenticacao();
        
        if (!$idCurso) {
            header("Location: ?url=cursos");
            exit;
        }
        
        if (Curso::apagar($idCurso)) {
            header("Location: ?url=cursos");
            exit;
        }
        
        header("Location: ?url=cursos/ver/$idCurso");
        exit;
    }

    public static function extrairIdYoutube($url)
    {
        if (empty($url)) return null;
        
        $pattern = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/';
        preg_match($pattern, $url, $matches);
        
        return isset($matches[1]) ? $matches[1] : null;
    }
    
    public static function obterThumbnailYoutube($url)
    {
        $videoId = self::extrairIdYoutube($url);
        if ($videoId) {
            return "https://img.youtube.com/vi/{$videoId}/maxresdefault.jpg";
        }
        return null;
    }
    
    public static function obterEmbedYoutube($url)
    {
        $videoId = self::extrairIdYoutube($url);
        if ($videoId) {
            return "https://www.youtube.com/embed/{$videoId}";
        }
        return null;
    }
}


