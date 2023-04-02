<?php
    //Template Name: Kontakt Template
    get_header();
?>
<div class="container-fluid">
    <?php if(have_posts()):
        while(have_posts()) : the_post();?>
            <div class="row">
                <div class="ld_kontakt" data-aos="flip-down">
                    <div class="container">
                        <div class="row">
                            <?php the_content();?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile;
    endif;?>
</div>  

<div id="map"></div>       
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVu3FMyk485eNAMGE6uc5ttRxS1PYDFJE"></script>
<script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', init);
        function init() {
        var mapOptions = {
        zoom: 12,
        center: new google.maps.LatLng(<?php the_field('latitude');?>, <?php the_field('longitude');?>),
        };
        
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
        position: new google.maps.LatLng(<?php the_field('latitude');?>, <?php the_field('longitude');?>),
        map: map,
        icon: '<?= get_template_directory_uri(); ?>/img/pin.png',
        
        });
        }
        
</script>

<?php
get_footer();
?>
