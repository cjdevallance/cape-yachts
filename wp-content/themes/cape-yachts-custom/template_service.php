<?php
/*
Template Name:  Service
 */
get_header(); ?>

<div id="navbox">

	<ul id="navdrops">
	<li id="explore">EXPLORE<br>
    CAPE YACHTS</li>
		<ul class="individual-links">
		<li><a href="#wrapservicedifference">&raquo; What Makes Us</a>
        <a href="#wrapservicedifference">Different</a></li>
		<li><a href="#wrapservice">&raquo; Service</a></li>
		<li><a href="#wrapouryard">&raquo; Our Yard</a></li>
		<li><a href="#wrapmeetourstaff">&raquo; Meet Our<br>
        Service Team</a></li>
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


<a id="servicedifference" name="servicedifference" rel="m_PageScroll2id"></a>
<div id="servicedifference"></div>

<!-- Section #1 -->
<section id="wrapservicedifference">

	<div class="content-area">
	
		<div class="frame-title">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor-dark.png">	

			<h2 class="servicedifference-title">What Makes Us Different</h2>
		</div>
		
        <div class="service-difference-left">
            
			<?php
			$my_id = 131;
			$post_id_131 = get_post($my_id);
			$content = $post_id_131->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]>', $content);
			echo $content;
			?>

		</div>
        
        <div class="service-difference-right" data-speed="8" data-type="background">
			<img style="width: 100%;" align="right" src="<?php bloginfo( 'template_directory' ); ?>/images/service-difference-photo.jpg">
    	</div>

	</div>

</section>


<a id="serviceanchor" name="serviceanchor" rel="m_PageScroll2id"></a>
<div id="serviceanchor"></div>

<!-- Section #2 -->
<section id="wrapservice" data-speed="7" data-type="background" style="padding-top: 160px;">

	<div class="content-area">
	
		<div class="frame-title">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor.png">

			<h2 class="wrapservice-title">SERVICE</h2>
		</div>
		
		<div class="service-left">

			<?php
            $my_id = 17;
            $post_id_17 = get_post($my_id);
            $content = $post_id_17->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]>', $content);
            echo $content;
            ?>

		</div>

		<div class="service-right">

			<span class="service-title">AVAILABLE SERVICES:</span>

			<ul id="accordion">
			<li><span>Facilities</span>
        
            <div style="position: relative;">
                <p>South Wharf Yacht Yard has recently undergone a $3.7 million dollar makeover to turn it into THE yard for New England boaters searching for the best in marine service. This extensive upgrade includes a total retooling of our shops, a state-of-the-art pressure wash facility and climate controlled boat sheds that allow us to work on your prized yacht any time of the year. We also have a state-of-the-art stormwater processing system and even an on-site restaurant.</p>    
            </div>
            </li>

            <li><span>Equipment</span>

            <div style="position: relative;">
                <p>South Wharf Yacht Yard has the tools as well as the talent on hand to service any vessel from a simple 6’ dinghy to a 130’ sail or motor yacht. Equipment includes a new remote controlled 55-ton travel lift to haul vessels up to 60’, a new 35-ton hydraulic trailer & truck and a five-ton hydraulic trailer and truck (perfect for smaller outboard boats 17’ to 30’), plus an 18,000 lb. mobile boom truck crane.</p>    
            </div>
            </li>

            <li><span>Mechanical</span>

            <div style="position: relative;">
                <p>South Wharf’s certified mechanical team loves what they do. And that enthusiasm shows through with their impeccable reputation in both inboard and outboard systems. They are also experts in running gear service, systems upgrades, fuel systems, bow thruster and windlass installations. Our mechanical team stays up-to-date with the ever-evolving marine technologies through annual service schools and constant technical reading on Volvo IPS systems and the latest in Cummins and Yanmar technology. Plus, we've obtained our 5-Star Master Class Yamaha Certification.</p>    
            </div>
            </li>

            <li><span>Electronics & Electrical</span>

            <div style="position: relative;">
                <p>A sophisticated electrical and electronic system is as much a part of today’s yacht as a diesel engine or a sail. The electrical technicians at South Wharf are all ABYC certified and adhere to the highest industry standards whether they’re installing custom navigational packages, updating wiring systems, or supplying power to systems throughout the vessel. We are a Master RayMarine, SIMRAD, B&G and Garmin dealer in addition to our electronic technicians being factory trained and certified in warranty service for all our brands.</p>    
            </div>
            </li>

            <li><span>Refinishing</span>

            <div style="position: relative;">
                <p>There is nothing like the feel of a well-loved boat – but the years can and do take their toll. The finish department at South Wharf is just what you need to add extra years to your well-loved boat. We can give your vessel a new lease on life by fabricating parts and molds, replacing bulkheads and, in general, providing a thorough sprucing-up.
For more information or an estimate, please call us today or stop by for a visit. We’ll be happy to make our services available and more than happy to take you on a tour of our facilities.</p>    
            </div>
            </li>

            <li><span>Rigging</span>

            <div style="position: relative;">
                <p>From cleaning and servicing winches to replacing lifelines, from running rigging to rewiring masts and testing shrouds, the rigging masters at South Wharf know all the finer points of the trade to make your boat or yacht as shipshape as she can be. We also offer indoor rack storage for masts and booms throughout the year in our dedicated spar sheds.
For more information, or an estimate, please call us today or stop by for a visit. If you’re lucky, you might even see one of our expert riggers in action.</p>    
            </div>
            </li>

            <li><span>Sail Loft</span>

            <div style="position: relative;">
                <p>South Wharf Yacht Yard is home to the renowned Buzzards Bay loft of Doyle Sails featuring the work of Bill Ribar and his son, Doug. Bill and his highly skilled crew not only repair sails to pristine condition, but also build custom sails coveted by racers and cruisers across New England. Visiting the loft is a must when visiting South Wharf. Doyle Sails’ reputation for impeccable attention to detail, quality of construction and application of the latest technology to the ancient art of sail making has made Buzzards Bay loft an icon in the industry and supplier of some of the world’s most spectacular yachts.</p>    
            </div>
            </li>
			</ul>

		</div>

	</div>

</section>


<a id="ouryardanchor" name="ouryardanchor" rel="m_PageScroll2id"></a>
<div id="ouryardanchor"></div>

<!-- Section #3 -->
<section id="wrapouryard" name="ouryard">

	<div class="content-area">
	
		<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor-dark.png">
        
		<h2 class="ouryard-title">OUR YARD</h2>
	
		<div class="yard-left">

			<?php
			$my_id = 21;
			$post_id_21 = get_post($my_id);
			$content = $post_id_21->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]>', $content);
			echo $content;
			?>
        
		</div>
                
		<div class="yard-right">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/our-yard.jpg">
		</div>

	</div>

</section>


<a id="meetourstaffanchor" name="meetourstaffanchor" rel="m_PageScroll2id"></a>
<div id="meetourstaffanchor"></div>

<!-- Section #4 -->
<section id="wrapmeetourstaff" data-speed="4" data-type="background">

	<div class="content-area">
	
		<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor-dark.png">

		<h2 class="meetourstaff-title">MEET OUR SERVICE TEAM</h2>

		<div class="staff-full">

			<?php
            $my_id = 134;
            $post_id_134 = get_post($my_id);
            $content = $post_id_134->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]>', $content);
            
            echo $content;
            ?>

		</div>
        
        <!--<div class="staff-boxes">

			<div class="staffbox" id="staff1">
            	Detail Crew
            </div>
            
            <div class="staffbox" id="staff2">
            	Dock Crew
            </div>
            
            <div class="staffbox" id="staff3">
            	Mechanics
            </div>
            
            <div class="staffbox" id="staff4">
            	Rigging Crew
            </div>
            
            <div class="staffbox" id="staff5">
            	Yard Crew
			</div>
        
        </div>-->
        
        <!--<div class="line-with-shadow"></div>
        
        <div class="detail-crew-arrow" style="width: 100%; height: 20px; margin: 0px auto; display: block; position: absolute;">
			<div class="staff-triangle-with-shadow"></div>
		</div>
        
        <div class="dock-crew-arrow">
			<div class="staff-triangle-with-shadow"></div>
		</div>
        
        <div class="mechanics-crew-arrow">
			<div class="staff-triangle-with-shadow"></div>
		</div>
        
        <div class="rigging-crew-arrow">
			<div class="staff-triangle-with-shadow"></div>
		</div>
        
        <div class="yard-crew-arrow">
			<div class="staff-triangle-with-shadow"></div>
		</div>-->
        
	</div>

	<div class="content-area">
    
    	<!--<div class="staff" id="detail-crew">

			<?php query_posts("cat=9"); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
            <?php if(has_post_thumbnail($post->ID)){ $thumbsrc = get_the_post_thumbnail($post->ID,'medium'); }; ?>
                
            <div class="staff-single">             
                <p><a href="<?php the_permalink(); ?>"><?php echo $thumbsrc; ?><br>
                <?php the_title(); ?></a></p>
            </div>
    
            <?php endwhile; ?>
			<?php endif; ?>
            
		</div>-->
        
        <!--<div class="staff" id="dock-crew">
        
        	<?php query_posts("cat=9"); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
            <?php if(has_post_thumbnail($post->ID)){ $thumbsrc = get_the_post_thumbnail($post->ID,'medium'); }; ?>
                
            <div class="staff-single">             
                <p><a href="<?php the_permalink(); ?>"><?php echo $thumbsrc; ?><br>
                <?php the_title(); ?></a></p>
            </div>
    
            <?php endwhile; ?>
			<?php endif; ?>
        
        </div>-->
        
        <!--<div class="staff" id="mechanics-crew">
        
        	<?php query_posts("cat=9"); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
            <?php if(has_post_thumbnail($post->ID)){ $thumbsrc = get_the_post_thumbnail($post->ID,'medium'); }; ?>
                
            <div class="staff-single">             
                <p><a href="<?php the_permalink(); ?>"><?php echo $thumbsrc; ?><br>
                <?php the_title(); ?></a></p>
            </div>
    
            <?php endwhile; ?>
			<?php endif; ?>
            
        </div>-->
        
        <!--<div class="staff" id="rigging-crew">
        
        	<?php query_posts("cat=9"); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
            <?php if(has_post_thumbnail($post->ID)){ $thumbsrc = get_the_post_thumbnail($post->ID,'medium'); }; ?>
                
            <div class="staff-single">             
                <p><a href="<?php the_permalink(); ?>"><?php echo $thumbsrc; ?><br>
                <?php the_title(); ?></a></p>
            </div>
    
            <?php endwhile; ?>
			<?php endif; ?>
            
        </div>-->
        
        <!--<div class="staff" id="yard-crew">
        
        	<?php query_posts("cat=9"); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
            <?php if(has_post_thumbnail($post->ID)){ $thumbsrc = get_the_post_thumbnail($post->ID,'medium'); }; ?>
                
            <div class="staff-single">             
                <p><a href="<?php the_permalink(); ?>"><?php echo $thumbsrc; ?><br>
                <?php the_title(); ?></a></p>
            </div>
    
            <?php endwhile; ?>
			<?php endif; ?>
            
        </div>-->
        
	</div>

</section>

<?php get_footer(); ?>