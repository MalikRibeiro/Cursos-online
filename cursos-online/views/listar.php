<?php
include __DIR__ . '/layout/cabecalho.php';
require_once __DIR__ . '/../controllers/CursoController.php';
?>

<div class="courses">
    <h2>PreviewCursos</h2>

    <div style="margin-bottom: 2rem;">
        <a href="?url=cursos/novo" class="btn">+ Adicionar Novo Curso</a>
    </div>

    <?php if (empty($cursos)): ?>
        <div style="text-align: center; padding: 2rem; background-color: #f8f9fa; border-radius: 8px; margin: 2rem 0;">
            <h3>Nenhum curso encontrado</h3>
            <p>Seja o primeiro a adicionar um curso ao catálogo!</p>
            <a href="?url=cursos/novo" class="btn">Adicionar Primeiro Curso</a>
        </div>
    <?php else: ?>
        <div class="course-grid">
            <?php foreach ($cursos as $curso): ?>
                <div class="course-card">
                    <?php if (!empty($curso['url_video'])): ?>
                        <?php $thumbnailUrl = CursoController::obterThumbnailYoutube($curso['url_video']); ?>
                        <?php if ($thumbnailUrl): ?>
                            <div class="course-thumbnail" style="width: 100%; height: 200px; overflow: hidden; border-radius: 8px; margin-bottom: 1rem;">
                                <img src="<?= $thumbnailUrl ?>" alt="Thumbnail do curso"
                                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;"
                                    onmouseover="this.style.transform='scale(1.05)'"
                                    onmouseout="this.style.transform='scale(1)'" />
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <h3><?= htmlspecialchars($curso['titulo']) ?></h3>
                    <p><?= htmlspecialchars(substr($curso['descricao'], 0, 150)) ?><?= strlen($curso['descricao']) > 150 ? '...' : '' ?></p>

                    <div style="margin-top: auto; display: flex; gap: 0.5rem; flex-wrap: wrap;">
                        <a href="?url=cursos/ver/<?= $curso['id'] ?>" class="btn" style="flex: 1;">Ver Detalhes</a>
                        <a href="?url=cursos/editar/<?= $curso['id'] ?>" class="btn" style="background-color: #28a745; flex: 1;">Editar</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php include __DIR__ . '/layout/rodape.php'; ?>