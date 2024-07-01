<?php $image_1 = get_field('image_1');?>
<?php $image_2 = get_field('image_2');?>
<?php $image_3 = get_field('image_3');?>
<?php $image_4 = get_field('image_4');?>
<?php $image_5 = get_field('image_5');?>
<?php $image_6 = get_field('image_6');?>

<?php $img_1 = $image_1['sizes']['medium'];?>
<?php $img_2 = $image_2['sizes']['medium'];?>
<?php $img_3 = $image_3['sizes']['medium'];?>
<?php $img_4 = $image_4['sizes']['medium'];?>
<?php $img_5 = $image_5['sizes']['medium'];?>
<?php $img_6 = $image_6['sizes']['medium'];?>


<?php if( have_posts() ): while( have_posts() ): the_post();?>

<?php endwhile; else: endif;?>


  <div class="row photo-row">
   
  </div>

 