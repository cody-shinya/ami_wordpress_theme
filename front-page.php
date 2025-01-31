<?php get_header();?>

<!--================ Sliders Start =================-->

<?php include 'slider-short.php';?>

<!--================ Sliders End =================-->

<!--================Welcome Area =================-->
<section class="welcome_bakery_area" style="margin-top: -15px;">
    <div class="container">
        <div class="welcome_bakery_inner p_100">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main_title">
                        <h2>Welcome to Ami's Cake</h2>
                        <p>For your special event, our bakery serves the ideal personalized cakes, pastries and ice creams. Get a quick snack or relax and stay a while ❤︎ </p>
                    </div>
                    <div class="welcome_left_text">
                        <p>The "secret" to our success has been refusing to compromise on quality and craftsmanship.</p>
                        <a class="pink_btn" href="<?php bloginfo('url')?>/about-us">Know more about us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="welcome_img">
                        <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/welcome-right.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    <?php include 'cake_feature.php';?>    
    </div>
</section>
<!--================End Welcome Area =================-->

<!--================Service Area Start =================-->
<?php include 'main-services.php'?>
<!--================Service Area End =================-->

<!--================Dining Menu Start =================-->
<?php include 'dining-menu.php'?>
<!--================Dining Menu End =================-->

<!--================Start Our Chefs Area =================-->
<?php include 'our-chefs.php'?>
<!--================End Our Chefs Area =================-->

<!--================Start Coupon Area =================-->
<?php include 'coupon.php'?>
<!--================End Coupon Area =================-->


<?php get_footer();?>