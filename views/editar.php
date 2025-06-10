<?php include __DIR__ . '/layout/cabecalho.php'; ?>

<div class="courses">
    <h2>Editar Curso</h2>
    
    <div style="max-width: 600px; margin: 0 auto; background-color: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
        <form method="post" action="?url=cursos/atualizar">
            <input type="hidden" name="id" value="<?= $curso['id'] ?>" />
            
            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="titulo" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Título do Curso:</label>
                <input type="text" id="titulo" name="titulo" value="<?= htmlspecialchars($curso['titulo']) ?>" required 
                       style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" />
            </div>
            
            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="descricao" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Descrição:</label>
                <textarea id="descricao" name="descricao" rows="6" required
                          style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; resize: vertical;"><?= htmlspecialchars($curso['descricao']) ?></textarea>
            </div>
            
            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="url_video" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">URL do Vídeo (YouTube):</label>
                <input type="url" id="url_video" name="url_video" value="<?= htmlspecialchars($curso['url_video'] ?? '') ?>" 
                       placeholder="https://www.youtube.com/watch?v=..." 
                       style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" />
                <small style="color: #666; font-size: 0.9rem;">Cole aqui o link do vídeo do YouTube (opcional)</small>
            </div>
            
            <div style="display: flex; gap: 1rem; justify-content: center;">
                <button type="submit" class="btn">Atualizar Curso</button>
                <a href="?url=cursos/ver/<?= $curso['id'] ?>" class="btn" style="background-color: #6c757d; text-decoration: none;">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/layout/rodape.php'; ?>

