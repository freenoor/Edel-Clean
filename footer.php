    <div class="container">
        <div class="row">
            <div class="reserved" data-aos="flip-down">
                <?php if(is_active_sidebar('reserved')):?>
                    <?php dynamic_sidebar('reserved'); ?>
                <?php endif;?>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid" >
            <div class="row">
                <div class="ld_footer">
                    <div class="container">
                        <div class="ld_footer-main"> 
                            <div class="row">
                                <?php if(is_active_sidebar('footer_contact')):?>
                                <div class="col-lg-4 col-md-4">
                                    <div class="ld_footer-main-contact">
                                    <?php dynamic_sidebar('footer_contact'); ?>
                                    </div>
                                </div>
                                <?php endif;?>
                                
                                
                                <div class="col-lg-4 col-md-4 ld_footer-main-impressum">
                                    <div class="rightside-1">
                                        <a class="title-imp" data-toggle="modal" data-target="#myModal">Impressum</a>
                                            <div class="modal fade" id="myModal" role="dialog">
                                                <div class="modal-dialog modal-lg">
                                                    <?php
                                                    $impressum_args = array(
                                                    'post_type' => 'impressum',
                                                    'posts_per_page' => 1
                                                    );
                                                    $impressum_query = new WP_Query($impressum_args);
                                                    if($impressum_query->have_posts()) :
                                                    while ($impressum_query->have_posts()) : $impressum_query->the_post(); 
                                                    ?>
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><?php the_title();?></h4>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                    
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="left_impre col-lg-6 col-md-6 col-sm-12">
                                                                    <?php the_field('adress');?>
                                                                </div>
                                                                <div class="right_impre col-lg-6 col-md-6 col-sm-12">
                                                                    <?php the_field('adress_right');?>
                                                                </div>
                                                            </div>
                                                            <div class="left_impre">
                                                                <?php the_field('content_all');?>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                                                        </div>
                                                    </div>
                                                    
                                                    <?php endwhile; 
                                                    wp_reset_postdata(); ?>
                                                    <?php else: ?> 
                                                    <h2>Can't find post</h2>
                                                    <p>Sorry, we were unable to find the posts you requested</p>
                                                    <?php endif; ?> 

                                                </div>
                                            </div>
                                       
                                    </div>
                                </div>
                        
                                <?php if(is_active_sidebar('footer_socials')):?>
                                <div class="col-lg-4 col-md-4" >
                                    <div class="ld_footer-main-socials">
                                        <?php dynamic_sidebar('footer_socials'); ?>
                                    </div>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>




<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">

    jQuery(document).ready( function(){
        var $select =  jQuery('.wpcf7-form-control-wrap .wpcf7-select');
        jQuery('option[value=""]', $select).css('display', "none");
        });

    jQuery(".hamburger").click(function() {
        jQuery(".hamburger").toggleClass("is-active");
        });

    jQuery('.map_client:empty').hide();

    AOS.init();
    AOS.init({disable: 'mobile'});
    AOS.init({duration: 1200,})

</script>

<script>
jQuery(window).click(function() {
    jQuery('.sub-menu').removeClass('is-active');
});
</script>

</body>
</html>
<?php wp_footer();?>