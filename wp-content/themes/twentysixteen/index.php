<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
	<div id="content" class="site-contentss" style="margin: 0 !important; padding: 0 !important;">
		<main id="site-content" role="main" style="margin: 0 !important; padding: 0 !important;">
		 <section class="section hero">
	        <div class="container relative">
	            <div class="row">
	                <div class="col-md-12 col-lg-10">
	                    <h1 class="hero-heading">
	                        <span>Artificialss</span> Intelligence for Infrastructure <span>Maintenance</span>
	                        <span></span>
	                    </h1>
	                    <div class="hero-text">
	                        <?php echo get_theme_mod('copyright_text');?>
	                    </div>
	                </div>
	            </div>
	            <div class="block-pt">
	                <div class="hero-blank-image">
	                    <img src="<?php echo get_theme_mod('home_banner_img');?>" alt="">
	                </div>
	            </div>
	            
	        </div>
	    </section>
	    </main>
	</div>
<?php get_footer(); ?>
