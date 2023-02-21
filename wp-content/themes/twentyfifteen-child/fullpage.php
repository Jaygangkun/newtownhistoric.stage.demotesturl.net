<?php
/**
 * Template Name: Full Page
 */


$var_http	=	"";
if($_SERVER['SERVER_PORT']==80){
	$var_http	=	"http://";
}else{
	$var_http	=	"https://";
}

$post_url_complete	=	$var_http.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

get_header(); ?>

<div id="main">
		<div style="padding-top: 80px">
				<h1><?php echo the_title(); ?></h1>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'fullpage' );


		// End the loop.
		endwhile;
		?>
	</div>
</div>
<?php get_footer(); ?>
