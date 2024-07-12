<?php get_header();?>

<section class="page-wrap">
  <div class="container">
    <?php if(has_post_thumbnail() ):?>
      <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
    <?php endif;?>
    <div class="service-title">
      <h1><?php the_title();?></h1>
    </div>
    <?php get_template_part('includes/section', 'blogcontent');?>   
  </div>   
</section>

<?php get_footer();?> 

