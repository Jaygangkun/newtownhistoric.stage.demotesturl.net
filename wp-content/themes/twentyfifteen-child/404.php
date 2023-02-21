<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="visual internal">
        	<img src="<?php echo get_stylesheet_directory_uri();?>/images/img9.jpg" alt="">
            <div class="caption">
            	<div class="container">
                	<div class="inner">
                    	<div class="inner2">
                        	<h2><?php echo the_title(); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div id="main">
			<div class="container">
				<div id="content">
<h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

					<?php get_search_form(); ?>
                    </div>
                    </div>
</div>
<?php get_footer(); ?>
