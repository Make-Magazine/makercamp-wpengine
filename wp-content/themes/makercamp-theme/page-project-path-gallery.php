<?php /* Template Name: Project Path Gallery */ ?>

<?php get_header(); ?>

<div class="project-path-gallery">

  <?php
  $hero_image = get_field('hero_image'); ?>

  <section class="ppg-hero" style="background-image: url(<?php echo $hero_image['url']; ?>);">
    <div class="ppg-div">
      <h1><?php the_title(); ?></h1>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Maker-Camp_Summer-2017@2x-min.png" alt="Maker Camp Project Paths Makey icon" />
    </div>
    
    <?php if( have_rows('project_paths') ): ?>

      <div class="ppg-c-paths">

        <?php while( have_rows('project_paths') ): the_row(); 

          $image_1 = get_sub_field('image_1');
          $project_path_title = get_sub_field('project_path_title'); ?>
      
          <div class="col-xs-4">
            <div class="ppg-c-img" style="background: url(<?php echo get_resized_remote_image_url($image_1['url'], 300, 300); ?>) no-repeat center center;">
              <div class="ppg-gradient"></div>
              <h4><?php echo $project_path_title; ?></h4>
            </div>
          </div>

        <?php endwhile; ?>

      </div>

    <?php endif; ?>
  </section>

  <section class="ppg-startmaking">
    <div class="triangle-block"></div>
    <div class="container">
      <h2>Start Making!</h2>
      <h3>See our helpful resources guide for tips and tricks on how to lead these projects with your campers</h3>
      <a href="/get-started">RESOURCES</a>
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
          } ?>
        </div>
      </div>
    </div>
  </section>

  <section class="ppg-paths">

    <?php if( have_rows('project_paths') ): ?>

      <?php while( have_rows('project_paths') ): the_row(); 

        $image_1 = get_sub_field('image_1');
        $image_2 = get_sub_field('image_2');
        $image_3 = get_sub_field('image_3');
        $makey_logo = get_sub_field('makey_logo');
        $project_path_title = get_sub_field('project_path_title');
        $description = get_sub_field('description');
        $project_goals = get_sub_field('project_goals');
        $url = get_sub_field('url'); ?>

        <article>
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <img class="ppg-feat-img" src="<?php echo get_resized_remote_image_url($image_1['url'], 300, 300); ?>" alt="Project Path featured image 1" />
                <img class="ppg-feat-img" src="<?php echo get_resized_remote_image_url($image_2['url'], 300, 300); ?>" alt="Project Path featured image 2" />
                <img class="ppg-feat-img" src="<?php echo get_resized_remote_image_url($image_3['url'], 300, 300); ?>" alt="Project Path featured image 3" />
              </div>
              <div class="col-xs-12 col-sm-6">
                <h2><?php echo $project_path_title; ?></h2>
                <div class="ppg-path-desc"><?php echo $description; ?></div>
                <h4>YOU'LL GET TO:</h4>
                <div class="ppg-path-goals"><?php echo $project_goals; ?></div>
                <a href="<?php echo $url; ?>" class="mc-blue-btn">START MAKING</a>
              </div>
            </div>
            <img class="ppg-makey" src="<?php echo $makey_logo['url']; ?>" alt="Makey theme icon" />
          </div>
        </article>

      <?php endwhile; ?>

    <?php endif; ?>

  </section>

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

</div>

<script>
$(document).ready(function() {
  //initial rotation
  jQuery('.ppg-feat-img').each(function() {
      var randrot = Math.random() * 20 - 10; //has to be local to run w/ each function call
      jQuery(this).css('transform', 'rotate(' + randrot + 'deg) scale(1)');
  });
  //hover/unhover rotations
  jQuery('.ppg-feat-img').hover(function() {
      var randrot = Math.random() * 20 - 10; //has to be local to run w/ each function call
    jQuery(this).css({
      transform: "rotate(" + randrot + "deg) scale(1.25)", 
      'z-index': "1"//kind of hacky, but standard notation didn't like the '-' in z-index, open to suggestions
      });
  }, function() {
      var randrot = Math.random() * 20 - 10; //has to be local to run w/ each function call
    jQuery(this).css({
      transform: "rotate(" + randrot + "deg) scale(1)", 
      'z-index': "0"//kind of hacky, but standard notation didn't like the '-' in z-index, open to suggestions
      });
  });
});
</script>

<?php get_footer(); ?>