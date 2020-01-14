<footer class="footer">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'footer',
            'menu'           => 'Menu 1',
            'menu_class'     => 'footerMenu',
            'depth'          => 1,
        )
    );
    ?>
    <div>
        <a class="phone" href="tel:+380982448077">+38 (098) 244 80 77</a>
        <span class="copyright">&copy; 2018 - 2020</span>
    </div>
</footer>
</div>







</body>
<?php wp_footer(); ?>
<script>
	$(document).ready(function(){
        console.log(111);
    });
</script>
</html>