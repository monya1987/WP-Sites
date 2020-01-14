<?php
/**
 * Template Name: List Page
 *
 * @package WordPress
 * @subpackage Baos
 * @since 2017
 */

?>

<?php get_header(); ?>
<div class="page-descr">
    <h1>База новостроек от застройщиков Одессы и Одесской области</h1>
</div>


<div class="building-list">
<?php
$area = get_field('area');
$posts = get_posts( array(
    'numberposts'   => -1,
    'category_name' => 'ЖК',
    'tag'           => $area,
));
foreach( $posts as $post ) { ?>
    <div class="article" onclick="location.href='<?php echo get_permalink()?>';">
        <div class="image">
            <?php echo the_post_thumbnail([305, 305])?>
            <p class="date">Начало строительства <?php the_field('start_date'); ?></p>
        </div>
        <div class="content">
            <p class="developer"><?php the_field('developer'); ?></p>
            <p class="title"><?php echo get_the_title()?></p>
            <p class="address">Одесса, <?php the_field('area'); ?>, <?php the_field('address'); ?></p>
            <ul class="list">
                <li><span>студии от</span><?php the_field('studios'); ?> м2 </li>
                <li><span>1 комнатные от </span><?php the_field('1room'); ?> м2 </li>
                <li><span>2 комнатные от </span><?php the_field('2room'); ?> м2 </li>
                <li><span>3 комнатные от </span><?php the_field('3room'); ?> м2 </li>
            </ul>
            <p class="cnt_aparts">Всего квартир - <strong><?php the_field('cnt_aparts'); ?></strong></p>
            <p class="price">Цена <span><?php the_field('price'); ?></span></p>
            <a href="<?php echo get_permalink()?>" class="more">Подробнее ...</a>
        </div>
    </div>
<?php } ?>
</div>

<?php get_footer(); ?>