<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo "Saindo da Matrix"?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="parallax-bg"></div>
	<div id="page" class="hfeed site">

		<?php do_action( 'before' ); ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="header-wrap clearfix">
			<div class="header-wrap-mask"></div>
				<div class="header-content">
					
					<nav class="navbar navbar-default">
					<div class="site-branding">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri()."/images/header/marca.svg"; ?>"><span><?php bloginfo( 'name' ); ?></span></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					</div>
					 <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="" id="btn-menu-mobile">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="menu-mobile">
    <ul class="nav navbar-nav">

    	<li><a class="header-fechar header-link"></a></li>
    	<li><a class="header-twitter header-link header-link-social" href="http://twitter.com/acid0" target="_blank"></a></li>
					<li><a class="header-facebook header-link header-link-social" target="_blank"></a></li>
					
    				<li><a class="header-rss header-link header-link-social" href="http://feeds.feedburner.com/SaindoDaMatrix" target="_blank"></a></li>
					<li><a class="mobile-header-login header-link">LOGIN</a></li>
			
					</ul>
    </div>
					  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">

					<li><a class="header-login header-link"></a></li>
					<li><a class="header-rss header-link header-link-social" href="http://feeds.feedburner.com/SaindoDaMatrix" target="_blank"></a></li>
					<li><a class="header-facebook header-link header-link-social" target="_blank"></a></li>
					<li><a class="header-twitter header-link header-link-social" href="http://twitter.com/acid0" target="_blank"></a></li>
					<li><a class="header-search-icon"></a></li>
				
					<li><a class="header-category header-link">CATEGORIAS</a></li>
					</ul>
					</div>
					</nav>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<h1 class="menu-toggle"></h1>
						<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'radiate' ); ?></a>

						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- #site-navigation -->		
				</div> <!-- 	header-content	 -->
			</div><!-- .inner-wrap header-wrap -->
		</header><!-- #masthead -->
		
		<div class="header-content-modal">
		<div class="categories">
		<h1 class="categories-title">CATEGORIAS</h1>
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
				<?php elseif(strcasecmp($category->name, 'Islamismo')==0):?>
					<img src="<?php  echo get_template_directory_uri()?>/images/header/category/islamismo.svg">
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
					<ul>
						<?php foreach ( $subcategories as $subcategory ):?>
							<li><a href=<?php echo  get_category_link( $subcategory->term_id )?>><?php echo strtolower($subcategory->name) ?></a></li>

						<?php endforeach;?>
					</ul>
				</div>
			<?php endforeach;?>


		</div>
			<?php get_search_form(); ?>	
			<div class="login <?php  if(is_user_logged_in()) echo 'wings-logged-in'; ?>">
				
			<?php 
				if( is_user_logged_in()){
					$user = wp_get_current_user();
					echo'
						<h2 class="wings-username">'. $user->display_name .'</h2>
						<button class="wings-userbutton" id="wings-arquivo-pessoal">ARQUIVO PESSOAL</button>
						<button class="wings-userbutton" id="wings-editar-perfil">EDITAR PERFIL</button>
						<a href="wp-login.php?action=logout&_wpnonce=4a0cbe43b1"  id="wings-sair"><button class="wings-userbutton">SAIR</button></a>
					';
				} else{
					echo '<form>
							<fieldset>
								<legend>FAZER LOGIN</legend>
								<input id="username" type="text" placeholder="login"><br>
								<input id="password" type="password" placeholder="senha"><br>
								<input id="entrar" type="button" value="ENTRAR">
							</fieldset>
						</form>
						<div class="login-other-options">
							<a  class="login-signup" >CRIAR PERFIL GRATUITO</a>
							<a  class="login-password-lost" >ESQUECI MINHA SENHA</a>
						</div>
						<label class="login-or-label">OU</label>
						<input type="button" class="social-login" id="social-login-facebook" value="CONECTAR COM O FACEBOOK">
						<input type="button" class="social-login" id="social-login-twitter" value="CONECTAR COM O TWITTER">
						';
				}

			?>
			</div>
		</div>
		<div id="content" class="site-content">
			<div class="inner-wrap">

				<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/header.css"; ?>">
				<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/sidebar.css"; ?>">
				<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/post.css"; ?>">
				<script type="text/javascript">
					jQuery(document).ready(function(){
						jQuery("#entrar").click(function(){
							login.doLogin();
						});
						jQuery("#social-login-twitter").click(function(){
							login.doTwitter();
						});
					});
				</script>
