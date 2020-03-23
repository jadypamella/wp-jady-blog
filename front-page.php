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

<!-- Team -->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Um pouco de mim</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/photo.jpg" alt="Jady Pâmella">
                    <h4>Jady Pâmella</h4>
                    <p class="text-muted">Analista de TI</p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="<?php echo get_contacts('instagram_url'); ?>" title="<?php echo get_contacts('instagram_title'); ?>" target="_blank"><i class="fa <?php echo get_contacts('instagram_icon'); ?>"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php echo get_contacts('facebook_url'); ?>" title="<?php echo get_contacts('facebook_title'); ?>" target="_blank"><i class="fa <?php echo get_contacts('facebook_icon'); ?>"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php echo get_contacts('linkedin_url'); ?>" title="<?php echo get_contacts('linkedin_title'); ?>" target="_blank"><i class="fa <?php echo get_contacts('linkedin_icon'); ?>"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <p class="large text-muted">Durante muitos anos fui webdesigner e webdeveloper freelancer, mas não faço mais trabalhos autônomos hoje em dia. O mundo corporativo me conquistou e agora dedico todo o meu tempo profissional a ele.</p>
                <p class="large text-muted">Gosto muito de aprender e estou investindo mais na minha carreira acadêmica.<br/>Atualmente, faço mestrado em Inteligência Artificial na UnB - Universidade de Brasília.</p>
                <p><a href="<?php echo get_contacts('lattes_url'); ?>" id="btn-lattes" class="btn btn-xl" target="_blank">Currículo Lattes</a></p>
            </div>
        </div>
    </div>
</section>

<!-- About -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">O que eu gosto de fazer</h2>
                <h3 class="section-subheading text-muted">Veja a seguir algumas das minhas habilidades e hobbies:</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/about/1.jpg" alt="Tecnologia">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Tecnologia</h4>
                                <h4 class="subheading">Informação e Inovação</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">A forma como a tecnologia muda o nosso meio sempre me fascinou. Por isso, escolhi esse tema para minha carreira <br/>profissional e acadêmica.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/about/2.jpg" alt="Pesquisa">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Pesquisa</h4>
                                <h4 class="subheading">Conhecimento e Sabedoria</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Naturalmente voltadas à tecnologia, possuo muitas ideias e projetos
                                aguardando para, quem sabe um dia, tornarem o mundo mais simples, justo e organizado.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/about/3.jpg" alt="Esportes">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Esportes</h4>
                                <h4 class="subheading">Saúde e Motivação</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Desde cedo aprendi o valor das atividades físicas para a vida. Afinal, "para treinar sua mente você também deve <br/>treinar seu corpo".</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/about/4.jpg" alt="Música">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Música</h4>
                                <h4 class="subheading">Foco e Arte</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">A música sempre me acompanhou e intrigou com toda a sua carga cultural e emocional. Ultimamente, resolvi dedicar minhas horas livres para estudá-la.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/about/5.jpg" alt="Esportes">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Filmes</h4>
                                <h4 class="subheading">Séries e Animações</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Assistir a histórias, casos e notícias me permite descansar, ter novas ideias e aprender a viver a vida a partir das mais inusitadas experiências.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image final">
                            <h4><a href="<?php echo get_contacts('email_url'); ?>" title="<?php echo get_contacts('email_title'); ?>">
                              Obrigada
                                <br>pela
                                <br>visita!</a></h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
