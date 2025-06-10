<?php include __DIR__ . '/../layout/cabecalho.php'; ?>
<h2>Recuperar Senha</h2>
<form method="post" action="/autenticacao/recuperar">
    <input type="email" name="email" placeholder="Email" required />
    <input type="date" name="data_nascimento" required />
    <input type="text" name="cpf" placeholder="CPF" required />
    <button type="submit">Recuperar</button>
</form>
<?php include __DIR__ . '/../layout/rodape.php'; ?>