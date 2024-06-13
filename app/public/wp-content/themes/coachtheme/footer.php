<!-- a wordpress function that knows to grab a file called header.php  -->

<footer>
<div class="container">
  <?php
  wp_nav_menu(
    array(
      'theme_location' => 'footer-menu',
      'menu_class' => 'bottom-bar'
    )
  );
  ?>
</div>

</footer> 



<?php wp_footer();?>

</body>
</html>

