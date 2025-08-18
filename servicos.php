<?php
$site = [
  'titulo' => 'Blockchain Verde',
  'descricao' => 'Tecnologia Blockchain aplicada à energia renovável',
  'autor' => 'Energia Inteligente',
];


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
<nav class="navbar navbar-expand-lg sticky-top" style="background: linear-gradient(135deg, #44576d, #6f91a8);">
  <div class="container-fluid px-5">
    
    <!-- Logo / Nome do Site -->
    <a class="navbar-brand fw-bold text-white" href="index.php">
      <i class="bi bi-lightning-charge-fill"></i> <?= $site['titulo'] ?>
    </a>

    <!-- Botão do menu mobile -->
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Menu alinhado à esquerda após logo -->
      <ul class="navbar-nav ms-4">
        <li class="nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" href="index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'comentarios.php' ? 'active' : '' ?>" href="comentarios.php">Comentários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'servicos.php' ? 'active' : '' ?>" href="servicos.php">Serviços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contato.php' ? 'active' : '' ?>" href="contato.php">Contato</a>
        </li>
      </ul>

      <!-- Botões à direita -->
      <div class="auth-buttons ms-auto d-flex gap-3">
        <a href="Cadastro_da_empresa.php" class="btn btn-light btn-sm">
          <i class="bi bi-building"></i> Empresa
        </a>
        <a href="Cadastro.php" class="btn btn-warning btn-sm">
          <i class="bi bi-person"></i> Pessoa
        </a>
      </div>
    </div>
  </div>
</nav>

<style>
  /* Estilo para marcar a página ativa */
  .navbar-nav .nav-link.active {
    border-bottom: 3px solid #a9c4d6; /* Cor mais clara combinando com o site */
    font-weight: bold;
  }

  /* Suaviza a transição */
  .navbar-nav .nav-link {
    transition: border-bottom 0.3s ease;
  }
</style>




<!-- Bloco de Destaque com imagem de fundo -->
<section id="hero" style="
  background: url('Imagens/foto3.jpg') center/cover no-repeat;
  height: 600px;
  width: 100%;
  position: relative;
  margin: 0;
  padding: 0;
">
  <div style="
    background-color: rgba(0, 0, 0, 0.6);
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    color: white;
    padding: 2rem;
  ">
    <h1 class="display-4 fw-bold">
      <i class="bi bi-lightning-charge-fill"></i> Blockchain Verde
    </h1>
    <p class="lead mt-3" style="max-width: 800px;">
      <h1>Guia de Uso da Plataforma</h1> 
    </p>
    
  </div>
</section>





</html> 
