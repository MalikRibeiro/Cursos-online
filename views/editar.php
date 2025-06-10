<?php include __DIR__ . '/../layout/cabecalho.php'; ?>
<h2>Editar Curso</h2>
<form method="post" action="/cursos/editar?id=<?= $curso['id'] ?>">
    <input type="text" name="titulo" value="<?= htmlspecialchars($curso['titulo']) ?>" required /><input type="url" name="url" value="<?= htmlspecialchars($curso['url']) ?>" required />
    <textarea name="descricao"><?= htmlspecialchars($curso['descricao']) ?></textarea>
    <button type="submit">Atualizar</button>
</form>
<?php include __DIR__ . '/../layout/rodape.php'; ?>