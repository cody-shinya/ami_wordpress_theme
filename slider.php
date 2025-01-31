<!-- ====== Slider Start ======  -->

<div id="carouselExampleIndicators" class="carousel slide animated zoomIn" data-ride="carousel">
    <?php
        $args = array('post_type' => 'header_slider');
        $slider_query = new WP_Query( $args );
        
    ?>
    <ol class="carousel-indicators">
        <?php if(have_posts()): while($slider_query->have_posts()):
            $slider_query -> the_post();?>
        <li <?php if($slider_query->current_post == 0): ?> class="active" 
            <?php endif;?>
        data-target="#carouselExampleIndicators" 
        data-slide-to="<?php echo $slider_query -> current_post; ?>" 
        ></li>
        <?php endwhile; endif;?>
    </ol>
    
    <?php rewind_posts(); ?>

    <div class="carousel-inner">
        <?php if(have_posts()): while($slider_query->have_posts()):
                $slider_query -> the_post();
                $image_id = get_post_thumbnail_id();
                $image_url = wp_get_attachment_image_src($image_id, 'large', true);
                $image_alt_tag = get_post_meta($image_id,'_wp_attachment_image_alt', true);
                ?>

        <div class="carousel-item <?php if($slider_query->current_post == 0): ?>
            active <?php endif;?>"> 
            
            <img class="d-block w-100 img-fluid animated fadeIn"
            style=" height:70vh; object-fit:cover"
            src="<?php echo $image_url[0]; ?>">
                
               
            

            <div class="carousel-caption d-none d-md-block animated fadeInUp">
                
                <p><?php the_content();?></p>
                
                <p><a class="pink_btn" style="opacity: 0.9;"
                 href="<?php bloginfo('url');?>/<?php the_field('button_url')?>">
                <?php the_field('button_text');?></a>
                </p>
                
            </div>              
        </div>

        <?php endwhile; endif;wp_reset_query();?>

    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>

</div>




<script>
$('.carousel').carousel({
  interval: 2000
})
</script>


<!-- ====== Slider End ======  -->