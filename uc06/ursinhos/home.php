
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Os Ursinhos Carinhosos</title>

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
        🧸 Os Ursinhos Carinhosos
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

        <h1>Bem-vindo à pagina dos Ursinhos Carinhosos! 🧸</h1>

        <p>
             Eles vivem na Terra do Carinho (Care-a-Lot) e têm a missão de espalhar amor, compaixão e harmonia, ajudando as pessoas a compartilharem seus sentimentos.
        </p>

        <p> Cada ursinho possui uma cor única e uma insígnia especial na barriga que reflete sua personalidade e libera magias ligadas ao afeto (como o "raio de luz do ursinho Sol" ou a animação da ursinha Animadinha).! 💗</p>

    </section>

    <!-- OPÇÕES DO SISTEMA -->
    <section class="cards">

        <div class="card">
            <div class="icon">🧸</div>
            <h2>Ursinho Alegra</h2>
            <p>
                 Rosa, com um arco-íris na barriga.
            </p>
            <a href="abrir_chamado.php" class="btn">
                Rosa
            </a>
        </div>

        <div class="card">
            <div class="icon">🧸</div>
            <h2>Urso Amigo</h2>
            <p>
               Laranja, com duas flores na barriga.
            </p>
            <a href="meus_chamados.php" class="btn">
                Laranja
            </a>
        </div>

        <div class="card">
            <div class="icon">🧸</div>
            <h2>Urso Divertido</h2>
            <p>
                Amarelo, com um sol sorridente na barriga.
            </p>
            <a href="suporte.php" class="btn">
                Amarelo
            </a>
        </div>

        <div class="card">
            <div class="icon">🧸</div>
            <h2>Urso da Sorte</h2>
            <p>
                 Verde, com um trevo de quatro folhas na barriga.
            </p>
            <a href="ajuda.php" class="btn">
                Verde
            </a>
        </div>

    </section>

</main>

<footer>
    🧸 Care Bears © 2026
    <p>Cada Ursinhos Carinhosos (Care Bears) possui uma cor, uma personalidade e um símbolo único bordado na barriga que representa uma emoção ou valor positivo! 💗</p>
</footer>

</body>
</html>
