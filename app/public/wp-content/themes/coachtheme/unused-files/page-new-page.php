<?php get_header();?>

<?php $image = get_field('home_page_main_image');?>
<?php $image_main = $image['sizes']['large'];?>

<?php $footer_1_raw= get_field('footer_photo_1');?>
<?php $footer_2_raw= get_field('footer_photo_2');?>
<?php $footer_3_raw= get_field('footer_photo_3');?>
<?php $footer_4_raw= get_field('footer_photo_4');?>

<?php $footer_photo_1 = $footer_1_raw['sizes']['medium'];?>
<?php $footer_photo_2 = $footer_2_raw['sizes']['medium'];?>
<?php $footer_photo_3 = $footer_3_raw['sizes']['medium'];?>
<?php $footer_photo_4 = $footer_4_raw['sizes']['medium'];?>

<?php $name = get_field('home_name');?>
<?php $short_bio = get_field('short_bio');?>
<?php $tenet_1 = get_field('tenet_1');?>  
<?php $tenet_2 = get_field('tenet_2');?>
<?php $tenet_3 = get_field('tenet_3');?>
<?php $quote_main = get_field('quote_main');?>

<section class="page-wrap">
  <div class="container">
    <section class="page-wrap">
      <section class="row">
        <div class="col-lg-5">
          <div class="row">
            <h1>
              <div class="main-left-name">
                <?php echo $name?>
              </div>
            </h1>
          </div>

          <div class="row">
            <ul>
              <li class="main-left-tenet"><?php echo $tenet_1?></li>
              <li class="main-left-tenet"><?php echo $tenet_2?></li>
              <li class="main-left-tenet"><?php echo $tenet_3?></li>
            </ul>  
          </div>

          <div class="row">
            <div class="main-left-quote">
              <?php echo $quote_main?>
            </div>  
          </div>

          <div class="row main-image-row">
            <div class="main-left-button">
              <a href="<?php the_field('contact_gabrielle'); ?>" class="btn btn-light btn-outline-dark btn-lg">Book an appointment</a>
            </div>  
          </div>
        </div>

        <div class="col-lg-5 home-page-image main-image">
          <div class="main-image">
            <div class="crop-container">
              <img src=<?php echo $image_main?> class="img-fluid main-image-image">
            </di>
          </div>  
        </div>
      </section>
    </section>

    <section class="page-wrap">
      <section class="row">
        <div class="col-lg-5">
          About Gabrielle
        </div>

        <div class="col-lg-5">
          <?php echo $short_bio;?>
        </div>
      </section>
    </section>

    <section class="page-wrap">
      <section class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <img src=<?php echo $footer_photo_1?> class="img-fluid footer-images">
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
          <img src=<?php echo $footer_photo_2?> class="img-fluid footer-images">
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
          <img src=<?php echo $footer_photo_3?> class="img-fluid footer-images">
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
          <img src=<?php echo $footer_photo_4?> class="img-fluid footer-images">
        </div>
      </section>
    </section>
  </div>    
</section>


<?php get_footer();?>