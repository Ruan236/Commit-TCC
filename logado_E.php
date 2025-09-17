<?php

session_start();
$site = [
  'titulo' => 'Blockchain Verde',
  'descricao' => 'Painel da Empresa Fornecedora',
  'autor' => 'Energia Inteligente',
  'ano' => date('Y')
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="<?= $site['descricao'] ?>" />
  <meta name="author" content="<?= $site['autor'] ?>" />
  <title><?= $site['titulo'] ?> - Empresa</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

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

    .navbar-brand,
    .nav-link,
    .auth-buttons a {
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

    .navbar-nav .nav-link.active {
      border-bottom: 3px solid #a9c4d6;
      font-weight: bold;
    }

    .navbar-nav .nav-link {
      transition: border-bottom 0.3s ease;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid px-5">
      <a class="navbar-brand fw-bold text-white" href="index.php">
        <i class="bi bi-building"></i> <?= $site['titulo'] ?>
      </a>
      <button
        class="navbar-toggler text-white"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-4">
          <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'logado_E.php' ? 'active' : '' ?>" href="logado_E.php">Painel Empresa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="comentarios.php">Comentários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="servicos.php">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
        </ul>
        <div class="auth-buttons ms-auto d-flex gap-3">
          <?php if (isset($_SESSION['empresa'])): ?>
            <span>
              <i class="bi bi-person-check"></i>
              Logado como <strong><?= htmlspecialchars($_SESSION['empresa']) ?></strong>
            </span>
            <a href="logout.php" class="btn btn-danger btn-sm">
              <i class="bi bi-box-arrow-right"></i> Sair
            </a>
          <?php else: ?>
            <a href="Cadastro_da_empresa.php" class="btn btn-light btn-sm">
              <i class="bi bi-building"></i> Empresa
            </a>
            <a href="Cadastro.php" class="btn btn-warning btn-sm">
              <i class="bi bi-person"></i> Pessoa
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section
    id="hero"
    style="
      background: url('Imagens/foto3.jpg') center/cover no-repeat;
      height: 600px;
      width: 100%;
      position: relative;
      margin: 0;
      padding: 0;
      "
  >
    <div
      style="
        background-color: rgba(0, 0, 0, 0.6);
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: left;
        color: white;
        "
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h1 class="display-4 fw-bold">
              <i class="bi bi-building"></i> Painel da Empresa
            </h1>
          </div>
          <div class="col-md-6">
            <p class="lead">
              Bem-vindo ao painel da <strong>Empresa Fornecedora</strong>!<br /><br />
              Aqui você pode publicar ofertas de energia, gerenciar vendas, responder pedidos e acompanhar suas negociações.<br /><br />
              Utilize as opções do menu para navegar pelas funcionalidades disponíveis para empresas.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container mt-5">
    <h1 class="mb-4">Funcionalidades para Empresas</h1>
    <div class="row g-4">
      <!-- Card Publicar Oferta -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow border-0">
          <div class="card-body">
            <h4 class="card-title">📢 Publicar Oferta</h4>
            <p class="card-text">
              Cadastre novas ofertas de energia renovável para os compradores visualizarem.
            </p>
          </div>
        </div>
      </div>
      <!-- Card Gerenciar Pedidos -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow border-0">
          <div class="card-body">
            <h4 class="card-title">📝 Gerenciar Pedidos</h4>
            <p class="card-text">
              Veja os pedidos recebidos e responda aos compradores interessados.
            </p>
          </div>
        </div>
      </div>
      <!-- Card Comentários -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow border-0">
          <div class="card-body">
            <h4 class="card-title">💬 Comentários</h4>
            <p class="card-text">
              Interaja com os compradores e responda dúvidas ou sugestões.
            </p>
          </div>
        </div>
      </div>
      <!-- Card Relatórios -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow border-0">
          <div class="card-body">
            <h4 class="card-title">📊 Relatórios</h4>
            <p class="card-text">
              Acompanhe o desempenho das suas vendas e o impacto ambiental gerado.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3">
          <h5>Sobre o Blockchain Verde</h5>
          <p>
            Plataforma dedicada à compra e venda de energia renovável com total transparência e rastreabilidade garantida pela tecnologia blockchain.
          </p>
        </div>
        <div class="col-md-4 mb-3">
          <h5>Links Úteis</h5>
          <ul class="list-unstyled">
            <li><a href="index.php" class="text-white text-decoration-none">Início</a></li>
            <li><a href="comentarios.php" class="text-white text-decoration-none">Comentários</a></li>
            <li><a href="servicos.php" class="text-white text-decoration-none">Serviços</a></li>
            <li><a href="contato.php" class="text-white text-decoration-none">Contato</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-3">
          <h5>Contato</h5>
          <p>
            📧 ruan.otavio@blockchainverde.com<br />
            📞 (11) 99999-9999<br />
            📍 São Paulo - SP
          </p>
        </div>
      </div>
      <hr style="border-color: rgba(255,255,255,0.2);" />
      <div class="text-center">
        <small>
          &copy; <?= date('Y') ?> Blockchain Verde — Criado em <?= date('d/m/Y', strtotime('2025-01-10')) ?>.<br />
          Todos os direitos reservados.
        </small>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>