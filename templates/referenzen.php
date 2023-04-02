<?php
    //Template Name: Referenzen Template
    get_header();
?>
  <section class="unsere_portfolio">
    <div class="container">
        <div class="betweenspace">
            <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-12 unsere_portffolio ">
                        <?php the_field('unsereportfolio') ?>   
                    </div>

                <div class="col-lg-12 col-md-12 col-sm-12 tabbb">
                    <nav>
                        <ul class="nav nav-tabs1" id="nav-tab" role="tablist">

                        <?php $terms = get_terms('unsere_portfolio'); 
                        $count = 0;
                        foreach($terms as $term){ ?>
                            
                            <li class="nav-item ">
                                <a class="nav-link <?php echo $count == 0 ? 'active' : ''?>" data-toggle="tab" href='#<?php echo $term->slug;?>' id="<?php echo $term->slug;?>-tab" role="tab" aria-controls="<?php echo $term->slug;?>" aria-selected="true">
                                   <?php
                                        echo $term->name; 
                                    ?>
                                </a>
                            </li>

                        <?php
                        $count++; }  
                        ?>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
 
    <div class="row">
        <div class="col-12 "> 
            <div class="tab-content">
                    <?php $terms = get_terms('unsere_portfolio'); 
                    $count = 0;
                    foreach($terms as $term): 
                    ?>

                        <div class="tab-pane fade <?php echo $count == 0 ? 'active show' : ''?>" id="<?php echo $term->slug;?>" role="tabpanel" aria-labelledby="<?php echo $term->slug;?>-tab">
                
                            <div class="all">
                                <?php
                                $args = array(
                                'post_type' => 'portfolio',
                                'posts_per_page' => '-1',
                                'order' => 'ASC',
                                'unsere_portfolio' => $term->slug,
                                );
                                $loop = new WP_Query($args);
                                while($loop->have_posts()):
                                $loop->the_post();
                                ?>

                                <div class="col-lg-4 col-md-6 col-sm-6 klas wow animate__animated"> 
                                
                                    <div class="under"> 
                                        <a href="<?php the_permalink();?>"><div class="overly"></div>
                                        <img div="" src="<?php the_post_thumbnail_url();?>" alt=""> 
                                        
                                        <h3><?php the_title(); ?></h3></a>   
                                    </div>
                                    
                                </div>

                                <?php endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
   
                        </div>      
                    <?php 
                    $count++;
                    endforeach;
                    ?>
            </div>
        </div>
    </div>
</div>
</section>

<?php
get_footer();
?>