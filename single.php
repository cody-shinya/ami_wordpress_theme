<?php get_header();?>

<!--================ Page Header Result Area Start =================-->
<section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3 style="margin-top: 100px;"> 
                    <?php the_title();?>
				    </h3>
        			<ul>
        				<li><a href="<?php bloginfo('url')?>">Back to Home</a></li>
        				<li><a href="<?php bloginfo('url')?>/<?php echo get_post_field('post_name')?>">
                        <?php the_title();?>
                        </a></li>
        			</ul>
        		</div>
        	</div>
</section>

<!--================ Page Header Result Area End =================-->

<!--================ Start Page Area =================-->

<section class="service_offer_area p_100">
        	<div class="container">
        		<div class="main_title">
        			<h2><?php the_title();?></h2>
                    
        		</div>

                <div class=" blog_item">
                    <div class=" blog_img">
                    <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url();?>" 
                    alt="<?php the_title();?>" class="img-fluid"
                    style="width: 100%; height:570px;
                     object-fit:cover "  >
                    <?php endif;?>
                    </div>

                    <div class=" blog_text">
                        
                        <?php get_template_part('includes/section','blogcontent');?>
                        
                    </div>

                    

                    <?php wp_link_pages();?>
                </div>
        		
        	</div>
</section>
<!--================End Page Area =================-->


<?php get_footer();?>