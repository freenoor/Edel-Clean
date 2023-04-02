<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title') ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Diplomata+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" async>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" integrity="sha256-ybRkN9dBjhcS2qrW1z+hfCxq+1aBdwyQM5wlQoQVt/0=" crossorigin="anonymous" />
    <?php wp_head() ?>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <?php if(is_front_page()):?>
                    <div class="ld_top-header-home">

                        
                        <div class="col-12 pos-2">
                            <div class="container">
                            
                                    <div class="justpos-top">
                                    <div class="ld_top-header-home-contact head-svgs animate__animated animate__backInDown">
                                        <?php dynamic_sidebar('header_contact'); ?>
                                    </div>

                                    <div class="ld_top-header-home-mail head-svgs animate__animated animate__backInDown">
                                        <?php dynamic_sidebar('header_mail'); ?>
                                    </div>

                                    <div class="ld_top-header-home-address head-svgs animate__animated animate__backInDown">
                                        <?php dynamic_sidebar('header_address'); ?>
                                    </div>
                                    </div>
                               
                            </div>
                        </div> 
                        
                        <div class="carousel-custom">
                            <div id="carousel-example-generic-1" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner" role="listbox">
                                    <?php $args = array(
                                    'post_type'=> 'slider',
                                    'order'    => 'ASC'
                                    );    
                                    $the_query = new WP_Query( $args );
                                    if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
                                    $y==0;
                                    ?>
                                        <!-- Wrapper for slides -->
                                    <div class="carousel-item <?php echo ($y == 0) ? 'active' : ''; ?>">
                                    <div class="overlay"></div>
                                        <div class="img" style="background-image: url('<?php echo the_post_thumbnail_url();?>');">
                                            <!-- <img src="<?php echo the_post_thumbnail_url();?>" alt=""> -->
                                        </div>

                                        <div class="content-home animate__animated animate__fadeIn">
                                            <p><?php the_content();?></p>
                                        </div>
                                        
                                    </div>
                                    <?php
                                    $y++;
                                    endwhile;
                                    endif;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                                <div class="l-r__arrows">
                                    <div class="left-arroww animate__animated animate__fadeInBottomLeft">
                                        <a class="left carousel-control" href="#carousel-example-generic-1" role="button" data-slide="prev">
                                            <span class="fa fa-arrow-left" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                    <div class="right-arroww animate__animated animate__fadeInBottomRight">
                                    <a class="right carousel-control" href="#carousel-example-generic-1" role="button" data-slide="next">
                                        <span class="fa fa-arrow-right" aria-hidden="true"></span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>

                <?php else: ?>
                <div class="ld_top-header">

                        <div class="overlay"></div>
                        <div class="img" style="background-image: url('<?php echo the_post_thumbnail_url();?>');">
                            <!-- <img src="<?php echo the_post_thumbnail_url();?>" alt=""> -->
                            
                        </div>
                        <div class="container">
                        <div class="col-12 pos-2">
                            <div class="container">
                            
                                    <div class="justpos-top">
                                    <div class="ld_top-header-home-contact head-svgs animate__animated animate__backInDown">
                                        <?php dynamic_sidebar('header_contact'); ?>
                                    </div>

                                    <div class="ld_top-header-home-mail head-svgs animate__animated animate__backInDown">
                                        <?php dynamic_sidebar('header_mail'); ?>
                                    </div>

                                    <div class="ld_top-header-home-address head-svgs animate__animated animate__backInDown">
                                        <?php dynamic_sidebar('header_address'); ?>
                                    </div>
                                    </div>
            
                            </div>
                        </div>
                            <div class="title animate__animated animate__fadeIn">
                                <h2><?php the_title();?></h2>
                                <svg 
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="70px" height="18px">
                                <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                d="M58.170,9.626 C52.073,13.126 46.870,13.126 40.772,9.626 C36.795,7.344 33.400,7.344 29.424,9.626 C23.383,13.092 18.456,13.092 12.415,9.626 C8.394,7.317 5.678,7.317 1.654,9.626 L-0.005,7.932 C4.884,5.127 8.992,5.014 14.075,7.932 C18.867,10.683 22.404,11.010 27.765,7.932 C32.848,5.014 37.574,5.145 42.431,7.932 C47.418,10.796 51.330,10.908 56.511,7.932 C61.597,5.014 64.922,5.014 70.005,7.932 L68.345,9.626 C64.258,7.279 62.260,7.279 58.170,9.626 ZM58.170,3.881 C52.073,7.382 46.870,7.382 40.772,3.881 C36.795,1.598 33.400,1.598 29.424,3.881 C23.383,7.348 18.456,7.348 12.415,3.881 C8.394,1.572 5.678,1.572 1.654,3.881 L-0.005,2.188 C4.884,-0.619 8.992,-0.731 14.075,2.188 C18.867,4.939 22.404,5.265 27.765,2.188 C32.848,-0.731 37.574,-0.599 42.431,2.188 C47.418,5.051 51.330,5.163 56.511,2.188 C61.597,-0.731 64.922,-0.731 70.005,2.188 L68.345,3.881 C64.258,1.534 62.260,1.534 58.170,3.881 ZM14.075,13.677 C18.867,16.429 22.404,16.754 27.765,13.677 C32.848,10.759 37.574,10.890 42.431,13.677 C47.418,16.541 51.330,16.654 56.511,13.677 C61.597,10.759 64.922,10.759 70.005,13.677 L68.345,15.371 C64.258,13.025 62.260,13.025 58.170,15.371 C52.073,18.871 46.870,18.873 40.772,15.371 C36.795,13.088 33.400,13.088 29.424,15.371 C23.383,18.839 18.456,18.839 12.415,15.371 C8.394,13.062 5.678,13.062 1.654,15.371 L-0.005,13.677 C4.884,10.872 8.992,10.759 14.075,13.677 Z"/>
                                </svg>
                            </div>
                    </div>
                </div>
                <?php endif;?>
            </div>
            <div class="row">
                <div class="ld_top-nav">
                    <nav class="navbar navbar-expand-lg ld_custom-nav navbar-light">
                        <div class="container">
                            <div class="row">   
                                <?php
                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                ?> 
                                <a class="navbar-brand animate__animated animate__backInLeft" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?= $image[0]; ?>" class="img-fluid ar-header__logo" alt="">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="hamburger" id="hamburger-icon">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>

                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav" data-aos="fade-left">
                                    <ul class="navbar-nav">
                                        <?php
                                        wp_nav_menu(array( 
                                        'theme_location' => 'primary-nav',
                                        'after' => '<i class="fas fa-broom wow animate__animated"></i> ',
                                        'div' => 'form-group form-group-icon-bottom' ));
                                        ?>  
                                    </ul>
                                </div>
                            </div>
                        </div> 
                    </nav>
                </div>
            </div>
        </div>
    </header>

<script>
jQuery(".menu-item-has-children").on("click", function(event) {
event.stopPropagation();
jQuery(".sub-menu").toggleClass("is-active");
});
</script>