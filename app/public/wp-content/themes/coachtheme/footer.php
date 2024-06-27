<section class="footer-title-bar d-flex justify-content-center ">
  <div class="footer-title">
    <p>VanDril Coaching</p>
  </div>
</section>

<footer>
  <div class="container footer-nav">
    <div class="row">
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'footer-menu',
        'menu_class' => 'bottom-bar'
      )
    );
    ?>
    </div>
  </div>
</footer> 
<?php wp_footer();?>


<section class="container">
<div class="footer-extra" style="height: 60px;">
  <div class="row d-flex">
    <div class="col-lg-6 d-flex justify-content-center bottom-lines">
      2200 Marion St, Denver CO
    </div>
    <div class="col-lg-6 d-flex justify-content-center bottom-lines">
     (330) 284-9236
    </div>
  </div>
  </div>
</section>

</body>
</html>

