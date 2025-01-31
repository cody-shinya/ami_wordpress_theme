<?php get_header();?>

<!--================ Page Header Result Area Start =================-->
<section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3 style="margin-top: 100px;"> 
                    <?php woocommerce_page_title();?>
				    </h3>
        			<ul>
        				<li><a href="<?php bloginfo('url')?>">Back to Home</a></li>
        				<li><a href="<?php bloginfo('url')?>/<?php woocommerce_page_title();?>">
                        <?php woocommerce_page_title();?>

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
        			
        			
        		</div>

                <?php woocommerce_content();?>
        		
        	</div>
</section>
<!--================End Page Area =================-->


<?php get_footer();?>