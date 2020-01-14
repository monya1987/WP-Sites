<?php get_header();?>
    <main class="main">


        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="index-page-block">
                        <h1 class="h1">Новостройки Одессы от застройщиков</h1>
                        <p>Подобрать новострой без комиссии</p>
                    </div>
                    <div class="fast-search-block">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer',
                                'menu'           => 'Menu 2',
                                'menu_class'     => 'topMenu',
                                'depth'          => 1,
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>



        <div class="index-promo">
            <p class="h1">Работая с нами вы получаете:</p>
            <div class="container">
                <div class="row justify-content-center row-cols-1">
                    <div class="col col-sm-12 col-md-4 col-lg-4">
                        <div class="box first">
                            <p class="descr">Мы Работаем бесплатно для покупателя</p>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-4 col-lg-4">
                        <div class="box second">
                            <p class="descr">Тщательно отбираем базу объектов, проверяем документы на юридическую чистоту.</p>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-4 col-lg-4">
                        <div class="box third">
                            <p class="descr">Экономим ваше время: берём всю рутину на себя, вам не нужно тратить время, чтобы разбираться.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>










<div class="">
    <p class="h1">Последние предложения на рынке:</p>
    <div class="container">
        <div class="row justify-content-center row-cols-1">
            <?php
            $newPosts = get_posts(array('author' => 99, 'posts_per_page' => 4, 'orderby' => 'rand', 'order'    => 'ASC'));
            foreach( $newPosts as $post ) { ?>
            <div class="col col-sm-12 col-md-6 col-lg-3">
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
            </div>
            <?php } ?>

        <p><a href="/новостройки/">Все новостройки Одессы ...</a></p>
        </div>
    </div>
</div>



    <div class="index-stat">
        <p class="h1">У нас вы найдете:</p>
        <div class="container">
            <div class="row justify-content-center row-cols-1">
                <div class="col col-sm-12 col-md-4 col-lg-4">
                    <div class="box first">
                        <p class="descr">1225 Новостроек</p>
                    </div>
                </div>
                <div class="col col-sm-12 col-md-4 col-lg-4">
                    <div class="box second">
                        <p class="descr">618 застройщиков на сайте</p>
                    </div>
                </div>
                <div class="col col-sm-12 col-md-4 col-lg-4">
                    <div class="box third">
                        <p class="descr">500+ довольных клиентов</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="company-list-index">
        <p class="h1">Застройщики Одессы:</p>
        <div class="container">
            <div class="row justify-content-center row-cols-1">
                <?php
                $newPosts = get_posts(array('category_name' => 'Компания', 'orderby' => 'rand', 'order'    => 'ASC'));
                foreach( $newPosts as $post ) {
                ?>
                    <div class="col col-sm-12 col-md-4 col-lg-4">
                        <div class="box">
                            <?php echo the_post_thumbnail([305, 305])?>
                            <div class="descr">
                                <span><?php echo get_the_title()?></span>
                                <p><?php the_field('year'); ?></p>
                                <p><?php the_field('site'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <p><a href="/застройщики/">Все застройщики Одессы ...</a></p>
                </div>
            </div>
        </div>


    <div class="reviews">
        <p class="h1">Наши довольные клиенты</p>
        <div class="container">
            <div class="row justify-content-center row-cols-1">
                <div class="col col-sm-12 col-md-6 col-lg-3">
                    <div class="box">
                        <img src="/wp-content/uploads/2020/01/review1.jpg" alt="">
                        <div class="descr">
                            <span class="name">Людмила Дмитриевна</span>
                            <span class="house">ЖК Альтаир</span>
                            <p>Работой специалиста очень довольна. Услуга оказана в полном объеме. Внимание к клиенту и профессионализм на высшем уровне.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-12 col-md-6 col-lg-3">
                    <div class="box">
                        <img src="/wp-content/uploads/2020/01/review3.jpg" alt="">
                        <div class="descr">
                            <span class="name">Светлана Афанасьевна</span>
                            <span class="house">ЖК Удобный</span>
                            <p>Спасибо огромное за помощь, за уверенность, за профессионализм, за консультации по любым возникшим вопросам, за советы и рекомендации, за пунктуальность, за внимание, надёжность ответственность и просто за душевное приятное общение !</p>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-12 col-md-6 col-lg-3">
                    <div class="box">
                        <img src="/wp-content/uploads/2020/01/review4.jpg" alt="">
                        <div class="descr">
                            <span class="name">Алла Юрьевна</span>
                            <span class="house">ЖК Мариинский</span>
                            <p>Светлана Сергеевна Пестерева - очень грамотный и приятный специалист.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-12 col-md-6 col-lg-3">
                    <div class="box">
                        <img src="/wp-content/uploads/2020/01/review2.jpg" alt="">
                        <div class="descr">
                            <span class="name">Людмила Анатольевна</span>
                            <span class="house">ЖК Олимпийкий</span>
                            <p>Профессионализм, доброжелательность, оперативное реагирование на все вопросы, возникающие проблемы, огромная помощь во взаимодействии с банками.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>