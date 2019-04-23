<?php
/*
Template Name:  Contact Us
 */
get_header(); ?>

<a name="contactus" id="contactus"></a>

<!-- Section #1 -->
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
        if ($_GET['sentpls']){
        echo "<p style=\"font-size: 130%; color: #FFFFFF; margin: 7% 0 0;\">THANK YOU!</p>

        <p style=\"width: 400px; color: #FFFFFF; margin: 0 auto;\">Your inquiry has been sent successfully and a member of our team will be in contact as soon as possible.</p>";
        } else { ?>

        <?php $reference = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

        <form class="contact-form-home" action="<?php bloginfo( 'template_url' ); ?>/contact_form_pls.php" name="contact_form_pls" method="post">
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
            Subject
            <div class="input-field">
				<?php if($_GET['subject']){
                $subject = stripslashes($_GET['subject']);
                $msg = "";
            	} ?>
            	<input type="text" name="subject" value="<?php echo $subject; ?>">
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
            <a href="javascript:validate_contact_form_pls();" class="submit">Send it!</a>
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