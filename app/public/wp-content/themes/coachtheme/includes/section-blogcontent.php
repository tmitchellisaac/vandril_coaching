<?php if( have_posts() ): while( have_posts() ): the_post();?>

  <div class="service-content">
    <?php the_content();?>
  </div>
    <?php if (has_post_thumbnail()) {} ?>
  <div class="service-note">
    <?php comments_template(); ?>
  </div>
<?php endwhile; else: endif;?>

