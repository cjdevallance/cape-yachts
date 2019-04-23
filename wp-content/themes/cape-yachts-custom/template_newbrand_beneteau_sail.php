<?php
/*
Template Name:  New Beneteau Sail
*/
get_header(); ?>

<div id="navbox">

	<ul id="navdrops">
	<li id="explore">BRAND<br>
    RESOURCES</li>
		<ul class="individual-links">
		<!--<li><a href="#facts">&raquo; Fun Facts about Beneteau</a></li>
		<li><a href="#social">&raquo; Social Media</a></li>
		<li><a href="#specs">&raquo; Download Specs</a></li>-->
		<li><a href="../brokerage-inventory/?type=Sail&makemodel=beneteau&minprice=&maxprice=&minyear=&maxyear=&minlength=&maxlength=&SimpleSearch=Search+>&sort=lengthdesc">&raquo; See our Inventory</a></li>
	</ul>
	<li id="search">QUICK YACHT<br>
    SEARCH</li>
    	<ul class="individual-links2">
    	
		<form action="<?php bloginfo( 'url' ); ?>/compile_search.php" method="post" name="searchform">
		<input type="hidden" name="urlx" value="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];?>">
		<input type="hidden" id="inv" name="source" value="inv">

        <div class="quick-search-form">

            <div class="search-form-div">
                Make/Model:<br>
                <input type="text" name="man" value="">
            </div>

            <div class="quick-search-div">
                Length:<br>
                <input type="text" name="minLn" value="">  to <input type="text" name="maxLn" value="">
            </div>
            
            <div class="quick-search-div">
                Price:<br>
                <input type="text" name="minPr" value=""> to <input type="text" name="maxPr" value="">
            </div>

            <div class="quick-search-div">
                Year:<br>
                <input type="text" name="minYr" value=""> to <input type="text" name="maxYr" value="">
            </div>
            
            <div class="search-form-div">
                Boat Type:<br>
                <select name="type">
                <option value="" selected>All Boat Types</option>
                <option value="Power">All Power</option>
                <option value="Sail">All Sail</option>
                </select>
            </div>

            <div class="search-form-div">
                <input value="Search" class="search-form-button" type="submit">
            </div>

        </div>

        </form>
        
    	</ul>
    	
    <li id="email">JOIN OUR<br>
    EMAIL LIST</li>
		<ul class="individual-links4">
        <div class="quick-search-form">
        
        	<?php 
			if ($_GET['sent']){
			echo "<p style=\"font-size: 130%; margin: 0px; color: #FFFFFF;\">THANK YOU!</p>

			<p style=\"font-size: 90%; color: #FFFFFF;\">You've successfully signed up for our email newsletter.</p>";
			} else { ?>
            
        	<?php $reference = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
        
        	<form action="<?php bloginfo( 'template_url' ); ?>/email-form.php" name="email_form" method="post" class="email-form">
			<input class="starfish" type="text" name="starfish">
            <input type="hidden" name="reference" value="<?php echo $reference; ?>">
            
			<div class="contact-field">
				Email Address*:<br>
				<input type="text" name="email">
            </div>
            
            <a href="javascript:validate_email_form();" class="search-form-button">Submit ></a>

			</form>
            <? } ?>
        </div>
		</ul>

	<li id="share">SHARE</li>
		<ul class="individual-links3">
    	<li><a href="https://www.facebook.com/capeyachts?ref=br_tf" target="new"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-facebook-color.png" alt="Facebook" border="0"></a>
    	<a href="https://twitter.com/capeyachts?lang=en" target="new"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-twitter-color.png" alt="Twitter" border="0"></a>
        <a href="https://plus.google.com/110240146593484492098/posts" target="new"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-google-color.png" alt="Google" border="0"></a>
        <a href="https://www.linkedin.com/company/cape-yachts?trk=top_nav_home" target="new"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-linkedin-color.png" alt="LinkedIn" border="0"></a>
        <a href="https://www.youtube.com/user/capeyachts" target="new"><img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-youtube-color.png" alt="YouTube" border="0"></a></li>
		</ul>

	</ul>

</div>

<!-- Section #1 -->
<section id="beneteau-power" data-speed="4" data-type="background">

	<div class="content-area newmodel">

		<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor-dark.png">

		<h2 class="newmodel-title">BENETEAU SAIL</h2>

		<?php
		$my_id = 59;
		$post_id_59 = get_post($my_id);
		$content = $post_id_59->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
		?>

	</div>

	<div class="content-area newmodel">

        <div class="main-model-links">
        	<a href="#oceanis"><img src="<?php bloginfo( 'template_directory' ); ?>/images/oceanis-preview.jpg"><br>
        	OCEANIS</a>
        </div>
        
        <div class="main-model-links">
        	<a href="#sense"><img src="<?php bloginfo( 'template_directory' ); ?>/images/sense-preview.jpg"><br>
        	SENSE</a>
        </div>

        <div class="main-model-links">
        	<a href="#first"><img src="<?php bloginfo( 'template_directory' ); ?>/images/first-preview.jpg"><br>
        	FIRST</a>
        </div>

	</div>

</section>



<!-- Section #2 -->
<section id="oceanis" data-speed="4" data-type="background">

	<div class="content-area newmodel">
	
		<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor-dark.png">

		<h2 class="newmodel-title">BENETEAU OCEANIS</h2>

		<?php
		$my_id = 91;
		$post_id_91 = get_post($my_id);
		$content = $post_id_91->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
		?>
		
		<?php query_posts("cat=16&posts_per_page=100&orderby=title&order=ASC"); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

		<?php if(has_post_thumbnail($post->ID)){ $thumbsrc = get_the_post_thumbnail($post->ID,'medium'); };
		$url = get_post_meta($post->ID, "Listing URL", true); ?>
			
		<div class="model-links">
			<p><a href="<?php echo $url; ?>"><?php echo $thumbsrc; ?><br>
			<?php the_title(); ?></a></p>
		</div>

		<?php endwhile; ?>

		<?php endif; ?>
            
		<div class="video-container">
			<iframe width="500" height="280" src="//www.youtube.com/embed/EFeN_Dsi-RU" frameborder="0" allowfullscreen></iframe>
		</div>   

	</div>

</section>





<!-- Section #3 -->
<section id="sense" data-speed="4" data-type="background">

	<div class="content-area newmodel">
	
		<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor-dark.png">

		<h2 class="newmodel-title">BENETEAU SENSE</h2>

		<?php
		$my_id = 89;
		$post_id_89 = get_post($my_id);
		$content = $post_id_89->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
		?>
		
		<?php query_posts("cat=18&posts_per_page=100&orderby=title&order=ASC"); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

		<?php if(has_post_thumbnail($post->ID)){ $thumbsrc = get_the_post_thumbnail($post->ID,'medium'); };
		$url = get_post_meta($post->ID, "Listing URL", true); ?>
			
		<div class="model-links">
			<p><a href="<?php echo $url; ?>"><?php echo $thumbsrc; ?><br>
			<?php the_title(); ?></a></p>
		</div>

		<?php endwhile; ?>

		<?php endif; ?>
            
		<div class="video-container">
			<iframe width="500" height="280" src="//www.youtube.com/embed/lzbLQbji_z0" frameborder="0" allowfullscreen></iframe>
		</div>

	</div>

</section>



<!-- Section #4 -->
<section id="first" data-speed="4" data-type="background">

	<div class="content-area newmodel">

		<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor-dark.png">

		<h2 class="newmodel-title">BENETEAU FIRST</h2>

		<?php
		$my_id = 87;
		$post_id_87 = get_post($my_id);
		$content = $post_id_87->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
		?>
		
		<?php query_posts("cat=17&posts_per_page=100&orderby=title&order=ASC"); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

		<?php if(has_post_thumbnail($post->ID)){ $thumbsrc = get_the_post_thumbnail($post->ID,'medium'); };
		$url = get_post_meta($post->ID, "Listing URL", true); ?>
			
		<div class="model-links">
			<p><a href="<?php echo $url; ?>"><?php echo $thumbsrc; ?><br>
			<?php the_title(); ?></a></p>
		</div>

		<?php endwhile; ?>

		<?php endif; ?>
   
		<div class="video-container">
			<iframe width="500" height="280" src="//www.youtube.com/embed/Ty-Gticf5eM" frameborder="0" allowfullscreen></iframe>
		</div>

	</div>

</section>



<script>
$(document).ready(function() {
	$('a[href*=#]').bind('click', function(e) {
	e.preventDefault(); //prevent the "normal" behaviour which would be a "hard" jump
       
	var target = $(this).attr("href"); //Get the target
			
	// perform animated scrolling by getting top-position of target-element and set it as scroll target
	$('html, body').stop().animate({ scrollTop: $(target).offset().top }, 2000, function() {
		location.hash = target;  //attach the hash (#jumptarget) to the pageurl
	});
			
	return false;
	});
});
</script>

<?php get_footer(); ?>