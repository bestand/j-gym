<?php
get_header();
?>

<main class="main_curriculum">
	<section class="main-section">
		<div class="main-section__title">
			<h1 class="main-section__title__item_main">カリキュラム</h1>
			<h3 class="main-section__title__item_sub">Curriculum</h3>
		</div>
		<div class="main-section__content_curriculum">
			<?php
			$args = array(
				'parent' => 0,
				'orderby' => 'term_order',
				'order' => 'ASC'
			);
			$categories = get_categories( $args );
			?>

			<?php foreach( $categories as $category ) : ?>
				<li>
					<a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
				</li>
			<?php endforeach; ?>
		</div>
	</section>
</main>

<?php
get_sidebar();
get_footer();
?>