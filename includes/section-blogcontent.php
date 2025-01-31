<?php if( have_posts() ): while( have_posts() ): the_post();?>



	<div class="blog_time">
		<div class="float-left">
			<a href><?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></a>
		</div>

		<div class="float-right">
			<ul class="list_style">
				<li><a>Author: <?php the_author();?></a></li>
				<li><a><?php the_tags('Tags: ', ', ', '<br />');?></a></li>
				<li><a>Comments: <?php echo get_comments_number();?></a></li>
			</ul>
		</div>

    </div>

	<div class=" our_bakery_text">
		<h5> <?php the_content();?></h5>
	</div>
    




















<?php // comments_template();?>



<?php endwhile; else: endif;?>