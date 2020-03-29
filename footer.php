<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Jady_Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>


<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="<?php echo get_contacts('email_url'); ?>" title="<?php echo get_contacts('email_description'); ?>" target="_blank" class="link-tip"><i class="fa <?php echo get_contacts('email_icon'); ?>"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo get_contacts('instagram_url'); ?>" title="<?php echo get_contacts('instagram_title'); ?>" target="_blank" class="link-tip"><i class="fa <?php echo get_contacts('instagram_icon'); ?>"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo get_contacts('facebook_url'); ?>" title="<?php echo get_contacts('facebook_title'); ?>" target="_blank" class="link-tip"><i class="fa <?php echo get_contacts('facebook_icon'); ?>"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo get_contacts('linkedin_url'); ?>" title="<?php echo get_contacts('linkedin_title'); ?>" target="_blank" class="link-tip"><i class="fa <?php echo get_contacts('linkedin_icon'); ?>"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo get_contacts('twitter_url'); ?>" title="<?php echo get_contacts('twitter_title'); ?>" target="_blank" class="link-tip"><i class="fa <?php echo get_contacts('twitter_icon'); ?>"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 p-4">
              <p>Feito com <i class="fa fa-heart text-danger" aria-hidden="true"></i> por <a href="https://www.jadypamella.com.br" target="_blank" >Jady Pâmella</a><br/>&copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<?php wp_footer(); ?>

</body>

</html>
