<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<div class="off-canvas-wrapper">
      <div id="offCanvasLeft" data-off-canvas data-transition="overlap" class="off-canvas position-left">
        <!--close button-->
        <button aria-label="Close Menu" type="button" data-close class="close-button"><span aria-hidden="true">&times</span></button>
        <!--Menu-->
        <nav>
          <div class="logo-off-canvas text-center"><a href="index.html" class="custom-logo-link"><img src="<?php echo get_theme_file_uri( 'assets/img/logo.png' ); ?>" height="88" width="108" alt="" class="custom-logo"></a></div>
          <ul data-accordion-menu data-submenu-toggle="true" class="vertical menu accordion-menu off-canvas-menu">
            <li><a href="index.html">Home</a></li>
            <li> <a href="sobre.html">Sobre Nós</a></li>
            <li><a href="servicos.html">Serviços</a></li>
            <li><a href="profissionais.html">Profissionais</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contato.html">Contato</a></li>
          </ul>
        </nav>
      </div>
      <div data-off-canvas-content class="off-canvas-content">
        <!--header-->
        <div class="data-sticky-container sticky-header">
          <div data-sticky data-margin-top="0" data-top-anchor="slide-anchor:bottom" data-sticky-on="small">
            <header class="header">
              <div class="grid-container">
                <div class="grid-x grid-margin-x grid-padding-x align-middle">
                  <div class="cell shrink"><span class="custom-logo-wrapper"><a href="index.html" class="custom-logo-link"><img src="<?php echo get_theme_file_uri( 'assets/img/logo.png' ); ?>" height="88" width="108" alt="" class="custom-logo"></a></span></div>
                  <div class="cell auto text-right">
                    <nav class="main-nav">
                      <button type="button" data-open="offCanvasLeft" class="menu-icon hide-for-large float-right"></button>
                      <ul data-dropdown-menu class="menu main-menu text-uppercase align-right show-for-large">
                        <li><a href="index.html">Home</a></li>
                        <li> <a href="sobre.html">Sobre Nós</a></li>
                        <li><a href="servicos.html">Serviços</a></li>
                        <li><a href="profissionais.html">Profissionais</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contato.html">Contato</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </header>
          </div>
        </div>
        <!--header-->
        <!--banner-->
        <div class="slide-wrapper">
          <div id="slides" class="slides hero">
            <div style="background-image: url(<?php echo get_theme_file_uri( 'assets/img/banner.jpg' ); ?>)" class="slide">
              <div class="slide-caption slideInLeft">
                <h2><span>Odontologia</span> Estética</h2>
              </div>
            </div>
            <div style="background-image: url(<?php echo get_theme_file_uri( 'assets/img/banner2.jpg' ); ?>)" class="slide">
              <div class="slide-caption slideInLeft">
                <h2><span>Clínica</span> Ilúmina</h2>
              </div>
            </div>
          </div>
          <div id="slide-anchor"></div>
        </div>
        <!--banner-->
