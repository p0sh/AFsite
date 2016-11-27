	
	<div class="footerangle2">
	<footer>
		<a id="footer-contact" class="CTA" href="/contact">Contact Amelia</a>
		
		<div class="socialmedia">
			<a href="http://www.twitter.com/lonecocoapuff">
				<svg class="icon icon-twitter">
					<use xlink:href="#icon-twitter"></use>
				</svg>
			</a>
			<a href="http://www.facebook.com/amelia.fowler.75">
				<svg class="icon icon-facebook2">
					<use xlink:href="#icon-facebook2"></use>
				</svg>
			</a>
		</div>
		
	</footer>
	</div>
	



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>

	
$(document).ready(function () {

// open/close menu
	$( ".nav__menu-opener" ).click(function() {
	  $( ".icon-menu" ).toggleClass( "visuallyhidden" );
	  $( ".icon-cross" ).toggleClass( "visuallyhidden" );
	  $( ".nav__menu-opener" ).toggleClass( "open" );
	  $( "nav" ).toggleClass( "open" );
	});

// close menu when menu item is clicked
	$( ".nav--main .nav li" ).click(function() {
	  $( ".nav--main .nav" ).removeClass( "open" );
	});
	

/* -end- */
 });
</script>

</body>

</html>