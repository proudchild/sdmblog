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
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>"><input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
  function getRateContent(){
    return '';
  }

   function getCategoriesContent(){
    return '';
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

 
    echo $after_widget;
  }

  
 
}

function register_wings_share_widget() {
    register_widget( 'wingsSharePlugin' );
}
add_action( 'widgets_init', 'register_wings_share_widget' );?>