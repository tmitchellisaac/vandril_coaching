<?php
/* Template name: Home page */
?>

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


         
<div class="divider">
</div>

<div class="container-fluid">
  <div class="container-top-main">
    <div class="row">
      <div class="row-top-main"> 
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="col-top-main">
            <div class="row">
              <div class="main-left-name">
                <?php echo $name?>
              </div>
            </div>

            <div class="row">
              <ul class="main-left-tenet">
                <li><?php echo $tenet_1?></li>
                <li><?php echo $tenet_2?></li>
                <li><?php echo $tenet_3?></li>
              </ul>  
            </div>

            <div class="row">
              <div class="main-left-quote">
                <?php echo $quote_main?>
              </div>  
            </div>

            
            <div class="row">
              <div class="main-left-button">
                <a href="<?php the_field('contact_gabrielle'); ?>" class="btn btn-light btn-outline-dark btn-lg">Book an appointment</a>
              </div>  
            </div>

          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="col-top-main">
            <img src=<?php echo $image_main?> class="img-fluid main-image-image">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container container-second-main">
  <div class="row row-second-main">
    <div class="col-second-main col-lg-6 col-md-12 col-sm-12">
      <div class="about-heading">
        About Gabrielle
      </div>
    </div>
    <div class="col col-second-main col-lg-6 col-md-12 col-sm-12">
      <div class="row row-second-right">
        <div class="black-bar">
        </div>
        <div class="short-bio">
          <?php echo $short_bio;?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container container-three-main">
  <div class="row row-three-main">
    <div class="col col-three-main col-lg-3 col-md-6 col-sm-12">
      <img src=<?php echo $footer_photo_1?> class="footer-images">
    </div>
    <div class="col col-three-main col-lg-3 col-md-6 col-sm-12">
      <img src=<?php echo $footer_photo_2?> class="footer-images">
    </div>
    <div class="col col-three-main col-lg-3 col-md-6 col-sm-12">
      <img src=<?php echo $footer_photo_3?> class="footer-images">
    </div>
    <div class="col col-three-main col-lg-3 col-md-6 col-sm-12">
      <img src=<?php echo $footer_photo_4?> class="footer-images">
    </div>
  </div>
</div>

<?php get_footer();
