<?php

require_once __DIR__ . 
'/../config/banco.php';

class Curso
{
    public static function todos()
    {
        $conn = Banco::getConn();
        $resultado = $conn->query('SELECT * FROM cursos ORDER BY titulo');
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    
    public static function buscarPorId(int $id)
    {
        $conn = Banco::getConn();
        $stmt = $conn->prepare('SELECT * FROM cursos WHERE id = ?');
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
    
    public static function criar($titulo, $descricao, $urlVideo)
    {
        $conn = Banco::getConn();
        $stmt = $conn->prepare('INSERT INTO cursos (titulo, descricao, url_video) VALUES (?, ?, ?)');
        $stmt->bind_param("sss", $titulo, $descricao, $urlVideo);
        return $stmt->execute();
    }
    
    public static function atualizar($id, $titulo, $descricao, $urlVideo)
    {
        $conn = Banco::getConn();
        $stmt = $conn->prepare('UPDATE cursos SET titulo = ?, descricao = ?, url_video = ? WHERE id = ?');
        $stmt->bind_param("sssi", $titulo, $descricao, $urlVideo, $id);
        return $stmt->execute();
    }
    
    public static function apagar($id)
    {
        $conn = Banco::getConn();
        $stmt = $conn->prepare('DELETE FROM cursos WHERE id = ?');
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
    
    public static function buscarOutrosCursos($idAtual, $limite = 5)
    {
        $conn = Banco::getConn();
        $stmt = $conn->prepare('SELECT * FROM cursos WHERE id != ? ORDER BY titulo LIMIT ?');
        $stmt->bind_param("ii", $idAtual, $limite);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}



