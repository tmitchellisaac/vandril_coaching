<?php get_header();?>

<?php $title = get_field('title')?>
<?php $descr_1 = get_field('about_me_description_1')?>
<?php $descr_2 = get_field('about_me_description_2')?>
<?php $descr_3 = get_field('about_me_description_3')?>

<section class="page-wrap">
  <div class="container d-flex">
    <section class="row d-flex">

      <div class="col-lg-2 col-md-12 col-sm-12 d-flex d-none d-lg-block">
        <div class="sidebar">
          <?php if( is_active_sidebar('page-sidebar') ):?>
            <?php dynamic_sidebar('page-sidebar');?>
          <?php endif;?>
        </div>
      </div>

      <div class="col-lg-10 col-md-12 col-sm-12">
        <div class="container about-container">
          <div class="row text-nowrap">
            <h1 class="about-title"><?php echo $title?></h1>
          </div>
          <div class="row flex-column description-row ">
            <p class="descr_item"> <?php echo $descr_1?> </o>
            <p class="descr_item"> <?php echo $descr_2?> </o>
            <p class="descr_item"> <?php echo $descr_3?> </o>
          </div>
        </div>
      </div>

    </section>
  </div>    
</section>

<?php get_footer();?>