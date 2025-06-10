<?php include __DIR__ . '/layout/cabecalho.php'; ?>
<h2>Login</h2>
<form action="?url=login" method="post">
    <input type="email" name="email" placeholder="Email" required />
    <input type="password" name="senha" placeholder="Senha" required />
    <button type="submit">Entrar</button>
</form>
<?php include __DIR__ . '/layout/rodape.php'; ?>