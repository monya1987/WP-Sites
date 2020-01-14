<?php get_header();?>

<h1><?php the_title();?></h1>
<?php
$post = get_post();
echo $post->post_content;
?>
<?php echo the_post_thumbnail([400, 400])?>




<p><?php the_field('developer'); ?></p>
<p class="address">Одесса, <?php the_field('area'); ?>, <?php the_field('address'); ?></p>

<ul>
    <li>студии от м2 <?php the_field('studios'); ?></li>
    <li>1 комнатные от м2 <?php the_field('1room'); ?></li>
    <li>2 комнатные от м2 <?php the_field('2room'); ?></li>
    <li>3 комнатные от м2 <?php the_field('3room'); ?></li>
</ul>

<p class="cnt_aparts">Количество квартир <?php the_field('cnt_aparts'); ?></p>
<p class="price">Цена <?php the_field('price'); ?></p>


            Класс <?php the_field('class'); ?><br>
            Количество домов <?php the_field('cnt_houses'); ?><br>
            Этажность <?php the_field('floors'); ?><br>
            Технология строительства <?php the_field('technologies'); ?><br>
            Стены <?php the_field('walls'); ?><br>
            Утепление <?php the_field('warming'); ?><br>
            Отопление <?php the_field('heating'); ?><br>
            Потолки <?php the_field('ceiling'); ?><br>
            Состояние квартиры <?php the_field('сondition'); ?><br>
            Закрытая территория <?php the_field('closed_territory'); ?><br>
            Паркинг <?php the_field('parking'); ?><br>




<?php get_footer(); ?>




<?php //get_header(); ?>
<!--	<div class="product">-->
<!--		<div class="row">-->
<!--			<div class="column small-12 medium-6 large-4">-->
<!--				<div class="image">-->
<!--					--><?php //if (get_the_post_thumbnail()) :
//						the_post_thumbnail();?>
<!--					--><?php //endif; ?>
<!--				</div>-->
<!--			</div>-->
<!--			<div class="column small-12 medium-6 large-8">-->
<!--				<h1>--><?php //the_title(); ?><!--</h1>-->
<!--				--><?php
//				$post = get_post();
//				$content = $post->post_content;
//				echo $content;
//				$tmpTitle = get_the_title();
//				?>
<!--			</div>-->
<!--		</div>-->
<!---->
<!---->
<!---->
<!---->
<!--	</div>-->
<!--	--><?php //include(locate_template('products.php'));?>
<?php //get_footer(); ?>
<!--<script>-->
<!--	$(document).ready(function(){-->
<!--		$('#menu-item-12').addClass('active');-->
<!--	})-->
<!--</script>-->