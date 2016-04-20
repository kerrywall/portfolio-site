		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="content">
				<div class="social">
					<a href="http://twitter.com/kerrywall" target="_blank"><span class="fa fa-twitter"></span></a>
					<a href="http://github.com/kerrywall" target="_blank"><span class="fa fa-github"></span></a>
					<a href="http://ca.linkedin.com/pub/kerry-wall/4/430/1bb" target="_blank"><span class="fa fa-linkedin"></span></a>
					<a href="https://plus.google.com/+KerryWall" target="_blank"><span class="fa fa-google-plus"></span></a>
				</div>
			</div>
			<div class="site-info">
				<p>&copy; 2014 | developed by <a href="http://kerrywall.com">Kerry</a> | powered by <a href="http://wordpress.org">wordpress</a> | designed by <a href="http://themeforest.net/user/GokhanKara" target="_blank">Gokhan Kara</a></p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<?php if ( is_front_page() ) : ?>
			<script>

				var $about = $('.about');

					$(window).on('scroll', function () {
		           var scroll = $(window).scrollTop();
		           var aboutTop = $about.offset().top;

		             if (scroll > aboutTop){
		                $('.fixed').fadeIn('slow');
		           } else  {
		               $('.fixed').fadeOut('slow');
		           }
		       });
			</script>
	<?php endif ?>

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37016700-2', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>