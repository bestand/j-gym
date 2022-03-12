<?php
get_header();
?>

<main class="main_category">
	<section class="main-section">
		<div class="main-section__title">
			<?php
			$cat_id = get_query_var("cat");
			$category = get_category($cat_id);
			$cat_slug = $category->slug;
			?>
			<h1 class="main-section__title__item_main">カリキュラム： <?php echo $cat_slug; ?></h1>
		</div>
		<div class="main-section__content_category">
		<?php
		$cat_posts = get_posts(array(
			'post_type' => 'post',
			'category_name' => $cat_slug,
			'posts_per_page' => 20,
			'orderby' => 'meta_value',
			'meta_key' => 'item_order',
			'order' => 'ASC'
		));
		global $post;
		if($cat_posts):
			foreach($cat_posts as $post):
				setup_postdata($post);
		?>
			<div class="article-item">
				<div class="order-number"><span><?php echo esc_html(get_post_meta($post->ID, "item_order", true)); ?></span></div>
				<?php
				if( esc_html(get_post_meta($post->ID, "item_premium", true)) === "on"){
				?>
					<div class="badge"><span>会員限定</span></div>
				<?php
				}else{
				?>
					<div class="badge_off"><span></span></div>
				<?php 
				}
				?>
				<div class="article-item__title">
					<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
				</div>
				<div class="article-item__tag">
					<span><?php the_tags("",",",""); ?></span>
				</div>
			</div>
		<?php
			endforeach;
		endif;
		wp_reset_postdata();
		?>
		</div>
	</section>
</main>

<?php
get_sidebar();
get_footer();
?>