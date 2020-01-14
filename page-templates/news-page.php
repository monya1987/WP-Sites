<?php
/**
 * Template Name: News Page
 *
 * @package WordPress
 * @subpackage Baos
 * @since 2017
 */

?>
<?php get_header(); ?>

<h1>Новости</h1>

<div class="news">
<?php
$posts = get_posts( array(
    'numberposts' => 5,
    'category'    => 0,
    'category_name' => 'Новости',
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true,
) );
foreach( $posts as $post ) { ?>
<div class="article">
    <div class="image">
        <?php echo the_post_thumbnail([400, 400])?>
        <div class="date"><?php echo get_the_date()?></div>
    </div>
    <div class="content">
        <p class="title"><?php echo get_the_title()?></p>
        <div class="descr">
<!--            --><?php
                $content = $post->post_content;
//                $isLongContent = strlen($content) > 1000;
//                if ($isLongContent) {
//                    echo mb_substr($content, 0, 1000, "utf-8");
//                } else {
//                    echo $content;
//                }
//            ?>
            <?php echo $content; ?>

        </div>
<!--        --><?php //if ($isLongContent) { ?>
<!--            <a href="--><?php //echo $post->guid?><!--" class="detailed">Подробнее ...</a>-->
<!--        --><?php //} ?>
    </div>
</div>
<?php } ?>
</div>


<?php get_footer(); ?>