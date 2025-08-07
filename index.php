<?php
$site = [

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $site['descricao'] ?>">
  <meta name="author" content="<?= $site['autor'] ?>">
  <title><?= $site['titulo'] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: #ffffff;
      font-family: 'Inter', sans-serif;
      margin: 0;
      padding: 0;
      color: #1e2a38;
    }
    nav.navbar {
      background: linear-gradient(135deg, #44576d, #6f91a8);
    }
    .navbar-brand, .nav-link, .auth-buttons a {
      color: white !important;
    }
    .auth-buttons {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .auth-buttons a {
      background-color: #3f88c5;
      border: 2px solid white;
      padding: 8px 16px;
      border-radius: 6px;
      text-decoration: none;
      transition: all 0.2s ease;
      color: white;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }
    .auth-buttons a:hover {
      background-color: #316eaa;
      transform: translateY(-1px);
    }
    .section {
      padding: 3rem 0;
    }
    h2 {
      margin-top: 1rem;
      margin-bottom: 1rem;
    }
    .section img {
      max-height: 300px;
      object-fit: cover;
    }
    footer {
      background: linear-gradient(135deg, #44576d, #6f91a8);
      color: white;
      text-align: center;
      padding: 2rem 0;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#"><?= $site['titulo'] ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <?php foreach ($secoes as $secao): ?>
          <li class="nav-item">
            <a class="nav-link" href="#<?= $secao['id'] ?>"><?= $secao['titulo'] ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="auth-buttons ms-3">
        <a href="Cadastro_da_empresa.php"><i class="bi bi-person-plus"></i>empresa</a>
        <a href="Cadastro.php"><i class="bi bi-person-plus"></i>Pessoa</a>
      </div>
    </div>
  </div>
</nav>

<!-- Conteúdo Principal -->
<main class="container">
  <?php foreach ($secoes as $secao): ?>
    <section id="<?= $secao['id'] ?>" class="section">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="<?= $secao['imagem'] ?>" alt="<?= $secao['titulo'] ?>" class="img-fluid rounded mb-3">
        </div>
        <div class="col-md-6">
          <h2><?= $secao['titulo'] ?></h2>
          <p><?= $secao['conteudo'] ?></p>
        </div>
      </div>
    </section>
  <?php endforeach; ?>
</main>

<!-- Rodapé -->
<footer>
  <p>&copy; <?= $site['ano'] ?> <?= $site['autor'] ?> - Todos os direitos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
