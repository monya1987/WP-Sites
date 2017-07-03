<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage Baos
 * @since 2017
 */

?>

<?php get_header(); ?>
	<div class="product contacts-p">
		<div class="row">
			<div class="column">
			<h1 style="text-align:center"><?php the_title(); ?></h1>
			<br>
			<div class="row">
				<div class="column small-12 medium-6 large-5 large-offset-1">
					<div class="contact-page">
						<div class="phone">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<span><b>Telefon</b><?php echo get_post_meta( get_the_ID(), 'phone', true );?></span>
						</div>
						<div class="home">
							<i class="fa fa-envelope-open-o" aria-hidden="true"></i>
							<span><b>E-mail</b><?php echo get_post_meta( get_the_ID(), 'mail', true );?></span>
						</div>
						<div class="home">
							<i class="fa fa-home" aria-hidden="true"></i>
							<span><b>Adresse</b><?php echo get_post_meta( get_the_ID(), 'addr', true );?></span>
						</div>
					</div>
				</div>
				<div class="column small-12 medium-6 large-5 large-offset-1">
					<?php echo do_shortcode( '[contact-form-7 id="9" title="myContactForm"]' ); ?>		
				</div>
			</div>

			</div>
		</div>
	</div>
<?php get_footer(); ?>