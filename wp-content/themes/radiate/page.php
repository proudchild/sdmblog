<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */

get_header(); ?>

<div class="content">
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php
			if(is_page( 1830 ) ){
				$args = array(
					'number' => '10',
					);
					?>
					<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/ultimos_comentarios.css"; ?>">
					<ul>
						<?php foreach (get_comments($args) as $key => $comment):?>

							<?php $post  = get_post( $comment->comment_post_ID);?>
							<li>
								<div class="section-author">
									<img src=""><label class="author-name"><?php echo $comment->comment_author ?></label>
									<span> comentou o artigo</span>
									<?php 
						$now = time(); // or your date as well
						$your_date = strtotime($comment->comment_date);
						$datediff = $now - $your_date;
						?>
						<label class="post-title"><?php echo $post->post_title ?></label>&nbsp<label class="comment-date"><?php echo "há ".floor($datediff/(60*60*24))." dias" ?></label>
					</div>
					<div class="section-comment-content">
					<p>
						<?php echo $comment->comment_content ?>
					</p>
					</div>
				</li>
			<?php endforeach;?>

		</ul>
		<?php
	}
					// If comments are open or we have at least one comment, load up the comment template
					// if ( comments_open() || '0' != get_comments_number() ) :
					// 	comments_template();
					// endif;
	?>

<?php endwhile; // end of the loop. ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>