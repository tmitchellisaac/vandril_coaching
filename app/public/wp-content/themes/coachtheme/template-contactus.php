<?php
/* 
Template Name: Contact Us
*/
?>

<?php get_header();?>

<section class="page-wrap">
  <div class="container">
    <h1><?php the_title();?></h1>
    <div class="row">
      <div class="col-lg-6">
        <?php echo do_shortcode('[forminator_form id="151"]');?>
      </div>
      <div class="col-lg-6">
        <?php get_template_part('includes/section', 'contactus');?>
      </div>
    </div>
    <div class="row align-items-center justify-items-center">
      <div class="col-lg-6 contact-image">
        <?php
        $attachment_id = 103; 
        $image_url = wp_get_attachment_url($attachment_id);
        ?>
        <img src="<?php echo esc_url($image_url); ?>" alt="snoot" class="snoot">
      </div>
      <div class="google-maps col-lg-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12270.944610010749!2d-104.95020554999999!3d39.74557725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c79527dc2f88f%3A0x409292cfbe1667d0!2sCity%20Park%2C%20Denver%2C%20CO!5e0!3m2!1sen!2sus!4v1718516728578!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>   
</section>

<?php get_footer();?>




