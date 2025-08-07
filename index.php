<?php
$site = [
  'titulo' => 'Blockchain Verde',
  'descricao' => 'Tecnologia Blockchain aplicada à energia renovável',
  'autor' => 'Energia Inteligente',
  'ano' => date('Y')
];

$secoes = [
  [
    'id' => 'sobre',
    'titulo' => 'O que é Blockchain Verde?',
    'conteudo' => 'Blockchain Verde é a aplicação da tecnologia blockchain em soluções voltadas à sustentabilidade, como o rastreamento da produção de energia limpa, compensação de carbono e redes descentralizadas de energia.',
    'imagem' => 'Imagens/foto7.jpg'
  ],
  [
    'id' => 'como-funciona',
    'titulo' => 'Como Funciona?',
    'conteudo' => 'A tecnologia blockchain permite que dados de produção e consumo de energia renovável sejam registrados de forma imutável, garantindo a origem sustentável da energia e viabilizando negociações peer-to-peer em redes inteligentes.',
    'imagem' => 'Imagens/foto6.jpg'
  ],
  [
    'id' => 'beneficios',
    'titulo' => 'Benefícios Ambientais',
    'conteudo' => '<ul><li>Transparência na origem da energia</li><li>Incentivo à geração limpa</li><li>Redução de emissões de carbono</li><li>Automação de certificações ecológicas</li></ul>',
    'imagem' => 'Imagens/foto5.jpg'
  ],
  [
    'id' => 'aplicacoes',
    'titulo' => 'Aplicações Práticas',
    'conteudo' => '<ul><li>Certificados de energia renovável (RECs)</li><li>Monitoramento de emissões</li><li>Rastreamento de créditos de carbono</li><li>Comércio de energia entre consumidores (P2P)</li></ul>',
    'imagem' => 'Imagens/foto4.jpg'
  ],
  [
    'id' => 'futuro',
    'titulo' => 'O Futuro da Energia com Blockchain',
    'conteudo' => 'Com a descentralização energética e a transição para uma matriz limpa, o blockchain se tornará essencial para validar, auditar e automatizar operações em tempo real em redes energéticas inteligentes.',
    'imagem' => 'Imagens/foto3.jpg'
  ],
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
    text-align: left;
    color: white;
  ">
    <div class="container">
      <div class="row align-items-center">
        <!-- Título à esquerda -->
        <div class="col-md-6">
          <h1 class="display-4 fw-bold">Blockchain Verde</h1>
        </div>

        <!-- Texto à direita -->
        <div class="col-md-6">
          <p class="lead">
            🔍 Bem-vindo ao nosso portal de Energia Renovável com Blockchain!<br><br>
            Este site foi desenvolvido para conectar <strong>empresas fornecedoras de energia renovável</strong> com <strong>usuários interessados na compra direta dessa energia</strong>, promovendo um ambiente seguro, transparente e sustentável.<br><br>
            A seguir, explicamos como o site funciona e como você pode utilizá-lo da melhor forma:
          </p>
          <a href="#sobre" class="btn btn-outline-light btn-lg mt-3">Explorar</a>
        </div>
      </div>
    </div>
  </div>
</section>
