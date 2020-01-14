<?php
/**
 * Template Name: Company Page
 *
 * @package WordPress
 * @subpackage Baos
 * @since 2017
 */

?>
<?php get_header(); ?>
<div class="page-descr">
    <h1><?php the_title();?></h1>
    <div>
        <?php
            $post = get_post();
            echo $post->post_content;
        ?>
    </div>
</div>

<div class="company-list">
    <?php
    $posts = get_posts( array(
        'numberposts' => -1,
        'category_name' => 'Компания',
    ) );
    foreach( $posts as $post ) { ?>
        <div class="article">
            <div class="image">
                <?php echo the_post_thumbnail([400, 400])?>
            </div>
            <div class="content">
                <p class="title"><?php echo get_the_title()?></p>

                <?php
                    $postsByTag = get_posts( array(
                        'category_name' => 'ЖК',
                        'numberposts' => -1,
                        'tag'         => mb_strtolower(mb_ereg_replace(' ', '-', get_the_title())),
                    ));
                ?>
                <div class="year">Год создания: <?php the_field('year'); ?></div>

                <div class="site">
                    <a href="<?php the_field('site'); ?>" target="_blank" rel="nofollow"><?php the_field('site'); ?></a>
                </div>

                <?php if (count($postsByTag)) { ?>
                    <div class="cnt"><?php echo count($postsByTag)?> Строек</div>
                    <ul class="building-list">
                        <?php foreach( $postsByTag as $post ) { ?>
                            <li><a href="<?php echo get_permalink()?>"><?php echo get_the_title()?></a></li>
                        <?php } ?>
                    </ul>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    <?php } ?>
</div>

<?php get_footer(); ?>