<?php

/*
  Template Name: Home Page
*/


get_header();  ?>

<div class="main">
  

    
    <?php $feature_img = get_post_thumbnail_id();
          $feature_img_url = wp_get_attachment_image_src( $feature_img, 'thumbnail-size', true );
          $feature_url = $feature_img_url[0];
    ?>
    <div class="featureImage" style="background-image: url('<?php echo $feature_url ?>')">
      
    </div> <!-- .featureImage --> 

  <div class="container">



  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>