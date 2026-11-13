
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Ursinhos Help Desk - Home</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Comic Sans MS', 'Segoe UI', sans-serif;
}

body {
    background: linear-gradient(135deg, #a1c4fd, #c2e9fb, #fbc2eb);
    color: #4A4A4A;
    min-height: 100vh;
}

/* MENU */
.navbar {
    background: #FF6B9E;
    padding: 18px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 4px solid #FFE66D;
    box-shadow: 0 4px 12px #ff6b9e55;
}

.logo {
    color: white;
    font-size: 1.4rem;
    font-weight: bold;
    text-decoration: none;
}

.nav-links {
    display: flex;
    gap: 20px;
    align-items: center;
}

.nav-links a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.nav-links a:hover {
    color: #FFE66D;
}

/* CONTEÚDO */
.container {
    max-width: 1100px;
    margin: auto;
    padding: 40px 20px;
}

.welcome {
    background: white;
    padding: 30px;
    border-radius: 20px;
    border: 3px solid #FF6B9E;
    text-align: center;
    margin-bottom: 30px;
    box-shadow: 0 8px 20px #00000015;
}

.welcome h1 {
    color: #FF6B9E;
    margin-bottom: 12px;
}

.welcome p {
    font-size: 1.05rem;
}

/* CARDS */
.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}

.card {
    background: white;
    padding: 25px;
    border-radius: 20px;
    text-align: center;
    border: 3px solid #FF6B9E;
    box-shadow: 0 8px 20px #00000015;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

.card .icon {
    font-size: 45px;
    margin-bottom: 15px;
}

.card h2 {
    color: #FF6B9E;
    font-size: 1.2rem;
    margin-bottom: 12px;
}

.card p {
    margin-bottom: 20px;
    font-size: 0.95rem;
}

.btn {
    display: inline-block;
    background: #FF6B9E;
    color: white;
    text-decoration: none;
    padding: 12px 20px;
    border-radius: 12px;
    font-weight: bold;
    box-shadow: 0 4px 0 #D94E7E;
}

.btn:hover {
    background: #FF85B0;
}

/* RODAPÉ */
footer {
    text-align: center;
    padding: 25px;
    color: #555;
    margin-top: 30px;
}

/* CELULAR */
@media(max-width: 600px) {
    .navbar {
        flex-direction: column;
        gap: 15px;
    }

    .nav-links {
        flex-wrap: wrap;
        justify-content: center;
    }
}
</style>
</head>

<body>

<!-- MENU -->
<nav class="navbar">

    <a href="home.php" class="logo">
        🧸 Ursinhos Help Desk
    </a>

    <div class="nav-links">
        <a href="home.php">Home</a>
        <a href="abrir_chamado.php">Chamados</a>
        <a href="meus_chamados.php">Meus Chamados</a>
        <a href="sair.php">Sair</a>
    </div>

</nav>

<!-- CONTEÚDO PRINCIPAL -->
<main class="container">

    <section class="welcome">

        <h1>Bem-vindo à Terra do Carinho! 🧸</h1>

        <p>
            Aqui você encontra ajuda para resolver seus problemas
            tecnológicos de maneira rápida, simples e especial.
        </p>

        <p>Estamos aqui para cuidar da sua tecnologia! 💗</p>

    </section>

    <!-- OPÇÕES DO SISTEMA -->
    <section class="cards">

        <div class="card">
            <div class="icon">🎫</div>
            <h2>Abrir Chamado</h2>
            <p>
                Precisa de ajuda? Registre um novo chamado
                para nossa equipe.
            </p>
            <a href="abrir_chamado.php" class="btn">
                Abrir chamado
            </a>
        </div>

        <div class="card">
            <div class="icon">📋</div>
            <h2>Meus Chamados</h2>
            <p>
                Consulte seus chamados e acompanhe
                o andamento das solicitações.
            </p>
            <a href="meus_chamados.php" class="btn">
                Consultar
            </a>
        </div>

        <div class="card">
            <div class="icon">💻</div>
            <h2>Suporte Técnico</h2>
            <p>
                Encontre suporte para problemas
                com computadores e sistemas.
            </p>
            <a href="suporte.php" class="btn">
                Acessar
            </a>
        </div>

        <div class="card">
            <div class="icon">📚</div>
            <h2>Central de Ajuda</h2>
            <p>
                Confira orientações e dicas
                para solucionar dúvidas.
            </p>
            <a href="ajuda.php" class="btn">
                Saiba mais
            </a>
        </div>

    </section>

</main>

<footer>
    🧸 Ursinhos Help Desk © 2026
    <p>Seu problema é nossa prioridade! 💗</p>
</footer>

</body>
</html>
