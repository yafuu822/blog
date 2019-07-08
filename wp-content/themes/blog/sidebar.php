<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


<?php

//最新記事データ取得
$args = array(
	'post_type'   => array('post'),	
	'order' => 'date',
	'posts_per_page' => 3, //表示する件数 
);
$the_query = new WP_Query( $args );


//アーカイブデータ取得
$args_archives = array(
	'type'            => 'monthly',
	'limit'           => '',
	'format'          => 'html', 
	'before'          => '',
	'after'           => '',
	'show_post_count' => true,
	'echo'            => 1,
	'order'           => 'DESC',
	'post_type'       => 'post'
);

//タグデータ取得
$args_tags  = array(
	'smallest' 					=> 14,//8 
	'largest'                   => 18,//12
	'unit'                      => 'px',//pt 
	'number'                    => 45,  
	'format'                    => 'list',//flat
	'separator'                 => "\n",
	'orderby'                   => 'name', 
	'order'                     => 'ASC',
	'exclude'                   => null, 
	'include'                   => null, 
	'topic_count_text_callback' => default_topic_count_text,
	'link'                      => 'view', 
	'taxonomy'                  => 'post_tag', 
	'echo'                      => true,
	'child_of'                  => null, // 注を参照
);

//カテゴリーデータ取得
$categories = get_the_category();
//echo "<pre>";
//var_dump($categories);
//echo "</pre>";



//var_dump($the_query);
if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<!--<aside id="secondary" class="sidebar widget-area" role="complementary">-->
		<?php //dynamic_sidebar( 'sidebar-1' ); ?>
	<!--</aside>--><!-- .sidebar .widget-area -->
<?php endif; ?>

<?php //the_tags('<ul><li>','</li><li>','</li></ul>'); ?>


<?php 

?>


<aside id="secondary" class="sidebar widget-area" role="complementary">

	<section id="search-2" class="widget widget_search">
		<form role="search" method="get" class="search-form" action="http://34.213.180.39/blog/">
			<label>
				<span class="screen-reader-text">検索対象:</span>
				<input type="search" class="search-field" placeholder="検索 &hellip;" value="" name="s" />
			</label>
			<button type="submit" class="search-submit"><span class="screen-reader-text">検索</span></button>
		</form>
	</section>

<?php if ( $the_query->have_posts() ) : ?>
<section id="recent-posts-2" class="widget widget_recent_entries">
		<h2 class="widget-title">最近の投稿</h2>
		<ul>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<?php
	//echo "<pre>";
	//var_dump($the_query->posts[0]->ID);
	//echo "</pre>";
	?>

			<li>

				<a href="<?php the_permalink() ?>" >
					<div class="recent_article_thumbnail" style="border:1px #dcdcdc solid;">
						<img src="http://34.213.180.39/blog/wp-content/uploads/2019/05/logo_wordpress.png">
					</div>
					<div class="recet_article_title_area">
						<p class="recent_article_title"><?php the_title(); ?></p>
					</div>
				</a>
			</li>
	<?php endwhile; ?>
			</ul>
	</section>

	<?php wp_reset_postdata(); ?>

<?php endif; ?>		

	

	<section id="archives-2" class="widget widget_archive">
		<h2 class="widget-title">アーカイブ</h2>
		<ul>
			<?php //$args_archives; 
				wp_get_archives( $args_archives );
			?>		
		</ul>
	</section>
<?php

//foreach ($categories as $key => $cat) {
	//echo $cat->term_id;
	//echo $cat->name;
	//echo "<br>";
	//var_dump($cat);
//}

?>
	<section id="categories-2" class="widget widget_categories">
		<h2 class="widget-title">カテゴリー</h2>
		<ul>
<?php
	foreach ($categories as $key => $cat) {
		//echo $cat->term_id;
		//echo $cat->name;
		//echo "<br>";
		//var_dump($cat);
//}
?>
			<li class="cat-item cat-item-<?php echo $cat->term_id; ?>"><a href="http://34.213.180.39/blog/category/<?php echo $cat->name; ?>/" ><?php $cat->name;?></a></li>
<?php
}
?>
			<li class="cat-item cat-item-5"><a href="http://34.213.180.39/blog/category/aws/" >AWS</a></li>
			<li class="cat-item cat-item-3"><a href="http://34.213.180.39/blog/category/ec-cube/" >EC-CUBE</a></li>
			<li class="cat-item cat-item-6"><a href="http://34.213.180.39/blog/category/php/" >PHP</a></li>
			<li class="cat-item cat-item-7"><a href="http://34.213.180.39/blog/category/programming/" >programming</a></li>
			<li class="cat-item cat-item-8"><a href="http://34.213.180.39/blog/category/ruby/" >Ruby</a></li>
			<li class="cat-item cat-item-4"><a href="http://34.213.180.39/blog/category/wordpress/" >WordPress</a></li>
		</ul>
	</section>

	<section id="tag_cloud-2" class="widget widget_tag_cloud">
		<h2 class="widget-title">タグ</h2>
		<div class="tagcloud">
			<!--<ul class='wp-tag-cloud' role='list'>
				<li style="font-size: 1em;">-->
			<?php 
wp_tag_cloud( $args_tags );
			?>
				<!--</li
				<li>
					<a href="http://34.213.180.39/blog/tag/wordpress/" class="tag-cloud-link tag-link-15 tag-link-position-1" style="font-size: 1em;">WordPress
					</a>
				</li>
			</ul>-->
		</div>

</aside><!-- .sidebar .widget-area -->