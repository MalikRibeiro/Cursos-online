<?php include __DIR__ . '/../layout/cabecalho.php'; ?><h2>Login</h2>
<form method="post" action="/autenticacao/login">
    <input type="email" name="email" placeholder="Email" required />
    <input type="password" name="senha" placeholder="Senha" required />
    <button type="submit">Entrar</button>
</form>
<?php include __DIR__ . '/../layout/rodape.php'; ?>