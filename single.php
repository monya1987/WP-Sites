<?php get_header(); ?>
	<div class="product">
		<div class="row">
			<div class="column small-12 medium-6 large-4">
				<div class="image">
					<?php if (get_the_post_thumbnail()) :
						the_post_thumbnail();?>
					<?php endif; ?>
				</div>
			</div>
			<div class="column small-12 medium-6 large-8">
				<h1><?php the_title(); ?></h1>
				<?php
				$post = get_post();
				$content = $post->post_content;
				echo $content;
				$tmpTitle = get_the_title();
				?>
			</div>
		</div>


		<?php the_field('part-of-service'); ?>


	</div>
	<?php include(locate_template('products.php'));?>
<?php get_footer(); ?>
<script>
	$(document).ready(function(){
		$('#menu-item-12').addClass('active');
	})
</script>