<?php get_header();?>

<section class="page-wrap">

  <div class="container">    
  This is the category blog template
  <?php get_template_part('includes/section', 'archive');?>
  <?php previous_posts_link();?>
  <?php next_posts_link();?>
  </div>    
</section>

<?php get_footer();?>

