<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */

get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/slide.css"; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/home.css"; ?>">
<div class="content">

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<script>
  			(function() {
    			var cx = '004312032570208933220:iw3tx21ogsg';
    			var gcse = document.createElement('script');
    			gcse.type = 'text/javascript';
    			gcse.async = true;
    			gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
   		    	 '//www.google.com/cse/cse.js?cx=' + cx;
    			var s = document.getElementsByTagName('script')[0];
   		 		s.parentNode.insertBefore(gcse, s);
    			runSearch();
    

  			})();

  			function runSearch(){
					if(jQuery("#gsc-i-id1").val() != undefined){
						<?php 
  							$query = get_search_query(); 
  							echo '
  							jQuery("#gsc-i-id1").val("'. $query .'");
  							jQuery(".gsc-search-button").click();
   	  					'?>
					}else{
						console.log("Não achou.");
						setTimeout(runSearch, 1000);
					}
				}
			</script>
			<gcse:search></gcse:search>
		

		</main><!-- #main -->
	</section><!-- #primary -->

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>


	<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/search.css"; ?>">
</div>