<?php
    /*
    Template Name: our-chefs-page
    */
?>
<?php get_header();?>


<!--================Our Chef Page Header Result Area Start =================-->
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

<!--================Our Chef Page Header Result Area End =================-->

<!--================Start Our Chefs Area =================-->
<section class="our_chef_area p_100">
    <div class="container">
        <div class="row our_chef_inner">
            <div class="col-lg-3 col-6">
                <div class="chef_text_item">
                    <div class="main_title">
                        <h2>Our Chefs</h2>
                        <p>Our Five-Star Chefs make the best cakes in Malden</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="chef_item">
                    <div class="chef_img">
                        <img class="img-fluid" src="<?php bloginfo('template_directory')?>/img/chef/chef-1.jpg" alt="">
                        <ul class="list_style">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                    <a href="#"><h4>Mark Jones</h4></a>
                    <h5>Expert in Handcrafted Cake Making</h5>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="chef_item">
                    <div class="chef_img">
                        <img class="img-fluid" src="<?php bloginfo('template_directory')?>/img/chef/chef-2.jpg" alt="">
                        <ul class="list_style">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                    <a href="#"><h4>Lucas Woods</h4></a>
                    <h5>5 Star Baker</h5>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="chef_item">
                    <div class="chef_img">
                        <img class="img-fluid" src="<?php bloginfo('template_directory')?>/img/chef/chef-3.jpg" alt="">
                        <ul class="list_style">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                    <a href="#"><h4>Jack Harris</h4></a>
                    <h5>The 2021 Creative Chef Laureate</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Our Chefs Area =================-->


<?php get_footer();?>