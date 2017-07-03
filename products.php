<br><br>
<div class="row head" id="products">
	<div class="column medium-11 medium-offset-1">
		<h2>Andere Produkte</h2>
	</div>
</div>
<div class="products">
<div class="row">
	<div class="column medium-12 small-12">
		<ul class="showcase">
			<?php 
				$args = array(
					'posts_type' => 'post'
				);
				$query = new WP_Query( $args );

				if ( $query->have_posts() ) :
						while ( $query->have_posts() ) :
							$query->the_post(); 
						if ($tmpTitle != get_the_title()) {
				?>
					<li>
						<a href="<?php the_permalink(); ?>">
						<?php if (get_the_post_thumbnail()) :
							the_post_thumbnail();
						endif; ?>


						
					<h3><?php the_title(); ?></h3>
					<p>
						<?php
						$post = get_post();
						$content = $post->post_content;
						echo substr($content, 0, 60);
						?> ...
					</p>
					</a>
					</li>
				<?php 
					}
				endwhile; 
				endif; ?>


			</ul>
		</div>
		</div>
</div>