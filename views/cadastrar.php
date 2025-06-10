<?php include __DIR__ . '/../layout/cabecalho.php'; ?><h2>Cadastrar</h2>

<form method="post" action="/autenticacao/cadastrar">
    <input type="text" name="nome" placeholder="Nome" required />
    <input type="email" name="email" placeholder="Email" required />
    <input type="password" name="senha" placeholder="Senha" required />
    <input type="date" name="data_nascimento" required />
    <input type="text" name="cpf" placeholder="CPF" required />
    <button type="submit">Registrar</button>
</form>
<?php include __DIR__ . '/../layout/rodape.php'; ?>