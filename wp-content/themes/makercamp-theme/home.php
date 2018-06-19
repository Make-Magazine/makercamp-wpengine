<?php get_header(); ?>
<section class="home-hero">
   <video id="hero-video" autoplay="autoplay" muted="muted" loop poster="<?php echo get_template_directory_uri(); ?>/assets/img/Maker-Camp-video-poster.jpg">
      <source src="<?php echo get_template_directory_uri(); ?>/assets/video/MakerCamp2018Loop.mp4" type="video/mp4">
   </video>--
   <div class="container text-center">
      <h2>WELCOME TO<br><strong>MAKER CAMP</strong><!-- <br><span>Celebrating the National Week of Making</span> --></h2>
      <i style="margin-bottom:5px;" class="fa fa-chevron-down" aria-hidden="true"></i>
      <img class="home-hero-makey" src="<?php echo get_template_directory_uri(); ?>/assets/img/MAkey---Pinwheel@2x.png" alt="Maker Camp learning for kids Makey icon" />
    </div>
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
            var_dump($sponsor_page);
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


  <section class="home-newsl-video">
    <div class="container">
      <!-- <div class="home-newsl-video-l">
        <div class="embed-youtube">
          <iframe src="https://www.youtube.com/embed/wXP6HNkryl0?showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div> -->
      <div class="home-newsl-video-r">
        <h3>Join <strong>Make:</strong> EDUCATION e-NEWS</h3>
        <p>How making is transforming learning.</p>
        <button class="mc-blue-btn btn fancybox2-trigger">SIGN UP TODAY</button>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Supplies@2x.png" alt="Maker Camp porjects learing image" />
    </div>
  </section>

  <section class="home-tint-up" id="share">
      <script async src="https://d36hc0p18k1aoc.cloudfront.net/public/js/modules/tintembed.js"></script><div class="tintup" data-id="makercamp" data-columns="" data-mobilescroll="true"    data-infinitescroll="true" data-personalization-id="793105" style="height:500px;width:100%;"></div>
  </section>

  <section class="what-happens-at-mc">
    <div class="">
      <h2>WHAT HAPPENS AT <strong>MAKER CAMP?</strong></h2>
      <div class="floating-divs">
        <div class="floating-div-1">
          <a href="/project-paths"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Make_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" /></a>
          <h4>PROJECTS</h4>
          <p>Check out our awesome collection of projects!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="/project-paths"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>START MAKING</a>
          </div>
        </div>
        <div class="floating-div-2">
          <a href="#share"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Share_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" /></a>
          <h4>SHARE</h4>
          <p>Post your projects on social media with #MakerCamp and it will appear above!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="#share"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>SEE WHAT CAMPS ARE SHARING</a>
          </div>
        </div>
        <div class="floating-div-3">
          <a href="https://plus.google.com/communities/107377046073638428310" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Collaborate_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" /></a>
          <h4>COMMUNITY</h4>
          <p>Connect with camps from all around the world and swap ideas!</p>
          <a class="mc-blue-arrow-btn" href="https://plus.google.com/communities/107377046073638428310" target="_blank"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>JOIN <span>MAKER CAMP </span>COMMUNITY</a>
        </div>
        <div class="floating-div-4">
          <a href="/explore"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Explore_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" /></a>
          <h4>FIND A CAMP</h4>
          <p>Find a Maker Camp near you!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="/explore"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>BROWSE <span>MAKER CAMP </span>MAP</a>
          </div>
        </div>
        <div class="floating-div-5">
          <a href="https://makercamp.com/affiliate-program"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Host_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" /></a>
          <h4>START A CAMP</h4>
          <p>Become a Maker Camp affiliate and introduce kids to the joys of making!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="https://makercamp.com/affiliate-program"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>BECOME AN AFFILIATE</a>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>

  <section class="newsletter-panel">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <h4>Join Maker Camp Community</h4>
          <p>Get the latest news near you.</p>
        </div>
        <div class="col-xs-12 col-sm-6">
          <form class="form-inline sub-form whatcounts-signup1" action="https://secure.whatcounts.com/bin/listctrl" method="POST">
            <input type="hidden" name="slid" value="6B5869DC547D3D4658DF84D7F99DCB43" /><!-- Maker Camp -->
            <input type="hidden" name="cmd" value="subscribe" />
            <input type="hidden" name="custom_source" value="camp home page" />
            <input type="hidden" name="custom_incentive" value="none" />
            <input type="hidden" name="custom_url" value="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
            <input type="hidden" id="format_mime" name="format" value="mime" />
            <input type="hidden" name="custom_host" value="<?php echo $_SERVER["HTTP_HOST"]; ?>" />
            <div id="recapcha-home-panel" class="g-recaptcha" data-size="invisible"></div>
            <input id="wc-email-1" class="form-control nl-panel-input" name="email" placeholder="Email Address" required type="email">
            <input class="btn-cyan" value="Yes Please" type="submit">
          </form>
        </div>
      </div>
    </div>
  </section>

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

<!--   <section class="how-can-you-start">
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
  </section> -->


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

  <!-- Newsletter Modal -->
  <script>
  $(function() {
    $(".fancybox2").fancybox({
      autoSize : false,
      width  : 465,
      height  : 200,
      afterLoad   : function() {
        this.content = this.content.html();
      }
    });

    // On home page button click then launch
    $( ".fancybox2-trigger" ).click(function() {
      $(".fancybox2").trigger('click');
    });
  });
  </script>

  <div class="fancybox2" style="display:none;">
    <h2>Sign-up for updates on Maker Camp projects!</h2>
    <form class="home-nl-modal" name="MailingList" action="//secure.whatcounts.com/bin/listctrl" method="POST">
      <input type="hidden" name="slid" value="6B5869DC547D3D4658DF84D7F99DCB43" /><!-- Maker Camp -->
      <input type="hidden" name="cmd" value="subscribe" />
      <input type="hidden" name="custom_host" value="makercamp.com" />
      <input type="hidden" name="custom_incentive" value="none" />
      <input type="hidden" name="custom_source" value="modal" />
      <input type="hidden" name="custom_url" value="" />
      <div id="recapcha-home-modal" class="g-recaptcha" data-size="invisible"></div>
      <input type="email" id="titllrt-titllrt" name="email" placeholder="Your E-mail" required>
      <input type="submit" name="Submit" id="newsletter-set-cookie" value="Sign Me Up" class="btn-modal newsletter-set-cookie">
      <input type="hidden" id="format_mime" name="format" value="mime" />
    </form>
  </div>
  <!-- End Newsletter Modal -->

<?php get_footer(); ?>