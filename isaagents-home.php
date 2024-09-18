<?php
/**
 * Template Name: ISA Commons Home Page
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header(); ?>

	<div class="site-content" style="width:100%">
		<div id="content" role="main">

			<div>

				<div class="cf"></div>

				<?php echo do_shortcode( '[projects]' ); ?>

				<div class="cf"></div>

			</div>


			<div class="cf"></div>
			<br/>
		</div>
		<!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>