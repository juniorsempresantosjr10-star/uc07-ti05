<?php include_once 'includes/header.php';?>

<main class="conteudo-principal container-form">
    <section class="card-form ">
        <div class="cabecalho-form">
            <h2>Cadastro</h2>
            <p>Preencha o formulário abaixo para criar sua conta.</p>
        </div>
        <form id="form-cadastro" class="formulario" method="post" action="actions/auth_register.php">
            <fieldset class="grupo-secao">
                <legend>Informações Pessoais e Acesso</legend>
                <div class="grupo-input">
                    <div class="grupo-input">
                        <label for="nome">Nome completo</label>
                        <input
                        type="text"
                        id="nome"
                        name="nome"
                        placeholder="Edson Silva"
                        maxlength="100"
                        required
                        >
                    </div>
                </div>
                <div class="grupo-input">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="edson.silva@example.com"
                        maxlength="100"
                        required
                    >
                </div>
                <div class="linha-dupla">
                    <div class="grupo-input">
                        <label for="senha">Senha</label>
                        <input
                            type="password"
                            id="senha"
                            name="senha"
                            placeholder="Digite sua senha"
                            minlength="6"
                            required
                        >
                    </div>
                    <div class="grupo-input">
                        <label for="confirmar-senha">Confirmar Senha</label>
                        <input
                            type="password"
                            id="confirmar-senha"
                            name="confirmar-senha"
                            placeholder="Confirme sua senha"
                            minlength="6"
                            required
                        >
                        <small id="error-senha" class="mensagem-erro"></small>
                    </div>
                </div>
            </fieldset>
            <fieldset class="grupo-secao">
                <legend>Endereço para logistica de coleta</legend>
                <div class="linha-dupla">
                    <div class="grupo-input">
                        <label for="cep">CEP</label>
                        <input
                            type="text"
                            id="cep"
                            name="cep"
                            placeholder="00000-000"
                            maxlength="9"
                            required
                        >
                        <small id="cep-status" class="texto-ajuda"></small>
                    </div>
                    <div class="grupo-input">
                        <label for="barrio">Barrio</label>
                        <input
                            type="text"
                            id="barrio"
                            name="barrio"
                            placeholder="Preenchido automaticamente"
                            required
                        >
                    </div>
                </div>
                <div class="grupo-input">
                    <label for="logadouro">Logradouro</label>
                    <input
                        type="text"
                        id="logadouro"
                        name="logadouro"
                        placeholder="Preenchido automaticamente"
                        required
                    >
                </div>
                <div class="grupo-input">
                    <label for="uf">Estado</label>
                    <input
                        type="text"
                        id="uf"
                        name="uf"
                        placeholder="Número do endereço"
                        required
                    >
                </div>
            </fieldset>
            <button type="submit" class="btn-bloco btn-sustentavel btn-grande">Cadastrar</button>
        </form>
            
        <div class="rodape-form">
            <p>Ja tem uma conta? <a href="login.php">Entre aqui</a></p>
        </div>
</section>

<?php include 'includes/footer.php';?>