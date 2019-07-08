<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$cat = get_the_category();

get_header(); ?>


<div class="breadcrumb">
<ol>
	<li><a href="/"><span>HOME</a></li>
	<li><a href="/blog/">BLOG</a></li>
	<li><?php the_title(); ?></li>
</ol>
</div>
<div id="primary" class="content-area">
	<main id="main" class="site-main top blog-detail-main" role="main">

		<?php
		while ( have_posts() ) : the_post();
		?>

		<article id="post-<?php the_ID(); ?> detail-article-block">
			<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div>
			<?php
			foreach ($cat as $key => $categories) {
				?>
 				<!--<div class="categories-name"><?php echo $categories->name; ?></div>-->
 				<?php
			}
			?>
			</div>
			<!--
			<div class="top-list-thumbnail">
				<img src="http://34.213.180.39/blog/wp-content/uploads/2019/06/logo_wordpress_2000_1080_.png">
			</div>
			-->
			</header><!-- .entry-header -->

			<div class="entry-content">
		<?php

					the_content();


		?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->


		<?php

		if ( is_singular( 'post' ) ) {
			the_post_navigation( array(
				'prev_text'           => '<div class="prev_article"><div class="nav_article">前の記事</div><div class="navv_title">%title</div></div>',
				'next_text'           => '<div class="next_article"><div class="nav_article">次の記事</div><div class="nav_title">%title</div></div>',
  				) );
		}

			// End of the loop.
		endwhile;
		?>


	</main><!-- .site-main -->

	<div class="entry-content related_article widget widget_related">
		<h2 class="widget-title">関連記事</h2>
		<ul>

		<?php
		//関連記事取得
		$arg = array(
             'posts_per_page' => 4, // 表示する件数
             //'orderby' => 'date', // 日付でソート
             //'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
             'category_name' => 'php'// 表示したいカテゴリーのスラッグを指定
         );

		$posts = get_posts( $arg );

		foreach ( $posts as $post ) :
		?>

			<li><a href="<?php echo the_permalink(); ?>"><?php echo $post->post_title; ?></a></li>
		<?php endforeach; ?>

		</ul>
	</div>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
