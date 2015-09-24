<?php

/**

 * The template file to show the front page display.

 *

 * @package ThemeGrill

 * @subpackage Radiate

 * @since Radiate 1.0

 */



get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/slide.css"; ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/home.css"; ?>">
	<?php

	$get_featured_pages = new WP_Query( array(

				'posts_per_page' 			=> 3,

				'post_type'					=> array( 'page' ),

				'orderby' 		 			=> 'ID',

				'ignore_sticky_posts' 	=> 1 					

			));

	$banner_posts = new WP_Query( array(

				'posts_per_page' 			=> 5,

				'post_type'					=> array( 'post' ),

				'orderby' 		 			=> 'ID',

				'ignore_sticky_posts' 	=> 1 					

			));

	?>
	<!-- <div class="header-div">ARTIGOS EM DESTAQUE</div> -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	 

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	   <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
	  </ol>
	  	<?php 
	  		for ($i=0; $i < $banner_posts->post_count ; $i++) { 
	  			$post_obj = $banner_posts->next_post();
	  			if($i == 0){
	  				echo "<div class='item active'>";
	  			}else{
	  				echo "<div class='item'>";
	  			}

	  			$url = "http://revistagalileu.globo.com/Revista/Galileu2/foto/0,,69810585,00.jpg";
  				if ( has_post_thumbnail($post_obj->ID) ) { 
  					$url = wp_get_attachment_url(get_post_thumbnail_id($post_obj->ID)); 
  				}
  				$urlPost = get_permalink($post_obj->ID);
  				echo "<img class='img-featured' src='$url'>";
  				echo "<div class='carousel-mask-left'> </div>";
  				echo "<div class='carousel-mask'> </div>";
	  			echo "<div class='featured-description'>";
	  			echo "<div class='header-div'>artigo em destaque</div> ";
	  			echo "<a href='{$urlPost}'><span class='font-responsive carousel-title'>".str_replace("á", "Á", strtoupper($post_obj->post_title))."</span></a>";
	  		

	  		
	  			$categories = wp_get_post_categories($post_obj->ID);

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
	  			}
	  			
				$complement = "";
	  			if($post_obj->comment_count > 0){
	  				$complement = "comentários";
	  				if($post_obj->comment_count == 1){
						$complement = "comentário";
	  				}
	  			?>
	  				<a href="<?php echo get_comments_link( $post_obj->ID ); ?>"><span class='font-responsive commentaries'><?php echo $post->comment_count ." ". $complement ?></span></a>
	  			<?php
	  			}else{
	  				?>
	  				<a href="<?php echo get_comments_link( $post_obj->ID ); ?>"><span class='font-responsive commentaries'> <?php echo $complement ?></span></a>
	  			<?php }
	  			
	  			echo "</div>";
	  			echo "<div class='carousel-caption'>";
	  			echo "</div>";
	  			echo "</div>";
	  		}
	  	?>
	  </div>

	  <!-- Controls -->
	</div>

	<div class="content">
	<div class="header-div">
		<span>mais artigos</span>
	<!-- 	<?php echo do_shortcode( '[searchandfilter taxonomies="category,post_date" operators="OR" types="checkbox,daterange" headings="FILTRAR ASSUNTOS,FILTRAR POR DATA"
			submit_label="OK"]' ); ?> -->
		<div class="posts-options"><a id="posts-order-filter" href="#">ordenar e filtrar</a><a id="posts-order-mode-list" href="#" class="posts-order-filter-mode"><img src="<?php echo get_template_directory_uri()?>/images/home/filters/mode/modoLista_ativado.svg" /></a><a id="posts-order-mode-card" href="#" class="posts-order-filter-mode"><img src="<?php echo get_template_directory_uri()?>/images/home/filters/mode/modoCards_desativado.svg" /></a></div>
	</div>
	
	<!-- <div id="featured_pages" class="clearfix">

		
		<?php

		$j = 1;

		while ( $get_featured_pages->have_posts() ) : 

			$get_featured_pages->the_post();

			if( $j % 2 == 1 && $j > 1 ) { $page_class = "tg-one-third tg-one-third-last"; }	

			else { $page_class = "tg-one-third"; }				

			?>

			<div class="<?php echo $page_class; ?>">				

				<div class="page_text_container">


					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

					<h1 class="entry-title"><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

					<?php the_excerpt(); ?><a class="more-link" title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php _e( 'Read more','radiate' ); ?></a>

				</div>					

			</div>

			<?php $j++;

		endwhile; 

		wp_reset_postdata();

		?>

	</div> -->





	<div id="primary" class="content-area">

<div class="posts-order-filter-modal">
		<div class="order">
			<h1>ordenar por:</h1>
			<ul>
				<li><input type="radio" name="order" class="order-radio"><label>ordem aleatória</label></li>
				<li><input type="radio" name="order" class="order-radio"><label>mais recentes</label></li>
				<li><input type="radio" name="order" class="order-radio"><label>mais antigos</label></li>
				<li><input type="radio" name="order" class="order-radio"><label>mais comentados</label></li>
				<li><input type="radio" name="order" class="order-radio"><label>acesso mais recente</label></li>
			</ul>
		</div>
		<?php $datetime1 = date_create('2002-01-01');
			$datetime2 = new DateTime('now');
			$interval = date_diff($datetime2, $datetime1);
?>
		<div class="filter-year-month">
			<h1>filtrar por anos e meses: <a href="#" class="button-uncheck-all">desmarcar todos</a></h1>
			<ul class="years">
			<?php for($i = $interval->format('%y') ; $i>=0; $i--):?>
				<?php $dateString = '2002-01-01'; $dt = new DateTime($dateString);$dt->modify("+$i years");?>
				<li><input type="checkbox" class="filter-checkbox"><label><?php echo $dt->format('20y');?></label></li>
			<?php endfor;?>
			
			</ul>
			<ul class="months">
				<li><input type="checkbox" class="filter-checkbox"><label>JAN</label></li>
				<li><input type="checkbox" class="filter-checkbox"><label>FEV</label></li>
				<li><input type="checkbox" class="filter-checkbox"><label>MAR</label></li>
				<li><input type="checkbox" class="filter-checkbox"><label>ABR</label></li>
				<li><input type="checkbox" class="filter-checkbox"><label>MAI</label></li>
				<li><input type="checkbox" class="filter-checkbox"><label>JUN</label></li>
			
				<li><input type="checkbox" class="filter-checkbox"><label>JUL</label></li>
				<li><input type="checkbox" class="filter-checkbox"><label>AGO</label></li>
				<li><input type="checkbox" class="filter-checkbox"><label>SET</label></li>
				<li><input type="checkbox" class="filter-checkbox"><label>OUT</label></li>
				<li><input type="checkbox" class="filter-checkbox"><label>NOV</label></li>
				<li><input type="checkbox" class="filter-checkbox"><label>DEZ</label></li>
			</ul>
		</div>

		<div class="filter-subject">
			<h1>filtrar por assunto:<a href="#" class="button-uncheck-all">desmarcar todos</a></h1>
			<ul>
				<?php 	$args = array('orderby' => 'name', 'parent' => 0, 'hide_empty'=>0); $categories = get_categories($args); ?>
			<?php foreach ( $categories as $category ):?>
			
				<div class="item">
				<?php if(strcasecmp($category->name, 'budismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/budismo_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'ciência')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/ciencia_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'cinema')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/cinema_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'cristianismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/cristianismo_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'espiritismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/espiritismo_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'filosofia')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/filosofia_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'geral')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/geral_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'hinduísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/hinduismo_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'islamismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/islamismo_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'holismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/holismo_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'internacional')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/internacional_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'islamísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/islamismo_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'judaísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/judaismo_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'metafísica')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/metafisica_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'pensamentos')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/pensamentos_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'política')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/politica_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'psicologia')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/psicologia_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'taoísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/taoismo_desativado.svg">
				<?php elseif(strcasecmp($category->name, '5 estrelas')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/topPosts_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'ufologia')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/ufologia_desativado.svg">
				<?php elseif(strcasecmp($category->name, 'videolog')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/home/filters/categories/videolog_desativado.svg">
				<?php else: ?>
					<img src="">
				<?php endif; ?>
					<h1><a href=<?php echo  get_category_link( $category->term_id )?>><?php echo $category->name ?></a></h1>
					
				</div>
			<?php endforeach;?>

			</ul>
		</div>
	</div>
	
		<main id="main" class="site-main-card" role="main">

	
			<?php if ( have_posts() ) : ?>



			<?php /* Start the Loop */ ?>
			<ul class="default">
			<?php $i=0; while ( have_posts() ) : the_post(); ?>

				<?php $i++;?>
				<?php if($i == 3){ echo "</ul><ul class='list-two'>";}?>
					
					<?php if ($i == 5){ 


						echo "<li class='post-mais-acessados'>";

							echo "<h1>mais lidos</h1>";
						//pvc_most_viewed_posts();
					
						echo "</li>";

						} ?>

						<?php if($i == 5){ echo "</ul><ul class='list-three'>";}?>
						<?php if ($i == 5){ 


						echo "<li class='post-mais-comentados'>";
						echo "<h1>mais comentados</h1>";
						echo "<ul>";
						foreach (popularPosts(5) as $key => $p) {
								$urlPost = get_permalink($p->ID);
							$number = ($key +1);
							if(strlen($p->post_title)<=35)
							echo "<li><a href={$urlPost}>". "<span class='number'>".$number."</span>".  "<span class='title'>".$p->post_title ."</span></a></li>";
							else
								echo "<li><a href={$urlPost}>". "<span class='number'>".$number."</span>".  "<span class='title'>".substr($p->post_title, 0, 35) ."...</span></a></li>";
							
						}
						echo "</ul>";
						echo "</li>";


						} ?>

						<?php if($i == 7){ echo "</ul><ul class='list-four'>";}?>
						<?php if($i == 8){ echo "</ul><ul class='list-three-col'>";}?>
				<li>
				<?php

					/* Include the Post-Format-specific template for the content.

					 * If you want to override this in a child theme, then include a file

					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

					 */
					 
					get_template_part( 'content-sdm-card', get_post_format() );


				?>
					</li>


			<?php endwhile; ?>
			</ul>


			<?php radiate_paging_nav(); ?>



		<?php else : ?>



			<?php get_template_part( 'content', 'none' ); ?>



		<?php endif; ?>


		</main>
		<main id="main" class="site-main" role="main">



		<?php if ( have_posts() ) : ?>



			<?php /* Start the Loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>



				<?php

					/* Include the Post-Format-specific template for the content.

					 * If you want to override this in a child theme, then include a file

					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

					 */
					 
					get_template_part( 'content-sdm', get_post_format() );


				?>



			<?php endwhile; ?>



			<?php radiate_paging_nav(); ?>



		<?php else : ?>



			<?php get_template_part( 'content', 'none' ); ?>



		<?php endif; ?>



		</main><!-- #main -->

	</div><!-- #primary -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>

