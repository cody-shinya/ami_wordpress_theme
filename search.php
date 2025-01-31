<?php get_header();?>

<!--================ Search Header Result Area Start =================-->
<section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3 style="margin-top: 100px;">Search Results for 
				    '<?php echo get_search_query();?>'</h3>
        			<ul>
        				<li><a href="<?php bloginfo('url')?>">Back to Home</a></li>
        				<li><a href="<?php bloginfo('url')?>/?s=<?php echo get_search_query();?>">
						Search for '<?php echo get_search_query();?>'
						</a></li>
        			</ul>
        		</div>
        	</div>
</section>

<!--================ Search Header Result Area End =================-->

<section class="main_blog_area p_100">
        	<div class="container">
        		<div class="blog_area_inner">
					<div class="main_blog_column row">
						<div class="col-lg-6">
						<?php get_template_part('includes/section','searchresults');?>

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






