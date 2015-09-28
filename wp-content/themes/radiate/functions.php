<?php


function fs_get_wp_twitter_path()
{
	$base = dirname(__FILE__);
	$path = false;

	if (@file_exists(dirname(dirname($base))."/twitteroauth.php"))
	{
		$path = dirname(dirname($base))."/twitteroauth.php";
	}
	else
		if (@file_exists(dirname(dirname(dirname($base)))."/twitteroauth.php"))
		{
			$path = dirname(dirname(dirname($base)))."/twitteroauth.php";
		}
		else
			$path = false;

		if ($path != false)
		{
			$path = str_replace("\\", "/", $path);
		}
		return $path;
	}




	require_once(fs_get_wp_twitter_path());

/**

 * Radiate functions and definitions

 *

 * @package ThemeGrill

 * @subpackage Radiate

 * @since Radiate 1.0

 */



/**

 * Set the content width based on the theme's design and stylesheet.

 */

if ( ! isset( $content_width ) ) {

	$content_width = 768; /* pixels */

}



if ( ! function_exists( 'radiate_setup' ) ) :

/**

 * Sets up theme defaults and registers support for various WordPress features.

 *

 * Note that this function is hooked into the after_setup_theme hook, which

 * runs before the init hook. The init hook is too late for some features, such

 * as indicating support for post thumbnails.

 */
function popularPosts($num) {
	global $wpdb;
	$posts = $wpdb->get_results("SELECT * FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , $num");

	return $posts;
}
function radiate_setup() {



	/*

	 * Make theme available for translation.

	 * Translations can be filed in the /languages/ directory.

	 * If you're building a theme based on radiate, use a find and replace

	 * to change 'radiate' to the name of your theme in all the template files

	 */

	load_theme_textdomain( 'radiate', get_template_directory() . '/languages' );



	// Add default posts and comments RSS feed links to head.

	add_theme_support( 'automatic-feed-links' );



	/*

	 * Enable support for Post Thumbnails on posts and pages.

	 *

	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails

	 * Post thumbail is used for pages that are shown in the featured section of Front page.

	 */

	add_theme_support( 'post-thumbnails' );



	// This theme uses wp_nav_menu() in one location.

	register_nav_menus( array(

		'primary' => __( 'Primary Menu', 'radiate' ),

		) );



	// Enable support for Post Formats.

	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );



	// Setup the WordPress core custom background feature.

	add_theme_support( 'custom-background', apply_filters( 'radiate_custom_background_args', array(

		'default-color' => 'EAEAEA',

		'default-image' => '',

		) ) );



	// Adding excerpt option box for pages as well

	add_post_type_support( 'page', 'excerpt' );

}

endif; // radiate_setup

add_action( 'after_setup_theme', 'radiate_setup' );

function the_content_capitular( $more_link_text = null, $strip_teaser = false, $post_id = null)
{
	$text = get_the_content($more_link_text,$strip_teaser);

	if($post_id != null){
		$content_post = get_post($post_id);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		$text = $content;
	}

	$letter = utf8_decode(substr($text, 0,1));

	$iterator = 0;

// 	if(!ctype_alpha($letter)){
// 		$achou = false;
// 		$fechou = false;
// 		$tag = 0;
// 	while(!$achou){
// 		$iterator++;
// 		$letter = utf8_decode(substr($text, $iterator,1));

// 		if(ctype_alpha($letter) && $fechou){
// 			$achou = true;
// 		}

// 		if(strcasecmp($letter, ";")==0 || strcasecmp($letter, ">")==0){
// 			$tag++;
// 			if($tag == 2)
// 			$fechou = true;
// 		}

// 	}
// }
	$text = substr($text, $iterator+1);
	if(!ctype_alpha($letter)){
		$text = $letter.$text;
	} else{
		$text = "<img class='capitular' src='".get_template_directory_uri()."/images/posts/capitulares/".strtoupper($letter).".svg'>".$text;
	}
	$content = apply_filters( 'the_content', $text );
	$content = str_replace( ']]>', ']]&gt;', $content );
	$content = str_replace( '<b>', '<strong>', html_entity_decode($content) );
	$content = str_replace( '</b>', '</strong>', html_entity_decode($content) );
	$content = $content . '<input id="wings-post-id" type="hidden" value="' . get_the_ID() . '">';
	
	//aqui nós vamos verificar se tem overlib
	if($post_id == null){
		$post_id = get_the_ID();
	}
	global $wpdb;
	$table_name = $wpdb->prefix . "wingspersonaloverlib";
	$current_user = wp_get_current_user();
	$results = $wpdb->get_results("SELECT * FROM ". $table_name ." WHERE personal_post_ID = ". $post_id ." AND personal_user_ID = " . $current_user->ID);
	/*$lista = array(); //regex
	$valoresAlterados = array(); //resultado do regex
	$valoresOriginais = array(); //valores alterados
	preg_match_all("/<\s*a(\s+.*?>|>).*?<\s*\/\s*a\s*>/", $content, $lista);
	//vamos percorrer todos os pontos da lista e retirar as tags html:
	foreach($lista[0] as $item){
		array_push($valoresAlterados, preg_replace("/(<(\/?[^\>]+)>)/", "", $item));
		array_push($valoresOriginais, $item);
	}
	//remover todas as tags a do documento do content
	$content = preg_replace("/(<\/?a\s*href*\\\"*.*\\\">)|(<\/a>)/", "", $content);
	*/
	foreach ( $results as $result ) 
	{	
		//echo $result->personal_comment_text;
		$content = str_replace($result->personal_comment_text, '<span class="personal-overib-text" data-id="' . $result->ID . '" data-content="'. $result->personal_comment .'">'. $result->personal_comment_text . '</span>', $content);
	}
	/*for($i; $i < count($valoresOriginais); $i++){
		$content = str_replace($valoresAlterados[$i], $valoresOriginais[$i], $content);
	}*/

	echo $content;

}


/**

 * Register widgetized area and update sidebar with default widgets.

 */

function radiate_widgets_init() {

	register_sidebar( array(

		'name'          => __( 'Sidebar', 'radiate' ),

		'id'            => 'sidebar-1',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h1 class="widget-title">',

		'after_title'   => '</h1>',

		) );

}

add_action( 'widgets_init', 'radiate_widgets_init' );



/**

 * Enqueue scripts and styles.

 */

function radiate_scripts() {

	// Load our main stylesheet.

	wp_enqueue_style( 'radiate-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/bootstrap.min.css');



	wp_enqueue_style( 'radiate-google-fonts', '//fonts.googleapis.com/css?family=Roboto|Merriweather:400,300' ); 



	wp_enqueue_script( 'radiate-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );



	wp_enqueue_script( 'radiate-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );



	wp_enqueue_script( 'radiate-custom-js', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), false, true );


	wp_enqueue_script( 'overlib', get_template_directory_uri() . '/js/WingsOverLib.js', array(), false, true );

	wp_enqueue_script( 'post', get_template_directory_uri() . '/js/Post.js', array(), false, true );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true );

	wp_enqueue_script('login',get_template_directory_uri().'/js/login.js',array(),false,true);
	

	$radiate_header_image_link = get_header_image();

	wp_localize_script( 'radiate-custom-js', 'radiateScriptParam', array('radiate_image_link'=> $radiate_header_image_link ) );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

		wp_enqueue_script( 'comment-reply' );

	}



	$radiate_user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);

	if(preg_match('/(?i)msie [1-8]/',$radiate_user_agent)) {

		wp_enqueue_script( 'html5', get_template_directory_uri() . '/js/html5shiv.js', true ); 

	}

}

add_action( 'wp_enqueue_scripts', 'radiate_scripts' );

function wingsAjaxLoadPost(){
	$page = $_POST['page'];
	$take = $_POST['take'];


	$query = new WP_Query(array ('paged' => $page, 'posts_per_page' => $take ));

	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			get_template_part( 'content-sdm', get_post_format() );
		}
	} else {
	// no posts found
	}


}
add_action( 'wp_ajax_nopriv_wings-ajax-load-post', 'wingsAjaxLoadPost' );
add_action( 'wp_ajax_wings-ajax-load-post', 'wingsAjaxLoadPost' );


function winsAjaxLoadCards(){
	$page = $_POST['page'];
	$take = $_POST['take'];


	$query = new WP_Query(array ('paged' => $page, 'posts_per_page' => $take ));

	if ( $query->have_posts() ) {


			//aqui começa
		$i=0; while ( $query->have_posts() ) : the_post(); 

		$i++;
		if($i == 3){ echo "</ul><ul class='list-two'>";}

		if ($i == 5){ 


			echo "<li class='post-mais-acessados'>";

			echo "<h1>mais lidos</h1>";
						//pvc_most_viewed_posts();

			echo "</li>";

		}

		if($i == 5){ echo "</ul><ul class='list-three'>";}
		if ($i == 5){ 


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


		}

		if($i == 7){ echo "</ul><ul class='list-four'>";}
		if($i == 8){ echo "</ul><ul class='list-three-col'>";}
		echo "<li>";



		get_template_part( 'content-sdm-card', get_post_format() );



		echo "</li>";


		endwhile;
			//aqui termina

	}
	else {
	// no posts found
	}


}
add_action( 'wp_ajax_nopriv_wings-ajax-load-cards', 'wingsAjaxLoadPost' );
add_action( 'wp_ajax_wings-ajax-load-cards', 'wingsAjaxLoadPost' );

function wingsAjaxSignin(){
	session_start();
	if(isset($_POST['username']) && isset($_POST['password'])){
		$user_data = array();
		$user_data['user_login'] = $_POST['username'];
		$user_data['user_password'] = $_POST['password'];
		$user_data['remember'] = false;  
		$user = wp_signon( $user_data, false );
		
		if ( is_wp_error($user) ) {
			$json[] = array();
			$json['success'] = false;
			$json['error'] = $user->get_error_message();
		} else {
			wp_set_current_user( $user->ID, $_POST['username'] );
			do_action('set_current_user');
			
			$json['success'] = true;

			echo json_encode($json);
			die();
		}
	} else
	{
		$json = array();
		$json['success'] = false;
		$json['error'] = 'Usuário/Senha não encontrados';

		echo json_encode($json);
		die();
	}
}
add_action( 'wp_ajax_nopriv_wing-ajax-signin', 'wingsAjaxSignin' );
add_action( 'wp_ajax_wing-ajax-signin', 'wingsAjaxSignin' );

function wingsLoginWithTwitter(){

	session_start();
	$CONSUMER_KEY='C43hbf8KOd1ZKyfNHL8yE95yg';
	$CONSUMER_SECRET='B18J2Pmc7Dg7dGZ5CnkXOjjxatXO6HdJIHlvGOHYIiCMP77uJC';
	$OAUTH_CALLBACK='http://localhost/saindodamatrix/wp-twitter-login.php?wingscallbackurl='.$_POST['callbackurl'];
	
	$json = array();
	$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET);

	$request_token = $connection->getRequestToken($OAUTH_CALLBACK);
	if( $request_token)
	{
		$token = $request_token['oauth_token'];
		$_SESSION['request_token'] = $token ;
		$_SESSION['request_token_secret'] = $request_token['oauth_token_secret'];
		switch ($connection->http_code) 
		{
			case 200:
			$url = $connection->getAuthorizeURL($token);
			$json['session'] = $_SESSION;
			$json['success'] = true;

			$json['url'] = $url;
			break;
			default:
			$json['success'] = false;
			break;
		}

	}
	else //error receiving request token
	{
		$json['success'] = false;
	}
	echo json_encode($json);
	die();
}
add_action( 'wp_ajax_nopriv_wings-twitter-login', 'wingsLoginWithTwitter' );
add_action( 'wp_ajax_wings-twitter-login', 'wingsLoginWithTwitter' );

function wingsGetTwitterStuff(){

	
	$CONSUMER_KEY='C43hbf8KOd1ZKyfNHL8yE95yg';
	$CONSUMER_SECRET='B18J2Pmc7Dg7dGZ5CnkXOjjxatXO6HdJIHlvGOHYIiCMP77uJC';

	if(isset($_GET['oauth_token']))
	{

		$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $_SESSION['request_token'], $_SESSION['request_token_secret']);
		$access_token = $connection->getAccessToken($_SESSION["twitter_oauth_verifier"]);
		if($access_token)
		{
			$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
			$params =array();
			$params['include_entities']='true';
			$content = $connection->get('account/verify_credentials',$params);

			if($content && isset($content->screen_name) && isset($content->name))
			{
				$_SESSION['name']=$content->name;
				$_SESSION['image']=$content->profile_image_url;
				$_SESSION['twitter_id']=$content->screen_name;
				$saindoemail = strtolower($content->screen_name) . "@saindodamatrix.com.br";
				$exist = get_user_by('email',$saindoemail);
				if($exist == false){ 					
					wingsCreateUser($saindoemail, $content->id . $saindoemail, $saindoemail, $content->name);
				} else{
					wingsForceSignIn($saindoemail, $content->id . $saindoemail);
				}
				header("Location: " . $_GET['wingscallbackurl']);

			}
			else
			{
			}
		}

	}
	else
	{


	}

}

function wingsCreateUser($usuario, $senha, $email, $displayname){
	$user_id = wp_create_user( $usuario, $senha, $email );
	if(is_wp_error($user_id)){
		echo '<div class="wings-error-user">Erro ao cadastrar usuário!</div>';
	}
	else{
		$newData = array( 'ID' => $user_id, 'display_name' => $displayname );
		$user_id = wp_update_user( $newData );

		if ( is_wp_error( $user_id ) ) {
			return false;
		} else {

		}		
		return wingsForceSignIn($usuario, $senha);
	}
}

function wingsForceSignIn($usuario, $senha){
	$user_data = array();
	$user_data['user_login'] = $usuario;
	$user_data['user_password'] = $senha;
	$user_data['remember'] = false;  
	$user = wp_signon( $user_data, false );

	if ( is_wp_error($user) ) {
		$exist = get_user_by('email',$usuario);
		if($exist == false){ 
		}
		else{			
			wp_set_password( $senha,  $exist->ID);
			$user = wp_signon( $user_data, false );
			if ( is_wp_error($user) ) {

			} else{
				wp_set_current_user( $user->ID, $usuario );
				do_action('set_current_user');
			}
		}
	} else {
		wp_set_current_user( $user->ID, $usuario );
		do_action('set_current_user');
	}
	return true;
}

function wingsLoginWithFacebook(){
	$json = array();
	if($_POST['email'] && $_POST['name'])
	{
		$_SESSION['name']=$_POST['name'];
		$_SESSION['email']=$_POST['email'];
		$saindoemail = $_POST['email'];
		$exist = get_user_by('email',$saindoemail);
		$entrou = false;
		if($exist == false){ 					
			$entrou = wingsCreateUser($saindoemail, 'facebookpassword' . $saindoemail, $saindoemail, $_POST['name']);
		} else{
			$entrou = wingsForceSignIn($saindoemail, 'facebookpassword' . $saindoemail);
		}
		$json['success'] = $entrou;
	}
	else
	{
		$json['success'] = $false;
	}

	echo json_encode($json);
	die();

}
add_action( 'wp_ajax_nopriv_wing-ajax-facebook-signin', 'wingsLoginWithFacebook' );
add_action( 'wp_ajax_wing-ajax-facebook-signin', 'wingsLoginWithFacebook' );



/**

 * Implement the Custom Header feature.

 */

require get_template_directory() . '/inc/custom-header.php';



/**

 * Custom template tags for this theme.

 */

require get_template_directory() . '/inc/template-tags.php';



/**

 * Custom functions that act independently of the theme templates.

 */

require get_template_directory() . '/inc/extras.php';



/**

 * Customizer additions.

 */

require get_template_directory() . '/inc/customizer.php';



/**

 * Load Jetpack compatibility file.

 */

require get_template_directory() . '/inc/jetpack.php';



?>