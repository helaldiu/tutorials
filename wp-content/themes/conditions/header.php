<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package conditions
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    	
                <?php
                $menu = ot_get_option('id_select');
                // var_dump($menu);
                // exit();
                    if($menu == 'header_menu_1'){ ?>
                        <nav class="navbar navbar-expand-lg navbar-light bg-white">
                            <div class="container nav_bar_one">

                                            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                                                <img src="<?php echo ot_get_option('logo');?>" alt="CONDITIONS.AI">
                                            </a>
                                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                                <ul class="nav navbar-nav ml-auto">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Home</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">About</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Features</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Products</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Services</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                </div>
                        </nav>

<?php                    }
            else{ ?>

                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <div class="container nav_bar_two">
                        
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <ul class="nav navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                             <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                                <img src="<?php echo ot_get_option('logo');?>" alt="CONDITIONS.AI">
                            </a>
                    </div>
                </nav>

<?php             }




                ?>

                  

  






           


           



       
	<div id="content" class="site-content">
