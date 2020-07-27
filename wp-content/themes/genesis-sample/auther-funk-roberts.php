<?php 
/*
 Template Name: Auther Funk roberst
 */
?>
<?php 

get_header();
?>
<!-- 
top banner section -->


<section id="Auther-funk-roberts">
		<p class="py-5 pl-5" style="color: #666666; font-size: 18px;">Home/ Auther / Funk Roberts</p>
    <h3 class="pl-5">Funk Roberts</h3>

</section>



<section id="content-area-custom">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 funk-robert-content">
				
<div class="row container-fluid ">
  
   <div class="col-md-3">
    <img src="/wp-content/uploads/2020/07/auther-funk-roberts.png">
    <ul class="blogicon">
   		<li><img src="https://acid-spider.wp.work/wp-content/uploads/2020/06/comment.png"></li>
   		<li><img src="/wp-content/uploads/2020/06/eye.png"> </li>
   		<li><img src="/wp-content/uploads/2020/06/heart-feed.png"> </li>
   		<li><img src="/wp-content/uploads/2020/06/eye.png"> </li>
   		<li><img src="/wp-content/uploads/2020/06/eye.png"> </li>
   	</ul>
   </div>
   <div class="col-md-8">
    <p>
      <?php echo get_field('about-auther'); ?>
      
    </p>
     
   </div>
 </div>


<?php
$page=get_query_var('paged');
$arg = array(
	'post_type' => 'custompost' ,
  'category_name' => 'Auther-funk-roberts',
   'post_per_page' => 7 ,
   'max_num_pages' => 20, 
   'paged' => $paged
	 );

$post_tech = new WP_Query($arg);
if ( $post_tech->have_posts()):
while ( $post_tech->have_posts()):

$post_tech->the_post();
?>
<div class="row">
   <div class="col-md-4">
	<?php 
          the_post_thumbnail('thumbnail' , array('class' => 'img-fluid' ));
        ?>
   </div>     
   <div class="col-md-7">
   	<ul class="blogicon">
   		<li><img src="https://acid-spider.wp.work/wp-content/uploads/2020/06/comment.png"> 72 </li> <li><img src="/wp-content/uploads/2020/06/eye.png"> 1 min read </li><li><img src="/wp-content/uploads/2020/06/heart-feed.png"> 164 </li>
   	</ul>
        <h1 class=" text-left grid-post-title">
         <?php 	echo  the_title(); ?>
        </h1>
       
        <p>
        <?php echo get_the_excerpt() ?>
                <a class="grid-post-read-more" href="<?php the_permalink() ?>">Read more</a>
            </p>

         
     
     

    </div>    
</div>
<!-- end posting rows -->
<?php
  endwhile;

endif;
?>
<div class="pagination mx-auto "> <?php echo paginate_links( array( 'total' =>20 ));?></div>


			</div>
			<div class="col-md-3" id="right-sidebar">
                <?php if ( is_active_sidebar( 'rightsidebar' ) ) { ?>
                  <div class="sidebar-column"><!-- sidebar-column -->
				<?php dynamic_sidebar( 'rightsidebar' ); ?>
                 </div><!-- sidebar-column -->
		      <?php } ?>
			</div>
			
		</div>
		
	</div>
	
</section>

<?php get_footer();
?>
