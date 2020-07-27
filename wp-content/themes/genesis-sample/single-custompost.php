<?php
   get_header();?>
<!-- 
   top banner section -->
<style>
   .related-text-hover {
   border-radius: 6px;
   border: 1px solid #dad8d8;
   outline: none; 
   cursor: pointer;
   font-size: 18px;
   }
   /* Style the active class, and buttons on mouse-over */
   .active, .related-text-hover:hover {
   background-color: #22b5ac;
   color: white;
   }
   .grid-post-read-more : hover{
   color: red !important;
   }
</style>
<?php
   if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
<section id="single_post_banner">
   <?php the_post_thumbnail('large' ); ?>
</section>
<section id="blogs-pages">
   <h1 class="font-weight-bold py-3"> <?php echo the_title(); ?> </h1>
   <ul class="icons-set">
      <li>
         Written by <span><?php echo get_the_author_meta( 'user_nicename' ) ;?> </span>
      </li>
      <li>
         <i class="far fa-comment"></i> March 17, 2020
      </li>
      <li>
         <i class=" far fa-clock"></i>15
      </li>
      <li>
         <i class="far fa-eye"></i>4 Minuts to read
      </li>
   </ul>
   <ul class="tages_cat">
      <li>
         Category :
      </li>
      <?php
         $categories = get_the_category();
         $separator = ' ';
         $output = '';
         if ( ! empty( $categories ) ) {
             foreach( $categories as $category ) {
                 echo '<li class="gray-goal">' . $category->name  .'</li>';
             }
            
         }?>
      <li>
         Tags :
      </li>
      <?php   $postTags = get_the_tags();
         if ($postTags) {
          
          foreach( $postTags as $post_tag ) {
              echo '<li class="gray-goal">' . $post_tag->name . '</a></li>';
          }
         } else {
         echo "<p class='pt-2 pl-2'>There is no tags.</p>";
         }
         
         
         ?>
   </ul>
</section>
<hr class="line-space">
<?php endwhile;
   endif;
   
   ?>
<section id="content-area-custom">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-9 single-custom-post">
            <ul class="social-icons">
               <li>
                  <i class="fa fa-heart"></i>
               </li>
               <li class="">
                  <i class="fa fa-facebook"> </i> 20
               </li>
               <li>
                  <i class="fa fa-instagram"></i> 35
               </li>
               <li >
                  <i class="fa fa-pinterest"></i> 10
               </li>
            </ul>
            <?php
               if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
            <h2 class="text-center pt-5 pb-3"><?php // the_title() ?></h2>
            <?php if(the_content()) {?> 
            <p class="px-5 pt-3 pb-3"><?php the_content() ?></p>
            <?php } else {
               echo "<p > No content found<p>";
               }
               ?>
            <?php endwhile;
               else :
                echo '<p>There are no posts content!</p>';
                
               endif;
                
                  ?>
            <!-- related articlas -->
            <section id="related-article">
               <h2 class="py-5">RELATED ARTICLES</h2>
               <!-- related posts -->
               <?php
                  $post_id = get_the_ID();
                  $cat_ids = array();
                  $categories = get_the_category( $post_id );
                  
                  if(!empty($categories) && is_wp_error($categories)):
                      foreach ($categories as $category):
                          array_push($cat_ids, $category->term_id);
                      endforeach;
                  endif;
                  
                  $current_post_type = get_post_type($post_id);
                  $query_args = array( 
                  
                      'category__in'   => $cat_ids,
                      'post_type'      => $current_post_type,
                      'post_not_in'    => array($post_id),
                      'posts_per_page'  => '4'
                  
                  
                   );
                  ?>
               <div class="row related-parent">
                  <?php
                     $related_cats_post = new WP_Query( $query_args );
                     
                     if($related_cats_post->have_posts()):
                          while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
                  <div class="col-md-6 fit-space-col">
                     <div class="row">
                        <div class="col-md-5">
                           <?php 
                              echo  the_post_thumbnail('thumbnail' , array('class' => 'img-fluid' ));
                              ?>
                        </div>
                        <div class="col-md-6 related-text-hover">
                           <div class=" related-content">
                              <ul class="blogicon">
                                 <li> <i class="far fa-comment"></i> 72 </li>
                                 <li><i class=" far fa-clock"></i> 1 min read </li>
                                 <li> <i class="far fa-eye "></i> 164 </li>
                              </ul>
                              <h1 class=" text-left grid-post-title">
                                 <?php  echo  the_title(); ?>
                              </h1>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php endwhile;
                     // Restore original Post Data
                     wp_reset_postdata();
                     endif;
                     
                     
                     ?>
               </div>
            </section>
            <ul class="single-bottom-testimonial">
               <img src="https://acid-spider.wp.work/wp-content/uploads/2020/07/round-img-man.png">
               </li>
               <li> 
               <li>
                  <h2>Sarah Smith</h2>
                  <p>Sarah Smith is writer at Onnit. A former high school athlete, Sarah traded volleyballs for dumbbells while studying for her Bachelor's in Mass Communication. After graduation, she sought to navigate the increasing demands of adult life and a new marriage with her fitness goals. Because of that, she became certified in personal training from the National Academy of Sports Medicine to further her knowledge in health and wellness. She is passionate about writing and inspiring other women to live optimally, authentically, and relationally. When she's not writing or working out, Sarah can be found bingeing Star Wars for the millionth time (much to the annoyance of her husband) and drinking red wine. You can follow her ever-evolving wellness journey at @sarahtillersmith on Instagram.</p>
               </li>
            </ul>
         </div>
         <div class="col-md-3" id="right-sidebar">
            <?php if ( is_active_sidebar( 'rightsidebar' ) ) { ?>
            <div class="sidebar-column">
               <!-- sidebar-column -->
               <?php dynamic_sidebar( 'rightsidebar' ); ?>
            </div>
            <!-- sidebar-column -->
            <?php } ?>
         </div>
      </div>
   </div>
</section>
<script>
   // Add active class to the current button (highlight it)
   var header = document.getElementById("related-parent");
   var btns = header.getElementsByClassName("related-text-hover");
   for (var i = 0; i < btns.length; i++) {
     btns[i].addEventListener("click", function() {
     var current = document.getElementsByClassName("active");
     current[0].className = current[0].className.replace(" active", "");
     this.className += " active";
     });
   }
   
</script>
<?php get_footer();
   ?>