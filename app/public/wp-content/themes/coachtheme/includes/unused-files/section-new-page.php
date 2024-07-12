<?php if( have_posts() ): while( have_posts() ): the_post();?>


<section class="container">
  <div class="row">
    <div class="col-lg-6 d-flex justify-content-left">
      <?php the_content();?>
    </div> 
    <div class="col-lg-6 d-flex justify-content-left">
      contentian
      <ul>
        
        <li> Price: <?php the_field('price');?> </li>
        <li> Length: <?php the_field('length');?>  </li>
        <li> Description: <?php the_field('description');?></li>  
      </ul>
    </div>
  </div>
</section>

<?php endwhile; else: endif;?>

