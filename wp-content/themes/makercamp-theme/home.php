<?php get_header(); ?>

  <section class="home-hero">
    <video id="hero-video" autoplay="autoplay" muted="muted" loop poster="<?php echo get_template_directory_uri(); ?>/assets/img/Maker-Camp-video-poster.jpg">
      <source src="<?php echo get_template_directory_uri(); ?>/assets/video/Maker-Camp-Intro-Video-2017-v2.mp4" type="video/mp4">
    </video>
    <div class="container text-center">
      <h2>WELCOME TO<br><strong>MAKER CAMP</strong><br><span>Celebrating the National Week of Making</span></h2>
      <a class="mc-blue-btn" href="/get-started">Get Started Making</a>
      <a class="mc-blue-btn" href="/explore#host">Start a Camp</a>
      <div class="hidden col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
        <h1>Maker Camp is where kids aged 7–12 learn the magic of making by building cool stuff. Ready to help kids fire up their imaginations and challenge their skills? We're here to help you organize your own Maker Camp in your community or at home.</h1>
      </div>
    </div>
    <i style="margin-bottom:5px;" class="fa fa-chevron-down" aria-hidden="true"></i>
  </section>

  <section class="home-sponsor">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <p class="pull-right">THIS YEAR'S MAKER CAMP IS MADE</br> POSSIBLE BY THE GENEROUS SUPPORT OF:</P>
        </div>
        <div class="col-xs-12 col-sm-6 home-sponsor-img">
          <?php
          $sponsor_pages = get_pages(array(
            'meta_key' => '_wp_page_template',
            'meta_value' => 'page-sponsors.php'
          ));
          foreach($sponsor_pages as $sponsor_page) {
            $sponsor_ID = $sponsor_page->ID;
          }
          // check if the nested repeater field has rows of data
          if( have_rows('sponsors', $sponsor_ID)) {
            // loop through the rows of data
            while ( have_rows('sponsors', $sponsor_ID) ) {
              the_row();

              if( get_row_layout() == 'sponsors_with_image' ) {
                $sub_field_3 = get_sub_field('sponsors_image_size'); //size option

                // check if the nested repeater field has rows of data
                if( have_rows('sponsors_with_image') ) {

                  // loop through the rows of data
                  while ( have_rows('sponsors_with_image') ) {
                    the_row();

                    $sub_field_1 = get_sub_field('image'); //Photo
                    $photon = get_fitted_remote_image_url($sub_field_1['url'], 300, 300);

                    // check if the nested repeater field has rows of data
                    if( $sub_field_3 == 'sponsors-box-xl' ) {
                      echo '<img src="' . $photon . '" class="img-responsive" alt="Maker Camp Sponsor logos" />';
                    }
                  }
                }
              }// end if sponsor image rows
            }// end while
          }
          ?>

        </div>
      </div>
    </div>
  </section>

  <section class="what-happens-at-mc">
    <div class="">
      <h2>WHAT HAPPENS AT <strong>MAKER CAMP?</strong></h2>
      <div class="foating-divs">
        <div class="foating-div-1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Make_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>PROJECTS</h4>
          <p>Check out our awesome collection of projects from last summer!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="/project-paths"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>START MAKING</a>
          </div>
        </div>
        <div class="foating-div-2">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Share_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>SHARE</h4>
          <p>Post your projects on social media with #MakerCamp and it will appear below!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="#share"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>SEE WHAT CAMPERS ARE SHARING</a>
          </div>
        </div>
        <div class="foating-div-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Collaborate_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>COMMUNITY</h4>
          <p>Make friends with campers from all around the world and swap ideas!</p>
          <a class="mc-blue-arrow-btn" href="https://plus.google.com/communities/107377046073638428310" target="_blank"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>JOIN <span>MAKER CAMP </span>COMMUNITY</a>
        </div>
        <div class="foating-div-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Explore_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>FIND A CAMP</h4>
          <p>Find a Maker Camp near you!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="/explore"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>BROWSE <span>MAKER CAMP </span>MAP</a>
          </div>
        </div>
        <div class="foating-div-5">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Host_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>START A CAMP</h4>
          <p>Become a Maker Camp affiliate and introduce kids to the joys of making!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="/explore#host"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>BECOME AN AFFILIATE</a>
          </div>
        </div>
      </div>
    </div>
    <dic class="clearfix"></div>
  </section>

  <section class="newsletter-panel">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <h4>Join Maker Camp Community</h4>
          <p>Get the latest news near you.</p>
        </div>
        <div class="col-xs-12 col-sm-6">
          <form class="form-inline sub-form whatcounts-signup1" action="http://whatcounts.com/bin/listctrl" method="POST">
            <input type="hidden" name="slid_1" value="6B5869DC547D3D4658DF84D7F99DCB43" /><!-- Maker Camp Newsletter -->
            <input type="hidden" name="slid_2" value="6B5869DC547D3D46941051CC68679543" /><!-- Maker Media Newsletter -->
            <input type="hidden" name="multiadd" value="1" />
            <input type="hidden" name="cmd" value="subscribe" />
            <input type="hidden" name="custom_source" value="camp home page" />
            <input type="hidden" name="custom_incentive" value="none" />
            <input type="hidden" name="custom_url" value="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
            <input type="hidden" id="format_mime" name="format" value="mime" />
            <input type="hidden" name="custom_host" value="<?php echo $_SERVER["HTTP_HOST"]; ?>" />
            <input id="wc-email" class="form-control nl-panel-input" name="email" placeholder="Email Address" required type="email">
            <input class="btn-cyan" value="Yes Please" type="submit">
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php echo social_media_panel(); ?>

<!--   <section class="a-day-at-mc">
    <img src="<?php echo get_template_directory_uri() . '/assets/img/hm_pg_video_bg.jpg' ?>" alt="Click here to see what its like to experience Maker Camp for kids" />
    <div class="container text-center">
      <h4>WATCH</h4>
      <h2>A DAY AT MAKER CAMP</h2>
      <h4>Ready, Set, Start Making!</h4>
      <button class="blue-play-btn fancybox-promo fancybox.iframe" href="https://www.youtube.com/embed/RCzuku8rm8M?autoplay=1">
        <span class="fa-stack fa-2x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-play fa-stack-1x fa-inverse"></i>
        </span>
      </button>
    </div>
  </section> -->

  <section class="how-can-you-start">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <h2>WANT TO START</br> YOUR OWN <strong>MAKER CAMP</strong>?</h2>
          <a class="mc-blue-btn" href="/explore#host">START A CAMP</a>
        </div>
        <div class="col-xs-12 col-sm-6">
            <p>Maker Camp provides a simple, fun way for kids to get involved in making. Our worldwide network of affiliates host Maker Camps in public libraries, community groups, makerspaces, and maker homes. Cool projects are always available here online! More than <strong>1 million kids</strong> have participated in Maker Camp since it launched in 2012.</p>
        </div>
      </div>
    </div>
  </section>


  <?php
  $sponsor_pages = get_pages(array(
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-sponsors.php'
  ));
  foreach($sponsor_pages as $sponsor_page) {
    $sponsor_ID = $sponsor_page->ID;
  }
  $sponsor_panel_field_3 = get_sub_field('become_a_sponsor_button', $sponsor_ID);

  // check if the nested repeater field has rows of data
  if( have_rows('sponsors', $sponsor_ID)) {
    echo '
    <section class="sponsor-slide">
      <div class="container">
        <div class="row sponsor_panel_title">
          <div class="col-xs-12 text-center">
            <div class="title-w-border-r">
              <h2 class="sponsor-slide-title">'. get_the_title( $sponsor_ID ) .'</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div id="carousel-sponsors-slider" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">';
                // loop through the rows of data
                while ( have_rows('sponsors', $sponsor_ID) ) {
                  the_row();
                  $sponsor_group_title = get_sub_field('sponsor_group_title'); //Sponsor group title

                  if( get_row_layout() == 'sponsors_with_image' ) {
                    $sub_field_3 = get_sub_field('sponsors_image_size'); //size option

                    // check if the nested repeater field has rows of data
                    if( have_rows('sponsors_with_image') ) {
                      echo '
                      <div class="item">
                        <div class="row spnosors-row">
                          <div class="col-xs-12">';
                            if(!empty($sponsor_group_title)) {
                              echo '<h4 class="text-center sponsors-type">' . $sponsor_group_title . '</h4>';
                            }
                            echo '
                            <div class="faire-sponsors-box">';

                              // loop through the rows of data
                              while ( have_rows('sponsors_with_image') ) {
                                the_row();

                                $sub_field_1 = get_sub_field('image'); //Photo
                                $sub_field_2 = get_sub_field('url'); //URL
                                $photon = get_fitted_remote_image_url($sub_field_1['url'], 300, 300);

                                echo '<div class="' . $sub_field_3 . '">';
                                if( $sub_field_2 ) {
                                  echo '<a href="' . $sub_field_2 . '" target="_blank">';
                                }
                                echo '<img src="' . $photon . '" alt="Maker Faire sponsor logo" class="img-responsive" />';
                                if( $sub_field_2 ) {
                                  echo '</a>';
                                }
                                echo '</div>';
                              }
                            echo '
                            </div>
                          </div>
                        </div>
                      </div>';
                    } // end if image
                } // end row layout
              }
              echo '
              </div>
            </div>
          </div>
        </div>
        <div class="row sponsor_panel_bottom">
          <div class="col-xs-12 text-center">
            <p>';
              $become_a_sponsor_button = get_field('become_a_sponsor_button', $sponsor_ID);
              if($become_a_sponsor_button) {
                echo '<a href="' . $become_a_sponsor_button . '">Become a Sponsor</a><span>&bull;</span>';
              }
              echo '
              <a href="/sponsors">All Sponsors</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <script>
      jQuery(".sponsor-slide .carousel-inner .item:first-child").addClass("active");
      jQuery(function() {
        var title = jQuery(".item.active .sponsors-type").html();
      });
    </script>';
  } ?>

  <section class="helps-make-makers">
    <div class="container">
      <h3>MORE MAKER RESOURCES</h3>
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <p>Make: produces a variety of great products and helpful project tutorials to enhance your making experience. Here are a few select items that Maker Camp affiliates are sure to enjoy.</p>
      </div>
    </div>
    <div class="triangle-block"></div>
  </section>

  <?php echo stuff_for_sale_panel(); ?>

<?php get_footer(); ?>