<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage Baos
 * @since 2017
 */

?>

<?php get_header(); ?>
	<div class="slide row">	
		<div class="column small-12 medium-6 large-5 large-offset-1">
			<?php
					$post = get_post();
					$content = $post->post_content;
					echo $content;
					$tmpTitle = get_the_title();
			?>
		</div>
		<div class="column small-12 medium-6 large-5 large-offset-1">
				<?php echo do_shortcode( '[contact-form-7 id="9" title="myContactForm"]' ); ?>
			</div>
		</div>
	</div>
	<div class="about">
		<div class="row align-self-middle">
			<div class="column medium-4 large-4 small-12">
				<h2><?php echo get_post_meta( get_the_ID(), 'title1', true );?></h2>
				<hr class="mod">
				<p><?php echo get_post_meta( get_the_ID(), 'content1', true );?></p>
			</div>
			<div class="column medium-4 large-4 small-12">
				<h2><?php echo get_post_meta( get_the_ID(), 'title2', true );?></h2>
				<hr class="mod">
				<p class=""><?php echo get_post_meta( get_the_ID(), 'content2', true );?></p>
			</div>
			<div class="column medium-4 large-4 small-12">
				<h2><?php echo get_post_meta( get_the_ID(), 'title3', true );?></h2>
				<hr class="mod">
				<p class=""><?php echo get_post_meta( get_the_ID(), 'content3', true );?></p>
			</div>
		</div>
	</div>
	<div class="products" id="products">
		<div class="row head">
			<div class="column medium-11 medium-offset-1">
				<h2>PRODUKTE</h2>
			</div>
		</div>	
		<div class="row">
			<div class="column medium-12 small-12">
				<ul class="showcase">
					<?php 
					$args = array('posts_type' => 'post');
					$query = new WP_Query( $args );
					if ( $query->have_posts() ) :
							while ( $query->have_posts() ) :
								$query->the_post(); ?>
									<li>
										<a href="<?php the_permalink(); ?>">
											<?php if (get_the_post_thumbnail()) :
												  	the_post_thumbnail();
												  endif;
											?>
											<h3><?php the_title();?></h3>
											<p>
												<?php
												$post = get_post();
												$content = $post->post_content;
												echo substr($content, 0, 60);
												?> ...
											</p>
										</a>
									</li>
					<?php endwhile; 
					endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="contacts">
	<br><br>
	<div class="row">
		<div class="column medium-12">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.262023391457!2d11.571659415340383!3d48.201568754681325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479e76a7420083a3%3A0x7d7f8d7b7f241bb0!2zTGllYmVyd2VnIDQsIDgwOTM3IE3DvG5jaGVuLCDQk9C10YDQvNCw0L3QuNGP!5e0!3m2!1sru!2sua!4v1494501919992" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	</div>
	
	<?php get_footer(); ?>