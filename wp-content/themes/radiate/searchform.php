<?php
/**
 * The template for displaying search forms in radiate
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Buscar no Saindo da Matrix:', 'label', 'radiate' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'buscar no Saindo da Matrix', 'placeholder', 'radiate' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'OK', 'submit button', 'radiate' ); ?>">
</form>
