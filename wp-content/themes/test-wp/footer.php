<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test-wp
 */

?>
<!-- #page -->

<!-- FOOTER SECTION -->
<footer>
    <div class="container">
        <div class="row">
            <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.8s">
                <?php   dynamic_sidebar("footer_sidebar_copyright");?>
                <?php   dynamic_sidebar("footer_sidebar_socials");?>
            </div>
        </div>
    </div>
</footer>

<!-- SCRIPTS -->
<script src="<?php bloginfo("template_directory");?>/js/jquery.js"></script>
<script src="<?php bloginfo("template_directory");?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo("template_directory");?>/js/jquery.parallax.js"></script>
<script src="<?php bloginfo("template_directory");?>/js/smoothscroll.js"></script>
<script src="<?php bloginfo("template_directory");?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php bloginfo("template_directory");?>/js/magnific-popup-options.js"></script>
<script src="<?php bloginfo("template_directory");?>/js/wow.min.js"></script>
<script src="<?php bloginfo("template_directory");?>/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>
