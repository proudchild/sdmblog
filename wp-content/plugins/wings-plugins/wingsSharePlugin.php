<?php
/*
Plugin Name: Wings Share Plugin
Plugin URI: http://wingsdev.com.br
Description: Special share section for sid
Author: Sergio Migueis
Version: 1
Author URI: http://www.wingsdev.com.br
*/

class wingsSharePlugin extends WP_Widget
{


/**
   * Register widget with WordPress.
   */
  function __construct() {

    parent::__construct(
      'wingsSharePlugin', // Base ID
      __( 'Wings Share Lib', 'text_domain' ), // Name
      array( 'description' => __( 'A special share section for Sid', 'text_domain' ), ) // Args
    );

  }


  function wingsSharePlugin()
  {

    $widget_ops = array('classname' => 'wingsSharePlugin', 'description' => 'Display a special share section' );
    $this->WP_Widget('wingsSharePlugin', 'compartilhe', $widget_ops);

  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
?><p><label for="<?php echo $this->get_field_id('title'); ?>"><input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
  function getRateContent(){
    return '
    <div class="entry-rating">
      classifique <br/>
      <div id="bottom-star-1" class="share-star"></div>
      <div id="bottom-star-2" class="share-star"></div>
      <div id="bottom-star-3" class="share-star"></div>
      <div id="bottom-star-4" class="share-star"></div>
      <div id="bottom-star-5" class="share-star"></div>
    </div>
    ';
  }

   function getCategoriesContent(){

    $ret = '<div class="side-categories"> categorias <br /> <br />';
    $args = array('orderby' => 'name', 'parent' => 0, 'hide_empty'=>0); 

    global $wp_query;
    $thePostID = $wp_query->post->ID;
    $categories = get_categories($thePostID);
    foreach( $categories as $category)
    {
      $ret = $ret. '<div class="item">';

      
          if(strcasecmp($category->name, 'budismo')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/budismo.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'ciência')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/ciencia.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'cinema')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/cinema.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'cristianismo')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/cristianismo.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'espiritismo')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/espiritismo.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'filosofia')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/filosofia.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'geral')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/geral.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'hinduísmo')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/hinduismo.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'holismo')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/holismo.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'internacional')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/internacional.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'islamísmo')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/islamismo.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'judaísmo')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/judaismo.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'metafísica')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/metafisica.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'pensamentos')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/pensamentos.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'política')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/politica.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'psicologia')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/psicologia.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'taoísmo')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/taoismo.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, '5 estrelas')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/topPosts.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'ufologia')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/ufologia.svg">' . strtolower($category->name) . '</a></p>';
          elseif(strcasecmp($category->name, 'videolog')==0) 
            $ret = $ret . '<p>'.'<a class="wings-sidebar-category" href='. get_category_link( $category->term_id ). '><img src="'. get_template_directory_uri().'/images/header/category/videolog.svg">' . strtolower($category->name) . '</a></p>';
          
        $ret = $ret . '</div>';

    }
    $ret = $ret . '</div>';
      

    return $ret;
  }

  function getShareContent(){
    return '
    <div class="wings-widget wings-share">
      <div class="entry-social-network">
        <div id="entry-curtir-icon" class="minibox">        
          curtir            
        </div>
        <div class="entry-social-number">
          1208
        </div>
        <br />
        <div  id="entry-tweet-icon"  class="minibox">
          tweet         
        </div>
        <div class="entry-social-number">
          726
        </div>
        <br />
        <div id="entry-email-div" class="minibox">e-mail</div>
        <div style="display: table-cell; width: 10px;" class="wings-sidebar-emailsave-separator"> </div>
        <div id="entry-salvar-div" class="minibox">salvar</div>
      </div>
    </div>';
  }

  function widget($args, $instance)
  {

    extract($args, EXTR_SKIP);
 
    echo $before_widget;

    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
    if (!empty($title))
      echo $before_title . $title . $after_title;
    else
      echo 'compartilhe';
 
     ob_start();
    echo self::getShareContent();

    echo '<div class="wings-sidebar-divisor"></div>';
    echo self::getRateContent();    
    echo '<div class="wings-sidebar-divisor"></div>';
    echo self::getCategoriesContent();    
    echo '<div class="wings-sidebar-divisor"></div>';

 
    echo $after_widget;
  }

  
 
}

function register_wings_share_widget() {
    register_widget( 'wingsSharePlugin' );
}
add_action( 'widgets_init', 'register_wings_share_widget' );?>