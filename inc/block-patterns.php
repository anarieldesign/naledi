<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package WordPress
 * @subpackage Naledi
 * @since 0.1
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'naledi',
		array( 'label' => esc_html__( 'Naledi Blocks', 'naledi' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Cover Image with Menu
	register_block_pattern(
		'naledi/cover-menu',
		array(
			'title'         => esc_html__( 'Cover Image with Menu', 'naledi' ),
			'categories'    => array( 'naledi' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'A cover image with site logo and menu at the top', 'Block pattern description', 'naledi' ),
			'content'       => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/cover-image.jpg","id":21,"hasParallax":true,"dimRatio":70,"minHeight":700,"customGradient":"linear-gradient(12deg,rgb(102,126,234) 1%,rgb(90,108,221) 66%,rgb(70,166,235) 97%)","align":"full","className":"is-style-default header-cover"} -->
			<div class="wp-block-cover alignfull has-background-dim-70 has-background-dim has-parallax has-background-gradient is-style-default header-cover" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/images/cover-image.jpg);min-height:700px"><span aria-hidden="true" class="wp-block-cover__gradient-background" style="background:linear-gradient(12deg,rgb(102,126,234) 1%,rgb(90,108,221) 66%,rgb(70,166,235) 97%)"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"naledi"} /-->
			
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"86px"}}} -->
			<h2 class="has-text-align-center" style="font-size:86px"><strong>' . esc_html_x( 'Magic of the Nature', 'sample content', 'naledi' ) . '</strong></h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html_x( 'Get to know our natural products made with love &amp; be the part of the better future.', 'sample content', 'naledi' ) . '</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			
			<!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"white","textColor":"primary","style":{"border":{"radius":50}},"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background" href="#" style="border-radius:50px"><strong>' . esc_html__( 'Book Now', 'naledi' ) . '</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover -->',
		)
	);

	// Info Bar
	register_block_pattern(
		'naledi/info-bar',
		array(
			'title'         => esc_html__( 'Info Bar', 'naledi' ),
			'categories'    => array( 'naledi' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'Info bar with three columns', 'Block pattern description', 'naledi' ),
			'content'       => '<!-- wp:columns {"align":"full","className":"naledi-info"} -->
			<div class="wp-block-columns alignfull naledi-info"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"backgroundColor":"quinary"} -->
			<div class="wp-block-group has-quinary-background-color has-background"><!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="has-text-align-center"><strong><a href="#">' . esc_html__( 'Virtual Tour', 'naledi' ) . '</a></strong></h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><meta charset="utf-8">' . esc_html_x( 'Get a virtual tour of our shop. Ideal for schools and events.', 'sample content', 'naledi' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"backgroundColor":"white"} -->
			<div class="wp-block-group has-white-background-color has-background"><!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="has-text-align-center"><strong><a href="#">' . esc_html__( 'Current Events', 'naledi' ) . '</a></strong></h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><meta charset="utf-8"><meta charset="utf-8">' . esc_html_x( 'Stay updated and see our current events here.', 'sample content', 'naledi' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"backgroundColor":"senary"} -->
			<div class="wp-block-group has-senary-background-color has-background"><!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="has-text-align-center"><strong><a href="#">' . esc_html__( 'Our Products', 'naledi' ) . '</a></strong></h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><meta charset="utf-8"><meta charset="utf-8">' . esc_html_x( 'Get to know our opening times, ticket prices and discounts.', 'sample content', 'naledi' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->',
		)
	);

		// Icons and Text
		register_block_pattern(
			'naledi/icons-text',
			array(
				'title'         => esc_html__( 'Icons and Text', 'naledi' ),
				'categories'    => array( 'naledi' ),
				'viewportWidth' => 1440,
				'description'   => esc_html_x( 'Three columns with icons and text', 'Block pattern description', 'naledi' ),
				'content'       => '<!-- wp:group {"align":"wide","layout":{"inherit":false,"contentSize":"1200px"}} -->
				<div class="wp-block-group alignwide"><!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"align":"center","id":22,"width":50,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
				<div class="wp-block-image is-style-default"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/icon-1.jpg' ) ) . '" alt="" class="wp-image-22" width="50"/></figure></div>
				<!-- /wp:image -->
				
				<!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="has-text-align-center"><strong>' . esc_html_x( 'Tours', 'sample content', 'naledi' ) . '</strong></h3>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">'. esc_html_x( 'Naledi&nbsp;is an experimental block-based theme. It is built to leverage the full-site editing functionality.', 'sample content', 'naledi' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"align":"center","id":23,"width":50,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/icon-2.jpg' ) ) . '" alt="" class="wp-image-23" width="50"/></figure></div>
				<!-- /wp:image -->
				
				<!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="has-text-align-center"><strong>' . esc_html_x( 'News', 'sample content', 'naledi' ) . '</strong></h3>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center"><meta charset="utf-8">'. esc_html_x( 'Naledi&nbsp;is an experimental block-based theme. It is built to leverage the full-site editing functionality.', 'sample content', 'naledi' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"align":"center","id":24,"width":50,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/icon-3.jpg' ) ) . '" alt="" class="wp-image-24" width="50"/></figure></div>
				<!-- /wp:image -->
				
				<!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="has-text-align-center"><strong>' . esc_html_x( 'Our Shop', 'sample content', 'naledi' ) . '</strong></h3>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center"><meta charset="utf-8">'. esc_html_x( 'Naledi&nbsp;is an experimental block-based theme. It is built to leverage the full-site editing functionality.', 'sample content', 'naledi' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:group -->',
			)
		);

	// Testimonials
	register_block_pattern(
		'naledi/testimonials',
		array(
			'title'         => esc_html__( 'Testimonials', 'naledi' ),
			'categories'    => array( 'naledi' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'Two columns overlapping testimonials', 'Block pattern description', 'naledi' ),
			'content'       => '<!-- wp:group {"align":"wide","layout":{"contentSize":"1200px"}} -->
			<div class="wp-block-group alignwide"><!-- wp:columns {"className":"is-style-naledi-columns-overlap"} -->
			<div class="wp-block-columns is-style-naledi-columns-overlap"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"backgroundColor":"quaternary","className":"is-style-default"} -->
			<div class="wp-block-group is-style-default has-quaternary-background-color has-background"><!-- wp:group -->
			<div class="wp-block-group"><!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/images/testimonial.jpg' ) ) . '" alt="Testimonial" /></figure></div>
			<!-- /wp:image -->
			
			<!-- wp:quote {"align":"center","className":"is-style-large"} -->
			<blockquote class="wp-block-quote has-text-align-center is-style-large"><p>' . esc_html_x( 'Contributing makes me feel like I am being useful to the planet.', 'sample content', 'naledi' ) . '</p><cite>' . esc_html_x( '- Ana Segota,', 'sample content', 'naledi' ) . '<em>' . esc_html_x( 'Volunteer', 'sample content', 'naledi' ) . '</em></cite></blockquote>
			<!-- /wp:quote --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"backgroundColor":"quinary","className":"is-style-default"} -->
			<div class="wp-block-group is-style-default has-quinary-background-color has-background"><!-- wp:group -->
			<div class="wp-block-group"><!-- wp:image {"align":"center","width":180,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/testimonial-1.jpeg' ) ) . '" alt="" width="180"/></figure></div>
			<!-- /wp:image -->
			
			<!-- wp:quote {"align":"center","className":"is-style-large"} -->
			<blockquote class="wp-block-quote has-text-align-center is-style-large"><p>' . esc_html_x( 'Contributing makes me feel like I am being useful to the planet.', 'sample content', 'naledi' ) . '</p><cite>' . esc_html_x( '- Ana Segota,', 'sample content', 'naledi' ) . '<em>' . esc_html_x( 'Volunteer', 'sample content', 'naledi' ) . '</em></cite></blockquote>
			<!-- /wp:quote --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
		)
	);


	// Media & Text Article Title.
	register_block_pattern(
		'naledi/media-text-article-title',
		array(
			'title'         => esc_html__( 'Media and Text Article Title', 'naledi' ),
			'categories'    => array( 'naledi' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'A Media & Text block with a big image on the left and a heading on the right. The heading is followed by a separator and a description paragraph.', 'Block pattern description', 'naledi' ),
			'content'       => '<!-- wp:media-text {"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg","mediaType":"image","className":"is-style-naledi-border"} --><div class="wp-block-media-text alignwide is-stacked-on-mobile is-style-naledi-border"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg" alt="' . esc_attr__( 'Gallery', 'naledi' ) . '" /></figure><div class="wp-block-media-text__content"><!-- wp:heading {"align":"center"} --><h2 class="has-text-align-center">' . esc_html__( 'Magic of the Nature', 'naledi' ) . '</h2><!-- /wp:heading --><!-- wp:separator {"className":"is-style-dots"} --><hr class="wp-block-separator is-style-dots"/><!-- /wp:separator --><!-- wp:paragraph {"align":"center","fontSize":"small"} --><p class="has-text-align-center has-small-font-size">' . wp_kses_post( __( 'Winding veils round their heads, the women walked on deck.', 'naledi' ) ) . '</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text -->',
		)
	);

	// Overlapping Images.
	register_block_pattern(
		'naledi/overlapping-images',
		array(
			'title'         => esc_html__( 'Overlapping Images', 'naledi' ),
			'categories'    => array( 'naledi' ),
			'viewportWidth' => 1024,
			'description'   => esc_html_x( 'Three images inside an overlapping columns block.', 'Block pattern description', 'naledi' ),
			'content'       => '<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-naledi-columns-overlap"} --><div class="wp-block-columns alignwide are-vertically-aligned-center is-style-naledi-columns-overlap"><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"full","sizeSlug":"full"} --><figure class="wp-block-image alignfull size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-2.jpg" alt="' . esc_attr__( 'Love Nature', 'naledi' ) . '"/></figure><!-- /wp:image --><!-- wp:spacer --><div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer --><!-- wp:image {"align":"full","sizeSlug":"full"} --><figure class="wp-block-image alignfull size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-2.jpg" alt="' . esc_attr__( 'Magical Nature', 'naledi' ) . '"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:spacer --><div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer --><!-- wp:image {"align":"full",sizeSlug":"full"} --><figure class="wp-block-image alignfull size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-3.jpg" alt="' . esc_attr__( 'Animals and Nature', 'naledi' ) . '"/></figure><!-- /wp:image --></div><!-- /wp:column --></div><!-- /wp:columns -->',
		)
	);

	
	// Overlapping Images and Text.
	register_block_pattern(
		'naledi/overlapping-images-and-text',
		array(
			'title'         => esc_html__( 'Overlapping Images and Text', 'naledi' ),
			'categories'    => array( 'naledi' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'An overlapping columns block with two images and a text description.', 'Block pattern description', 'naledi' ),
			'content'       => '<!-- wp:columns {"verticalAlignment":null,"align":"wide","className":"is-style-naledi-columns-overlap"} --> <div class="wp-block-columns alignwide is-style-naledi-columns-overlap"><!-- wp:column --> <div class="wp-block-column"><!-- wp:image {sizeSlug":"full"} --> <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg" alt="' . esc_attr__( 'Lovely Nature', 'naledi' ) . '"/></figure> <!-- /wp:image --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"bottom"} --> <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"className":"is-style-naledi-border","backgroundColor":"green"} --> <div class="wp-block-group is-style-naledi-border has-green-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:paragraph {"fontSize":"extra-large","style":{"typography":{"lineHeight":"1.4"}}} --> <p class="has-extra-large-font-size" style="line-height:1.4">' . esc_html__( 'Winding veils round their heads, the women walked on deck.', 'naledi' ) . '</p> <!-- /wp:paragraph --></div></div> <!-- /wp:group --></div> <!-- /wp:column --> <!-- wp:column --> <div class="wp-block-column"><!-- wp:image {sizeSlug":"full"} --> <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-2.jpg" alt="' . esc_attr__( 'Our Tours', 'naledi' ) . '"/></figure> <!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns -->',
		)
	);

	register_block_pattern(
		'naledi/contact-information',
		array(
			'title'       => esc_html__( 'Contact Information', 'naledi' ),
			'categories'  => array( 'naledi' ),
			'description' => esc_html_x( 'A block with 3 columns that display contact information and social media links.', 'Block pattern description', 'naledi' ),
			'content'     => '<!-- wp:columns {"align":"wide"} --><div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph --><p><a href="mailto:#">' . esc_html__( 'example@example.com', 'naledi' ) . '<br></a>' . esc_html__( '123-456-7890', 'naledi' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">' . esc_html__( '123 Main Street', 'naledi' ) . '<br>' . esc_html__( 'Cambridge, MA, 02139', 'naledi' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"align":"right"} --><ul class="wp-block-social-links alignright"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--><!-- wp:social-link {"url":"https://www.facebook.com/WordPress/","service":"facebook"} /--><!-- wp:social-link {"url":"https://twitter.com/WordPress","service":"twitter"} /--><!-- wp:social-link {"service":"instagram"} /--><!-- wp:social-link {"service":"linkedin"} /--><!-- wp:social-link {"service":"youtube"} /--><!-- wp:social-link {"url":"https://www.youtube.com/wordpress","service":"youtube"} /--></ul><!-- /wp:social-links --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:paragraph --><p></p><!-- /wp:paragraph -->',
		)
	);
}
