<?php
/*
Template Name:  News & Events
 */
get_header(); ?>

<a name="newsevents" id="newsevents"></a>

<!---------- middle content ----------->

<section class="middle-section-downlevel">

	<div class="middle-section-container">

		<div class="page-title">
	
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor-dark.png">
		
			<h1 class="downlevel-page-title"><?php the_title(); ?></h1>
	
		</div>

		<section class="full">

			<?php query_posts("cat=3&posts_per_page=100&orderby=title&order=ASC"); 
			if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
			<div class="news-events-posts">
				<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'thumb-medium' );
				} else { ?>
				<img src="<?php bloginfo( 'template_url' ); ?>/images/default-image.jpg" alt="<?php the_title(); ?>">
				<?php } ?>
		
				<h3><?php the_title(); ?></h3>
				
				<p><?php the_content(); ?></p>
			</div>
			
			<?php endwhile; ?>
		
			<a class="previous-page" href="javascript:javascript:history.go(-1)">< Back to previous page</a>
	
			

		</section>
	
	</div>

</div>

<!---------- end middle content ----------->

<?php get_footer(); ?>