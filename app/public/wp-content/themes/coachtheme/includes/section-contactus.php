<?php $description = get_field('contact_us');?>

<?php if( have_posts() ): while( have_posts() ): the_post();?>

<section class="container contact-us-cont d-flex">
  <div class="contact-us-content">
    <?php echo $description ?>
  </div>
</section>

<?php endwhile; else: endif;?>


