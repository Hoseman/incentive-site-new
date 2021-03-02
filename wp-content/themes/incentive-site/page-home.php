<?php
/* Template Name: IncentiveHomePage */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technical_Test
 */

get_header();
?>

<!-- Main Carousel -->
<section class="carousel">
    <div class="carousel__content">


    <?php if( get_theme_mod( 'ah_main_header_subtitle' ) ){ ?>
        <h4 class="carousel__subheading"><?php echo get_theme_mod( 'ah_main_header_subtitle' ) ?></h4>
    <?php } else { ?>
        <h4 class="carousel__subheading">Carousel Subheading</h4>
    <?php } ?>


    <?php if( get_theme_mod( 'ah_main_header_title' ) ){ ?>
        <h1 class="carousel__heading"><?php echo get_theme_mod( 'ah_main_header_title' ) ?></h1>
    <?php } else { ?>
        <h1 class="carousel__heading">CAROUSEL HEADING</h1>
    <?php } ?>

        
    <div class="carousel__underline"></div>


    <?php if( get_theme_mod( 'ah_main_header_small_text' ) ){ ?>
        <p class="carousel__text"><?php echo get_theme_mod( 'ah_main_header_small_text' ) ?></p>
    <?php } else { ?>
        <p class="carousel__text">Scores long description goes in here!</p>
    <?php } ?>



    <?php if( get_theme_mod( 'ah_main_header_button_text' ) ){ ?>
        <a class="carousel__btn" href="/#the-leaderboard"><?php echo get_theme_mod( 'ah_main_header_button_text' ) ?></a>
    <?php } else { ?>
        <a class="carousel__btn" href="/#the-leaderboard">SCORES LINK HERE</a>
    <?php } ?>      


        


        <?php
            if (function_exists( 'display_ach_ticker' )) {
                echo do_shortcode( '[ach-ticker/]' );
            }
            else {
                echo "<span class='ticker-not-installed'><h3>Please install the Leaderboard News Ticker!</h3></span>";	
            }
        ?>

    </div>
    <img class="carousel__img" src="<?php bloginfo('stylesheet_directory'); ?>/images/carousel-1.jpg">

</section>
<!-- Main Carousel -->


<!-- Load Leaderboard Plugin -->

<?php echo do_shortcode('[leaderboard/]'); ?>

<!-- Load Leaderboard Plugin -->







<section id="weekly-prizes" class="weekly-prizes u-center-text">

    <?php if( get_theme_mod( 'ah_weekly_prizes_title' ) ){ ?>
        <h2 class="weekly-prizes__heading"><?php echo get_theme_mod( 'ah_weekly_prizes_title' ) ?></h2>
    <?php } else { ?>
        <h2 class="weekly-prizes__heading">Prizes Title Here</h2>
    <?php } ?>

       

    
    <div class="weekly-prizes__underline"></div>
    <h5 class="weekly-prizes__subheading"><i class="fas fa-award"></i> 1st: <?php if( get_theme_mod( 'ah_weekly_prizes_prize_one' ) ){  echo get_theme_mod( 'ah_weekly_prizes_prize_one' ); } else { echo "Prizes First Title Here"; } ?></h5>
    <h5 class="weekly-prizes__subheading"><i class="fas fa-crown"></i> 2nd: <?php if( get_theme_mod( 'ah_weekly_prizes_prize_two' ) ){  echo get_theme_mod( 'ah_weekly_prizes_prize_two' ); } else { echo "Prizes Second Title Here"; } ?></h5>
    <h5 class="weekly-prizes__subheading"><i class="fas fa-medal"></i> 3rd: <?php if( get_theme_mod( 'ah_weekly_prizes_prize_three' ) ){  echo get_theme_mod( 'ah_weekly_prizes_prize_three' ); } else { echo "Prizes Third Title Here"; } ?></h5>
    <br>
    <h5 class="weekly-prizes__subheading"><i class="fas fa-trophy"></i> Overall prize: <?php if( get_theme_mod( 'ah_weekly_prizes_prize_four' ) ){  echo get_theme_mod( 'ah_weekly_prizes_prize_four' ); } else { echo "Overall Prize Description Goes In Here"; } ?></h5>

    

    <h4 class="weekly-prizes__headingsmall"><?php if( get_theme_mod( 'ah_weekly_prizes_subtitle' ) ){  echo get_theme_mod( 'ah_weekly_prizes_subtitle' ); } else { echo "Subtitle goes in here"; } ?></h4>
    <div class="weekly-prizes__underline"></div>

    
    <p><?php if( get_theme_mod( 'ah_weekly_prizes_content' ) ){  echo get_theme_mod( 'ah_weekly_prizes_content' ); } else { echo "Subtitle goes in here"; } ?></p>


</section>

<section id="terms" class="terms">

    <h2 class="terms__heading u-center-text"><?php if( get_theme_mod( 'ah_terms_title' ) ){  echo get_theme_mod( 'ah_terms_title' ); } else { echo "Terms Heading goes in here"; } ?></h2>
    <div class="terms__underline"></div>
    <div class="container display-flex">
        <div class="terms__colleft">
            <h4>The Points</h4>
            <ul>
                <?php
                    // Pull in the scores from the leaderboard plugin (if the plugin is active)
                    $valid3 = true;
                    $SQL3 = "SELECT * FROM " . $wpdb->prefix . "lb_point_types order by menu_order";
                    $formData3 = $wpdb-> get_results($SQL3);
                    if (!$formData3) {
                    $valid3 = false;
                    }
                    if($valid3) {
                    foreach ($wpdb->get_results($SQL3) as $key => $row) {

                            if( function_exists( 'ah_leaderboard_admin_menu' ) ) {
                                echo "<li>";
                                echo $row->description;
                                echo "</li>";
                            } else {
                                echo "<li>Leaderboard plugin is NOT active</li>";
                            }
                        
                        } 
                    }
                    


                ?>
            </ul>




        </div>




        <div class="terms__colright">

                    <p><?php if( get_theme_mod( 'ah_terms_content' ) ){  echo get_theme_mod( 'ah_terms_content' ); } else { echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porta, lectus ut pulvinar commodo, nunc enim suscipit augue, dictum elementum risus velit id sem. Sed a orci molestie, rutrum arcu in, molestie risus. Vestibulum cursus sapien eu orci tincidunt, non ullamcorper libero feugiat. Nam erat elit, eleifend eget ex ac, accumsan condimentum magna. In accumsan, nibh non tempus luctus, risus massa tempus nunc, et efficitur neque nulla sit amet sem. Cras sit amet arcu metus. Vivamus auctor vitae diam ut fringilla. Maecenas a dolor eu nisi vehicula molestie at et justo."; } ?></p>

            <!-- <p>Every time you Sell a car/finance product/finance plan you will earn yourself ‘Laps’ in the Peter Cooper Race To Palmer. If you finish 1st, 2nd or 3rd as outright Winner in the Weekly Challenge with the most laps then you will win the weekly prize. If there is a tie then the winner will be decided by the amount of products and finance sold to make up the total in the week.</p>
                
                <p>Transaction Managers and Sales Managers – you will be responsible for logging the deals done on a daily basis. The week scores are collated at 9am every Monday for the previous week and the Scoreboard wiped clear so you will have until then to ensure that your previous week’s sales have been registered on the site. Now this should only be a quick entry from anything done on the Sunday and you can hopefully cover that off in the morning meetings.</p>
                
                <p>Any late entries beyond the 9am deadline will not count and will not count for the following week either so please ensure you are registering the deals as and when they are done. The Race To Palmer table is live so you will all be able to see how you are doing against the competition as soon as you log your sale.</p>
                
                <p>Dealerweb will be the source of our audit throughout the race so if it is not loaded on as a deal within the correct week this could mean the deal is removed completely from the incentive. </p> -->
        </div>
    </div>
</section>

<section class="four-pictures">
    <div class="container display-flex">
        <div class="four-pictures__col">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/four-pictures-1.jpg" alt="Soccer Incentive">
        </div>
        <div class="four-pictures__col">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/four-pictures-2.jpg" alt="Soccer Incentive">
        </div>
        <div class="four-pictures__col">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/four-pictures-3.jpg" alt="Soccer Incentive">
        </div>
        <div class="four-pictures__col">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/four-pictures-4.jpg" alt="Soccer Incentive">
        </div>
    </div>
</section>







		<?php
		while ( have_posts() ) :
			the_post();
        ?>    

        <h1><?php //the_title(); ?></h1>
        <?php the_content(); ?>    

        <?php    
		endwhile; // End of the loop.
		?>





<?php

get_footer();
