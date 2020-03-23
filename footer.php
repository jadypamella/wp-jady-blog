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
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
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
            <div class="col-md-4">
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<?php wp_footer(); ?>

</body>

</html>
