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
 * @package conditions
 */

get_header();
?>
    <section class="section hero">
        <div class="container relative">
            <div class="row">
                <div class="col-md-12 col-lg-10">
                    <h1 class="hero-heading">
                        <!-- <span>Artificial</span> Intelligence for Infrastructure <span>Maintenance</span> -->
                        <span><?php echo ot_get_option('home_banner_title')?></span>
                    </h1>
                    <div class="hero-text">
                        <?php echo ot_get_option('home_banner_subtitle');?>
                    </div>
                </div>
            </div>
            <div class="block-pt">
                <div class="hero-blank-image">
                    <img src="<?php echo ot_get_option('home_banner_photo');?>" alt="">
                </div>
            </div>
            
        </div>
    </section>
      <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="section-title pl-lg-3"><?php echo ot_get_option('we_first_start_road');?></h2>
                </div>
                <div class="col-md-7">
                    <div class="text-para-lead">
                        <!-- <p>
                            Roads are the backbone of any country’s infrastructure. Frequent detection of damages like cracks and potholes is critical in road maintenance. Poorly maintained road markings represent a significant safety issue for drivers.
                        </p>
                        <p>
                            Today, most inspections are still performed manually. Such manual visual inspection is not only tedious, time-consuming, and costly, but also dangerous for the personnel.
                        </p> -->
                        <p><?php echo ot_get_option('we_first_paragrap');?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-highlighted on-dark">
        <div class="container">
            <div class="section-highlighted-block">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="highlighted-image-block">
                            <div class="highlighted-image">
                                <img src="<?php echo ot_get_option('banner_img');?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="highlighted-content">
                            <div>
                                <h2 class="section-title"><?php echo ot_get_option('condition_ai');?></h2>
                                <div class="highlighted-text text-para-lead">
                                    <?php echo ot_get_option('only_paragrap');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">

            <?php

                $grp_sec_1=ot_get_option('home_page_about_section');
                if(is_array($grp_sec_1)){
                foreach($grp_sec_1 as $grp_value_1){ ?>


                
                <div class="col-md-4">
                    <div class="s-card_steping">
                        <div class="card_steping-number"><?php echo esc_html ($grp_value_1['title'])?></div>
                        <h5 class="card_steping-title"><?php echo esc_html ($grp_value_1['desc'])?></h5>
                    </div>
                </div> 


                <?php }
                }

            ?>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row flow-item">
                <div class="col-md-6 col-lg-6 offset-lg-1 order-md-2">
                    <div class="flow-image">
                        <img src="<?php echo ot_get_option('home_budget_img');?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 align-self-center">
                    <div class="flow-content">
                        <div class="flow-header">
                            <h2 class="flow-heading">
                                <?php echo ot_get_option('home_buget_title');?>
                            </h2>
                        </div>
                        <ul class="flow-lists text-para-lead">
                            <li>
                                <p><?php echo ot_get_option('home_budget_subtitle');?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row flow-item">
                <div class="col-md-6 col-lg-6">
                    <div class="flow-image">
                        <img src="<?php echo ot_get_option('home_schedule_img');?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 offset-lg-1 align-self-center">
                    <div class="flow-content">
                        <div class="flow-header">
                            <h2 class="flow-heading">
                               <?php echo ot_get_option('home_schedule_title');?>
                            </h2>
                        </div>
                        <ul class="flow-lists text-para-lead">
                            <li>
                                <p><?php echo ot_get_option('home_schedule_subtitle');?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row flow-item">
                <div class="col-md-6 col-lg-6 offset-lg-1 order-md-2">
                    <div class="flow-image">
                        <img src="<?php echo ot_get_option('home_accuracy_img');?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 align-self-center">
                    <div class="flow-content">
                        <div class="flow-header">
                            <h2 class="flow-heading">
                                <?php echo ot_get_option('home_accuracy_title');?> 
                            </h2>
                        </div>
                        <ul class="flow-lists text-para-lead">
                            <li>
                                <p><?php echo ot_get_option('home_accuracy_subtitle');?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-metallising pb-0">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 col-metallising">
                    <div class="card_metallising p-relative">
                    <?php
                        if ( have_posts() ) :

                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();
                                ?>
                                 <div class="card_metallising-text text-para-lead">
                                            <?php the_title(); ?>
                                            <?php the_content(); ?>
                                        </div>
                                        <a href="<?php echo esc_url( get_permalink()); ?>" class="link-overlay"></a>
                                <?php

                            endwhile;
                        else :
                        endif;
                        ?>
                              
                    </div>
                </div>
                <div class="col-md-6 col-metallising">
                    <div class="card_metallising p-relative">
                        <h6 class="card_metallising-title">Contact</h6>
                        <div class="card_metallising-text text-para-lead">
                            Contacting us often helps us to better understand you
                        </div>
                        <a href="#" role="button" class="link-overlay" data-toggle="modal" data-target="#contactModal"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
