<?php 
   /*
    Template Name: Home page
    */
   ?>
<?php 
   get_header();?>
<!-- 
   top banner section -->
<section id="home-banner">
   <div class="container">
      <div class="col-md-10 col-md-10 col-sm-12 text-center">
         <h1 class="baner-text"><?php echo the_field('banner-title'); ?></h1>
         <a href="<?php echo the_field('banner-button-link'); ?>"><?php echo the_field('button-title'); ?></a>  
      </div>
   </div>
</section>
<section id="logo-imge">
   <div class="container-fluid">
      <div class="line-img">
         <?php  if( have_rows('logo-label_') ):
            // Loop through rows.
            while( have_rows('logo-label_') ) : the_row();
            
                // Load sub field value.
                $img_label = get_sub_field('label-img');
                         ?>
         <img src="<?php echo $img_label; ?>">
         <?php
            // End loop.
            endwhile;
            
            // No value.
            else :
            // Do something...
            endif;
            ?>
      </div>
   </div>
</section>
<!-- product section  -->
<section id="product-section" style="min-height: 500px; ">
   <?php  $hero = get_field('shop-title');
      //if( $hero ): ?>
   <div class="h2 text-center pt-5"><?php echo  $hero['pre']; ?><span class="woo-b-line"><?php echo $hero['mid-under-line']; ?></span> <?php echo $hero['post']; ?></div>
   <?php // endif; ?>
</section>
<section id="our-mission">
   <?php  $our_mission = get_field('our-mission-banner');
      if( $hero ): ?>
   <div class="container" style="color: white">
      <div class="row">
         <div class="col-lg-6">
            <h2>
               <?php echo $our_mission['title-pre']; ?>
               <BR>
               <span style="border-bottom: 1px solid green; "><?php echo $our_mission['title-mid']; ?></span><?php echo $our_mission['title-post']; ?>
            </h2>
            <p class="our-mission-text">
               <?php echo $our_mission['p-text']; ?>
               <br>
               <?php echo $our_mission['p-after-break']; ?> <span class="color-full-text"><?php echo $our_mission['green-best-text']; ?></span>
            </p>
            <p class="championyourlife"><?php echo $our_mission['green-champ-text']; ?></p>
            <a class="our-mission-small-textt" href=" <?php echo $our_mission['find-more-link']; ?>"><?php echo $our_mission['find-more-title']; ?></a>
         </div>
         <?php endif; ?>
         <div class="col-lg-6">
         </div>
      </div>
   </div>
</section>
<!-- cards -->
<section class="our-mission-cards">
   <div class="container">
      <div class="row">
         <?php
            // Check rows exists.
            if( have_rows('cards') ):
            
                // Loop through rows.
                while( have_rows('cards') ) : the_row();
            
                    // Load sub field value.
                    $card_value = get_sub_field('body-card');
                    ?>
         <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card" >
               <img class="card-img-top text-center w-25" style="width: 11% !important;" src="<?php echo $card_value['img']; ?> " alt="Card image cap">
               <h4 class="card-title text-center"><?php echo $card_value['title-pre']; ?><span><?php echo $card_value['mid']; ?></span><?php echo $card_value['post']; ?></h4>
               <div class="card-body">
                  <p class="card-text text-center"><?php echo $card_value['paragraph']; ?></p>
               </div>
            </div>
         </div>
         <?php
            endwhile;
            
            // No value.
            else :
            // Do something...
            endif;
            ?>
      </div>
   </div>
</section>
<!-- after card tow col triger buttons -->
<section id="two-section-trigger">
   <div class="container-fluid">
      <div class="row">
         <?php $immune= get_field('immunee-support-left');?>
         <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="triger-one">
               <div class="black-overlay">
                  <h4 class="font-weight-bold text-center text-white"><?php echo $immune['top-title']; ?></h4>
                  <h1 class="font-weight-bold text-center text-white py-3">
                  <?php echo $immune['immune_support']; ?></h2>
                  <a href="<?php echo $immune['button_link']; ?>" class="mt-4"><?php echo $immune['button-title']; ?></a>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-right">
            <div class="triger-two">
               <?php $immune_right= get_field('immunee-support-right');?>
               <div class="black-overlay">
                  <h4 class="font-weight-bold text-center text-white"><?php echo $immune['top-title']; ?></h4>
                  <h2 class="font-weight-bold text-center text-white py-3"><?php echo $immune_right['immune_support']; ?></h2>
                  <a href="<?php echo $immune_right['button_link']; ?>" class="mt-4"><?php echo $immune_right['button-title']; ?></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- after card tow col triger buttons -->
<section id="testimonial-sec">
   <div class="bg-overlay">
      <div class="container-fluid">
         <?php $reviews=get_field('review_section');?>
         <p class="text-center text-dark font-weight-bold p-y-4 testimonial-title"><?php echo $reviews['title_pre_text']; ?><span class="border-bottom-2 pb-2"><?php echo $reviews['title_mid_text']; ?></span> <?php echo $reviews['title_post']; ?></p1>
         <p class="text-center text-dark font-weight-bold font-size-3 py-5"><?php echo $reviews['sub_title']; ?></p>
         <?php echo do_shortcode('[sp_testimonial id="326"]'); ?>
      </div>
   </div>
</section>
<!-- Products -->
<section id="team-sec">
   <div class="container-fluid">
      <?php $shop_by_category= get_field('shop_by_category');?>
      <h1 class="text-center text-dark font-weight-bold p-y-4 testimonial-title"><?php echo $shop_by_category['pre']; ?><span class="woo-b-line"><?php echo $shop_by_category['mid-under-line']; ?></span><?php echo $shop_by_category['post']; ?></h1>
    
   </div>
</section>
<!-- team -->
<section id="team-sec">
   <div class="container-fluid">
      <?php $team= get_field('team_title');?>
      <h1 class="text-center text-dark font-weight-bold p-y-4 testimonial-title"><?php echo $team['pre']; ?> <span class="border-bottom-2 pb-2"><?php echo $team['mid-under-line']; ?></span><?php echo $team['post']; ?></h1>
      <?php echo do_shortcode('[wp-team-slider]'); ?>
   </div>
</section>
<section id="icon-section">
   <div class="container">
      <ul class="footer-icon">
         <li class="footer-icon-one">
            <?php $team_one= get_field('term_and_condition_one');?>
            <img   src="<?php echo $team_one['img']; ?>" >
            <p><?php echo $team_one['line-one']; ?> <br>
               <?php echo $team_one['line_two']; ?><br>
               <?php echo $team_one['line_three']; ?>
            </p>
         <li>
         <li class="footer-icon-one">
            <?php $team_two= get_field('term_and_condition_two');?>
            <img   src="<?php echo $team_two['img']; ?>">
            <p><?php echo $team_two['line-one']; ?><br>
               <?php echo $team_two['line_two']; ?>
            </p>
         <li>
         <li class="footer-icon-one">
            <?php $team_three= get_field('term_and_condition_three');?>
            <img  src="<?php echo $team_three['img']; ?>" >
            <p><?php echo $team_three['line-one']; ?> <br>
               <?php echo $team_three['line_two']; ?>
            </p>
         <li>
      </ul>
   </div>
</section>
<?php get_footer();?>