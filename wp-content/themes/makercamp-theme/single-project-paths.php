<?php
/**
 * The Template for displaying the project-paths post type.
 *
 * @package Maker Camp Theme
 */
get_header(); 

  $hero_image = get_field('hero_image');
  $path_theme = get_field('path_theme');
  $hero_project_path_description = get_field('hero_project_path_description');
  $hero_image_sponsor = get_field('hero_image_sponsor');

  $sponsored_by = get_field('sponsored_by');
  $sponsored_by_2 = get_field('sponsored_by_2');

  $startmaking_panel_title = get_field('startmaking_panel_title');
  $start_making = get_field('start_making');

  $materials_panel_title = get_field('materials_panel_title');
  $resources = get_field('resources');
  $resources_images = get_field('resources_images');

  $steps_panel_title = get_field('steps_panel_title');
  $steps_description = get_field('steps_description');
  $steps = get_field('steps');

  $keepmaking_panel_title = get_field('keepmaking_panel_title');
  $keep_making = get_field('keep_making');

  $gallery_panel_title = get_field('gallery_panel_title');
  $gallery_of_ideas = get_field('gallery_of_ideas'); 

  $maker_panel_title = get_field('maker_panel_title');
  $featured_maker_info = get_field('featured_maker_info');
  //$ = get_field(''); ?>

  <div id="single-project-path">
    <section class="pp-hero" style="background-image: url(<?php echo $hero_image['url']; ?>);">
      <div class="pp-hero-div">
        <?php if ($hero_image_sponsor) { ?>
          <img src="<?php echo get_resized_remote_image_url($hero_image_sponsor, 1900, 814); ?>" alt="Maker Camp project theme sponsorship logo" />
        <?php } ?>
        <h2><?php echo $path_theme; ?></h2>
        <h1><?php the_title(); ?></h1>
        <hr />
        <h3><?php echo $hero_project_path_description; ?></h3>
      </div>
    </section>


    <section class="pp-sponsor text-center">
      <div class="triangle-block"></div>
      <?php if (!empty($sponsored_by)) { ?>
        <p>SPONSORED BY</p>
        <img src="<?php echo $sponsored_by['url']; ?>" alt="Maker Camp Project Sponsor logo" />
      <?php } ?>
      <?php if (!empty($sponsored_by_2)) { ?>
        <img src="<?php echo $sponsored_by_2['url']; ?>" alt="Maker Camp Project Sponsor logo" />
      <?php } ?>
    </section>

    <section class="pp-details">
      <div class="container">
        <h2 class="text-center"><?php echo $startmaking_panel_title; ?></h2>
        <div class="pp-learn"><?php echo $start_making; ?></div>
      </div>
    </section>

    <section class="pp-materials">
      <div class="container">
        <h2 class="text-center"><?php echo $materials_panel_title; ?></h2>
        <div class="row">
          <div class="col-sm-6">
            <ul class="pp-materials-ul">
              <?php if( have_rows('what_will_you_need') ): ?>
                <?php while( have_rows('what_will_you_need') ): the_row(); 
                  $materials = get_sub_field('materials'); ?>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i><?php echo $materials; ?></li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </div>
          <div class="col-sm-6">
            <div class="row pp-materials-images">
              <?php if( have_rows('resources_images') ): ?>
                <?php while( have_rows('resources_images') ): the_row(); 
                  $image = get_sub_field('image'); ?>
                  <div class="col-xs-4">
                    <div style="background: url(<?php echo get_resized_remote_image_url($image, 200, 200); ?>) no-repeat center center;"></div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php if($steps) { ?>
      <section class="pp-steps container">
        <h2 class="text-center"><?php echo $steps_panel_title; ?></h2>
        <?php if($steps_description) {
          echo '<div class="pp-step-desc">' . $steps_description . '</div>';
        }
        foreach($steps as $step) {
          $click_here_to_add_tip_bubbles = $step['click_here_to_add_tip_bubbles'];

          if ($click_here_to_add_tip_bubbles) {
            $tip_bubbles = $step['tip_bubbles'];
            foreach($tip_bubbles as $tip_bubble) {
              $background_color = $tip_bubble['background_color'];
              $title = $tip_bubble['title'];
              $description = $tip_bubble['description']; ?>

              <div class="row pp-tip-bubbles">
                <div class="col-xs-12">
                  <div class="alert pp-bg-<?php echo $background_color; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/maker-robot-textbox.png" alt="Makey tip icon" />
                    <h4><?php echo $title; ?></h4>
                    <div class="pp-tip-desc"><?php echo $description; ?></div>
                  </div>
                </div>
              </div>
            <?php }
          }
          else {
            $image_1 = $step['image_1'];
            $image_2 = $step['image_2'];
            $image_3 = $step['image_3'];
            $title = $step['title'];
            $description = $step['description']; ?>

            <div class="row">
              <div class="col-xs-12 <?php if(empty($image_2)){ echo 'col-sm-8';} ?>">
                <?php if (!empty($title)) { echo '<h4>' . $title . '</h4>'; } ?>
                <?php if (!empty($description)) { echo '<div class="pp-step-desc">' . $description . '</div>'; } ?>
              </div>

              <?php if (empty($image_2)) { ?>
                <div class="col-xs-12 col-sm-4">
                  <a class="pp-step-img1" href="<?php echo $image_1['url']; ?>">
                    <div style="background-image: url(<?php echo get_fitted_remote_image_url($image_1['url'], 380, 380); ?>);"></div>
                  </a>
                </div>
              <?php }
              elseif (!empty($image_2)) { ?>
                <div class="col-xs-12">
                  <a class="pp-step-img2" href="<?php echo $image_1['url']; ?>">
                    <div style="background-image: url(<?php echo get_fitted_remote_image_url($image_1['url'], 380, 380); ?>);"></div>
                  </a>
                  <a class="pp-step-img2" href="<?php echo $image_2['url']; ?>">
                    <div style="background-image: url(<?php echo get_fitted_remote_image_url($image_2['url'], 380, 380); ?>);"></div>
                  </a>
                  <?php if(!empty($image_3)) { ?>
                    <a class="pp-step-img2" href="<?php echo $image_3['url']; ?>">
                      <div style="background-image: url(<?php echo get_fitted_remote_image_url($image_3['url'], 380, 380); ?>);"></div>
                    </a>
                  <?php } ?>
                </div>
              <?php } ?>
            </div>
          <?php }

        } ?>
      </section>
    <?php } ?>


    <?php if( $keep_making ): ?>
      <section class="pp-whats-next">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 text-center">
              <h2><?php echo $keepmaking_panel_title; ?></h2>
            </div> 
            <div class="col-xs-12">
              <?php echo $keep_making; ?>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>


    <?php if($gallery_of_ideas) { ?>
      <section class="pp-ideas container">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="text-center"><?php echo $gallery_panel_title; ?></h2>
          </div>
          <?php foreach($gallery_of_ideas as $gallery_of_idea) {
            //true/false
            $project_from_2016 = $gallery_of_idea['project_from_2016'];

            if($project_from_2016) {
              //post object
              $project_2016 = $gallery_of_idea['2016_project'];

              // override $post
              $post = $project_2016;
              setup_postdata( $post );
              if ( has_post_thumbnail() ) {
                $project_img = get_the_post_thumbnail_url($post_object->ID);
                
              } else {
                $project_img = get_field('hero_image'); 
                $project_img = $project_img['url'];
              }
              ?>
              <div class="col-xs-6 col-sm-4">
                <a href="<?php the_permalink(); ?>" target="_blank">
                  <h4><?php the_title(); ?></h4>
                  <div class="pp-ideas-img" style="background: url('<?php echo get_resized_remote_image_url($project_img, 400, 400); ?>')no-repeat center center;"></div>
                  <div class="mc-blue-btn">Make This!</div>
                </a>
              </div>

            <?php }
            else { ?>
              <div class="col-xs-6 col-sm-4">
                <a href="<?php echo $gallery_of_idea['url']; ?>" target="_blank">
                  <h4><?php echo $gallery_of_idea['title']; ?></h4>
                  <div class="pp-ideas-img" style="background: url(<?php echo get_resized_remote_image_url($gallery_of_idea['image'], 400, 400); ?>)no-repeat center center;"></div>
                  <div class="mc-blue-btn">Make This!</div>
                </a>
              </div>
              

            <?php }
          }
          //reset the $post object so the rest of the page works correctly
          wp_reset_postdata(); ?>
        </div>
      </section>
    <?php } ?>

    <?php if($featured_maker_info) { ?>
      <section class="pp-featured-maker">
        <div class="container">
          <h2 class="text-center"><?php echo $maker_panel_title; ?></h2>
          <div><?php echo $featured_maker_info; ?></div>
        </div>
      </section>
    <?php } ?>

    <section class="pp-buttons container text-center">
      <a class="ghost-arrow-btn" href="/projects"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>BROWSE MORE MAKER CAMP PROJECTS</a>
      <a class="ghost-arrow-btn" href="http://makezine.com/projects/" target="_blank"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>FIND EVEN MORE PROJECTS AT Make:</a>
    </section>

    <section class="pp-disclaimer">
      <div class="container">
        <p><strong>Please Note</strong></p>
        <p>Your safety is your own responsibility, including proper use of equipment and safety gear, and determining whether you have adequate skill and experience. Power tools, electricity, and other resources used for these projects are dangerous, unless used properly and with adequate precautions, including safety gear and adult supervision. Some illustrative photos do not depict safety precautions or equipment, in order to show the project steps more clearly. Use of the instructions and suggestions found in Maker Camp is at your own risk. Maker Media, Inc., disclaims all responsibility for any resulting damage, injury, or expense.</p>
      </div>
    </section>

    <section class="pp-colab-share">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/collabicon.png" alt="Collaborate on making projects here at Maker Camp" />
            <h3>COLLABORATE</h3>
            <p>Make friends with Campers from all around the world and swap ideas!</p>
            <a class="mc-blue-arrow-btn" href="https://plus.google.com/communities/107377046073638428310" target="_blank"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>JOIN THE <span class="hidden-xs">MAKER CAMP </span>COMMUNITY</a>
          </div>
          <div class="col-xs-12 col-sm-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/shareicon.png" alt="Share your ideas and what you build on social media" />
            <h3>ALL DONE? SHARE IT!</h3>
            <p>Share pictures and videos of your cool build! Be sure to use #makercamp</p>
            <a class="mc-blue-arrow-btn" href="/#share"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>POST YOUR PROJECTS</a>
          </div>
        </div>
      </div>
    </section>

    <?php echo stuff_for_sale_panel(); ?>

  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $(".pp-step-img1, .pp-step-img2").fancybox();
    });
  </script>

<?php get_footer(); ?>