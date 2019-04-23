<?php
/*
Template Name: Yacht Brokerage
*/
get_header(); ?>

<div id="navbox">

	<ul id="navdrops">
	<li id="explore">EXPLORE<br>
    CAPE YACHTS</li>
		<ul class="individual-links">
        <li><a href="#yachtbrokerage">&raquo; Yacht Brokerage</a></li>
        <li><a href="#whylist">&raquo; Why List With Us</a></li> 
        <li><a href="#boatworth">&raquo; What's Your Boat Worth</a></li>   
        <li><a href="#howtosell">&raquo; How To Sell Your Boat</a></li>
        <li><a href="<?php bloginfo( 'url' ); ?>/brokerage-inventory/">&raquo; Our Inventory</a></li>
		<li><a href="<?php bloginfo( 'url' ); ?>/co-brokerage-inventory/?slim=pp296476&lineonly&ps=20&lineonly">&raquo; Co-Brokerage Inventory</a></li>
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


<a id="yachtbrokerage" name="yachtbrokerage" rel="m_PageScroll2id"></a>

<!-- Section #1 -->
<section id="yacht-brokerage">

	<div class="content-area brokerage">
        
        <div class="yacht-brokerage-left">
        
        	<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor.png">
        
        	<h2 class="brokerage-title">Yacht brokerage</h2>
        
			<?php
            $my_id = 53;
            $post_id_53 = get_post($my_id);
            $content = $post_id_53->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]>', $content);
            echo $content;
            ?>
        
        </div>

		<div class="yacht-brokerage-right"></div>
    
    </div>

</section>



<a id="whylist" name="whylist" rel="m_PageScroll2id"></a>

<!-- Section #2 -->
<section id="why-list">

	<div class="content-area why-list">

        <div class="why-list-left">
			<img style="width: 100%;" align="left" src="<?php bloginfo( 'template_directory' ); ?>/images/why-list-with-us-photo.jpg">
		</div>
        
        <div class="why-list-right">
        
        	<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor-dark.png">
    
    		<h2 class="why-list-title">Why List With Cape Yachts</h2>
        
        	<?php
            $my_id = 218;
            $post_id_218 = get_post($my_id);
            $content = $post_id_218->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]>', $content);
            echo $content;
            ?>
        	
        </div>
    
    </div>

</section>



<a id="boatworth" name="boatworth" rel="m_PageScroll2id"></a>

<!-- Section #3 -->
<section id="boat-worth" data-speed="4" data-type="background">

	<div class="content-area boatworth">
	
		<div class="frame-title">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor.png">
    
    		<h2 class="boatworth-title">What's Your Boat Worth</h2>
        </div>
        
        <div class="boat-worth-left">
        
			<?php
            $my_id = 220;
            $post_id_220 = get_post($my_id);
            $content = $post_id_220->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]>', $content);
            echo $content;
            ?>

        </div>

        <div class="boat-worth-right">
        
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
			if ($_GET['sentboatworth']){
			echo "<div class=\"thank-you-container\"><p style=\"font-size: 130%;\">THANK YOU!</p>

			<p>Your inquiry has been sent successfully and a member of our team will be in contact as soon as possible.</p></div>";
			} else { ?>
            
            <?php $reference = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

			<form class="contact-form-boatworth" action="<?php bloginfo( 'template_url' ); ?>/contact_form_boatworth.php" method="post" name="contact_form_boatworth">
            <input class="starfish" type="text" name="starfish">
			<input type="hidden" name="reference" value="<?php echo $reference; ?>">

			<div class="required">
            	* Required fields
			</div>
            
            <div class="contact-field">
            	Name*
                <div class="input-field">
            		<input type="text" name="name">
                </div>
            </div>
            
            <div class="contact-field">
            	Phone Number*
                <div class="input-field">
            		<input type="text" name="phone">
                </div>
            </div>
            
            <div class="contact-field">
            	Email Address*
                <div class="input-field">
            		<input type="text" name="email">
                </div>
            </div>
            
            <div class="contact-field">
            	Contact me by
				<input type="Radio" name="contact" value="Phone" <?php print $contactphone; ?> />phone

				<input type="Radio" name="contact" value="Email" <?php print $contactemail; ?> />email
            </div>
            
            <div class="contact-field">
            	Boat Description (make, model, year)*
                <div class="input-field">
            		<textarea name="comment" style="width: 100%; height: 80px;"></textarea>
            	</div>
            </div>
            
            <div class="contact-field">
                Solve* <?php echo "<span id='alpha'>" . $int1 . "</span>" . " + " . "<span id='bravo'>" . $int0  . " + " . "</span>" . "<span id='charlie'>" . $int2  . "</span>" . " = ";?><br>
                <div class="input-field">
                	<input type="text" name="result">
            	</div>
                
                <input type="text" name="criticalinfo" class="criticalinformation" value="">
                
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
            	<a class="submit" name="Submit0" href="javascript:validate_contact_form_boatworth();">Submit ></a>
            </div>
            
            </form>
            
            <? } ?>
            
        </div>
    
    </div>

</section>



<a id="howtosell" name="howtosell" rel="m_PageScroll2id"></a>

<!-- Section #4 -->
<section id="how-to-sell">

	<div class="content-area">
		
		<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor.png">
    
    	<h2 class="howtosell-title">How To Sell Your Boat</h2>
    	
    	<?php
		$my_id = 222;
		$post_id_222 = get_post($my_id);
		$contentshort = $post_id_222->post_content;
		$contentshort = apply_filters('the_content', $contentshort);
		$contentshort = str_replace(']]>', ']]>', $contentshort);
		?>

		<p><?php echo limit_words($contentshort,150); ?> ...</p>

		<p><a href="/how-to-sell-your-boat">Read more ></a></p>
    
    </div>

</section>



<a id="xml" name="xml" rel="m_PageScroll2id"></a>

<!-- Section #5 -->
<section id="xml-listings">

	<div class="content-area">
		
		<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor-dark.png">
    
    	<h2 class="inventory-title">Inventory</h2>
        
        <div class="inventory-button-container">
			<a href="<?php bloginfo( 'url' ); ?>/brokerage-inventory/" class="inventory-button" style="float: left;">Our Inventory ></a>
		</div>
        
        <div class="inventory-button-container">
			<a href="<?php bloginfo( 'url' ); ?>/co-brokerage-inventory/?slim=pp296476&lineonly&ps=20&lineonly" class="inventory-button" style="float: right;">Co-Brokerage Inventory ></a>
		</div>
    
    </div>

</section>

<?php get_footer(); ?>