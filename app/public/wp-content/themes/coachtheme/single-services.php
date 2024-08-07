<?php get_header();?>
<?php $service= get_field('service_description');?>

<section class="page-wrap">
  <div class="container service-car">
    <?php if(has_post_thumbnail() ):?>
      <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
      <h1><?php the_title();?></h1>
    <?php endif;?>
    <div class="row"> 
      <div class="col-lg-6">
        <?php get_template_part('includes/section', 'blogcontent');?> 
      </div>
      <div class="col-lg-6">
        <ul>
          <li> Price: <?php the_field('price');?> </li>
          <li> Length: <?php the_field('length');?>  </li>
          <li> Description: <?php the_field('description');?></li>  
        </ul>
      </div>
    </div>
  </div>   
</section>

<?php get_footer();?> 

