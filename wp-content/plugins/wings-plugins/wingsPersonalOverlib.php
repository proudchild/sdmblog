<?php
/**
 * Plugin Name: WingsPersonalOverlib
 * Plugin URI: http://www.wingsdev.com.br
 * Description: Plugin que permite ao usuário criar overlib pessoais nos textos de um blog
 * Version: 0.0.0.5:12055
 * Author: Wings Development
 * Author URI: http://www.wingsdev.com.br
 * License: LGPL
 */

global $wingspersonalplugin_db_version;
$wingspersonalplugin_db_version = '1.3';

function wingsInstallPlugin(){

	

	global $wpdb;
	global $wingspersonalplugin_db_version;

	$table_name = $wpdb->prefix . "wingspersonaloverlib";

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE ". $table_name . " (
    `ID` BIGINT(20) UNSIGNED AUTO_INCREMENT NOT NULL,		
    `personal_post_ID` BIGINT(20) UNSIGNED NOT NULL,
    `personal_user_ID` BIGINT(20) UNSIGNED NOT NULL,
    `personal_comment_text` text  NOT NULL,
    `personal_comment` text NULL,
    PRIMARY KEY (`ID`),
    INDEX `personaloverlib_user_idx_final` (`personal_post_ID` ASC),
    CONSTRAINT `personaloverlib_post`
    FOREIGN KEY (`personal_post_ID`)
    REFERENCES `". $wpdb->prefix ."posts` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    CONSTRAINT `personaloverlib_user`
    FOREIGN KEY (`personal_user_ID`)
    REFERENCES `". $wpdb->prefix ."users` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION) " . $charset_collate . ";";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );
	//$wpdb->query($sql);


add_option( 'wingspersonalplugin_db_version', $wingspersonalplugin_db_version );

}

register_activation_hook( __FILE__, 'wingsInstallPlugin' );

function myplugin_update_db_check() {
  global $wingspersonalplugin_db_version;
  if ( get_site_option( 'wingspersonalplugin_db_version' ) != $wingspersonalplugin_db_version ) {
    wingsInstallPlugin();
  }
}
add_action( 'plugins_loaded', 'myplugin_update_db_check' );


function wingsSaveTextForPostAndUser(){


  global $wpdb;
  global $wingspersonalplugin_db_version;
  $table_name = $wpdb->prefix . "wingspersonaloverlib";

  //pegar o post id e o usuário
  $postId = $_POST['id'];
  $user = wp_get_current_user();
  //pegar o trecho
  $text = $_POST['text'];
  //salvar no banco
  $wpdb->insert( 
    $table_name, 
    array( 
      'personal_post_ID' => $postId, 
      'personal_user_ID' => $user->ID, 
      'personal_comment' => $_POST['thoughts'],
      'personal_comment_text' =>  $text,
      ) 
    );
  //buscar o conteúdo - lembrar de pegar no get content capitular o conteúdo
  the_content_capitular(null,false,$postId);
  //vamos buscar
  return;

}
add_action( 'wp_ajax_wings-personal-overlib-call', 'wingsSaveTextForPostAndUser' );


function wingsSaveTextForPostAndUserUpdate(){


  global $wpdb;
  global $wingspersonalplugin_db_version;
  $table_name = $wpdb->prefix . "wingspersonaloverlib";
  $thoughts = $_POST['thoughts'];
  //pegar o post id e o usuário
  $postId = $_POST['id'];
  $user = wp_get_current_user();
  //pegar o trecho
  $text = $_POST['text'];
  $thoughtsId = $_POST['thoughtsId'];
  //salvar no banco
  /*
  $wpdb->insert( 
    $table_name, 
    array( 
      'personal_post_ID' => $postId, 
      'personal_user_ID' => $user->ID, 
      'personal_comment' => $_POST['thoughts'],
      'personal_comment_text' =>  $text,
      ) 
    );
  */

  $wpdb->update( 
    $table_name, 
    array( 
      'personal_comment' => $thoughts,  // string
      'personal_comment_text' => $text  // integer (number) 
      ), 
    array( 'ID' => $thoughtsId ), 
    array( 
      '%s', // value1
      '%s'  // value2
      ), 
    array( '%d' ) 
  );

  //buscar o conteúdo - lembrar de pegar no get content capitular o conteúdo
  the_content_capitular(null,false,$postId);
  //vamos buscar
  return;

}
add_action( 'wp_ajax_wings-personal-overlib-call-update', 'wingsSaveTextForPostAndUserUpdate' );



?>