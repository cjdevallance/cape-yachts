<?php
/*
Template Name: Co-Brokerage Yacht Inventory
*/
get_header(); ?>

<!-- Section #1 -->
<section id="pls-listings">

	<div class="content-area">
		
		<div class="frame-title">
		
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/anchor-dark.png">

			<h2>Co-Brokerage Inventory</h2>
        </div>
        
        <section id="pls" class="full">
        
        	<div class="pls-content">
        
				<?php
				$my_id = 227;
				$post_id_227 = get_post($my_id);
				$content = $post_id_227->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo $content;
				?>
				
            </div>
            
            <div class="pls-sidebar">
            
                <!-- search form goes here -->  
    
                <form action="<?php bloginfo( 'url' ); ?>/compile_search.php" method="post" name="searchform" class="pls-search-form">
                <input type="hidden" name="urlx" value="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];?>">
                <input type="hidden" id="inv" name="source" value="inv">
    
                <div class="pls-search-form-container">
                
                	<h3>Worldwide Yacht Search</h3>
                        
                    <div class="search-form-div">
                        Make/Model:<br>
                        <div class="input-field">
							<input type="text" name="man">
                    	</div>
                    </div>
                    
                    <div class="search-form-div">
                        Boat Type:<br>
                        <select name="type">
                        <option value="">All Boat Types</option>
                        <option value=""> ----------------</option>
                        <option value="(Power)">All Power</option>
                        <option value="(Power) Aft Cabin">Aft Cabin</option>
                        <option value="(Power) Antique and Classic">Antique and Classic</option>
                        <option value="(Power) Barge">Barge</option>
                        <option value="(Power) Bowrider">Bowrider</option>
                        <option value="(Power) Cargo Ship">Cargo Ship</option>
                        <option value="(Power) Center Console">Center Console</option>
                        <option value="(Power) Commercial Boat">Commercial Boat</option>
                        <option value="(Power) Convertible Boat">Convertible Boat</option>
                        <option value="(Power) Cruise Ship">Cruise Ship</option>
                        <option value="(Power) Cruiser">Cruiser</option>
                        <option value="(Power) Cuddy Cabin">Cuddy Cabin</option>
                        <option value="(Power) Dive Boat">Dive Boat</option>
                        <option value="(Power) Downeast">Downeast</option>
                        <option value="(Power) Dragger">Dragger</option>
                        <option value="(Power) Express Cruiser">Express Cruiser</option>
                        <option value="(Power) Flybridge">Flybridge</option>
                        <option value="(Power) Freshwater Fishing">Freshwater Fishing</option>
                        <option value="(Power) House Boat">House Boat</option>
                        <option value="(Power) Jet Boat">Jet Boat</option>
                        <option value="(Power) Lobster Boat">Lobster Boat</option>
                        <option value="(Power) Mega Yacht">Mega Yacht</option>
                        <option value="(Power) Motor Yacht">Motor Yacht</option>
                        <option value="(Power) Motorsailer">Motorsailer</option>
                        <option value="(Power) Passenger">Passenger</option>
                        <option value="(Power) Pontoon Boat">Pontoon Boat</option>
                        <option value="(Power) Pilothouse">Pilothouse</option>
                        <option value="(Power) Power Catamaran">Power Catamaran</option>
                        <option value="(Power) Racing/High Performance">Racing/High Performance</option>
                        <option value="(Power) Rigid Inflatable Boat (RIB)">Rigid Inflatable Boat (RIB)</option>
                        <option value="(Power) Saltwater Fishing">Saltwater Fishing</option>
                        <option value="(Power) Sport Fishing">Sport Fishing</option>
                        <option value="(Power) Sports Cruiser">Sports Cruiser</option>
                        <option value="(Power) Tender">Tender</option>
                        <option value="(Power) Trawler">Trawler</option>
                        <option value="(Power) Troller">Troller</option>
                        <option value="(Power) Tug">Tug</option>
                        <option value="(Power) Other">Other</option>
                        <option value=""> ----------------</option>
                        <option value="(Sail)">All Sail</option>
                        <option value="(Sail) Antique and Classic">Antique and Classic</option>
                        <option value="(Sail) Barge">Barge</option>
                        <option value="(Sail) Catamaran">Catamaran</option>
                        <option value="(Sail) Center Cockpit">Center Cockpit</option>
                        <option value="(Sail) Commercial Boat">Commercial Boat</option>
                        <option value="(Sail) Cruiser">Cruiser</option>
                        <option value="(Sail) Cruiser/Racer">Cruiser/Racer</option>
                        <option value="(Sail) Cutter">Cutter</option>
                        <option value="(Sail) Daysailer">Daysailer</option>
                        <option value="(Sail) Deck Saloon">Deck Saloon</option>
                        <option value="(Sail) Ketch">Ketch</option>
                        <option value="(Sail) Motorsailer">Motorsailer</option>
                        <option value="(Sail) Multi-Hull">Multi-Hull</option>
                        <option value="(Sail) Pilothouse">Pilothouse</option>
                        <option value="(Sail) Racing Sailboat">Racing Sailboat</option>
                        <option value="(Sail) Schooner">Schooner</option>
                        <option value="(Sail) Sloop">Sloop</option>
                        <option value="(Sail) Trimaran">Trimaran</option>
                        <option value="(Sail) Yawl">Yawl</option>
                        <option value="(Sail) Other">Other</option>
                        </select>
                    </div>
                        
                    <div class="search-form-div">
                        Condition:<br>
						<select name="cond">
						<option value="">Any</option>
						<option value="true">New</option>
						<option value="false">Used</option>
						</select>
                    </div>
        
                    <div class="search-table-div">
                        Length:<br>
                        <div class="input-field">
                        	<input type="text" name="minLn" value="">
                    	</div>
                    </div>
                    
                    <div class="to">
                        &nbsp;<br>
                        to
                    </div>
                    
                    <div class="search-table-div">
                        &nbsp;<br>
                        <div class="input-field">
                        	<input type="text" name="maxLn" value="">
                    	</div>
                    </div>
                
                    <div class="search-table-div">
                        Price:<br>
                        <div class="input-field">
                        	<input type="text" name="minPr" value="">
                    	</div>
                    </div>
                    
                    <div class="to">
                        &nbsp;<br>
                        to
                    </div>
                        
                    <div class="search-table-div">
                        &nbsp;<br>
                        <div class="input-field">
                        	<input type="text" name="maxPr" value="">
                    	</div>
                    </div>
                
                    <div class="search-table-div">
                        Year:<br>
                        <div class="input-field">
                        	<input type="text" name="minYr" value="">
                    	</div>
                    </div>
                    
                    <div class="to">
                        &nbsp;<br>
                        to
                    </div>
                
                    <div class="search-table-div">
                        &nbsp;<br>
                        <div class="input-field">
                        	<input type="text" name="maxYr" value="">
                    	</div>
                    </div>
                    
                    <div class="submit-container">
                        <input value="Search >" class="submit" type="submit">
                    </div>
                    
                </div>
                
                </form>
    
                <!-- end search form -->
                
                <div class="pbs-container">
                
					<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; if(false == strpos($url,'&searched=true')){ ?>
        
                    <p>When you search for yachts you can sign up to have us automatically email you whenever a boat is added to our database that matches your search criteria.
        
                    <br>
                    <br>
        
                    Submit a search to activate the form.</p>
        
                    <?php } ?> 
        
                    <?
                    if($_GET['ywcn'] == "3"){
                    $trade_in_val = "3";
                    }
                    else{
                    $trade_in_val = "";
                    }
                    include("pbs/settings.php");
                    include("pbs/code.php");
                    ?>
        
                    <?
                    if ( !$_GET["rPage"] ) { //Only show this on "Boats search result" page
                    if ( $_POST["pbsposted"] && isValidEmail($_POST["email"]) ) { ?>
        
                    <?
                    // The actual place where we send PBS XML to LM !!!
                    $result = sendPbsData(LM_URL, composeXml($trade_in_val));
                    if($result['response'] == "OK: your message has been accepted."){
                    echo "<p>You have been added to our Personal Boat Shopper program. Whenever a boat is added or has a price change that matches your current search criteria you will receive an update via email.
        
                    <br>
                    <br>
        
                    Thank you for using Personal Boat Shopper and trusting us to help you find your next boat.</p>";
                    }
                    ?>
        
                    <? } else { ?>
        
        
                    <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; if(true == strpos($url,'&searched=true')){ ?>
        
                    <form method="POST" action="<?=$_SERVER['REQUEST_URI']?>">

					<h3>Save Your Search</h3>
                        
					<p>Let us do the searching for you. Fill out and submit this form in order to have an email sent to you whenever boats matching your search criteria are added to our database. It is fast and easy. You can stop it at any time and subscribe to as many searches as you want.</p>

                    <? if ( $_POST["pbsposted"] && !isValidEmail($_POST["email"]) ) { ?>
        
                    <div class="required-error">Please enter valid email address!</div>
        
                    <? } ?>
        
                    <div class="search-form-div">
                        First Name:<br>
                        <div class="input-field">
                        	<input name="firstname" value="" type="text" value="<?=$_POST["firstname"]?>"><br>
                    	</div>
                    </div>
        
                    <div class="search-form-div">
                        Last Name:<br>
                        <div class="input-field">
                        	<input name="lastname" value="" type="text" value="<?=$_POST["lastname"]?>"><br>
                    	</div>
                    </div>
        
                    <div class="search-form-div">
                        Email Address:<span class="required-star">*</span><br>
                        <div class="input-field">
                        	<input name="email" value="" type="text" value="<?=$_POST["email"]?>"><br>
                    	</div>
                    </div>

                    <div class="required">
						*required fields
					</div>

                    <div class="submit-container">
                        <input value="Submit >" class="submit" type="submit">
                    </div>

                    <input type="hidden" name="pbsposted" value="true">
        
                    </form>
        
                    <? } } ?>
        
                    <?php } ?>
        
                    <!--****************  PBS CODE ENDS HERE *****************-->  
        
                    
                    <!--search results -->
                    
                    <p>YOUR CURRENT SEARCH:</p>
                
                    <?php include ('current-search.php'); ?>
                
                    <!-- end branded boat shopper box -->

            	</div>

            </div>
            
            <div class="main-content-area" style="width: 65%; float: left; vertical-align: top; display: inline-block;">
        
                <div class="PLSinventory-area">
            
                    <?php include ('pls_top.php'); ?>
                                
                    <?php include ('pls_bottom.php'); ?>
            
                </div>
                
        	</div>
            
		</section>

	</div>

</section>

<?php get_footer(); ?>