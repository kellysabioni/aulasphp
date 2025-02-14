<?php include "includes/cabecalho.php" ?>
    
    <h2>Página de contatos</h2>
    <p>Entre em contato conosco</p>
        
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Formulário de Contato</h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                </form>
            </div>
        </div>

<?php include "includes/footer.php" ?>