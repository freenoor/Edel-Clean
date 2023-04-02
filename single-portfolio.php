<?php get_header();
the_post();?>

<section class="top_single">
    <div class="container">
        <div class="row">
            <div class="all_con col-lg-6 col-md-6 col-sm-12">
               <h2><?php the_title(); ?></h2>
                <div class="content_single">
                    <div class="date_client">
                        <?php the_field('date');?>
                    </div>
                    <div class="saysomething">
                       <?php the_field('info');?>
                    </div>
                    <div class="number_client">
                        <a>Ort: <?php the_field('number');?></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12 map_client">
                <div id="map1" style="height:250px !important"></div> 
            </div>

        </div>
    </div>
</section>


<!-- gallery_about_us -->
<div class="galle">
<div class=" container-fluid gallery_menu clearfix">
    <div class="container">
        <div class="info_galle">
            <h3>Galerie</h3>
        </div>
        <div class="fullwidth project-gallery">
            <div class="">
                <div class="thumbnails">
                    <link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/lightgallery/latest/css/lightgallery.css'>
                    <ul id="lightgallery">
                        <?php getGallery(); ?>                                 
                    </ul>
                </div>
            </div>    
        </div>

    <?php
        wp_reset_query();
        function getGallery(){

            $gallery = get_post_gallery($post, false);

            $gids = explode( ",", $gallery['ids'] );

                foreach( $gids as $id ) {
                ?>    

                    <li data-src="<?php echo wp_get_attachment_url( $id ); ?>" class="gallery-item  img-fluid" data-aos="zoom-in-up">
                        <a href="" class="img-project">
                            

                                     <div class="thumbnail wow animate__animated" style="background-image:url(<?php echo wp_get_attachment_url( $id ); ?>)"> 
                                         <div class="over">                                    
                                         </div>
                                         <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                        <path d="M128,32V0H16C7.163,0,0,7.163,0,16v112h32V54.56L180.64,203.2l22.56-22.56L54.56,32H128z"/>
                                                        <path d="M496,0H384v32h73.44L308.8,180.64l22.56,22.56L480,54.56V128h32V16C512,7.163,504.837,0,496,0z"/>
                                                        <path d="M480,457.44L331.36,308.8l-22.56,22.56L457.44,480H384v32h112c8.837,0,16-7.163,16-16V384h-32V457.44z"/>
                                                        <path d="M180.64,308.64L32,457.44V384H0v112c0,8.837,7.163,16,16,16h112v-32H54.56L203.2,331.36L180.64,308.64z"/>
                                            </svg>
                                        </div>
                            <img class="img-fluid thumbnail d-none" src="<?php echo wp_get_attachment_url( $id ); ?>">
                            <div class="light-gallery-poster">
                            
                            </div>
                        </a>
                    </li>
                <?php
            }
            
            
        }
    ?>
 
 </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js'></script>
                <script src='https://cdn.jsdelivr.net/g/lightgallery@1.3.5,lg-fullscreen@1.0.1,lg-hash@1.0.1,lg-pager@1.0.1,lg-share@1.0.1,lg-thumbnail@1.0.1,lg-video@1.0.1,lg-autoplay@1.0.1,lg-zoom@1.0.3'></script>
                    <script type="text/javascript">
                    jQuery(document).ready(function($)  {
                    $('#lightgallery').lightGallery({
                        pager: true
                    });
                    });
                    </script>
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVu3FMyk485eNAMGE6uc5ttRxS1PYDFJE"></script>
            <script type="text/javascript">
                    google.maps.event.addDomListener(window, 'load', init);
                    function init() {
                    var mapOptions = {
                    zoom: 12,
                    center: new google.maps.LatLng(<?php the_field('latitude');?>, <?php the_field('longitude');?>),
                    };
                    var mapElement = document.getElementById('map1');
                    var map = new google.maps.Map(mapElement, mapOptions);
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php the_field('latitude');?>, <?php the_field('longitude');?>),
                    map: map,
                    icon: '<?= get_template_directory_uri(); ?>/img/pin.png',
                    });
                    }
            </script>


<?php get_footer();?>