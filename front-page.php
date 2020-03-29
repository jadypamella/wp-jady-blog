<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Jady_Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- Sobre -->
<section id="sobre">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Um pouco sobre mim</h2>
        <h3 class="section-subheading text-muted"></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/photo.jpg" alt="Jady Pâmella">
            <h4>Jady Pâmella</h4>
            <p class="text-muted">Analista de TI</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                  <a href="<?php echo get_contacts('instagram_url'); ?>" title="<?php echo get_contacts('instagram_title'); ?>" target="_blank" class="link-tip"><i class="fa <?php echo get_contacts('instagram_icon'); ?>"></i></a>
              </li>
              <li class="list-inline-item">
                  <a href="<?php echo get_contacts('facebook_url'); ?>" title="<?php echo get_contacts('facebook_title'); ?>" target="_blank" class="link-tip"><i class="fa <?php echo get_contacts('facebook_icon'); ?>"></i></a>
              </li>
              <li class="list-inline-item">
                  <a href="<?php echo get_contacts('linkedin_url'); ?>" title="<?php echo get_contacts('linkedin_title'); ?>" target="_blank" class="link-tip"><i class="fa <?php echo get_contacts('linkedin_icon'); ?>"></i></a>
              </li>
            </ul>
          </div>
      </div>
      <div class="col-sm-4">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
          <p class="large text-muted">Durante muitos anos fui webdesigner e webdeveloper freelancer, mas não faço mais trabalhos autônomos hoje em dia. Agora dedico todo o meu tempo profissional ao BRB (Banco de Brasília) e a eventuais trabalhos voluntários.</p>
          <p class="large text-muted">Além disso, gosto muito de aprender e estou investindo mais na minha carreira acadêmica.<br/>Atualmente, faço mestrado em Inteligência Artificial na UnB - Universidade de Brasília.</p>
          <p><a href="<?php echo get_contacts('lattes_url'); ?>" id="btn-lattes" class="btn btn-xl" target="_blank">Currículo Lattes</a></p>
      </div>
    </div>
  </div>
</section>

<section id="contato">
  <div class="container">
     <div class="row">
       <div class="col-lg-12 text-center">
           <h2 class="section-heading">Por onde estou?</h2>
           <h3 class="section-subheading text-muted">Uma pequena coleção das minhas principais contas sociais e atividades online:</h3>
       </div>
     </div>
     <div class="row mx-auto my-auto">
       <div id="social-carousel" class="carousel slide w-100" data-ride="carousel">

         <div class="row"><!-- carousel -->
           <div class="col-lg-1 text-center"> <!-- carousel-previous -->
             <a class="carousel-control-prev text-dark" href="#social-carousel" role="button" data-slide="prev">
                 <span class="fa fa-chevron-left" aria-hidden="true"></span>
                 <span class="sr-only">Anterior</span>
             </a>
           </div><!-- /carousel-previous -->

           <div class="col-lg-10 text-center"> <!-- carousel-content -->
             <div class="carousel-inner" role="listbox">  <!-- carousel-inner -->
              <div class="carousel-item py-5 active">  <!-- carousel-1 -->
                  <div class="row">
                      <div class="col-sm-4">
                        <div class="social text-center">
                          <a href="https://open.spotify.com/user/22mjc3qqsl22lpuuplwsdobnq?si=QpQDzOHZQZCbO9lYYZ6J6Q" target="_blank">
                            <p class="rounded-circle bg-success"><i class="fa fa-spotify"></i></p>
                            <h4>Spotify</h4>
                            <p>Saiba o que eu gosto de ouvir.</p>
                          </a>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="social text-center">
                          <a href="https://my.playstation.com/profile/jadypamella" target="_blank">
                            <p class="rounded-circle bg-primary"><i class="fa fa-gamepad"></i></p>
                            <h4>PlayStation</h4>
                            <p>Veja minhas últimas conquistas no PS4.</p>
                          </a>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="social text-center">
                          <a href="https://t.me/jadypamella" target="_blank">
                            <p class="rounded-circle bg-info"><i class="fa fa-telegram"></i></p>
                            <h4>Telegram</h4>
                            <p>Também estou no Telegram.</p>
                          </a>
                        </div>
                      </div>
                  </div>
              </div>  <!-- /carousel-1 -->
              <div class="carousel-item py-5">   <!-- carousel-2 -->
                <div class="row">
                    <div class="col-sm-4">
                      <div class="social text-center">
                        <a href="https://github.com/jadypamella" target="_blank">
                         <p class="rounded-circle bg-dark"><i class="fa fa-github"></i></p>
                         <h4>GitHub</h4>
                         <p>Meu repositório público de códigos-fonte.</p>
                       </a>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="social text-center">
                        <a href="https://trello.com/jadypamella" target="_blank">
                         <p class="rounded-circle bg-primary"><i class="fa fa-trello"></i></p>
                         <h4>Trello</h4>
                         <p>Vamos gerenciar nossos projetos juntos.</p>
                       </a>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="social text-center">
                        <a href="https://pinterest.com/jadypamella/" target="_blank">
                         <p class="rounded-circle bg-danger"><i class="fa fa-pinterest"></i></p>
                         <h4>Pinterest</h4>
                         <p>Inspirações para exercitar a criatividade.</p>
                       </a>
                      </div>
                    </div>
                </div>
              </div>   <!-- /carousel-2 -->

              <div class="carousel-item py-5">   <!-- carousel-3 -->
                <div class="row">
                    <div class="col-sm-4">
                      <div class="social text-center">
                        <a href="https://www.reddit.com/user/jadypamella/" target="_blank">
                         <p class="rounded-circle bg-warning"><i class="fa fa-reddit"></i></p>
                         <h4>Reddit</h4>
                         <p>Veja meus interesses no Reddit.</p>
                       </a>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="social text-center">
                        <a href="https://www.youtube.com/c/jadypamella" target="_blank">
                         <p class="rounded-circle bg-danger"><i class="fa fa-youtube"></i></p>
                         <h4>Youtube</h4>
                         <p>Minhas inscrições e playlists no Youtube.</p>
                       </a>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="social text-center">
                        <a href="<?php echo get_contacts('lattes_url'); ?>" target="_blank">
                          <p class="rounded-circle bg-info"><i class="fa fa-id-card"></i></p>
                          <h4>Lattes</h4>
                          <p>Acesse meu currículo Lattes.</p>
                        </a>
                      </div>
                    </div>
                </div>
              </div>   <!-- /carousel-3 -->


          </div>  <!-- /carousel-inner -->
          </div> <!-- /carousel-content -->

          <div class="col-lg-1 text-center"> <!-- carousel-next -->
            <a class="carousel-control-next text-dark" href="#social-carousel" role="button" data-slide="next">
                <span class="fa fa-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
          </div> <!-- /carousel-next -->

        </div> <!-- /carousel -->
     </div> <!-- /#social-carousel -->
  </div> <!-- /row mx-auto -->
</div> <!-- /container -->
</section>

<?php
get_footer();
