<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'bigvisual', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'bigvisual' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'bigvisual' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'bigvisual' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'bigvisual' ),
	'button_url'  => 'https://wordpress.org/support/theme/bigvisual/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'bigvisual' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'bigvisual' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'bigvisual' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'bigvisual' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'bigvisual' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'bigvisual' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'bigvisual' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'bigvisual' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'bigvisual' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'bigvisual' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'bigvisual' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'bigvisual' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'bigvisual' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'bigvisual' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'bigvisual' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Heading
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'bigvisual' ),
	'description'	=> esc_html__( 'Your blog heading', 'bigvisual' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'bigvisual' ),
	'description'	=> esc_html__( 'Your blog subheading', 'bigvisual' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Item Excerpt Length', 'bigvisual' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'bigvisual' ),
	'section'		=> 'blog',
	'default'		=> '26',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Comment Count
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Card Comment Count', 'bigvisual' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'bigvisual' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Category
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'card-category',
	'label'			=> esc_html__( 'Card Categories', 'bigvisual' ),
	'description'	=> esc_html__( 'Show categories on cards', 'bigvisual' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Avatar
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'card-avatar',
	'label'			=> esc_html__( 'Card Avatar', 'bigvisual' ),
	'description'	=> esc_html__( 'Show avatar on cards', 'bigvisual' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Date
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'card-date',
	'label'			=> esc_html__( 'Card Date', 'bigvisual' ),
	'description'	=> esc_html__( 'Show date on cards', 'bigvisual' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Read More
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'card-read-more',
	'label'			=> esc_html__( 'Card Read More Link', 'bigvisual' ),
	'description'	=> esc_html__( 'Show more link on cards', 'bigvisual' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Post Format
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-format',
	'label'			=> esc_html__( 'Single - Post Format', 'bigvisual' ),
	'description'	=> esc_html__( 'Shows post format in top of content area', 'bigvisual' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'bigvisual' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'bigvisual' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'bigvisual' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'bigvisual' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'bigvisual' ),
		'categories'=> esc_html__( 'Related by categories', 'bigvisual' ),
		'tags'		=> esc_html__( 'Related by tags', 'bigvisual' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'bigvisual' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'bigvisual' ),
	'section'		=> 'blog',
	'default'		=> 'content',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'bigvisual' ),
		'content'	=> esc_html__( 'Below content', 'bigvisual' ),
	),
) );
// Header: Search
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'bigvisual' ),
	'description'	=> esc_html__( 'Header search button', 'bigvisual' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'bigvisual' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'bigvisual' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'bigvisual' ),
	'description'	=> esc_html__( 'Works best with square size', 'bigvisual' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Title', 'bigvisual' ),
	'description'	=> esc_html__( 'The large text', 'bigvisual' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'bigvisual' ),
	'description'	=> esc_html__( 'The smaller text below the title', 'bigvisual' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'bigvisual' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'bigvisual' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'bigvisual' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'bigvisual' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'bigvisual' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'bigvisual' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'bigvisual' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'bigvisual' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'bigvisual' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'bigvisual' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'bigvisual' ),
	'description'	=> esc_html__( 'Footer credit text', 'bigvisual' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'bigvisual' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'bigvisual' ),
	'section'		=> 'layout',
	'default'		=> 'col-1c',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'bigvisual' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'bigvisual' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'bigvisual' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'bigvisual' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'bigvisual' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'bigvisual' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'bigvisual' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'bigvisual' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'bigvisual' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'bigvisual' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'bigvisual' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'bigvisual' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'bigvisual' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'bigvisual' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function bigvisual_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'bigvisual_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'bigvisual' ),
		'description'	=> esc_html__( '(is_home) Primary', 'bigvisual' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'bigvisual' ),
	) );
	Kirki::add_field( 'bigvisual_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'bigvisual' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'bigvisual' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'bigvisual' ),
	) );
	Kirki::add_field( 'bigvisual_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'bigvisual' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'bigvisual' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'bigvisual' ),
	) );
	Kirki::add_field( 'bigvisual_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'bigvisual' ),
		'description'	=> esc_html__( '(is_category) Primary', 'bigvisual' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'bigvisual' ),
	) );
	Kirki::add_field( 'bigvisual_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'bigvisual' ),
		'description'	=> esc_html__( '(is_search) Primary', 'bigvisual' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'bigvisual' ),
	) );
	Kirki::add_field( 'bigvisual_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'bigvisual' ),
		'description'	=> esc_html__( '(is_404) Primary', 'bigvisual' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'bigvisual' ),
	) );
	Kirki::add_field( 'bigvisual_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'bigvisual' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'bigvisual' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'bigvisual' ),
	) );
	
 } 
add_action( 'init', 'bigvisual_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'bigvisual' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'bigvisual' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'bigvisual' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'bigvisual' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'bigvisual' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'bigvisual' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'bigvisual' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'bigvisual' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'bigvisual' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'bigvisual' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'bigvisual' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'bigvisual' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'bigvisual' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'bigvisual' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'bigvisual' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'bigvisual' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'bigvisual' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'bigvisual' ),
	'description'	=> esc_html__( 'Select font for the theme', 'bigvisual' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'bigvisual' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'bigvisual' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'bigvisual' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'bigvisual' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'bigvisual' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'bigvisual' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'bigvisual' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'bigvisual' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'bigvisual' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'bigvisual' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'bigvisual' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'bigvisual' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'bigvisual' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'bigvisual' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'bigvisual' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'bigvisual' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'bigvisual' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'bigvisual' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'bigvisual' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'bigvisual' ),
		'arial'					=> esc_html__( 'Arial', 'bigvisual' ),
		'georgia'				=> esc_html__( 'Georgia', 'bigvisual' ),
		'verdana'				=> esc_html__( 'Verdana', 'bigvisual' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'bigvisual' ),
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'bigvisual' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'bigvisual' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Container Width
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'bigvisual' ),
	'description'	=> esc_html__( 'Max-width of the container', 'bigvisual' ),
	'section'		=> 'styling',
	'default'		=> '1260',
	'choices'     => array(
		'min'	=> '820',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Post Format Width
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'post-format-width',
	'label'			=> esc_html__( 'Post Format Max-width', 'bigvisual' ),
	'description'	=> esc_html__( 'Max-width of the post formats, shown at the top of articles', 'bigvisual' ),
	'section'		=> 'styling',
	'default'		=> '940',
	'choices'     => array(
		'min'	=> '320',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'bigvisual' ),
	'description'	=> esc_html__( 'Max-width of the website content', 'bigvisual' ),
	'section'		=> 'styling',
	'default'		=> '640',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Primary Color
Kirki::add_field( 'bigvisual_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'bigvisual' ),
	'section'		=> 'styling',
	'default'		=> '#a58861',
) );