<?php 

/*Template name: Special Layout*/

get_header();
	
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>
		
		<article class="post page">
			<h2><?php the_title();?></h2>
				
				<!--info-box-->
				<div class="info-box">
					<h4>Disclaimer title</h4>
					<p>Them you'll deep replenish without called light him can't was fruit multiply sea stars one.Under days their may is after. Green, fish us was.</p>
				</div><!--/info-box-->

			<?php the_content()?>
		</article>
		
		<?php	endwhile;
	
		else :
			echo '<p>No content found</p>';
	
	endif;

get_footer();		

 ?>