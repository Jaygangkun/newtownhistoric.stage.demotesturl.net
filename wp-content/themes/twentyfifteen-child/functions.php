<?php
    add_action('init', 'my_add_excerpts_to_pages');
    function my_add_excerpts_to_pages()
    {
        add_post_type_support('page', 'excerpt');
    }
    
// prevent empty form fields erasing values already stored in the mapped MailChimp MMERGE fields when updating an existing subscriber
    add_filter('gform_mailchimp_override_empty_fields', '__return_false');

    function arphabet_widgets_init()
    {

        register_sidebar(array(
            'name'          => 'Header Alert Text',
            'id'            => 'header_alert',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="rounded">',
            'after_title'   => '</h2>',
        ));

    }

    add_action('widgets_init', 'arphabet_widgets_init');


/*
 * This changes the event link to the event website URL if that is set.
 * NOTE: Comment out the add_filter() line to disable this function.
 */
function tribe_set_link_website ( $link, $postId ) {
	$website_url = tribe_get_event_website_url( $postId );
	// Only swaps link if set
	if ( !empty( $website_url ) ) {
		$link = $website_url;
	}
	return $link;
}
add_filter( 'tribe_get_event_link', 'tribe_set_link_website', 100, 2 );

// block WP enum scans

if (!is_admin()) {
	// default URL format
	if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) die();
	add_filter('redirect_canonical', 'shapeSpace_check_enum', 10, 2);
}
function shapeSpace_check_enum($redirect, $request) {
	// permalink URL format
	if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) die();
	else return $redirect;
}
