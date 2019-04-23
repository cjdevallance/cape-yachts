<?php
/**
 * The Template for displaying all single posts.
*/

get_header(); ?>

<!---------- middle content ----------->

<section class="middle-section-downlevel">

	<div class="middle-section-container">

		<div class="page-title">
	
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor-dark.png">
		
			<h1 class="downlevel-page-title"><?php the_title(); ?></h1>
	
		</div>

		<section class="full">

			<?php while ( have_posts() ) : the_post(); ?>
			<?php if(has_post_thumbnail($post->ID)){ $thumbsrc = get_the_post_thumbnail($post->ID,'medium'); }; ?>
	
			<?php the_content(); ?>
		
			<a class="previous-page" href="javascript:javascript:history.go(-1)">< Back to previous page</a>
	
			<?php endwhile; ?>

		</section>
	
	</div>

</div>

<!---------- end middle content ----------->

<?php get_footer(); ?>