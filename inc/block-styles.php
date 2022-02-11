<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Naledi
 * @since 0.1
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function naledi_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'naledi-columns-overlap',
				'label' => esc_html__( 'Overlap', 'naledi' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'naledi-border',
				'label' => esc_html__( 'Borders', 'naledi' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'naledi-border',
				'label' => esc_html__( 'Borders', 'naledi' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'naledi-border',
				'label' => esc_html__( 'Borders', 'naledi' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'naledi-image-frame',
				'label' => esc_html__( 'Frame', 'naledi' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'naledi-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'naledi' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'naledi-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'naledi' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'naledi-border',
				'label' => esc_html__( 'Borders', 'naledi' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'naledi-separator-thick',
				'label' => esc_html__( 'Thick', 'naledi' ),
			)
		);
	}
	add_action( 'init', 'naledi_register_block_styles' );
}
