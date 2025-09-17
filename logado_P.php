
<?php
//esta pegadno
session_start();
$site = [
  'titulo' => 'Blockchain Verde',
  'descricao' => 'Tecnologia Blockchain aplicada à energia renovável',
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
  <title><?= $site['titulo'] ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background: #f4f8fb;
      font-family: 'Inter', sans-serif;
      color: #1e2a38;
    }
    nav.navbar {
      background: #44576d; /* Cor sólida */
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    .navbar-brand,
    .nav-link,
    .auth-buttons a,
    .auth-buttons span {
      color: #fff !important;
    }
    .navbar-brand {
      font-size: 1.7rem;
      letter-spacing: 1px;
    }
    .navbar-nav .nav-link.active {
      border-bottom: 3px solid #fff;
      font-weight: bold;
    }
    .auth-buttons {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .auth-buttons a, .auth-buttons span {
      border-radius: 6px;
      padding: 7px 18px;
      font-size: 1rem;
      transition: background 0.2s, color 0.2s;
      display: flex;
      align-items: center;
      gap: 7px;
    }
    .auth-buttons a.btn-danger {
      background: #ff595e;
      border: none;
      color: #fff !important;
    }
    .auth-buttons a.btn-danger:hover {
      background: #d7263d;
      color: #fff !important;
    }
    .auth-buttons a.btn-light {
      background: #fff;
      color: #44576d !important;
      border: 2px solid #fff;
    }
    .auth-buttons a.btn-light:hover {
      background: #e0e0e0;
      color: #44576d !important;
    }
    .auth-buttons a.btn-warning {
      background: #ffe066;
      color: #44576d !important;
      border: 2px solid #ffe066;
    }
    .auth-buttons a.btn-warning:hover {
      background: #ffd23f;
      color: #44576d !important;
    }
    .auth-buttons span {
      background: rgba(67,176,241,0.15);
      font-weight: 500;
      box-shadow: 0 2px 8px rgba(67,176,241,0.08);
      color: #fff !important;
    }
    #hero {
      background: url('Imagens/foto3.jpg') center/cover no-repeat;
      height: 500px;
      position: relative;
      margin-bottom: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    #hero .overlay {
      background: rgba(34, 40, 49, 0.7);
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0; left: 0;
      z-index: 1;
    }
    #hero .container {
      position: relative;
      z-index: 2;
    }
    #hero h1 {
      color: #fff;
      font-size: 3rem;
      font-weight: bold;
      text-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }
    #hero p {
      color: #e0e0e0;
      font-size: 1.2rem;
      text-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .card {
      border: none;
      border-radius: 18px;
      box-shadow: 0 4px 24px rgba(90, 150, 200, 0.08);
      transition: transform 0.15s;
    }
    .card:hover {
      transform: translateY(-6px) scale(1.02);
      box-shadow: 0 8px 32px rgba(90, 150, 200, 0.15);
    }
    .card-title {
      font-size: 1.3rem;
      color: #3a506b;
      font-weight: bold;
    }
    .card-text, .card ul {
      color: #22223b;
      font-size: 1rem;
    }
    footer {
      background: #44576d; /* Cor sólida */
      color: #fff;
      text-align: center;
      padding: 2rem 0 1rem 0;
      margin-top: 4rem;
    }
    footer h5 {
      font-weight: bold;
      margin-bottom: 1rem;
    }
    footer a {
      color: #fff;
      text-decoration: underline;
    }
    footer a:hover {
      color: #ffe066;
    }
    @media (max-width: 768px) {
      #hero {
        height: 350px;
      }
      #hero h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid px-5">
      <a class="navbar-brand fw-bold" href="index.php">
        <i class="bi bi-lightning-charge-fill"></i> <?= $site['titulo'] ?>
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
        <div class="auth-buttons ms-auto d-flex gap-3">
          <?php if (isset($_SESSION['usuario'])): ?>
            <span>
              <i class="bi bi-person-check"></i>
              Logado como <strong><?= htmlspecialchars($_SESSION['usuario']) ?></strong>
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
  <section id="hero">
    <div class="overlay"></div>
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1>
            <i class="bi bi-lightning-charge-fill"></i> Blockchain Verde
          </h1>
        </div>
        <div class="col-md-6">
          <p class="lead">
            Bem-vindo ao nosso portal de Energia Renovável com Blockchain!<br><br>
            Este site foi desenvolvido para conectar <strong>empresas fornecedoras de energia renovável</strong> com <strong>usuários interessados na compra direta dessa energia</strong>, promovendo um ambiente seguro, transparente e sustentável.<br><br>
            A seguir, explicamos como o site funciona e como você pode utilizá-lo da melhor forma:
          </p>
        </div>
      </div>
    </div>
  </section>

  <div class="container mt-5">
    <h1 class="mb-4 text-center">Tipos de Cadastro na Plataforma Blockchain Verde</h1>
    <div class="row g-4">
      <!-- Card Usuário Comprador -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">👤 Usuário Comprador</h4>
            <p class="card-text">
              Perfil para pessoas que desejam comprar energia renovável de forma direta, segura e transparente.
            </p>
            <ul>
              <li>Visualizar ofertas e filtrar por preço, quantidade ou tipo de energia.</li>
              <li>Consultar informações das empresas fornecedoras.</li>
              <li>Enviar pedidos de compra pela plataforma.</li>
              <li>Deixar comentários ou negociar condições.</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Card Empresa Fornecedora -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">🏭 Empresa Fornecedora</h4>
            <p class="card-text">
              Empresas e empreendedores do setor de energia renovável que desejam vender seus produtos com segurança e credibilidade.
            </p>
            <ul>
              <li>Publicar e gerenciar ofertas de energia.</li>
              <li>Receber e responder pedidos de compra.</li>
              <li>Interagir com comentários dos compradores.</li>
              <li>Registrar vendas na blockchain.</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Card Investidor -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">💹 Investidor</h4>
            <p class="card-text">
              Perfil para quem deseja investir em projetos de energia renovável e acompanhar resultados com transparência.
            </p>
            <ul>
              <li>Acompanhar projetos e oportunidades de investimento.</li>
              <li>Verificar retorno e impacto ambiental.</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Card Pesquisador -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">🔬 Pesquisador</h4>
            <p class="card-text">
              Usuários interessados em dados, estudos e relatórios sobre blockchain e energia renovável.
            </p>
            <ul>
              <li>Acessar dados abertos e relatórios do setor.</li>
              <li>Participar de fóruns e discussões técnicas.</li>
            </ul>
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
            <li><a href="index.php">Início</a></li>
            <li><a href="comentarios.php">Comentários</a></li>
            <li><a href="servicos.php">Serviços</a></li>
            <li><a href="contato.php">Contato</a></li>
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