<?php
/**
 * The template used for displaying hero content
 *
 * @package Foodoholic
 */
?>

<?php

if ( $id = get_theme_mod( 'foodoholic_hero_content' ) ) {
	$args['page_id'] = absint( $id );
}

// If $args is empty return false
if ( empty( $args ) ) {
	return;
}

// Create a new WP_Query using the argument previously created
$hero_query = new WP_Query( $args );
if ( $hero_query->have_posts() ) :
	while ( $hero_query->have_posts() ) :
		$hero_query->the_post();
		?>
		<div id="hero-content" class="hero-content-wrapper section content-aligned-left boxed">
			<div class="wrapper">
				<div class="section-content-wrap">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="featured-content-image" style="background-image: url( <?php the_post_thumbnail_url( 'foodoholic-hero-content' ); ?> );">
								<a class="screen-reader-text"> href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
							</div>
							<div class="entry-container">
						<?php else : ?>
							<div class="entry-container full-width">
						<?php endif; ?>

							<?php
								$title = '';

								$title = get_the_title();
								
							?>

							<?php if ( $title ) : ?>
								<header class="entry-header">
									<h2 class="entry-title ">
										<?php if ( $title ) : ?>
											<?php echo esc_html( $title ); ?>
										<?php endif; ?>
									</h2>
								</header><!-- .entry-header -->
							<?php endif; ?>

							<div class="entry-content">
								<?php
									$show_content = get_theme_mod( 'foodoholic_hero_content_show', 'full-content' );

									if ( 'full-content' === $show_content ) {
										the_content();
									} elseif ( 'excerpt' === $show_content ) {
										echo '<p>' . get_the_excerpt() . '</p>';
									}

									wp_link_pages( array(
										'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'foodoholic' ) . '</span>',
										'after'       => '</div>',
										'link_before' => '<span class="page-number">',
										'link_after'  => '</span>',
										'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'foodoholic' ) . ' </span>%',
										'separator'   => '<span class="screen-reader-text">, </span>',
									) );
								?>
							</div><!-- .entry-content -->

							<?php if ( get_edit_post_link() ) : ?>
								<footer class="entry-footer">
									<?php
										edit_post_link(
											sprintf(
												/* translators: %s: Name of current post */
												esc_html__( 'Edit %s', 'foodoholic' ),
												the_title( '<span class="screen-reader-text">"', '"</span>', false )
											),
											'<span class="edit-link">',
											'</span>'
										);
									?>
								</footer><!-- .entry-footer -->
							<?php endif; ?>
						</div><!-- .entry-container -->
					</article><!-- #post-## -->
				</div><!-- .section-content-wrap -->
			</div> <!-- Wrapper -->
		</div> <!-- hero-content-wrapper -->
	<?php
	endwhile;

	wp_reset_postdata();
endif;
