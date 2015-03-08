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
        <div class="titleContainer">
          <h1>Tulip Café <span>&amp;</span> Boutique</h1>
        </div><!-- /.titleContainer -->

        <div class="scroll">
          <!-- chevron svg -->
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="100px" height="45.5px" viewBox="0 0 100 45.5" enable-background="new 0 0 100 45.5" xml:space="preserve">
          <path d="M66.904,12.484c-1.465-1.466-3.73-1.466-5.064,0L49.977,24.349L38.112,12.484c-1.467-1.466-3.732-1.466-5.066,0
            c-1.333,1.467-1.466,3.733,0,5.066l14.397,14.397c0.667,0.666,1.599,1.065,2.534,1.065c0.931,0,1.867-0.399,2.531-1.065
            L66.904,17.55C68.372,16.217,68.372,13.817,66.904,12.484z"/>
          </svg>

        </div><!-- /.scroll -->
      </div> <!-- .featureImage --> 

      <section class="main">

        <div class="imageMain">

         
        <img src="<?php echo get_field( "cafeimage" ); ?>" class="customImage" alt="">

<!--           <img src="<?php bloginfo('template_directory'); ?>/img/shop.jpg" alt=""> -->
        </div> <!-- ends .imageMain -->

        <div class="infoContainer">
          <h2>The Café</h2>

          <p>Galão, single origin black, that, breve, qui, at beans mug sugar plunger pot. Medium aromatic, wings affogato id, steamed et shop a coffee extraction.</p>

          <p>Percolator, beans decaffeinated strong sit cream aroma. And dripper, viennese wings decaffeinated extra single origin.
          </p>

          <h4>Hours</h4>
          <p>Monday - Friday | 730am - 5pm</p>
          <p>Saturday | 8am - 5pm</p>
          <p>Sunday | 9am - 5pm</p>
        </div><!-- /.infoContainer -->

      </section><!-- /.main -->

      <div class="secondHero">
        
      </div><!-- /.secondHero -->

      <!-- <?php var_dump($image_object); ?> -->



  <div class="container">



  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>