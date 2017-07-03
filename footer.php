<footer class="row">
		<div class="column medium-12 small-12 text-center">
				<address class="">
						<span class="phone">
						<i class="fa fa-mobile" aria-hidden="true"></i>
						+4915163906006</span>
						<span class="addres">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						Lieberweg 4  / München 80937</span>
						<span class="email">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						info@baosholz.de</span>
				</address>
		</div>
	</footer>

<div class="reveal-overlay">
<div class="reveal">
	  <h3>Individuelles Angebot</h3>
	  <p>Für Ihr individuelles Angebot kontaktieren Sie uns bitte unter</p>
	  <p><strong>Tel:</strong> +4915163906006</p>
	  <p><strong>E-Mail an:</strong> <a href="mailto:info@baosholz.de">info@baosholz.de</a></p>
	  <button class="close-button" data-close aria-label="Close modal" type="button">
	    <span aria-hidden="true">&times;</span>
	  </button>
</div>
</div>
</body>
<?php wp_footer(); ?>
<script>
	$(document).scroll(function(){
		if ($(window).width() > 640) {
			if ($(document).scrollTop() > 0) {
				$('body').addClass('small-header');
			} else {
				$('body').removeClass('small-header');
			}
		}
	});
	$(document).ready(function(){
		var offsetFix = 60;
		if ($('body').hasClass('small-header')) {
			var offsetFix = 12;
		}
		if(window.location.hash == '#products') {
			$('html, body').animate({
		        scrollTop: $("#products").offset().top - offsetFix
		    }, 2000);
			$('#menu-item-12').addClass('active');
			$('#menu-primary-menu li').removeClass('current-menu-item')
		}
		$('.openModal').on('click', function(event) {
			event.preventDefault();
			$('.reveal-overlay, .reveal').show();
		});
		$('.close-button').on('click', function(event) {
			event.preventDefault();
			$('.reveal-overlay, .reveal').hide();
		});
		$('#menu-item-12').on('click', function(event) {
			// event.preventDefault();
			$('html, body').animate({
		        scrollTop: $("#products").offset().top - offsetFix
		    }, 2000);
			$(this).addClass('active');
			$('#menu-primary-menu li').removeClass('current-menu-item')
		});
	});
</script>
</html>