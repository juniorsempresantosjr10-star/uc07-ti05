<?php session_start(); ?>
<html>
<head>
  <meta charset="utf-8" />
  <title>Ursinhos Help Desk - Login</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Comic Sans MS', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
    body { background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 50%, #fbc2eb 100%); color: #4A4A4A; min-height: 100vh; display: flex; flex-direction: column; }
    .navbar { background-color: #FF6B9E; padding: 15px 30px; display: flex; align-items: center; box-shadow: 0 4px 12px rgba(255, 107, 158, 0.3); border-bottom: 4px solid #FFE66D; }
    .navbar-brand { color: #ffffff; text-decoration: none; font-size: 1.35rem; font-weight: bold; display: flex; align-items: center; gap: 10px; text-shadow: 1px 1px 2px rgba(0,0,0,0.2); }
    .container { flex: 1; display: flex; justify-content: center; align-items: flex-start; padding: 50px 20px; }
    .card { background-color: #ffffff; width: 100%; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); overflow: hidden; max-width: 390px; border: 3px solid #FF6B9E; }
    .card-header { background-color: #FF6B9E; color: #ffffff; padding: 18px 20px; font-weight: bold; font-size: 1.2rem; text-align: center; border-bottom: 3px solid #FFE66D; }
    .card-body { padding: 30px 25px; }
    .form-group { margin-bottom: 20px; }
    .form-control { width: 100%; padding: 12px 15px; border: 2px solid #A1C4FD; border-radius: 12px; font-size: 1rem; outline: none; background-color: #F9FCFF; color: #4A4A4A; transition: all 0.2s; }
    .form-control:focus { border-color: #FF6B9E; box-shadow: 0 0 8px rgba(255, 107, 158, 0.4); }
    .btn-care { background-color: #FF6B9E; color: #ffffff; padding: 12px; border: none; border-radius: 12px; font-size: 1.1rem; font-weight: bold; cursor: pointer; display: block; width: 100%; text-align: center; text-decoration: none; transition: background-color 0.2s, transform 0.1s; box-shadow: 0 4px 0 #D94E7E; }
    .btn-care:hover { background-color: #FF85B0; transform: translateY(-2px); }
    .btn-care:active { transform: translateY(2px); box-shadow: none; }
    .text-danger { color: #E63946; margin-bottom: 15px; font-size: 0.95rem; font-weight: bold; text-align: center; background-color: #FFE5E8; padding: 8px; border-radius: 8px; }
  </style>
</head>
<body>
  <nav class="navbar">
    <a class="navbar-brand" href="#">
      <img src="imagem/logo.png" width="32" height="32" alt="">
      Ursinhos Help Desk
    </a>
  </nav>

  <div class="container">
    <div class="card">
      <div class="card-header"> Portal da Terra do Carinho</div>
      <div class="card-body">
        <form action="valida_login.php" method="POST">
          <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Seu e-mail mágico" required>
          </div>
          <div class="form-group">
            <input name="senha" type="password" class="form-control" placeholder="Sua senha secreta" required>
          </div>
          
          <?php if (isset($_GET['login']) && $_GET['login'] === 'erro') { ?>
            <div class="text-danger">Ops! E-mail ou senha inválidos!</div>
          <?php } ?>    
          
          <?php if (isset($_GET['login']) && $_GET['login'] === 'erro2') { ?>
            <div class="text-danger">Você precisa entrar antes de passear nas nuvens!</div>
          <?php } ?>
          
          <button class="btn-care" type="submit">Entrar com Carinho</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
