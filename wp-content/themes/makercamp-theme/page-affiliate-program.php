<?php /* Template Name: Host a camp page */ ?>

<?php get_header(); ?>

  <section class="host-a-camp-hero">
    <article>
      <h1><?php
        $host_hero_title = makercamp_defaults_customizer('host_hero_title');
        if (!empty($host_hero_title))
       		echo $host_hero_title; 
		  ?>
       </h1>
       <p><?php
        $host_hero_text = makercamp_defaults_customizer('host_hero_text');
        if (!empty($host_hero_text)) {
			echo $host_hero_text
		?>
		</p>
        <?php   
        $host_hero_link = makercamp_defaults_customizer('host_hero_link');
			?>
		<a class="apply-now" href="<?php echo $host_hero_link ?>" target="_blank">
       	<?php
        if (!empty($host_hero_link)) {
          	$host_hero_link_title = makercamp_defaults_customizer('host_hero_link_title');
          	if (!empty($host_hero_link_title))
            	echo $host_hero_link_title;
		}
		?></a>
    </article>
  </section>

  <section class="plane-future">
    <div class="container-fluid">
      <h1><?php $host_first_section_title = makercamp_defaults_customizer('host_first_section_title');
      if (!empty($host_first_section_title))
       echo $host_first_section_title;
		  ?>
      </h1>

      <ul class="plane-future-steps">
        <li>
          <span class="first-step">1</span>
          <p><?php $host_first_section_first_text = makercamp_defaults_customizer('host_first_section_first_text');
          if (!empty($host_first_section_first_text))
           	echo $host_first_section_first_text;
          	?>
		  </p>

        </li>
        <li>
          <span class="second-step">2</span>
          <p><?php $host_first_section_second_text = makercamp_defaults_customizer('host_first_section_second_text');
          if (!empty($host_first_section_second_text)) 
           echo $host_first_section_second_text;
          	?>
		  </p>

        </li>
      </ul>
      <ul class="plane-future-steps">
        <li>
		  <span class="third-step">3</span>
          <p><?php $host_first_section_third_text = makercamp_defaults_customizer('host_first_section_third_text');
          if (!empty($host_first_section_third_text))
          	echo $host_first_section_third_text;
          ?>
		  </p>

        </li>
        <li>
          <span class="fourth-step">4</span>
          <p><?php $host_first_section_fourth_text = makercamp_defaults_customizer('host_first_section_fourth_text');
          if (!empty($host_first_section_fourth_text))
          	echo $host_first_section_fourth_text;
          	?>
		  </p>

        </li>
      </ul>
    </div>
  </section>

<?php get_footer(); ?>