<?php get_header();?>

<section class="page-wrap">
<div class="container">
<section class="row">

  <div class="col-lg-3">
    <?php if( is_active_sidebar('blog-sidebar') ):?>
      <?php dynamic_sidebar('blog-sidebar');?>
    <?php endif;?>
  </div>

  <div class="col-lg-9">
    This is the archive-section template
    <?php get_template_part('includes/section', 'archive');?>
    <?php previous_posts_link();?>
    <?php next_posts_link();?>
  </div>
</section>
</div>    
</section>

<?php get_footer();?>