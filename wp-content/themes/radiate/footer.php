<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
?>

		</div><!-- .inner-wrap -->
	</div><!-- #content -->

	
</div><!-- #page -->

<?php wp_footer(); ?>


<script type="text/javascript">
		jQuery(document).ready(function (){
			WingsOverLib.initiate();
			WingsOverLib.image_dir = "<?php echo get_bloginfo('template_directory');?>/images/posts";
			Post.single();
		});
</script>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1426081291029459',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
 <script src="<?php echo get_template_directory_uri()."/js/facebook.js"; ?>"></script>

</body>
</html>