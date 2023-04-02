<?php
    //Template Name: Reinigung Template
    get_header();
?>
<div class="container-fluid">
    <div class="row">
        <div class="ld_dienstleistungen-sub">

            <div class="img-bg">
                <img src="<?php the_field('background_image_r');?>" alt="">
            </div>
 
            <div class="container">
                <div class="row centeredrow">
                    <div class="intro">
                        <?php 
                        $args = array(
                        'post_type'=> 'diensleistung',
                        'order'    => 'ASC',
                        'posts_per_page' => 1,
                        'category_name' => 'reinigung'
                        );       
                        $the_query = new WP_Query( $args );
                        if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        ?>
                            <div class="intro-post animate__animated animate__tada col-lg-12 col-md-12">
                                <img src="<?php echo the_post_thumbnail_url();?>" alt="">
                                <h2><?php the_title();?></h2>
                                <p><?php the_content();?></p>
                            </div>

                        <?php
                        endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="after-intro">
                        <?php 
                        $args = array(
                        'post_type'=> 'diensleistung',
                        'order'    => 'ASC',
                        'posts_per_page' => 5,
                        'category_name' => 'after_reinigung'
                        );              
                        $the_query = new WP_Query( $args );
                        $count = 1;
                        if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        ?>
                            <div class="after-intro-post">
                                <div class="col-lg-6 p-0 simple_back <?php if($count % 2 == 0){echo 'order-lg-12 order-sm-1';}?>" style="background-image: url('<?php echo the_post_thumbnail_url();?>');">
                                    <!-- <img src="<?php echo the_post_thumbnail_url();?>" alt=""> -->
                                </div>
                                <div class="col-lg-6 text <?php if($count % 2 == 0){echo 'order-lg-1  order-sm-12';} else{echo 'bg-grey';}?>">
                                    <h2><?php the_title();?></h2>
                                    <p><?php the_content();?></p>
                                </div>
                            </div>

                        <?php
                        $count++;
                        endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="container">

                <div class="row">
                    <div class="wie-arbeiten" data-aos="zoom-in-up">
                        <h2><?php the_field('wie_arbeite_title');?></h2>
                        <svg 
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="70px" height="18px">
                        <path fill-rule="evenodd"  fill="rgb(117, 201, 204)"
                        d="M58.170,9.626 C52.073,13.126 46.870,13.126 40.772,9.626 C36.795,7.344 33.400,7.344 29.424,9.626 C23.383,13.093 18.456,13.093 12.415,9.626 C8.394,7.317 5.678,7.317 1.654,9.626 L-0.005,7.933 C4.884,5.127 8.992,5.014 14.075,7.933 C18.867,10.683 22.404,11.009 27.765,7.933 C32.848,5.014 37.574,5.145 42.431,7.933 C47.418,10.795 51.330,10.908 56.511,7.933 C61.597,5.014 64.922,5.014 70.005,7.933 L68.345,9.626 C64.258,7.278 62.260,7.278 58.170,9.626 ZM58.170,3.882 C52.073,7.382 46.870,7.382 40.772,3.882 C36.795,1.598 33.400,1.598 29.424,3.882 C23.383,7.348 18.456,7.348 12.415,3.882 C8.394,1.572 5.678,1.572 1.654,3.882 L-0.005,2.188 C4.884,-0.619 8.992,-0.731 14.075,2.188 C18.867,4.938 22.404,5.265 27.765,2.188 C32.848,-0.731 37.574,-0.600 42.431,2.188 C47.418,5.050 51.330,5.163 56.511,2.188 C61.597,-0.731 64.922,-0.731 70.005,2.188 L68.345,3.882 C64.258,1.534 62.260,1.534 58.170,3.882 ZM14.075,13.677 C18.867,16.429 22.404,16.754 27.765,13.677 C32.848,10.758 37.574,10.890 42.431,13.677 C47.418,16.541 51.330,16.653 56.511,13.677 C61.597,10.758 64.922,10.758 70.005,13.677 L68.345,15.371 C64.258,13.025 62.260,13.025 58.170,15.371 C52.073,18.871 46.870,18.872 40.772,15.371 C36.795,13.088 33.400,13.088 29.424,15.371 C23.383,18.839 18.456,18.839 12.415,15.371 C8.394,13.061 5.678,13.061 1.654,15.371 L-0.005,13.677 C4.884,10.872 8.992,10.758 14.075,13.677 Z"/>
                        </svg>
                        <p><?php the_field('wie_arbeite_description');?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="wie-arbeiten-posts">
                        <?php 
                        $args = array(
                        'post_type'=> 'diensleistung',
                        'order'    => 'ASC',
                        'posts_per_page' => 3,
                        'category_name' => 'wie_arbeiten'
                        );              
                        $the_query = new WP_Query( $args );
                        $count = 1;
                        if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        ?>

                        <div class="col-lg-4 col-md-4" data-aos="flip-left">
                            
                            <?php $link = get_field('link');
                            if( $link ):
                            ?>
                            <a class="button" href="<?php echo esc_url( $link ); ?>">
                            <div class="wie-arbeite-post">
                                <img src="<?php echo the_post_thumbnail_url();?>" alt="">
                                <h2><?php the_title();?></h2>
                                <p><?php the_content();?></p>
                            </div>
                            </a>

                            <?php endif; 
                            ?>
                        </div>

                        <?php
                        $count++;
                        endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>       
     
<?php
get_footer();
?>