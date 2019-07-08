<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main top" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			while ( have_posts() ) : the_post(); 
			?>
			<a href="<?php echo the_permalink(); ?>">
				<div class="top-list-area">
					<div class="top-list-title"><?php echo the_title();?></div>
					<div class="date">投稿日：<?php the_date(); ?></div>
					<p><?php echo wp_trim_words( get_the_content(), 120, '...' ); ?></p>
				</div>
			</a>
			<?php
			endwhile;

			// Previous/next page navigation.
			//the_posts_pagination( array(
			//	'prev_text'          => __( 'Previous page', 'twentysixteen' ),
			//	'next_text'          => __( 'Next page', 'twentysixteen' ),
			//	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			//) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
