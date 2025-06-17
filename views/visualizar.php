<?php 
include __DIR__ . '/layout/cabecalho.php'; 
require_once __DIR__ . '/../controllers/CursoController.php';
require_once __DIR__ . '/../models/Curso.php';

$outrosCursos = Curso::buscarOutrosCursos($curso['id'], 5);
?>

<div class="courses">
    <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1fr 300px; gap: 2rem; align-items: start;">
        <div>
            
            
            <div style="background-color: black-blue; padding: 2rem; border-radius: 1rem; box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);">
                <h2 style="margin-top: 0; color: #1e293b; font-size: 2rem; font-weight: 600; line-height: 1.3;"><?= htmlspecialchars($curso['titulo']) ?></h2>
                
                <?php if (!empty($curso['url_video'])): ?>
                    <?php $embedUrl = CursoController::obterEmbedYoutube($curso['url_video']); ?>
                    <?php if ($embedUrl): ?>
                        <div style="margin: 2rem 0;">
                            <div class="video-container">
                                <iframe src="<?= $embedUrl ?>" 
                                        allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                
                <div style="margin: 2rem 0;">
                    <h3 style="color:rgb(255, 255, 255); font-size: 1.25rem; font-weight: 600; margin-bottom: 1rem;">Descrição do Curso</h3>
                    <p style="line-height: 1.8; font-size: 1rem; color: #64748b;"><?= nl2br(htmlspecialchars($curso['descricao'])) ?></p>
                </div>

                <div style="display: flex; gap: 1rem; justify-content: center; margin-top: 2rem; flex-wrap: wrap;">
                    <a href="?url=cursos/editar/<?= $curso['id'] ?>" class="btn" style="background: linear-gradient(135deg, #059669, #047857);">Editar Curso</a>
                    <a href="?url=cursos" class="btn" style="background: linear-gradient(135deg, #64748b, #475569);">Voltar ao Catálogo</a>
                    <a href="?url=cursos/apagar/<?= $curso['id'] ?>" class="btn" style="background: linear-gradient(135deg, #dc2626, #b91c1c);" 
                       onclick="return confirm('Tem certeza que deseja apagar este curso?')">Apagar Curso</a>
                </div>
            </div>
        </div>
        <div class="video-sidebar">
            <h3>Outros Cursos</h3>
            <div class="video-list">
                <?php if (!empty($outrosCursos)): ?>
                    <?php foreach ($outrosCursos as $outroCurso): ?>
                        <a href="?url=cursos/ver/<?= $outroCurso['id'] ?>" class="video-item <?= $outroCurso['id'] == $curso['id'] ? 'current' : '' ?>">
                            <?php 
                            $thumbnail = CursoController::obterThumbnailYoutube($outroCurso['url_video']);
                            if ($thumbnail): 
                            ?>
                                <img src="<?= $thumbnail ?>" alt="Thumbnail" class="video-thumbnail" loading="lazy">
                            <?php else: ?>
                                <div class="video-thumbnail" style="background: linear-gradient(135deg, #e2e8f0, #cbd5e1); display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 0.75rem;">
                                    Vídeo
                                </div>
                            <?php endif; ?>
                            <div class="video-info">
                                <h4 class="video-title"><?= htmlspecialchars($outroCurso['titulo']) ?></h4>
                                <div class="video-duration">Curso Online</div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div style="text-align: center; color: #64748b; padding: 2rem; font-style: italic;">
                        Nenhum outro curso disponível no momento.
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/layout/rodape.php'; ?>

