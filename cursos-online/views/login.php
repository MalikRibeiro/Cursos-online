<?php include __DIR__ . '/layout/cabecalho.php'; ?>

<div class="login-container">
    <h2>Login</h2>
    
    <?php if (isset($erro) && !empty($erro)): ?>
        <div class="erro">
            <p style="color: red; background-color: black-blue; padding: 10px; border: 1px solid #ff0000; border-radius: 5px;">
                <?php echo htmlspecialchars($erro); ?>
            </p>
        </div>
    <?php endif; ?>
    
    <form action="?url=login" method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu email" required />
        </div>
        
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required />
        </div>
        
        <button type="submit">Entrar</button>
    </form>
    
    <div class="login-info">
        <p><strong>Usuários de teste:</strong></p>
        <ul>
            <li>malik.ribeiro@hotmail.com - senha: admin123</li>
            <li>allan.mazurana@gmail.com - senha: 12345</li>
            <li>lucas.daniel@outlook.com - senha: 12345</li>
        </ul>
    </div>
</div>

<?php include __DIR__ . '/layout/rodape.php'; ?>

