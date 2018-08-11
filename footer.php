<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package monoport
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'monoport_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<div class="footer-info">
				    <p>&copy; <?php echo the_time('Y'); ?> All Rights Reserved</p>
				    <ul class="ul-none ul-horizontal">
				        <li><a href="#services">Services</a></li>
				        <li><a href="#showcase">Showcase</a></li>
				        <li><a href="#contact">Contact</a></li>
				    </ul>
				</div>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->
	
<!--	<div class="footer-gradient"></div>-->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

