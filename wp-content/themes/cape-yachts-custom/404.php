<?php
/**
* The template for displaying 404 pages (Not Found).
*/

get_header(); ?>

<!---------- middle content ----------->

<section class="middle-section-downlevel">

	<div class="middle-section-container">

		<div class="page-title">
	
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor-dark.png">
		
			<h1 class="page-title" style="display: none;"><?php _e( 'Not found', 'twentythirteen' ); ?></h1>
	
		</div>

		<section class="full">

			<h2 style="text-align: center; margin-bottom: 2%;">Page not found</h2>
            
            <hr style="border: 0; border-top: 1px solid rgba(158, 178, 199, 1); border-bottom: 1px solid rgba(255, 255, 255, 0.1); margin-bottom: 7%; width: 450px;">

			<p style="text-align: center;">Sorry, but it looks like nothing was found at this location. Try an <a href="<?php bloginfo( 'url' ); ?>/brokerage-inventory/">inventory search</a>.</p>

		</section>
	
	</div>

</div>

<!---------- end middle content ----------->

<?php get_footer(); ?>