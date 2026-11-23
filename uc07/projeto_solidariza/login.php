<?php
include_once 'includes/header.php';
?>

<main class="conteudo-principal container-form">
    <section class="card-form card-form-pequeno">
        <div class="cabecalho-form">
            <h2>Login</h2>
            <p>Entre com suas credenciais para acessar sua conta.</p>
        </div>
        <form id="form-login" class="formulario" method="post" action="actions/auth_login.php">
            <div class="grupo-input">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="grupo-input">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" autocomplete="current-password" required>
            </div>
            <button type="submit" class="btn-bloco btn-sustentavel">Entrar</button>
        </form>
        <div class="rodape-form">
            <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
        </div>
    </section>
 </main> 

<?php
include 'includes/footer.php';
?>