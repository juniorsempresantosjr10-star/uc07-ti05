<?php
include_once 'includes/header.php';
?>

<main class="conteudo-principal">
    <section class="hero-section">
      <div class="hero-textos"
           <h2>A Solidaridade move o mundo, faça parte ciclo</h2>
           <p>conectando quem deseja com as campamhas de arrecadação que mais precisam. doe roupas, móveis, alimentos e tempo</p>

        <div class="hero-botoes">
            <a href="cadastrar.php" class="btn-sustentavel btn-grande">Cadastrar</a>
            <a href="campanhas.php" class="btn-secundario btn-grande">Ver campanhas</a>
        </div>
      </div> 
        <div class="hero-imagem">
            <img src="./assets/img/Solidariza_.png" width="600" height="400" alt="Imagem de solidariedade">
        </div>
    </section>

    <section class="como-funciona">
        <h3>como funciona</h3>
        <div class="cards-passos">
            <div class="card">
                <h4>1. Cadastre-se</h4>
                <p>Crie uma conta informando seu cep, nós organizamos a logistica para voce</p>
            </div>
            <div class="card">
                <h4>2. faça sua doação</h4>
                <p>doe roupas, móveis, alimentos e tempo para contribuir com as causas que você acredita.</p>
            </div>
            <div class="card">
                <h4>3. acompanhe o impacto</h4>
                <p>Veja como suas doações estão fazendo a diferença e acompanhe o progresso das campanhas que você apoiou.</p>
            </div>

        </div>
        <p>O Projeto Solidariza é uma iniciativa que visa conectar doadores e causas sociais, promovendo a solidariedade e o apoio mútuo. Acreditamos que pequenas ações podem gerar grandes impactos na vida das pessoas.</p>
    </section>

    <section id= "campanhas" class="vitrine-campanhas">
        <div class="cabecalho-secao">
            <h3>Campanhas Ativas</h3>
            <p>Escolha a causa e faça hoje mesmo</p>
        </div>
        
        <div class="grid-campanhas">
            <!-- Conteúdo das campanhas será adicionado aqui -->
             <article class="card-campanha">
                <span class="badge-status ativa">Ativa</span>
                <h4>Campanha de Arrecadação de Roupas</h4>
                <p class="descricao-campanha">Estamos arrecadando roupas para famílias em situação de vulnerabilidade.</p>
                <div class="rodape-card">
                <a href="cadastro.php" class="btn-bloco btn-sustentavel">Ver detalhes</a>
                </div>
            </article>

              <article class="card-campanha">
                <span class="badge-status ativa">Ativa</span>
                <h4>Campanha de Arrecadação de Roupas</h4>
                <p class="descricao-campanha">Estamos arrecadando roupas para famílias em situação de vulnerabilidade.</p>
                <div class="rodape-card">
                <a href="cadastro.php" class="btn-bloco btn-sustentavel">Ver detalhes</a>
                </div>
            </article>

              <article class="card-campanha">
                <span class="badge-status ativa">Ativa</span>
                <h4>Campanha de Arrecadação de Roupas</h4>
                <p class="descricao-campanha">Estamos arrecadando roupas para famílias em situação de vulnerabilidade.</p>
                <div class="rodape-card">
                <a href="cadastro.php" class="btn-bloco btn-sustentavel">Ver detalhes</a>
                </div>
            </article>

        </div>
    </section>
</main>

<?php
include 'includes/footer.php';
?>