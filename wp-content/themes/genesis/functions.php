<?php
/**
 * Genesis Framework
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit
 * this file under any circumstances. Please do all modifications
 * in the form of a child theme.
 *
 * @package  Genesis
 * @author   StudioPress
 * @license  GPL-2.0-or-later
 * @link     https://my.studiopress.com/themes/genesis/
 */

/**
 * Calls the init.php file, but only if the child theme has not called it first.
 *
 * This method allows the child theme to load
 * the framework so it can use the framework
 * components immediately.
 */
require_once __DIR__ . '/lib/init.php';


/*
 * Remove Genesis Header
========================================*/




remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

  /*
 * Add custom header Image.
========================================*/

add_action( 'genesis_header', 'aam_genesis_header' );
function aam_genesis_header() { ?>
<!--  /**
  * Get header image
  * @type string
  */ -->
<!--  // $am_header_image = get_header_image();
 // if ( $am_header_image != '' ) {
 //    echo '
 //    <a href="'.get_home_url( '/' ).'">
 //  <div class="custom-header-wrap">
 //   <img src="'.$am_header_image.'" title="'.get_bloginfo( 'name' ).'">
 //  </div>
 //  </a>';
 // } else {
 //  echo '
 //  <div class="wrap">
 //   <div class="title-area">
 //    <h1 class="site-title" itemprop="headline">
 //    <a href="'.get_home_url( '/' ).'">'.get_bloginfo( 'name' ).'</a>
 //    </h1>
 //   </div>
 //  </div>';
 // } -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<header id="home-page-header"  class="toggle-menu ">
  <a class="home-brand" href="/"><img src="/wp-content/uploads/2020/07/home-logo.png" ></a>
  <button class=" navbar-toggler-right navbar-toggler float-right " data-toggle="collapse" data-target="#home-header"><i class="fa fa-bars" aria-hidden="true"></i></button>
	<div class="toggle-menu navbar-toggleable-md collapse navbar-collapse" id="home-header">
<div class="top-line px-3">
	<div class="row">
		<div class="col-md-4 col-lg-4 col-sm-12">
			<div class="top-line-one "> <img src="/wp-content/uploads/2020/07/top-logo-one.png" class="top-img"> <p style="color: #fff !important;"   class="pt-1">REFER-A-FRIEND & GET $10 </p> </div>

		</div>
		<div class="col-md-4 col-lg-4 col-sm-12">
			 <div class="top-line-two"> <img src="/wp-content/uploads/2020/07/top-logo-two.png" class="top-img"> <p style="color: #fff !important" class="pt-1" data-toggle="popover" data-content="Lorem ipsum dolor sit amet, consectetur
adipiscing elit, sed do eiusmod tempor
incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud">FREE SHIPPING ON ORDERS OVER $39
     </p> </div>
		</div>
		<div class="col-md-4 col-lg-4 col-sm-12">
			 <div class="top-line-three"> <img src="/wp-content/uploads/2020/07/top-logo-three.png" class="top-img"> <p style="color: #fff !important" class="pt-1" data-toggle="popover" data-content="Lorem ipsum dolor sit amet, consectetur
adipiscing elit, sed do eiusmod tempor
incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud">100% MONEY BACK GUARANTEE</p> </div>
		</div>
	</div>
</div>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript">
	
	$(document).ready(function() {
   $('[data-toggle="popover"]').popover({
      placement: 'bottom',
      trigger: 'hover'
   });
});
</script>



<!-- second line of header -->





 <div class="second-line-header">
<div class=" container">
	<div class="row">
		<div class="col-md-3 col-lg-3 col-sm-12">
			<div class="second-line-one"> <a class="navbar-brand" href="/"><img src="/wp-content/uploads/2020/07/home-logo.png" ></a> </div>

		</div>
		<div class="col-md-5 col-lg-5 col-sm-12">
			 <div class="second-line-two">  <form class="form-inline my-2 my-lg-0 ml-auto" style="
    margin-left: auto;
">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <i class="fa search-icon fa-search" aria-hidden="true"></i>
       <!--  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    </form> </div>
		</div>
		<div class="col-md-4 col-lg-4 col-sm-12">
			 <div class="second-line-three"> <ul>
			   <li><i class=" color-white fa fa-phone pr-2"></i>1-866-272-6888 </li>
               <li><i class=" color-white fa fa-user pr-2"></i>Sign In  </li>
               <li><i class=" color-white  fa fa-shopping-cart pr-2"></i>Cart   </li>
			 </ul> </div>
		</div>
	</div>
</div>	
</div>



 <div class="third-line-header">
<div class=" container-fluid">
	 <?php // $arge_header_menu=['them_location' => 'header-home-header-menu'];?>
  <?php // wp_nav_menu($arge_header_menu);
  ?>

		<li>
			<a href="#"> SHOP </a>  
		</li>
		<li>
			<a href="#"> CATEGORIES</a>
		</li>

        <li>
		   <a href="#"> DEALS & BUNDLES</a>
		</li>

        <li>
			 <a href="#">  LEARN</a>
		</li>

	</ul>
</div>	
</div>

	
</header>

<!-- second header of blog etc -->
<header id="blogs-page">


<div class="top-blog-header">
	
 

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- <ul class="navbar-nav ml-auto"> -->
   <?php
 $args_m=['theme_location' => 'Blog-page-header-menu'];
   ?>
   <?php
        wp_nav_menu($args_m);

?>
    <!-- <li class="nav-item active">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">BLOG</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="#">BFEATURS</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="#">BCONTACT</a>
      </li> -->
 <!-- </ul> -->

    
  </div>
</nav>


</div>


<nav class="navbar navbar-expand-lg navbar-light bg-light blog-sec-head">
  <a class="navbar-brand" href="#"><img src="/wp-content/uploads/2020/06/blog-logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

  <?php $arge_category_menu=['them_location' => 'Blog_cagegory_menu'];?>
  <?php wp_nav_menu($arge_category_menu);
  ?>


    <!-- <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">HEALTH </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> NUTRITION</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="#">ESSENTIAL OILS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#"> RECIPES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">BEAUTY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">FITNESS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">PODCAST</a>
      </li>
    </ul> -->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="SEARCH FOR ARTICLE" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">SHOP NOW!</button>
    </form>
  </div>
</nav>
	</div>
</header>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>










<?php
}
?>





<?php
register_nav_menus(['header-home-header-menu' => __(' Header HOme Menu')]);
register_nav_menus(['Blog-page-header-menu' => __('Blog Main Menu')]);
register_nav_menus(['Blog_cagegory_menu'    => __('Blog page Category Menu')]);


// Do NOT include the opening php tag.

// Remove site footer.
remove_action( 'genesis_footer', 'genesis_footer_markup_open');
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close');

// Customize site footer
add_action( 'genesis_footer', 'sp_custom_footer' );
function sp_custom_footer() { ?>

	<div class="site-footer"><div class="wrap"><p>Handcrafted with <span class="dashicons dashicons-heart"></span> by moi. Powered by the <a href="https://www.studiopress.com/">Genesis Framework</a>. <a href="http://briangardner.com/contact/">Get in Touch</a>.</p></div></div>

<?php
}
?>
<?php
function initialize_widgetstwo() {


   register_sidebar( [
    'name' => 'BLOG PAGE FOOTER ONE',
    'id'   => 'footer_one'
  ] );

    register_sidebar( [
    'name' => 'BLOG PAGE FOOTER ONE',
    'id'   => 'footer_two'
  ] );

     register_sidebar( [
    'name' => 'BLOG PAGE FOOTER ONE',
    'id'   => 'footer_three'
  ] );

      register_sidebar( [
    'name' => 'BLOG PAGE FOOTER FOUR',
    'id'   => 'footer_four'
  ] );
       
       // home page footer

      register_sidebar( [
    'name' => 'Home PAGE FOOTER ONE',
    'id'   => 'home-footer_one'
  ] );

    register_sidebar( [
    'name' => 'Home PAGE FOOTER ONE',
    'id'   => 'home-footer_two'
  ] );

     register_sidebar( [
    'name' => 'Home PAGE FOOTER ONE',
    'id'   => 'home-footer_three'
  ] );

      register_sidebar( [
    'name' => 'Home PAGE FOOTER FOUR',
    'id'   => 'home-footer_four'
  ] );

        register_sidebar( [
    'name' => 'Home PAGE FOOTER five',
    'id'   => 'home-footer_five'
  ] );
}
 
add_action( 'widgets_init', 'initialize_widgetstwo' );