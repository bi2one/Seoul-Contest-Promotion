<?php
/**
 * The Promotion Footer for our theme static page.
 *
 * @package ss_contest
 * @subpackage SSC_Twenty_Ten
 */
?>
</div> <!-- #main -->
<footer style="margin-top: 100px;">
	<h4 class="sprite sprite-txt_11" style="margin:auto;"></h4>
	<section id="facebook-comment-area">
		<div class="fb-comments" data-href="http://wikiseoul.com/" data-num-posts="20" data-width="862"></div>
	</section>
</footer>
<?php if ( $_GET['register'] != 'true' ) { ?>
<script>
$(document).ready(function() {
    $('#menu-list li a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
/*$(window).scroll(function() {
    var top = 0;
    top = $(window).scrollTop();
    if ( top <= 481 ) {
        $('#menu-list li').removeClass("current");
        $('#what').addClass("current");
    } else if ( top <= 1272 ) {
        $('#menu-list li').removeClass("current");
        $('#when').addClass("current");
    } else if ( top <= 1705 ) {
        $('#menu-list li').removeClass("current");
        $('#how').addClass("current");
    } else {
        $('#menu-list li').removeClass("current");
        $('#together').addClass("current");
    }
}); */

</script>
<?php } ?>
<?php wp_footer(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34561470-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
