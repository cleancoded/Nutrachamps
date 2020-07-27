<?php 
   /*
    Template Name: Category temp
    */
   
   
   get_header();?>
<!-- 
   top banner section -->
<style>
   .post-hover {
   border-radius: 6px;
   border: 1px solid #dad8d8;
   outline: none; 
   cursor: pointer;
   font-size: 18px;
   }
   /* Style the active class, and buttons on mouse-over */
   .active, .post-hover:hover {
   background-color: #22b5ac;
   color: white;
   }
   .grid-post-read-more : hover{
   color: red !important;
   }
</style>
<section id="post-page-banner">
   <div class="for-top_banner">
      <ul class="banner_icon-text">
         <li>
            <p>Travis Stoetzel</p>
         </li>
         <li> <i class="far fa-comment"></i> 10</li>
         <li><i class=" far fa-clock"></i> 3 min read </li>
      </ul>
      <h3 class="pl-5 text-white">3 Ways to Set Up Your Bodyweight Workout For Mass </h3>
   </div>
</section>
<section id="content-area-custom">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-9 p-5 post-lay">
            <?php 
               ?>
            <div class="row">
               <?php 
                  $paged = get_query_var('paged');
                  $args = array(
                    
                       'post_type' => 'custompost',
                      'category_name' => 'three-column-posts',
                      'posts_per_page'=>16,
                      'order_by'=>'time',
                      'max_num_pages' => 20,
                      'paged' => $paged
                     );
                    $tech= new WP_Query( $args);
                    if ( $tech->have_posts()):
                      while ($tech->have_posts()):
                              $tech->the_post();  ?>
               <div class="col-md-4">
                  <div class="post-hover">
                     <div class="post-img">
                        <?php     the_post_thumbnail('thumbnail' , array('class' => 'img-fluid' )); ?>
                     </div>
                     <div class="hover-eff">
                        <ul class="blogicon">
                           <li> <i class="far fa-comment"></i> 72 </li>
                           <li><i class=" far fa-clock"></i> 1 min read </li>
                           <li> <i class="far fa-eye "></i> 164 </li>
                        </ul>
                        <h1 class=" text-center grid-post-title">
                           <?php  echo  the_title(); ?>
                        </h1>
                        <?php // echo  the_content();?>
                        <p class="excerpt">
                           <?php //  echo get_the_excerpt() ?>
                           <a class="grid-post-read-more"  href="<?php the_permalink() ?>">READ MORE</a>
                        </p>
                     </div>
                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                     <script>
                        $(document).ready(function(){
                          $(".hover-eff").hover(function(){
                            //$(".hover-eff").css("background-color", "red");
                          });
                        });
                     </script>
                     <script>
                        // Add active class to the current button (highlight it)
                        var header = document.getElementById("post-lay");
                        var btns = header.getElementsByClassName("post-hover");
                        for (var i = 0; i < btns.length; i++) {
                          btns[i].addEventListener("click", function() {
                          var current = document.getElementsByClassName("active");
                          current[0].className = current[0].className.replace(" active", "");
                          this.className += " active";
                          });
                        }
                        
                        
                        
                        var headertwo = document.getElementById("excerpt");
                        var btnst = headertwo.getElementsByClassName("grid-post-read-more");
                        for (var i = 0; i < btnst.length; i++) {
                          btnst[i].addEventListener("click", function() {
                          var current = document.getElementsByClassName("active");
                          current[0].className = current[0].className.replace(" active", "");
                          this.className += " active";
                          });
                        }
                     </script>
                  </div>
               </div>
               <?php
                  endwhile;
                  endif;
                  ?>
               <div class="pagination mx-auto">
                  <?php echo paginate_links( array(
                     'total' =>20
                     
                     )); ?> 
               </div>
            </div>
         </div>
         <!-- side bar -->
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
<?php get_footer();
   ?>