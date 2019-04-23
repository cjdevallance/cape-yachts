<?php
/*
* The main template file 
*/
get_header(); ?>

<div id="navbox">

	<ul id="navdrops">
	<li id="explore">EXPLORE<br>
    CAPE YACHTS</li>
        <ul class="individual-links">
        <li><a href="#overview">&raquo; Overview</a></li>
        <li><a href="#aboutus">&raquo; About Us</a></li>
        <li><a href="#news">&raquo; News & Events</a></li>
        <li><a href="#locations">&raquo; Locations</a></li>
        <li><a href="#gettinghere">&raquo; Getting Here</a></li>
        <li><a href="#contactus">&raquo; Contact Us</a></li>
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

<a name="overview" id="overview"></a>

<!-- Section #1 -->
<section id="overview" data-speed="10" data-type="background">

	<div class="overview-logo"><img src="<?php bloginfo( 'template_directory' ); ?>/images/Cape-yachts.png"></div>

	<div class="overview-text">

		<?php
        $my_id = 27;
        $post_id_27 = get_post($my_id);
        $content = $post_id_27->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]>', $content);
        echo $content;
        ?>

		<p><img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor.png"></p>
        
        <a class="get-started" href="#about">Explore</a>
        <img src="<?php bloginfo( 'template_directory' ); ?>/images/caret.png" border="0">

	</div>

</section>


<script>
function slideonlyone(thechosenone) {
     $('.newboxes2').each(function(index) {
          if ($(this).attr("id") == thechosenone) {
               $(this).slideDown(300);
          }
          else {
               $(this).slideUp(300);
          }
     });
}
</script>

<a name="aboutus" id="aboutus"></a>

<section id="about">

	<div class="content-area">

        <div class="about-slide-wrap">
        
            <p><img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor.png"></p>
    
            <h2 class="about-us"><a href="#aboutus">Who We Are</a></h2>
            
            <?php
			$my_id = 8;
			$post_id_8 = get_post($my_id);
			$content = $post_id_8->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]>', $content);
			echo $content;
			?>
            
			<hr>
            
            <ul class="slide-links">
            <li><a id="about-link-1" href="javascript:slideonlyone('newboxes1');">OUR HISTORY</a><br>
            <img src="<?php bloginfo( 'template_directory' ); ?>/images/caret.png" border="0"></li>
            
            <li><a id="about-link-2" href="javascript:slideonlyone('newboxes2');">OUR YARD</a><br>
            <img src="<?php bloginfo( 'template_directory' ); ?>/images/caret.png" border="0"></li>
            
            <li><a id="about-link-3" href="javascript:slideonlyone('newboxes3');">OUR SERVICE</a><br>
            <img src="<?php bloginfo( 'template_directory' ); ?>/images/caret.png" border="0"></li>
            </ul>     
            
            <div class="newboxes2" id="newboxes1" style="padding: 5px;">
            
            	<div class="history-left">
                
                	<?php query_posts("page_id=15");
					while (have_posts()) : the_post(); ?>
                
                	<?php $new_excerpt = substr(get_the_excerpt(), 0, 574); ?>
					<p><?php echo $new_excerpt; ?>...</p>

					<?php endwhile; ?>
            
				</div>
            
				<div class="history-right"><img src="<?php bloginfo( 'template_directory' ); ?>/images/our-history.jpg"></div>
            
            </div>
              
			<div class="newboxes2" id="newboxes2" style="display: none; padding: 5px;">
                
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
                
                <div class="yard-right"><img src="<?php bloginfo( 'template_directory' ); ?>/images/our-yard.jpg"></div>
            
            </div>

			<div class="newboxes2" id="newboxes3" style="display: none; padding: 5px;">

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

		</div>

	</div>

</section>





<a name="news" id="news"></a>

<section id="news">

	<div class="content-area">
    
    	<p><img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor.png"></p>

		<h2 class="news">NEWS &amp; EVENTS</h2>
        
        <?php
		$my_id = 98;
		$post_id_98 = get_post($my_id);
		$content = $post_id_98->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
		?>
        
        <hr>

		<?php query_posts("cat=3&posts_per_page=3&orderby=date&order=DSC");
		while (have_posts()) : the_post(); ?>  
     
		<div class="news-story">

			<div align="center" class="news-image">
				<?php if ( has_post_thumbnail() ) { 
				the_post_thumbnail( 'news-thumb' ); } ?>
			</div>
            
			<h3 class="news-title"><?php the_title(); ?></h3>

			<!--<div class="news-date"><?php //the_time('F j, Y'); ?></div>
        
			<div class="news-snippet">
				<?php //$new_excerpt = substr(get_the_excerpt(), 0, 174); ?>
				<p><?php //echo $new_excerpt; ?>...</p>
            </div>-->
			
            <div class="news-link"><a href="<?php the_permalink(); ?>">MORE ></a></div>
       
		</div>

		<?php endwhile; ?>
        
        <div class="more-news-button"><a href="<?php bloginfo( 'url' ); ?>/news-events-main-page/">More News ></a></div>

	</div>

</section>




<a name="locations" id="locations"></a>

<!-- Section #5 -->
<section id="locations" data-speed="4" data-type="background">

	<div class="content-area">
    
    	<p><img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor-dark.png"></p>

		<h2 class="home-locations">SET YOUR COURSE</h2>

		<?php
        $my_id = 23;
        $post_id_23 = get_post($my_id);
        $content = $post_id_23->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]>', $content);
        echo $content;
		?>
        
        <hr>
        
        <div id="locations-boxes">
        	<a class="directionsbox active" id="directions1" href="#">Dartmouth, Massachusetts</a>
            <div class="bullet">•</div>
        	<a class="directionsbox" id="directions2" href="#">Port Washington, New York</a>
        </div>
        
        <div class="line-with-shadow"></div>

        <div class="dartmouthcities">

            <div class="dartmouthtoboston">Boston</div>
            
            <div class="dartmouthtony">New York</div>
            
            <div class="dartmouthtonewport">Newport</div>
            
            <div class="dartmouthtoprovidence">Providence</div>
            
            <div class="dartmouthtonewbedford">New Bedford Regional</div>
            
        </div>
        
        <div class="nycities">
        
            <div class="nytoboston">Hartford</div>
            
            <div class="nytony">Newport</div>
            
            <div class="nytonewport">Philadelphia</div>
            
            <div class="nytoprovidence">Manhattan</div>
            
            <div class="nytonewbedford">By Sea</div>
            
        </div>

		<div id="linewithshadow1" class="line-with-shadow wide"></div>

        <div id="dartmoutharrows">
        
            <div class="bostonarrow">
                <div class="triangle-with-shadow"></div>
            </div>
            
            <div class="newyorkarrow" style="display: none;">
                <div class="triangle-with-shadow"></div>
            </div>
            
            <div class="newportarrow" style="display: none;">
                <div class="triangle-with-shadow"></div>
            </div>
            
            <div class="providencearrow" style="display: none;">
                <div class="triangle-with-shadow"></div>
            </div>
            
            <div class="newbedfordarrow" style="display: none;">
                <div class="triangle-with-shadow"></div>
            </div>
            
        </div>
        
        <div id="linewithshadow2" class="line-with-shadow wide" style="display: none;"></div>
        
        <div id="nyarrows">
            
            <div class="bostonarrow" style="display: none;">
                <div class="triangle-with-shadow"></div>
            </div>
            
            <div class="newyorkarrow" style="display: none;">
                <div class="triangle-with-shadow"></div>
            </div>
            
            <div class="newportarrow" style="display: none;">
                <div class="triangle-with-shadow"></div>
            </div>
            
            <div class="providencearrow" style="display: none;">
                <div class="triangle-with-shadow"></div>
            </div>
            
            <div class="newbedfordarrow" style="display: none;">
                <div class="triangle-with-shadow"></div>
            </div>
                
        </div> 

		
        
        <div id="directions-box">

			<div class="address" id="dartmouth">
            
                <div class="address-text">
                    
                    <div class="dartmouthtobostondirections">
                        <p class="directions-subhead">From Boston:</p>
                        
                        <p>Take I-93 S. toward Quincy(12.8 miles). Take exit 4 on the left to merge onto MA-24 S. toward Brockton (24.0 miles). Take exit 12 to merge onto MA-140 S./County St. toward New Bedford. Continue to follow MA-140 S. (19.4 miles). Keep left at the fork, follow signs for US 6 E./New Bedford/Fairhaven (190 ft). Turn left onto Kempton St. (0.4 miles). Turn right onto Rockdale Ave. (1.6 miles). Turn right onto Dartmouth St. (1.7 miles). Slight right onto Prospect St. (0.2 miles). Take the 3rd left onto Elm St. Cape Yachts will be on the right.</p>
                        
                        <p class="directions-subhead">To South Dartmouth:</p>
						<p>252 Elm Street<br>
						South Dartmouth, MA 02748<br>
						508-994-4444</p>
					</div>
					
					<div class="dartmouthtonydirections">
        				<p class="directions-subhead">From New York City:</p>
                    
                    	<p>Take West St to NY-9A N/12th Ave (2.7 mi). Continue on NY-9A N. Take CT-15 N, I-95 N and I-195 E to Brownell Ave in New Bedford (208 mi). Take Slocum Rd to Elm St in Dartmouth (4.4 mi). The address is 218 Elm St. South Dartmouth, MA 02748.</p>
                    	
                    	<p class="directions-subhead">To South Dartmouth:</p>
						<p>252 Elm Street<br>
						South Dartmouth, MA 02748<br>
						508-994-4444</p>
					</div>
        
					<div class="dartmouthtonewportdirections">
        				<p class="directions-subhead">From Newport, RI:</p>
                        
                        <p>Get on RI-24 N in Portsmouth from W Main Rd (8.5 mi). Continue on RI-24 N. Take I-195 E to Brownell Ave in New Bedford (20.5 mi). Take Slocum Rd to Elm St in Dartmouth (4.4 mi). The address is 218 Elm St. South Dartmouth, MA 02748.</p>
                        
                        <p class="directions-subhead">To South Dartmouth:</p>
						<p>252 Elm Street<br>
						South Dartmouth, MA 02748<br>
						508-994-4444</p>
					</div>
        
					<div class="dartmouthtoprovidencedirections">
						<p class="directions-subhead">From Providence, RI:</p>
                        
                        <p>Get on US-6 E from Westminster St, Broad St and W Franklin St (1.1 mi). Follow I-195 E to Brownell Ave in New Bedford (28.6 mi). Take Slocum Rd to Elm St in Dartmouth (4.4 mi). The address is 218 Elm St. South Dartmouth, MA 02748.</p>
                        
                        <p class="directions-subhead">To South Dartmouth:</p>
						<p>252 Elm Street<br>
						South Dartmouth, MA 02748<br>
						508-994-4444</p>
					</div>
        
					<div class="dartmouthtonewbedforddirections">
        				<p class="directions-subhead">From New Bedford Regional Airport:</p>
                        
                        <p>Head west on Shawmut Ave (1.2 mi). Turn right onto Hathaway Rd (1.8 mi). Turn left onto Slocum Rd (2.9 mi). Slocum Rd turns slightly right and becomes Russells Mills Rd (0.3 mi). Turn left onto Elm St. Destination will be on the right (1.5 mi). The address is 218 Elm St. South Dartmouth, MA 02748.</p>
                        
                        <p class="directions-subhead">To South Dartmouth:</p>
						<p>252 Elm Street<br>
						South Dartmouth, MA 02748<br>
						508-994-4444</p>
					</div>
                    
                </div>

				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d190988.91640821792!2d-70.9434558!3d41.586516499999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e4e25d5a3a8d1b%3A0x72929ee4a2cb74f8!2s252+Elm+St%2C+South+Dartmouth%2C+MA+02748!5e0!3m2!1sen!2sus!4v1423008344238" width="344" height="517" frameborder="0" style="border:0"></iframe>
				</div>

        	</div>

			<div class="address" id="ny">

				<div class="address-text">             
       
					<div class="nytobostondirections">
                        <p class="directions-subhead">From Hartford:</p>
                        
                        <p>Get on 91 South toward I95 South. Take I95 to the exit for Throgs Neck / I-295S then take exit 8 for Cross Island Parkway South. Merge onto Cross Island Parkway. You’ll want to take exit 31E for Northern Boulevard in Queens. Northern Boulevard (25A) turns into 101N. Continue heading north then turn left at the bank on the corner onto Main Street. You’ll go through seven lights then turn right onto Shore Road. Hang a left at the Sunoco onto Manorhaven Boulevard. Bear left at the fork onto Orchard Beach Road. Make a right onto Orchard Beach Boulevard then just follow the signs to Cape Yachts at Brewer Capri Marina West.</p>
                        
						<p class="directions-subhead">To Port Washington:</p>
						<p>86 Orchard Beach Blvd.<br>
						Port Washington, NY 11050<br>
						516-279-1600</p>
                    </div>
        
                    <div class="nytonydirections">
                        <p class="directions-subhead">From Newport:</p>
                        
                        <p>Get on 138W to I95 South.  Take I95 to the exit for Throgs Neck Bridge / I-295S then take exit 8 for Cross Island Parkway South. Merge onto Cross Island Parkway. You’ll want to take exit 31E for Northern Boulevard in Queens. Northern Boulevard (25A) turns into 101N. Continue heading north then turn left at the bank on the corner onto Main Street. You’ll go through seven lights then turn right onto Shore Road. Hang a left at the Sunoco onto Manorhaven Boulevard. Bear left at the fork onto Orchard Beach Road. Make a right onto Orchard Beach Boulevard then just follow the signs to Cape Yachts at Brewer Capri Marina West.</p>
                        
                        <p class="directions-subhead">To Port Washington:</p>
						<p>86 Orchard Beach Blvd.<br>
						Port Washington, NY 11050<br>
						516-279-1600</p>
                    </div>
        
                    <div class="nytonewportdirections">
                        <p class="directions-subhead">From Philadelphia:</p>
                        
                        <p>Get on I95N to I 278E and follow it to 495E L.I.E. Take exit 36 N. (Searingtown Road) Continue heading north crossing over Northern Boulevard (25A) which turns into 101N. Continue north then turn left at the bank on the corner onto Main Street. You’ll go through seven lights then turn right onto Shore Road. Hang a left at the Sunoco onto Manorhaven Boulevard. Bear left at the fork onto Orchard Beach Road. Make a right onto Orchard Beach Boulevard then just follow the signs to Cape Yachts at Brewer Capri Marina West.</p>
                        
                        <p class="directions-subhead">To Port Washington:</p>
						<p>86 Orchard Beach Blvd.<br>
						Port Washington, NY 11050<br>
						516-279-1600</p>
                    </div>
        
                    <div class="nytoprovidencedirections">
                        <p class="directions-subhead">From Manhattan:</p>
                        
                        <p>Take the midtown tunnel 495 East L.I.E. and exit 36 N. (Searingtown Road). Continue heading north crossing over Northern Boulevard (25A) which turns into 101N. Continue north then turn left at the bank on the corner onto Main Street. You’ll go through seven lights then turn right onto Shore Road. Hang a left at the Sunoco onto Manorhaven Boulevard. Bear left at the fork onto Orchard Beach Road. Make a right onto Orchard Beach Boulevard then just follow the signs to Cape Yachts at Brewer Capri Marina West.</p>
                        
                        <p class="directions-subhead">To Port Washington:</p>
						<p>86 Orchard Beach Blvd.<br>
						Port Washington, NY 11050<br>
						516-279-1600</p>
                    </div>
        
                    <div class="nytonewbedforddirections">
                        <p class="directions-subhead">Directions By Sea:</p>
                        
                        <p>Eastbound vessels head southeast after passing Hewlett Pt. G#29 to the entrance of Manhasset Bay. Westbound vessels head south after passing Gangway Rock G#27A to the entrance of Manhasset Bay.  Brewer Capri Marinas East and West are located to the north after passing Plum Pt. G#1.</p>
                        
                        <p class="directions-subhead">To Port Washington:</p>
						<p>86 Orchard Beach Blvd.<br>
						Port Washington, NY 11050<br>
						516-279-1600</p>
                    </div>

				</div>

				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d386375.1637341163!2d-73.72064619999999!3d40.83771589999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c28ecb1a95bee3%3A0xa79be572c318746f!2s86+Orchard+Beach+Blvd%2C+Port+Washington%2C+NY+11050!5e0!3m2!1sen!2sus!4v1423715478722" width="344" height="517" frameborder="0" style="border:0"></iframe>
				</div>

			</div>

		</div>

	</div>

</section>






<a name="contactus" id="contactus"></a>

<!-- Section #7 -->
<section id="contact">

	<div class="content-area">

		<p><img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor.png"></p>

		<h2 class="contact-us">Keep in Touch</h2>
        
        <?php
		$my_id = 25;
		$post_id_25 = get_post($my_id);
		$content = $post_id_25->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
		?>
            
        <hr>

		<style>

        span#bravo
                {display: none;}
        
        input.criticalinformation
                {display: none;}
        
        </style>
        
        <?php
        $int0 = rand(1,9);
        $int1 = rand(1,9);
        $int2 = rand(1,9);
        $sum = $int1 + $int2;
        ?>
        
        <?php 
        if ($_GET['senthome']){
        echo "<p style=\"font-size: 130%; color: #FFFFFF; margin: 7% 0 0;\">THANK YOU!</p>

        <p style=\"width: 400px; color: #FFFFFF; margin: 0 auto;\">Your inquiry has been sent successfully and a member of our team will be in contact as soon as possible.</p>";
        } else { ?>

        <?php $reference = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

        <form class="contact-form-home" action="<?php bloginfo( 'template_url' ); ?>/contact-form.php" name="contact_home" method="post">
        <input class="starfish" type="text" name="starfish">
        <input type="hidden" name="reference" value="<?php echo $reference; ?>">
        
        <div class="required">
            All fields are required
        </div>
        
        <div class="contact-field">
            First Name
            <div class="input-field">
                <input type="text" name="firstname">
            </div>
        </div>
        
        <div class="contact-field">
            Last Name
            <div class="input-field">
                <input type="text" name="lastname">
            </div>
        </div>
        
        <div class="contact-field">
            Email Address
            <div class="input-field">
                <input type="text" name="email">
            </div>
        </div>
        
        <div class="contact-field">
            Questions/Comments
            <div class="input-field">
                <textarea name="comment" style="width: 99%; height: 80px; margin: 2px;"></textarea>
            </div>
        </div>
        
        <div class="contact-field">
            Solve <?php echo "<span id='alpha'>" . $int1 . "</span>" . " + " . "<span id='bravo'>" . $int0 . " + " . "</span>" . "<span id='charlie'>" . $int2 . "</span>" . " = ";?><br>
            <div class="input-field">
                <input type="text" name="result">
            </div>

            <input type="text" name="criticalinfo" class="criticalinformation">
            
            <input type="hidden" name="check0" value="13">
            <input type="hidden" name="check1" value="5">
            <input type="hidden" name="check2" value="13">
            <input type="hidden" name="check3" value="<?php echo $int1; ?>">
            <input type="hidden" name="check4" value="17">
            <input type="hidden" name="check5" value="<?php echo $int2; ?>">
            <input type="hidden" name="check6" value="10">
            <input type="hidden" name="check7" value="<?php echo $sum; ?>">
            <input type="hidden" name="check8" value="6">
            <input type="hidden" name="check9" value="<?php echo $int0; ?>">
        </div>
        
        <div class="submit-container">
            <a href="javascript:validate_contact_home();" class="submit">Send it!</a>
        </div>

        </form>
            
        <? } ?>

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