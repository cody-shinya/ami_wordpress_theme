<?php if( have_posts() ): while( have_posts() ): the_post();?>
	

	
		
	<div class=" blog_item">
            <div class=" blog_img">

                <?php if(has_post_thumbnail()):?>
                    
                    <img src="<?php the_post_thumbnail_url('blog-small');?>" 
                    alt="<?php the_title();?>" 
                    class="img-fluid">
                    
                <?php endif;?>
            </div>

			
			<div class=" blog_text">

                <div class="blog_time">
                    <div class="float-left">
                        <a><?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></a>
                    </div>

                    <div class="float-right">
                        <ul class="list_style">
                            <li><a>Author: <?php the_author();?></a></li>
                            <li><a><?php the_tags('Tags: ', ', ', '<br />');?></a></li>
                            <li><a>Comments: <?php echo get_comments_number();?></a></li>
                        </ul>
                    </div>

                </div>
                    <a href="<?php the_permalink();?>">
                        <h4><?php the_title();?></h4></a>
                    <p>
                        <?php the_excerpt();?>
                    </p>
                    <a class="pink_more" href="<?php the_permalink();?>">Read more</a>

                    

			</div>
        

	</div>

	


<?php endwhile; else: ?>

			
			There are no results for '<?php echo get_search_query();?>'


<?php endif;?>