<?php /* Template Name: About page */ ?>

<?php get_header(); ?>

  <section class="about-us">
    <div class="container-fluid">
      <?php
        $about_hero_title = makercamp_defaults_customizer('about_hero_title');
        if (!empty($about_hero_title)) :
      ?>
      <h1><?php echo $about_hero_title; ?></h1>
      <?php
        endif;

        $about_hero_text = makercamp_defaults_customizer('about_hero_text');
        if (!empty($about_hero_text)) :
      ?>
      <p><?php echo $about_hero_text; ?></p>
      <?php endif; ?>
    </div>
  </section>

  <section class="our-mission">
    <div class="container-fluid">
      <?php $section_first_title = makercamp_defaults_customizer( 'section_first_title' );
      if (!empty($section_first_title)) : ?>
        <h1><?php echo $section_first_title; ?></h1>
      <?php endif; ?>

      <?php $section_first_text_first = makercamp_defaults_customizer( 'section_first_text_first' );
      if (!empty($section_first_text_first)) : ?>
        <p><?php echo $section_first_text_first; ?></p>
      <?php endif; ?>

      <?php $section_first_text_second = makercamp_defaults_customizer( 'section_first_text_second' );
      if (!empty($section_first_text_second)) : ?>
        <p><?php echo $section_first_text_second; ?></p>
      <?php endif; ?>

      <?php $section_first_text_third = makercamp_defaults_customizer( 'section_first_text_third' );
      if (!empty($section_first_text_third)) : ?>
        <p><?php echo $section_first_text_third; ?></p>
      <?php endif; ?>

      <?php $section_first_text_fourth = makercamp_defaults_customizer( 'section_first_text_fourth' );
      if (!empty($section_first_text_fourth)) : ?>
        <p><?php echo $section_first_text_fourth; ?></p>
      <?php endif; ?>

      <img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>about_robot.png" alt="virtual trips">
      <div class="clearfix"></div>
      <a class="mc-blue-btn" style="margin-top:30px;" href="/project-paths">Project Paths</a>
    </div>
  </section>

  <?php 
  $second_section_picture = makercamp_defaults_customizer( 'second_section_picture' );
  $second_section_title = makercamp_defaults_customizer( 'second_section_title' ); 
  if ($second_section_picture || $second_section_title) { ?>
  <section class="partner-mention">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-3">
              <?php
              $second_section_link = makercamp_defaults_customizer( 'second_section_link' );
              if ( ! empty( $second_section_link ) ) : ?>
                <a class="pm-link" href="<?php echo $second_section_link ?>" target="_blank">
              <?php endif; ?>

                <?php if ( ! empty( $second_section_picture ) ) : ?>
                  <img class="pm-img" src="<?php echo $second_section_picture; ?>" alt="Make: Start Making! book cover">
                <?php endif; ?>

              <?php if ( ! empty( $second_section_link ) ) : ?>
                </a>
              <?php endif; ?>

            </div>
            <div class="col-sm-8 col-md-8 col-lg-9">
              <?php 
              if ( ! empty( $second_section_title ) ) : ?>
                <h4 class="pm-h4" ><?php echo $second_section_title; ?></h4>
              <?php endif;

              $second_section_subtitle = makercamp_defaults_customizer( 'second_section_subtitle' );
              if ( ! empty( $second_section_subtitle ) ) : ?>
                <p class="pm-p" ><?php echo $second_section_subtitle; ?></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php } ?>
  

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
  <form name="MailingList" action="//secure.whatcounts.com/bin/listctrl" method="POST">
    <input type="hidden" name="slid" value="6B5869DC547D3D4658DF84D7F99DCB43" /><!-- Maker Camp -->
    <input type="hidden" name="cmd" value="subscribe" />
    <input type="hidden" name="custom_host" value="makercamp.com" />
    <input type="hidden" name="custom_incentive" value="none" />
    <input type="hidden" name="custom_source" value="modal" />
    <input type="hidden" name="goto" value="//www.makercamp.com/?thankyou" />
    <input type="hidden" name="custom_url" value="" />
    <div id="recapcha-about" class="g-recaptcha" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;margin-bottom:-8px;"></div>
    <input type="email" id="titllrt-titllrt" name="email" placeholder="Your E-mail" required>
    <input type="submit" name="Submit" id="newsletter-set-cookie" value="Sign Me Up" class="btn-modal newsletter-set-cookie">
    <input type="hidden" id="format_mime" name="format" value="mime" />
  </form>
</div>
<!-- End Newsletter Modal -->

<?php get_footer(); ?>