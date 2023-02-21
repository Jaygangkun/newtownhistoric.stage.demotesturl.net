<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */


$var_http	=	"";
if($_SERVER['SERVER_PORT']==80){
	$var_http	=	"http://";
}else{
	$var_http	=	"https://";
}

$post_url_complete	=	$var_http.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

get_header(); ?>
<div class="visual internal">
<?php if(has_post_thumbnail() || tribe_is_month() || tribe_is_day() || tribe_is_upcoming() || (is_single()))
	  {
		if(tribe_is_month() || tribe_is_day() || tribe_is_upcoming() || (is_single()))
		  {
				//echo "1";

				$postids = url_to_postid($post_url_complete);
				if($postids>0){

				}else{
					$postids=107;
				}

				$feat_image = wp_get_attachment_url( get_post_thumbnail_id($postids) );
				//echo '
				//<style>
				//	.visual {
				//		background: url('.$feat_image.') no-repeat center;
				//		background-size: cover;
				//		min-height: 370px;
				//	}
				//	</style>
				//';
				if ( has_post_thumbnail() ){
					the_post_thumbnail( 'full' );
				}else{
					echo '<img src="'.get_stylesheet_directory_uri().'/images/img9.jpg" alt="">';
				}
		  }
		else

				//echo "2";
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id() );
				// echo '
				// <style>
				// 	.visual {
				// 		background: url('.$feat_image.') no-repeat center;
				// 		background-size: cover;
				// 		min-height: 370px;
				// 	}
				// 	</style>
				// ';
			the_post_thumbnail( 'full' );

	  }
	else
				//echo "3";
				echo '
				<img src="'.get_stylesheet_directory_uri().'/images/img9.jpg" alt="">
				';
?>
   <div class="caption">
    	<div class="container">
			<h2><?php echo tribe_is_list_view() ? "Calendar of Events" : the_title(); ?></h2>
	    </div>
	    <div class="container evntstitle">
			<h2>Calendar of Events</h2>
	    </div>
    </div>
</div>
<div id="main">
			<div class="container">
				<div id="content">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );


		// End the loop.
		endwhile;
		?>
</div>
</div>
</div>
<?php get_footer(); ?>
