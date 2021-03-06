<?php
/**
 * Template Name: Page with Right Sidebar
 *
 */
?>
<?php get_header(); ?>

<div class="col-md-8 container-box-left">

	<?php
	while( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', 'page' );
	endwhile;
	?>

	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	?>

</div>

<?php get_sidebar( "page" ); ?>

<?php get_footer(); ?>
