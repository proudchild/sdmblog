<?php
/**
 * The template used for displaying page content in single.php
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
?>

<div id="wingsPersonalOverlibBack"></div>
<div id="wingsPersonalOverlibWindow">
	<div class="personal-option" id="wingsPersonalOverlibFacebookShare">Facebook</div>
	<div class="personal-option"  id="wingsPersonalOverlibTwitterShare">Twitter</div>
	<div class="personal-option"  id="wingsPersonalOverlibEmailShare">Email</div>
	<div class="personal-option"  id="wingsPersonalOverlibSaveButton">Guardar Trecho</div>
	<div id="wingsPersonalOverlibDivider"><hr /></div>
	<div id="wingsPersonalOverLibForm">
		<textarea class="personal-form" id="wingsPersonalOverlibComment"></textarea>
		<button class="personal-form"  id="wingsPersonalOverlibSave"></button>
	</div>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ):?>
			<img class="header-img-post"  src="<?php if ( has_post_thumbnail() ) { echo wp_get_attachment_url(get_post_thumbnail_id()); } ?>"/>
		<?php else: ?>
			<img class="header-img-post"  src=""/>
		<?php endif; ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php radiate_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content_capitular(); ?>		
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<div class="entry-social-network">
			compartilhe
			<div id="entry-curtir-icon" class="minibox">				
				curtir						
			</div>
			<div class="entry-social-number">
				1208
			</div>
			<div  id="entry-tweet-icon"  class="minibox">
				tweet					
			</div>
			<div class="entry-social-number">
				726
			</div>
			<div id="entry-email-div" class="minibox">e-mail</div>
			<div id="entry-salvar-div" class="minibox">salvar</div>
		</div>
		<div class="entry-rating">
			classifique
			<div id="bottom-star-1" class="share-star"></div>
			<div id="bottom-star-2" class="share-star"></div>
			<div id="bottom-star-3" class="share-star"></div>
			<div id="bottom-star-4" class="share-star"></div>
			<div id="bottom-star-5" class="share-star"></div>
		</div>
	</footer><!-- .entry-meta -->

	
</article><!-- #post-## -->

<?php wp_enqueue_script( 'personaloverlib', get_template_directory_uri() . '/js/WingsPersonalOverlib.js', array(), false, true ); ?>

<script type="text/javascript">
	jQuery(document).ready(function() {
		WingsPersonalOverLib.index();
		WingsPersonalOverLib.current_id = <?php echo get_the_ID(); ?> 
	});
</script>
