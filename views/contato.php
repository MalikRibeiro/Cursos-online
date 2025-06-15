<?php include 'layout/cabecalho.php'; ?>

<div class="courses">
    <h2>Entre em Contato</h2>
    
    <div style="max-width: 600px; margin: 0 auto; background-color: black-blue; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
        <div style="text-align: center; margin-bottom: 2rem;">
            <p style="font-size: 1.1rem; line-height: 1.8;">
                Tem alguma dúvida, sugestão ou feedback? Estamos aqui para ajudar!
            </p>
        </div>
        
        <form method="post" action="?url=contato">
            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="nome" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required 
                       style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" />
            </div>
            
            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required 
                       style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" />
            </div>
            
            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="assunto" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Assunto:</label>
                <input type="text" id="assunto" name="assunto" placeholder="Digite o assunto" required 
                       style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" />
            </div>
            
            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="mensagem" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem" rows="6" required
                          style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; resize: vertical;"></textarea>
            </div>
            
            <div style="text-align: center;">
                <button type="submit" class="btn">Enviar Mensagem</button>
            </div>
        </form>
            <h3 style="color: #007bff;">Outras formas de contato</h3>
            <p><strong>Email:</strong> contato@previewcursos.com</p>
            <p><strong>Telefone:</strong> (11) 9999-9999</p>
        </div>
    </div>
</div>

<?php include 'layout/rodape.php'; ?>

