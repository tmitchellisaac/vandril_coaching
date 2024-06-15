<?php if( have_posts() ): while( have_posts() ): the_post();?>

  <p><?php echo get_the_date();?></p>

  <?php the_content();?>
  <p>Posted By: <?php the_author();?></p>

  <?php if (has_post_thumbnail()) {} ?>

  <?php comments_template(); ?>
<?php endwhile; else: endif;?>

