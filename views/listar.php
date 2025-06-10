<?php include __DIR__ . '/../layout/cabecalho.php'; ?>
<h2>Cursos</h2>

<a href="/cursos/adicionar">Adicionar Curso</a>

<ul><?php foreach ($cursos as $curso): ?><li><?= htmlspecialchars($curso['titulo']) ?>
            - <a href="/cursos/visualizar?id=<?= $curso['id'] ?>">Visualizar</a></li>

    <?php endforeach; ?></ul>

<?php include __DIR__ . '/../layout/rodape.php'; ?>