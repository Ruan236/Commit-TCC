<?php
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
 
    /* Estilo para marcar a página ativa */
    .navbar-nav .nav-link.active {
      border-bottom: 3px solid #a9c4d6;
      font-weight: bold;
    }
 
    /* Suaviza a transição */
    .navbar-nav .nav-link {
      transition: border-bottom 0.3s ease;
    }
  </style>
</head>
<body>
 
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid px-5">
 
      <!-- Logo / Nome do Site -->
      <a class="navbar-brand fw-bold text-white" href="index.php">
        <i class="bi bi-lightning-charge-fill"></i> <?= $site['titulo'] ?>
      </a>
 
      <!-- Botão do menu mobile -->
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
        <!-- Menu alinhado à esquerda após logo -->
        <ul class="navbar-nav ms-4">
          <li class="nav-item">
            <a
              class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>"
              href="index.php"
              >Início</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'comentarios.php' ? 'active' : '' ?>"
              href="comentarios.php"
              >Comentários</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'servicos.php' ? 'active' : '' ?>"
              href="servicos.php"
              >Serviços</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contato.php' ? 'active' : '' ?>"
              href="contato.php"
              >Contato</a
            >
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
 
 
  <!-- Bloco de Destaque com imagem de fundo -->
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
          <!-- Título à esquerda -->
          <div class="col-md-6">
            <h1 class="display-4 fw-bold">
              <i class="bi bi-lightning-charge-fill"></i> Blockchain Verde
            </h1>
          </div>
 
          <!-- Texto à direita -->
          <div class="col-md-6">
            <p class="lead">
              Bem-vindo ao nosso portal de Energia Renovável com Blockchain!<br /><br />
              Este site foi desenvolvido para conectar
              <strong>empresas fornecedoras de energia renovável</strong> com
              <strong>usuários interessados na compra direta dessa energia</strong>,
              promovendo um ambiente seguro, transparente e sustentável.<br /><br />
              A seguir, explicamos como o site funciona e como você pode utilizá-lo da melhor forma:
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <div class="container mt-5">
    <h1 class="mb-4">Tipos de Cadastro na Plataforma Blockchain Verde</h1>
 
    <div class="row g-4">
      <!-- Card Usuário Comprador -->
      <div class="col-md-6">
        <div class="card h-100 shadow border-0">
          <div class="card-body">
            <h4 class="card-title">👤 Usuário Comprador (Pessoa Física)</h4>
            <p class="card-text">
              Esse perfil é ideal para pessoas que desejam comprar energia renovável de forma direta, segura e transparente.
            </p>
            <ul>
              <li>Visualizar todas as ofertas disponíveis e filtrar por preço, quantidade ou tipo de energia.</li>
              <li>Consultar informações detalhadas das empresas fornecedoras, incluindo histórico e avaliações.</li>
              <li>Enviar pedidos de compra diretamente pela plataforma.</li>
              <li>Deixar comentários ou mensagens nas ofertas para tirar dúvidas ou negociar condições.</li>
            </ul>
            <p>
              Perfil perfeito para consumidores que querem contribuir com o uso consciente de energia e se beneficiar de transações seguras e rastreáveis por blockchain.
            </p>
          </div>
        </div>
      </div>
 
      <!-- Card Empresa Fornecedora -->
      <div class="col-md-6">
        <div class="card h-100 shadow border-0">
          <div class="card-body">
            <h4 class="card-title">🏭 Empresa Fornecedora de Energia</h4>
            <p class="card-text">
              Destinado a empresas e empreendedores do setor de energia renovável que desejam vender seus produtos com segurança e credibilidade.
            </p>
            <ul>
              <li>Publicar e gerenciar ofertas de energia com informações detalhadas.</li>
              <li>Receber e responder pedidos de compra de usuários.</li>
              <li>Interagir com comentários e dúvidas dos compradores.</li>
              <li>Registrar vendas na blockchain para garantir rastreabilidade e segurança.</li>
            </ul>
            <p>
              Perfil indicado para empresas que buscam ampliar seu alcance, conquistar confiança no mercado e demonstrar compromisso com a sustentabilidade.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <div class="container mt-5">
  <h1 class="mb-4">Tipos de Cadastro na Plataforma Blockchain Verde</h1>
 
  <div class="row g-4">
    <!-- Card Usuário Comprador -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100 shadow border-0">
        <div class="card-body">
          <h4 class="card-title">👤 Usuário Comprador</h4>
          <p class="card-text">
            Perfil para pessoas que desejam comprar energia renovável de forma segura.
          </p>
        </div>
      </div>
    </div>
 
    <!-- Card Empresa Fornecedora -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100 shadow border-0">
        <div class="card-body">
          <h4 class="card-title">🏭 Empresa Fornecedora</h4>
          <p class="card-text">
            Empresas que vendem energia renovável com segurança e rastreabilidade.
          </p>
        </div>
      </div>
    </div>
 
    <!-- Card Investidor -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100 shadow border-0">
        <div class="card-body">
          <h4 class="card-title">💹 Investidor</h4>
          <p class="card-text">
            Perfil destinado a quem deseja investir em projetos de energia renovável.
          </p>
        </div>
      </div>
    </div>
 
    <!-- Card Pesquisador -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100 shadow border-0">
        <div class="card-body">
          <h4 class="card-title">🔬 Pesquisador</h4>
          <p class="card-text">
            Usuários interessados em dados e estudos sobre blockchain e energia.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
 
 
 
 
  <footer class="mt-5">
    <div class="container">
      <div class="row">
 
 
     
 
      <!-- Rodapé -->
        <!-- Sobre o site -->
        <div class="col-md-4 mb-3">
          <h5>Sobre o Blockchain Verde</h5>
          <p>
            Plataforma dedicada à compra e venda de energia renovável com total transparência e rastreabilidade garantida pela tecnologia blockchain.
          </p>
        </div>
 
        <!-- Links úteis -->
        <div class="col-md-4 mb-3">
          <h5>Links Úteis</h5>
          <ul class="list-unstyled">
            <li><a href="index.php" class="text-white text-decoration-none">Início</a></li>
            <li><a href="comentarios.php" class="text-white text-decoration-none">Comentários</a></li>
            <li><a href="#servicos" class="text-white text-decoration-none">Serviços</a></li>
            <li><a href="#contato" class="text-white text-decoration-none">Contato</a></li>
          </ul>
        </div>
 
        <!-- Contato -->
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
 
      <!-- Data e créditos -->
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