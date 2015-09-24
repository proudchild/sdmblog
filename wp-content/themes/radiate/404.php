<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */

get_header(); ?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/erro.css"; ?>">
	<div class="content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



			<img class="error-image" src="<?php echo(get_template_directory_uri()) ?>/images/erro/robo.svg" />
			<h2 class="error-title">OPS!</h2>
			<p class="error-invite">A página que você procura não está disponível. <br/> Que tal navegar pelas categorias?</p>
			<br />
			<div class="error-categories">
			<?php $args = array('orderby' => 'name', 'parent' => 0, 'hide_empty'=>0); $categories = get_categories($args); ?>
			<?php foreach ( $categories as $category ):?>
				<?php $subcategories = get_categories('child_of=' . $category->term_id . '&hide_empty=0');?>
				<div class="item">
				<?php if(strcasecmp($category->name, 'budismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/budismo.svg">
				<?php elseif(strcasecmp($category->name, 'ciência')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/ciencia.svg">
				<?php elseif(strcasecmp($category->name, 'cinema')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/cinema.svg">
				<?php elseif(strcasecmp($category->name, 'cristianismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/cristianismo.svg">
				<?php elseif(strcasecmp($category->name, 'espiritismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/espiritismo.svg">
				<?php elseif(strcasecmp($category->name, 'filosofia')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/filosofia.svg">
				<?php elseif(strcasecmp($category->name, 'geral')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/geral.svg">
				<?php elseif(strcasecmp($category->name, 'hinduísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/hinduismo.svg">
				<?php elseif(strcasecmp($category->name, 'islamismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/islamismo.svg">
				<?php elseif(strcasecmp($category->name, 'holismo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/holismo.svg">
				<?php elseif(strcasecmp($category->name, 'internacional')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/internacional.svg">
				<?php elseif(strcasecmp($category->name, 'islamísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/islamismo.svg">
				<?php elseif(strcasecmp($category->name, 'judaísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/judaismo.svg">
				<?php elseif(strcasecmp($category->name, 'metafísica')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/metafisica.svg">
				<?php elseif(strcasecmp($category->name, 'pensamentos')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/pensamentos.svg">
				<?php elseif(strcasecmp($category->name, 'política')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/politica.svg">
				<?php elseif(strcasecmp($category->name, 'psicologia')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/psicologia.svg">
				<?php elseif(strcasecmp($category->name, 'taoísmo')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/taoismo.svg">
				<?php elseif(strcasecmp($category->name, '5 estrelas')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/topPosts.svg">
				<?php elseif(strcasecmp($category->name, 'ufologia')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/ufologia.svg">
				<?php elseif(strcasecmp($category->name, 'videolog')==0):?>
					<img src="<?php echo get_template_directory_uri()?>/images/header/category/videolog.svg">
				<?php else: ?>
					<img src="">
				<?php endif; ?>
					<h1><a href=<?php echo  get_category_link( $category->term_id )?>><?php echo strtolower($category->name) ?></a></h1>
					
				</div>
			<?php endforeach;?>


		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
	</div>


<?php get_footer(); ?>