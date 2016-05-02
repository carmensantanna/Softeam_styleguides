<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>SAD - Guia de Estilo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <link rel="icon" type="image/x-icon" href="images/faviconl.ico" />

  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Prisim Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prisim/prisim.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="bootstrap-3.3.5/css/bootstrap.css">
  <!--<link rel="stylesheet" href="bootstrap-3.3.5/css/bootstrap-theme.css">-->

</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
		<img src="images/logo-final.png" title="Softeam" width="160" />
        <span style="padding-left: 50px; font-size: 1.6em; line-height: 2; font-weight: bold; font-style: normal">GUIA DE ESTILO</span>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">
      <h2 class="sg-h2 sg-subnav-title">Sobre</h2>
      <ul class="sg-nav-group">
        <li>
          <a href="#sg-about">Introdução</a>
        </li>
        <li>
          <a href="#sg-colors">Cores</a>
        </li>
        <li>
          <a href="#sg-fontStacks">Fontes</a>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <div class="sg-info">
          
          <div class="sg-about sg-section">
            <h2 id="sg-about" class="sg-h2">Introdução</h2>
            <p>Seja bem-vindo! O Softeam é um sistema on-line para controle de equipes de informática. Ele tem por obrigação unir empresas que procuram profissionais para realizar o seu projeto e profissionais qualificados que buscam uma oportunidade de renda extra.</p>
            <p>Este documento mostra as principais diretrizes de estilo utilizadas para estruturar o sistema on-line, com cores, títulos, formulários, botões e entre outros. O seu objetivo é esclarecer as escolhas feitas e deixar documentado para uma futura manutenção ou extensão do sistema.</p>
          </div>

          <!-- Manually add your UI colors here. -->
          <div class="sg-colors sg-section">
            <h2 id="sg-colors" class="sg-h2">Cores</h2>
            <h3>Primárias</h3>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #3b3a3b;"></div>
                <div class="sg-color-name">Cinza Escuro</div>
                <div><samp>#3b3a3b</samp></div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #ffffff;"></div>
                <div class="sg-color-name">Branco</div>
                <div><samp>#ffffff</samp></div>
              </div>              
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #ff8503;"></div>
                <div class="sg-color-name">Laranja</div>
                <div><samp>#ff8503</samp></div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #cccccc;"></div>
                <div class="sg-color-name">Cinza Claro</div>
                <div><samp>#cccccc</samp></div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #515151;"></div>
                <div class="sg-color-name">Cinza Médio</div>
                <div><samp>#515151</samp></div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #2b78c0;"></div>
                <div class="sg-color-name">Azul Claro</div>
                <div><samp>#2b78c0</samp></div>
              </div>
            </div><!--/.sg-color-grid-->
            <h3>Logo</h3>
            <div class="sg-color-grid">
              <div class="sg-color">
                  <div class="sg-color-swatch" style="background-color: #018e49;"></div>
                  <div class="sg-color-name">Verde</div>
                  <div><samp>#018e49</samp></div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #ffc600;"></div>
                <div class="sg-color-name">Amarelo Ouro</div>
                <div><samp>#ffc600</samp></div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #ff8402;"></div>
                <div class="sg-color-name">Laranja</div>
                <div><samp>#ff8402</samp></div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #fa102b;"></div>
                <div class="sg-color-name">Vermelho Cereja</div>
                <div><samp>#fa102b</samp></div>
              </div>
			  <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #015eac;"></div>
                <div class="sg-color-name">Azul Claro</div>
                <div><samp>#015eac</samp></div>
              </div>
            </div><!--/.sg-color-grid-->
          </div><!--/.sg-colors-->

          <!-- Manually add your fonts here. -->
          <div class="sg-font-stacks sg-section">
            <h2 id="sg-fontStacks" class="sg-h2">Fontes</h2>
            <dl class="sg-font-list">
              <dt>Fonte Primária:</dt>
              <dd style='font-family: "Toms Handwritten", Verdana, sans-serif;'>"Toms Handwritten", Verdana, sans-serif;</dd>

              <dt>Fonte Primária em Itálico:</dt>
              <dd style='font-family: "Toms Handwritten", Verdana, sans-serif; font-style: italic;'>"Toms Handwritten", Verdana, sans-serif;</dd>

              <dt>Fonte Primária em Negrito:</dt>
              <dd style='font-family: "Toms Handwritten", Verdana, sans-serif; font-weight: 800;'>"Toms Handwritten", Helvetica, Arial, sans-serif;</dd>

              <dt>Fonte Secundária:</dt>
              <dd style='font-family: Helvetica, serif;'>Helvetica, serif;</dd>

              <dt>Fonte Secundária em Itálico:</dt>
              <dd style='font-family: Helvetica, serif; font-style: italic;'>Helvetica, serif;</dd>

              <dt>Fonte Secundária em Negrito:</dt>
              <dd style='font-family: Helvetica, serif; font-weight: 800;'>Helvetica, serif;</dd>
            </dl>
            <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Voltar ao topo</a></div>
          </div><!--/.sg-font-stacks-->
        </div><!--/.sg-info-->

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prisim/prisim.js"></script><!--<![endif]-->
  
  <script src="js/jquery-2.1.4.js"></script>
  <script src="js/sad.js"></script>    
  <script src="js/sg-scripts.js"></script>
  <script src="bootstrap-3.3.5/js/bootstrap.js"></script>

</body>
</html>

