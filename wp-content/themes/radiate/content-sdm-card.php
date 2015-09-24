<?php

/**

 * @package ThemeGrill

 * @subpackage Radiate

 * @since Radiate 1.0

 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php if ( 'post' == get_post_type() ) : ?>

		<div class="entry-meta">

			<?php radiate_posted_on(); ?>

		</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="header-post" >

			<img class="header-post header-img-post"  src="<?php if ( has_post_thumbnail() ) { echo wp_get_attachment_url(get_post_thumbnail_id()); }else{ echo get_template_directory_uri().'/images/home/post/imagem.jpg';} ?>"/>
			<div class='header-post-mask'> </div>

		
		<div class="title-div-img">
			<?php 
			$categories = wp_get_post_categories($post->ID);

	  			foreach ($categories as $categorie_id) {
	  				 $category = get_category($categorie_id);
	  			if(strcasecmp($category->name, 'budismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/budismo.svg">
				<?php elseif(strcasecmp($category->name, 'ciência')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/ciencia.svg">
				<?php elseif(strcasecmp($category->name, 'cinema')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/cinema.svg">
				<?php elseif(strcasecmp($category->name, 'cristianismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/cristianismo.svg">
				<?php elseif(strcasecmp($category->name, 'espiritismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/espiritismo.svg">
				<?php elseif(strcasecmp($category->name, 'filosofia')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/filosofia.svg">
				<?php elseif(strcasecmp($category->name, 'geral')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/geral.svg">
				<?php elseif(strcasecmp($category->name, 'hinduísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/hinduismo.svg">
				<?php elseif(strcasecmp($category->name, 'islamismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/islamismo.svg">
				<?php elseif(strcasecmp($category->name, 'holismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/holismo.svg">
				<?php elseif(strcasecmp($category->name, 'internacional')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/internacional.svg">
				<?php elseif(strcasecmp($category->name, 'islamísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/islamismo.svg">
				<?php elseif(strcasecmp($category->name, 'judaísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/judaismo.svg">
				<?php elseif(strcasecmp($category->name, 'metafísica')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/metafisica.svg">
				<?php elseif(strcasecmp($category->name, 'pensamentos')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/pensamentos.svg">
				<?php elseif(strcasecmp($category->name, 'política')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/politica.svg">
				<?php elseif(strcasecmp($category->name, 'psicologia')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/psicologia.svg">
				<?php elseif(strcasecmp($category->name, 'taoísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/taoismo.svg">
				<?php elseif(strcasecmp($category->name, '5 estrelas')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/topPosts.svg">
				<?php elseif(strcasecmp($category->name, 'ufologia')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/ufologia.svg">
				<?php elseif(strcasecmp($category->name, 'videolog')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/post/categorias/videolog.svg">
				<?php else: ?>
					
				<?php endif; 
	  				# code...
	  			}
	  			?>
			<h1 class="entry-title title-h1"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			
	  			<?php 
				$complement = "";
	  			if($post->comment_count > 0){
	  				$complement = "comentários";
	  				if($post->comment_count == 1){
						$complement = "comentário";
	  				}
	  			?>
	  				<a href="<?php echo get_comments_link( $post->ID ); ?>"><span class='font-responsive commentaries'><?php echo $post->comment_count ." ". $complement ?></span></a>
	  			<?php
	  			}else{
	  				?>
	  				<a href="<?php echo get_comments_link( $post->ID ); ?>"><span class='font-responsive commentaries'> <?php echo $complement ?></span></a>
	  			<?php }
	  			?>
		</div>


	</div>
	
		





</article><!-- #post-## -->

