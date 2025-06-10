<?php include __DIR__ . '/../layout/cabecalho.php'; ?>
<h2><?= htmlspecialchars($curso['titulo']) ?></h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/<?= preg_replace('/.*v=/', '', $curso['url']) ?>" frameborder="0" allowfullscreen></iframe>

<p><?= htmlspecialchars($curso['descricao']) ?></p><?php include __DIR__ . '/../layout/rodape.php'; ?>