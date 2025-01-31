
<?php get_header();?>

<!--================ Blog Header Area Start =================-->
<section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3 style="margin-top: 100px;">Blogs 
				    </h3>
        			<ul>
        				<li><a href="<?php bloginfo('url')?>">Back to Home</a></li>
        				<li><a href="<?php bloginfo('url')?>/category/blogs">Blogs</a></li>
        			</ul>
        		</div>
        	</div>
</section>

<!--================ Blog Header Result Area End =================-->

<section class="main_blog_area p_100">
        	<div class="container">
        		<div class="blog_area_inner">
					<div class="main_blog_column row">
						<div class="col-lg-6">
						<?php get_template_part('includes/section','archive');?>

						</div>
					</div>
				</div>

				<div class=" blog_pagination">
				<p class=" font-weight-light"><?php previous_posts_link();?></p>
				<p class=" font-weight-light"><?php next_posts_link();?></p>
				</div>
				
				

			</div>
			

</section>








<?php get_footer();?>