<?php
/*
 * Theme Front Page 
*/


get_header() ?>

  <section id="slider_area">
    <div class="slider">
      <?php 
      query_posts("post_type=slider & post_status=publish & posts_per_page=3 & order=ASC & paged=". get_query_var("post")); 

      if(have_posts()) :
        while(have_posts()) : the_post(); 
      ?>
        <div>
          <?php echo the_post_thumbnail("slider") ?>
        </div>

      <?php 
        endwhile;
        endif;
      ?>
    </div>
  </section>

  <section id="slider_area2">
  <div class="owl-carousel owl-theme">
  <?php 
      query_posts("post_type=slider & post_status=publish & posts_per_page=3 & order=ASC & paged=". get_query_var("post")); 

      if(have_posts()) :
        while(have_posts()) : the_post(); 
      ?>
        <div>
          <?php echo the_post_thumbnail("slider") ?>
        </div>

      <?php 
        endwhile;
        endif;
      ?>
  </div>
  <a class="button secondary play">Play</a>
  <a class="button secondary stop">Stop</a>
  </section>

  <section id="service_area">
    <div class="container mt-3">
      <div class="row">
        <?php 
        query_posts("post_type=service & post_status=publish & posts_per_page=3 & order=ASC & paged=". get_query_var("post")); 

        if(have_posts()) :
          while(have_posts()) : the_post(); 
        ?>
        <div class="col-md-4">
          <div class="child_service">
          <h2><?php the_title() ?></h2>
          <?php echo the_post_thumbnail("service") ?>
          <?php the_excerpt() ?>
          </div>
        </div>

        <?php 
          endwhile;
          endif;
        ?>
      </div>
    </div>
  </section>

  <section id="service_area">
    <div class="container mt-3">
      <div class="row">
        <?php 
        query_posts("post_type=project & post_status=publish & posts_per_page=3 & order=ASC & paged=". get_query_var("post")); 

        if(have_posts()) :
          while(have_posts()) : the_post(); 
        ?>
        <div class="col-md-4">
          <div class="child_service">
          <h2><?php the_title() ?></h2>
          <?php echo the_post_thumbnail("project") ?>
          <?php the_excerpt() ?>
          </div>
        </div>

        <?php 
          endwhile;
          endif;
        ?>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <a href="<?php print home_url() ?>/project">View All Project</a>
        </div>
      </div>
    </div>
  </section>



<?php get_footer() ?>