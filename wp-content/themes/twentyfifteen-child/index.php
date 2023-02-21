<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="visual">
	<?php
	    if ( function_exists( 'soliloquy' ) ) { soliloquy( '626' ); }
	?>
</div>
<div class="section1">
	<div class="container">
    	<div class="holder">
        	<h2>On a Peaceful Sunday Morning...</h2>
            <p>Our story begins in 1962.  That's when the old stone farmhouse located on the corner of Washington Avenue and Sycamore Street, and known as the headquarters of George Washington after his decisive victory at the battle of Trenton, was demolished to build a gas station... yes, a gas station.</p>
            <a href="<?=site_url()?>/about-us/" class="btn">LEARN MORE</a>
        </div>
        <div class="box-holder">
        	<div class="box">
            	<div class="img-holder">
					<a href="<?=site_url()?>/about-us/">
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/img2.jpg" alt="">
						<div class="cap">
							<div class="inner">
								<div class="inner2">
									<strong class="title">Who We Are</strong>
									<span class="btn">LEARN MORE</span>
								</div>
							</div>
						</div>
					</a>
                </div>
                <p>Incorporated in 1964, the NHA is dedicated to the preservation and celebration of Newtown's historical heritage. </p>
            </div>
            <div class="box">
            	<div class="img-holder">
					<a href="<?=site_url()?>/visit/">
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/img3.jpg" alt="">
						<div class="cap">
							<div class="inner">
								<div class="inner2">
									<strong class="title">Visit Us</strong>
									<span class="btn">LEARN MORE</span>
								</div>
							</div>
						</div>
					</a>
                </div>
                <p>Explore our 18th century inn, learn about Newtown's history and join us in preserving and celebrating our community. </p>
            </div>
            <div class="box">
            	<div class="img-holder">
					<a href="<?=site_url()?>/visit/walking-tours/newtown-heritage-walk/">
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/img12.jpg" alt="">
						<div class="cap">
							<div class="inner">
								<div class="inner2">
									<strong class="title">Heritage Walk</strong>
									<span class="btn">LEARN MORE</span>
								</div>
							</div>
						</div>
					</a>
                </div>
                <p>Take a self-guided tour through the history of Newtown. 34 wayside markers feature sites from the 18th, 19th and 20th centuries.</p>
            </div>
        </div>
    </div>
</div>
<?php
//get_sidebar();
get_footer();
