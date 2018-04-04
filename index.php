<?php get_header(); ?>

<!--main-->
<main class="main">
  <!--sobre-->
  <section id="sobre" class="custom-section">
    <div class="grid-container">
      <div class="grid-x grid-margin-x grid-padding-x">
        <div class="cell small-12 medium-6">
          <h2>Clíninca <span>Ilúmina</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias similique alias sunt laborum cupiditate expedita laboriosam enim non possimus, temporibus illum officia minus explicabo iste voluptatem facilis nisi excepturi harum!</p><a href="sobre.html" class="saiba-mais">SAIBA MAIS</a>
        </div>
        <div class="cell small-12 medium-6"><img src="<?php echo get_theme_file_uri( 'assets/img/clinica-home.png' ); ?>" height="320" width="582" alt=""></div>
      </div>
    </div>
  </section>
  <!--equipe-->
  <section id="equipe" class="custom-section bg1">
    <div class="grid-container">
      <div class="grid-x grid-margin-x grid-padding-x">
        <div class="cell">
          <h2>Nossos <span>Profissionais</span></h2>
        </div>
        <div class="cell">
          <div data-equalizer="foo" class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-3">
            <div class="cell profissionais">
              <div data-equalizer-watch="foo" class="profissional card">
                <div class="image-container">
                  <div class="image-cover"></div><img src="<?php echo get_theme_file_uri( 'assets/img/dr1.jpg' ); ?>" height="385" width="385">
                  <div class="nome-container">
                    <h4>DRa Adriana Traczinski</h4>
                  </div>
                </div>
                <div class="card-section">
                  <p>CRO 10.204</p>
                  <p>Formada pela XXXXXX em 2004, e especialista em XXXXXXXX pela XXXXXXXXX em 2012 Mestranda em XXXXXXXXX pela XXXXXXXXX.</p><a href="profissionais.html" class="saiba-mais">SAIBA MAIS</a>
                </div>
              </div>
            </div>
            <div class="cell profissionais">
              <div data-equalizer-watch="foo" class="profissional card">
                <div class="image-container">
                  <div class="image-cover"></div><img src="<?php echo get_theme_file_uri( 'assets/img/dr2.jpg' ); ?>" height="385" width="385">
                  <div class="nome-container">
                    <h4>DRa Adriana Traczinski</h4>
                  </div>
                </div>
                <div class="card-section">
                  <p>CRO 10.204</p>
                  <p>Formada pela XXXXXX em 2004, e especialista em XXXXXXXX pela XXXXXXXXX em 2012 Mestranda em XXXXXXXXX pela XXXXXXXXX.</p><a href="profissionais.html" class="saiba-mais">SAIBA MAIS</a>
                </div>
              </div>
            </div>
            <div class="cell profissionais align-self-middle">
              <div data-equalizer-watch="foo" class="profissional card">
                <div class="image-container">
                  <div class="image-cover"></div><img src="<?php echo get_theme_file_uri( 'assets/img/dr3.jpg' ); ?>" height="385" width="385">
                </div>
                <div class="card-section"><br><a href="profissionais.html" class="saiba-mais lead">CONHEÇA <br> NOSSOS PROFISSIONAIS</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--blog-->
  <section id="blog" class="custom-section">
    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-margin-x">
        <div class="cell">
          <h2>Últimas notícias <span>Odontológicas</span></h2>
        </div>
        <div class="cell">
          <div class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-4">
            <div class="cell blog-home"><a href="post.html"><img src="<?php echo get_theme_file_uri( 'assets/img/blog-home1.jpg' ); ?>" alt="Titulo do Post"></a>
              <h5><a href="post.html">Titulo do Post</a></h5>
              <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus...</small></p><a href="post.html" class="saiba-mais">LEIA MAIS</a>
            </div>
            <div class="cell blog-home"><a href="post.html"><img src="<?php echo get_theme_file_uri( 'assets/img/blog-home2.jpg' ); ?>" alt="Titulo do Post"></a>
              <h5><a href="post.html">Titulo do Post</a></h5>
              <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus...</small></p><a href="post.html" class="saiba-mais">LEIA MAIS</a>
            </div>
            <div class="cell blog-home"><a href="post.html"><img src="<?php echo get_theme_file_uri( 'assets/img/blog-home3.jpg' ); ?>" alt="Titulo do Post"></a>
              <h5><a href="post.html">Titulo do Post</a></h5>
              <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus...</small></p><a href="post.html" class="saiba-mais">LEIA MAIS</a>
            </div>
            <div class="cell blog-home"><a href="post.html"><img src="<?php echo get_theme_file_uri( 'assets/img/blog-home1.jpg' ); ?>" alt="Titulo do Post"></a>
              <h5><a href="post.html">Titulo do Post</a></h5>
              <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus...</small></p><a href="post.html" class="saiba-mais">LEIA MAIS</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!--main-->

<?php get_footer(); ?>
