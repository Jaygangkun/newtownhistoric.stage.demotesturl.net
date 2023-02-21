<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>

    <div class="section2">
        <div class="container">
                <h2><span>Upcoming Events</span></h2>
            <?php
            //query_posts('eventDisplay=upcoming&post_type=tribe_events&order=ASC&showposts=3');

            /*
            'order'=>'DESC',
            'orderby'=>'meta_value_num',
            'meta_key'=>'custom_date'
            orderby=start-date&order=asc

            start-date&order=desc
            */

            $events = tribe_get_events([
                'posts_per_page' => 3,
                'start_date' => 'today',
                'eventDisplay' => 'list'
            ]);
            foreach ( $events as $post ) { ?>
                <div class="row">
                    <div class="img">
                        <?php
                        if ( has_post_thumbnail($post) ) { // check if the post has a Post Thumbnail assigned to it.
                            echo get_the_post_thumbnail($post, "medium");
                        }
                        ?>
                    </div>
                    <div class="description">
                        <h3><?php echo $post->post_title; ?></h3>
                        <p><b>
                            <?php
                            $startDate = new DateTime(tribe_get_start_date($post, true, 'Y-m-d H:i'));
                            $endDate = new DateTime(tribe_get_end_date($post, true, 'Y-m-d H:i'));
                            if($startDate->format('Y-m-d') != $endDate->format('Y-m-d')) { // multi-day event
                                echo $startDate->format('F d, g:ia') .' - '. $endDate->format('F d, g:ia');
                            } else { // one day event
                                echo $startDate->format('F d, g:ia') .' - '. $endDate->format('g:ia');
                            }
                            ?>
                        </b></p>
                        <p><?php echo get_the_excerpt($post); ?></p>
                        <a href="<?php echo get_the_permalink($post);?>" class="more">...READ MORE</a>
                    </div>
                </div>
                <?php } ?>
                <?php if (!$events) {
                    echo '<p>No Events</p>';
                }?>
            <a href="<?=site_url()?>/events/" class="btn2">EVENT LISTING</a>
        </div>
    </div>
    <div class="section3">
        <div class="container">
                <h2><span>Featured</span></h2>
            <div class="holder">
                <div class="img"><img src="<?php echo get_stylesheet_directory_uri();?>/images/img7.jpg" alt=""></div>
                <div class="description">
                        <h3>The Edward Hicks Room</h3>
                    <p>The Newtown Historic Association invites you back in time to experience the life of Newtown's most famous artist, Edward Hicks.  The Edward Hicks Room displays many of the treasures owned by Hicks during his lifetime. These items include a double-faced swinging sign portraying William Penn's Treaty with the Indians and Penn's Landing at Chester in 1844<a href="<?=site_url()?>/hicks-collection/"  class="more">...learn more</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="signup-area">
        <div class="block">
                <h2>SIGN UP</h2>
            <p>We invite you to sign up to stay informed of upcoming events, educational programs and community activities.    Most are held in our historic Half Moon Inn, a tavern in the early days of Newtown, and are open to the public.</p>
            <p>Join the celebration of our past and help ensure the preservation of our future.</p>
            <?php gravity_form(2, false, false, false, '', true); ?>
        </div>
    </div>
    <div class="tagline">
        <div class="container">
            <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '659' ); } ?>
        </div>
    </div>
    <div id="footer">
        <div class="container">
                <div class="col first">
                <nav class="footer-nav">
                        <?php wp_nav_menu(array('menu'=>'footer_nav', 'container'=>false)); ?>
                    <?php wp_nav_menu(array('menu'=>'footer_nav_1', 'container'=>false, 'menu_class' => 'add')); ?>
                </nav>
            </div>
            <div class="col add">
                <h2>CONTACT US</h2>
                <p class="address">Newtown Historic Association, Inc.<br>105 Court Street <br>P.O. Box 303
                    <br>Newtown, PA 18940 USA</p>
                        <span class="tell"><a href="tel:2159684004">215.968.4004</a></span>
                <span><a href="mailto:info@newtownhistoric.org">info@newtownhistoric.org</a></span>
            </div>
            <div class="col add2">
                <h2>HOURS</h2>
                <!-- <p>Callahan Research Center<br>100 Mercer St.<br>Currently by appointment only,<br>please call 215.805.8772</p> -->
                <p>Callahan Research Center<br>100 Mercer St.<br>Tuesdays 9:00 AM to 1:00 PM<br>Thursdays 7:00 PM to 9:00 PM<br>and by appointment.<br>Phone: 215.805.8772</p>
    <!--                <p>Callahan Research Center<br>100 Mercer St.<br>Tuesdays 9:00 AM to 1:00 PM<br>Thursdays 7:00 PM to 9:00 PM<br>and by appointment.<br>Phone: 267.685.0501</p> -->
                        </div>
            <div class="col add3">
                <ul class="social">
                        <li>STAY CONNECTED</li>
                    <li class="insta"><a href="https://www.instagram.com/newtownhistoric/">insta</a></li>
                    <li class="fb"><a href="https://www.facebook.com/newtownhistoricassociation/" target="_blank">fb</a></li>
                </ul>
                <span><a href="http://www.boroughofnewtown.com/" target="_blank">boroughofnewtown.com</a></span>
                <a href="http://www.visitbuckscounty.com/" target="_blank">visitbuckscounty.com</a>
            </div>
        </div>
        <p class="copy">&copy; 2022, Newtown Historic Association, Inc.</p>
    </div>
</div>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.main.js"></script>
<?php wp_footer(); ?>
</body>
</html>

