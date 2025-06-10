<?php 
include __DIR__ . '/layout/cabecalho.php'; 
require_once __DIR__ . '/../controllers/CursoController.php';
?>

<div class="courses">
    <div style="max-width: 900px; margin: 0 auto;">
        <div style="margin-bottom: 1rem;">
            <a href="?url=cursos" style="color: #007bff; text-decoration: none;">← Voltar ao Catálogo</a>
        </div>
        
        <div style="background-color: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <h2 style="margin-top: 0; color: #007bff;"><?= htmlspecialchars($curso['titulo']) ?></h2>
            
            <?php if (!empty($curso['url_video'])): ?>
                <?php $embedUrl = CursoController::obterEmbedYoutube($curso['url_video']); ?>
                <?php if ($embedUrl): ?>
                    <div style="margin: 2rem 0;">
                        <h3>Vídeo do Curso</h3>
                        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                            <iframe src="<?= $embedUrl ?>" 
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            
            <div style="margin: 2rem 0;">
                <h3>Descrição do Curso</h3>
                <p style="line-height: 1.8; font-size: 1.1rem;"><?= nl2br(htmlspecialchars($curso['descricao'])) ?></p>
            </div>

            <div style="display: flex; gap: 1rem; justify-content: center; margin-top: 2rem; flex-wrap: wrap;">
                <a href="?url=cursos/editar/<?= $curso['id'] ?>" class="btn" style="background-color: #28a745;">Editar Curso</a>
                <a href="?url=cursos" class="btn" style="background-color: #6c757d;">Voltar ao Catálogo</a>
                <a href="?url=cursos/apagar/<?= $curso['id'] ?>" class="btn" style="background-color: #dc3545;" 
                   onclick="return confirm('Tem certeza que deseja apagar este curso?')">Apagar Curso</a>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/layout/rodape.php'; ?>

