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
		
			<img class="header-post header-img-post"  src="<? if ( has_post_thumbnail() ) { echo wp_get_attachment_url(get_post_thumbnail_id()); }else{ echo get_template_directory_uri().'/images/home/post/imagem.jpg';} ?>"/>
			<div class='header-post-mask'> </div>
	
	
		<div class="title-div-img">

	
			
			<h1 class="entry-title title-h1"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php 
	  			$categories = wp_get_post_categories($post->ID);

	  			foreach ($categories as $categorie_id) {
	  				 $category = get_category($categorie_id);
	  			if(strcasecmp($category->name, 'budismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/budismo.svg">
				<?php elseif(strcasecmp($category->name, 'ciência')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/ciencia.svg">
				<?php elseif(strcasecmp($category->name, 'cinema')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/cinema.svg">
				<?php elseif(strcasecmp($category->name, 'cristianismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/cristianismo.svg">
				<?php elseif(strcasecmp($category->name, 'espiritismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/espiritismo.svg">
				<?php elseif(strcasecmp($category->name, 'filosofia')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/filosofia.svg">
				<?php elseif(strcasecmp($category->name, 'geral')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/geral.svg">
				<?php elseif(strcasecmp($category->name, 'hinduísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/hinduismo.svg">
				<?php elseif(strcasecmp($category->name, 'islamismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/islamismo.svg">
				<?php elseif(strcasecmp($category->name, 'holismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/holismo.svg">
				<?php elseif(strcasecmp($category->name, 'internacional')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/internacional.svg">
				<?php elseif(strcasecmp($category->name, 'islamísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/islamismo.svg">
				<?php elseif(strcasecmp($category->name, 'judaísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/judaismo.svg">
				<?php elseif(strcasecmp($category->name, 'metafísica')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/metafisica.svg">
				<?php elseif(strcasecmp($category->name, 'pensamentos')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/pensamentos.svg">
				<?php elseif(strcasecmp($category->name, 'política')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/politica.svg">
				<?php elseif(strcasecmp($category->name, 'psicologia')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/psicologia.svg">
				<?php elseif(strcasecmp($category->name, 'taoísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/taoismo.svg">
				<?php elseif(strcasecmp($category->name, '5 estrelas')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/topPosts.svg">
				<?php elseif(strcasecmp($category->name, 'ufologia')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/ufologia.svg">
				<?php elseif(strcasecmp($category->name, 'videolog')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/banner/category/videolog.svg">
				<?php else: ?>
					
				<?php endif; 
	  				# code...
	  			}?>
			<div class="header-comment-div">
			<div class="header-comment-div-inner">
				</div>
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
		  		<br>
		  		<?php  
		  		// $categories = wp_get_post_categories(get_the_ID());

	  			// foreach ($categories as $categorie_id) {
	  			// 	$categorie = get_category($categorie_id);
	  			// 	switch ($categorie->name) {
	  			// 		case 'nomes':
	  			// 			echo "<img class='featured-icon' src='http://cdn4.freepik.com/image/th/318-1528.png'>";
	  			// 			break;
	  					
	  			// 		default:
	  			// 			echo "$categorie->name ";
	  			// 			break;
	  			// 	}
	  			// }
	  			?>
  			
		</div>
		</div>


	</div>
	
		


	<?php if ( is_search() ) : // Only display Excerpts for Search ?>

	<div class="entry-summary">

		<?php the_excerpt(); ?>

	</div><!-- .entry-summary -->

	<?php else : ?>

	<div class="entry-content">
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>">Continuar lendo...</a>
		<?php

			wp_link_pages( array(

				'before' => '<div class="page-links">' . __( 'Pages:', 'radiate' ),

				'after'  => '</div>',

			) );

		?>

	</div><!-- .entry-content -->

	<?php endif; ?>



	<footer class="entry-meta">

	<!-- 	<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>

			<?php

				/* translators: used between list items, there is a space after the comma */

				$categories_list = get_the_category_list( __( ', ', 'radiate' ) );

				if ( $categories_list && radiate_categorized_blog() ) :

			?>

			<span class="cat-links">

				<?php echo $categories_list; ?>

			</span>

			<?php endif; // End if categories ?>



			<?php

				/* translators: used between list items, there is a space after the comma */

				$tags_list = get_the_tag_list( '', __( ', ', 'radiate' ) );

				if ( $tags_list ) :

			?>

			<span class="tags-links">

				<?php echo $tags_list; ?>

			</span>

			<?php endif; // End if $tags_list ?>

		<?php endif; // End if 'post' == get_post_type() ?>



		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>

		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'radiate' ), __( '1 Comment', 'radiate' ), __( '% Comments', 'radiate' ) ); ?></span>

		<?php endif; ?>



		<?php edit_post_link( __( 'Edit', 'radiate' ), '<span class="edit-link">', '</span>' ); ?> -->

	</footer><!-- .entry-meta -->

</article><!-- #post-## -->

