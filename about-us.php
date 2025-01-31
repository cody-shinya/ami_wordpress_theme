<?php
    /*
    Template Name: about-us
    */
?>
<?php get_header();?>

<!--================Menu Page Header Result Area Start =================-->
<section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3 style="margin-top: 100px;"> 
                    <?php the_title();?>
				    </h3>
        			<ul>
        				<li><a href="<?php bloginfo('url')?>">Back to Home</a></li>
        				<li><a href="<?php bloginfo('url')?>/<?php echo get_post_field('post_name')?>">
                        <?php echo get_post_field('post_name')?>
                        </a></li>
        			</ul>
        		</div>
        	</div>
</section>

<!--================Menu Page Header Result Area End =================-->


<!--================About-US Area Start =================-->
<!--================Our Bakery Area =================-->
<section class="our_bakery_area p_100">
        	<div class="container">
        		<div class="our_bakery_text">
        			<h2>Our Bakery Approach </h2>
        			<h6>Our Signature Cakes are always your best friends. Take a break from your busy life.</h6>
        			<p>The "secret" to our success has been refusing to compromise on quality and craftsmanship. Every day, we work hard to keep learning, developing, and evolving.Our freshly refurbished flagship in Malden, MA ,  features abundant seating and a modern cafe environment where you can get a quick snack or relax and stay a while.</p>
        		</div>
        		<div class="row our_bakery_image">
        			<div class="col-md-4 col-6">
        				<img class="img-fluid" src="<?php bloginfo('template_directory')?>/img/our-bakery/bakery-1.jpg" alt="">
        			</div>
        			<div class="col-md-4 col-6">
        				<img class="img-fluid" src="<?php bloginfo('template_directory')?>/img/our-bakery/bakery-2.jpg" alt="">
        			</div>
        			<div class="col-md-4 col-6">
        				<img class="img-fluid" src="<?php bloginfo('template_directory')?>/img/our-bakery/bakery-3.jpg" alt="">
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Our Bakery Area =================-->


<!--================About-US Area Start =================-->



<?php get_footer();?>