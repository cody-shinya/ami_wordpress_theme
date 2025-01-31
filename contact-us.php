<?php
    /*
    Template Name: contact-us
    */
?>
<?php get_header();?>


<!--================Contact Us Page Header Result Area Start =================-->
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

<!--================Contact Us Page Header Result Area End =================-->

<!--================Contact Us Area Start =================-->

<section class="contact_form_area p_100">
        	<div class="container">
        		<div class="main_title">
					<h2>Get In Touch</h2>
					<h5> We'd like to hear from your feedbacks ❤︎ </h5>
				</div>
       			<div class="row">
       				<div class="col-lg-7">
       					<?php echo do_shortcode('[wpforms id="149"]');?>
       				</div>
       				<div class="col-lg-4 offset-md-1">
       					<div class="contact_details">
       						<div class="contact_d_item">
       							<h3>Address :</h3>
       							<p>6001 Pleasant St <br /> Malden, MA 02148</p>
       						</div>
       						<div class="contact_d_item">
       							<h5>Phone : <a href="tel:01372466790">+1.857.203.7158</a></h5>
       							<h5>Email : <a href="mailto:rockybd1995@gmail.com">info@amicake.bar</a></h5>
       						</div>
       						<div class="contact_d_item">
       							<h3>Opening Hours :</h3>
       							<p>Mon. : Fri.: 8 am - 8 pm</p>
       							<p>Sat. : 9am - 4pm</p>
                                <p>Sun. : Closed</p>
                                
       						</div>
       					</div>
       				</div>
       			</div>
        	</div>
        </section>



<!--================Contact Us Area End =================-->

<!--================Main Services Area Start =================-->

<?php include 'main-services.php';?>

<!--================Main Services Area End =================-->





<?php get_footer();?>