<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main top blog-index-main" role="main">
			<div class="inner-block">
			<?php
			while ( have_posts() ) : the_post(); 
			?>
				<a href="<?php echo the_permalink(); ?>" class="box">
					
					<div class="top-list-area" >
						<div class="top-list-thumbnail">
							<!--<img src="http://34.213.180.39/blog/wp-content/uploads/2019/06/logo_wordpress_2000_1080_.png">-->
						</div>
						<div  class="top-list-title-area">
							<div class="top-list-title"><?php echo the_title();?></div>
							<div class="date"><?php the_date(); ?></div>
							<!--<p><?php //echo wp_trim_words( get_the_content(), 120, '...' ); ?></p>-->
						</div>
						<div class="top-list-title-area-sp">
							<h3><?php echo the_title();?></h3>
							<div class="date"><?php the_time('Y年m月d日'); ?></div>
						</div>
					</div>
				</a>
			<?php
			endwhile;

			// Previous/next page navigation.
			/*
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );
			*/

		// If no content, include the "No posts found" template.
		//else :
			//get_template_part( 'template-parts/content', 'none' );

		//endif;
		?>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
