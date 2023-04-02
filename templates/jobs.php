<?php
    //Template Name: Jobs Template
    get_header();
?>
<div class="container-fluid">
    <?php if(have_posts()):
        while(have_posts()) : the_post();?>
            <div class="row">
                <div class="ld_kontakt ld_jobs" data-aos="flip-down">
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

<?php
    get_footer();
?>