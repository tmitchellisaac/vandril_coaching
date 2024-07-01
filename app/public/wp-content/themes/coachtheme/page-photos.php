<?php get_header();?>

<section class="page-wrap">
  <div class="container">
      <h1 class="photos-title"><?php the_title();?></h1>
      <?php get_template_part('includes/section', 'photos');?>
  </div>    
</section>

<?php get_footer();?>