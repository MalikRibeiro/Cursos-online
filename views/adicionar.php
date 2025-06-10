<?php include __DIR__ . '/../layout/cabecalho.php'; ?><h2>Adicionar Curso</h2>

<form method="post" action="/cursos/adicionar">
    <input type="text" name="titulo" placeholder="Título" required />
    <input type="url" name="url" placeholder="URL do Vídeo" required />
    <textarea name="descricao" placeholder="Descrição"></textarea>
    <button type="submit">Salvar</button>
</form>

<?php include __DIR__ . '/../layout/rodape.php'; ?>