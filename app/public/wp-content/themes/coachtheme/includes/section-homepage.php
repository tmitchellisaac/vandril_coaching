<?php if( have_posts() ): while( have_posts() ): the_post();?>


<section class="container">
  <div class="row">
    <div class="col-lg-6 d-flex justify-content-left">
      <?php the_content();?>
    </div> 
    <div class="col-lg-6 d-flex justify-content-left">
      <?php
      // Replace 123 with your actual attachment ID
      $attachment_id = 66; 
      $image_url = wp_get_attachment_url($attachment_id);
      ?>
      <img src="<?php echo esc_url($image_url); ?>" alt="Description of the image" class="img-fluid">
    </div>
  </div>
</section>

<?php endwhile; else: endif;?>