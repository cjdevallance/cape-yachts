<?php
/**
* Footer template
*/
?>

    </div><!-- #main -->

</div><!-- #page -->

<?php wp_footer(); ?>

<div id="footerbox">

    <div class="footermenu">

        <div class="copyright">&copy;2013 - <? echo date("Y"); ?> Cape Yachts</div>

        <div class="footerlinks"><?php wp_nav_menu( array('menu' => 'footernav' )); ?></div>
        
        <div class="footerdesign">Site by <a href="http://www.dominionmarinemedia.com/websites/portfolio/" target="new">Dominion Marine Media</a></div>

        <div class="social-footer">
            <a href="https://www.facebook.com/capeyachts?ref=br_tf" target="new"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer-icon-facebook.png"></a>
            <a href="https://twitter.com/capeyachts?lang=en" target="new"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer-icon-twitter.png"></a>
            <a href="https://plus.google.com/110240146593484492098/posts" target="new"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer-icon-google.png"></a>
            <a href="https://www.linkedin.com/company/cape-yachts?trk=top_nav_home" target="new"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer-icon-linkedin.png"></a>
            <a href="https://www.youtube.com/user/capeyachts" target="new"><img src="<?php bloginfo( 'template_directory' ); ?>/images/footer-icon-youtube.png"></a>
		</div>

    </div>

</div>



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




<script>

$( "#explore" ).click(function() {
	$( "ul.individual-links" ).slideToggle( "slow", function() {
	$( "ul.individual-links2" ).hide( 400 );
	$( "ul.individual-links3" ).hide( 400 );
	$( "ul.individual-links4" ).hide( 400 );
	});
});
$( "#search" ).click(function() {
	$( "ul.individual-links2" ).slideToggle( "slow", function() {
	$( "ul.individual-links" ).hide( 400 );
	$( "ul.individual-links3" ).hide( 400 );
	$( "ul.individual-links4" ).hide( 400 );
	});
});
$( "#share" ).click(function() {
	$( "ul.individual-links3" ).slideToggle( "slow", function() {
	$( "ul.individual-links" ).hide( 400 );
	$( "ul.individual-links2" ).hide( 400 );
	$( "ul.individual-links4" ).hide( 400 );
	});
});
$( "#email" ).click(function() {
	$( "ul.individual-links4" ).slideToggle( "slow", function() {
	$( "ul.individual-links" ).hide( 400 );
	$( "ul.individual-links2" ).hide( 400 );
	$( "ul.individual-links3" ).hide( 400 );
	});
});



$("#accordion > li > span").click(function() {
	$(this).closest('li').siblings().find('span').removeClass('active').next('div').slideUp(750);
	$(this).toggleClass("active").next('div').slideToggle(750);
});

//$('#handle').toggle(function() {
//	$('#navbox').animate({
//		left: "+=100",
//}, 1000);
//},
//function() {
//	$('#navbox').animate({
//		left: "-=100",
//	}, 1000);
//});

//$('#handle').click(function(){
//if($(this).text() == '«')
//	{
//		$(this).text('»');
//	}
//	else
//	{
//		$(this).text('«');
//	}
//});

$( "#location1" ).click(function() {
	$( ".address" ).hide();
	$( "#dartmouth" ).show();
	$( ".dartmoutharrow" ).show();
	$( ".nyarrow" ).hide();
});

$( "#location2" ).click(function() {
	$( ".address" ).hide();
	$( "#ny" ).show();
	$( ".nyarrow" ).show();
	$( ".dartmoutharrow" ).hide();
});



$( "#directions1" ).click(function() {
	$( ".directionstony" ).hide();
	$( ".dartmouthcities" ).show();
	$( ".nycities" ).hide();
	$( "#linewithshadow1" ).show();
	$( "#linewithshadow2" ).hide();
	$( "#nyarrows" ).hide();
	$( ".nytobostondirections" ).hide();
	$( ".nytonydirections" ).hide();
	$( ".nytonewportdirections" ).hide();
	$( ".nytoprovidencedirections" ).hide();
	$( ".nytonewbedforddirections" ).hide();
	$( "#dartmouth" ).show();
	$( "#ny" ).hide();
});

$( "#directions2" ).click(function() {
	$( ".directionstodartmouth" ).hide();
	$( ".nycities" ).show();
	$( ".dartmouthcities" ).hide();
	$( "#linewithshadow1" ).hide();
	$( "#linewithshadow2" ).show();
	$( "#dartmoutharrows" ).hide();
	$( ".dartmouthtobostondirections" ).hide();
	$( ".dartmouthtonydirections" ).hide();
	$( ".dartmouthtonewportdirections" ).hide();
	$( ".dartmouthtoprovidencedirections" ).hide();
	$( ".dartmouthtonewbedforddirections" ).hide();
	$( "#dartmouth" ).hide();
	$( "#ny" ).show();
});




$( ".dartmouthtoboston" ).click(function() {
	$( ".dartmouthtobostondirections" ).show();
	$( "#dartmoutharrows" ).show();
	$( "#nyarrows" ).hide();
	$( "#dartmoutharrows .bostonarrow" ).show();
	$( "#dartmoutharrows .newyorkarrow" ).hide();
	$( "#dartmoutharrows .newportarrow" ).hide();
	$( "#dartmoutharrows .providencearrow" ).hide();
	$( "#dartmoutharrows .newbedfordarrow" ).hide();
	$( ".dartmouthtonydirections" ).hide();
	$( ".dartmouthtonewportdirections" ).hide();
	$( ".dartmouthtoprovidencedirections" ).hide();
	$( ".dartmouthtonewbedforddirections" ).hide();
});

$( ".dartmouthtony" ).click(function() {
	$( ".dartmouthtonydirections" ).show();
	$( "#dartmoutharrows" ).show();
	$( "#nyarrows" ).hide();
	$( "#dartmoutharrows .newyorkarrow" ).show();
	$( "#dartmoutharrows .bostonarrow" ).hide();
	$( "#dartmoutharrows .newportarrow" ).hide();
	$( "#dartmoutharrows .providencearrow" ).hide();
	$( "#dartmoutharrows .newbedfordarrow" ).hide();
	$( ".dartmouthtobostondirections" ).hide();
	$( ".dartmouthtonewportdirections" ).hide();
	$( ".dartmouthtoprovidencedirections" ).hide();
	$( ".dartmouthtonewbedforddirections" ).hide();
});

$( ".dartmouthtonewport" ).click(function() {
	$( ".dartmouthtonewportdirections" ).show();
	$( "#dartmoutharrows" ).show();
	$( "#nyarrows" ).hide();
	$( "#dartmoutharrows .newportarrow" ).show();
	$( "#dartmoutharrows .bostonarrow" ).hide();
	$( "#dartmoutharrows .newyorkarrow" ).hide();
	$( "#dartmoutharrows .providencearrow" ).hide();
	$( "#dartmoutharrows .newbedfordarrow" ).hide();
	$( ".dartmouthtobostondirections" ).hide();
	$( ".dartmouthtonydirections" ).hide();
	$( ".dartmouthtoprovidencedirections" ).hide();
	$( ".dartmouthtonewbedforddirections" ).hide();
});

$( ".dartmouthtoprovidence" ).click(function() {
	$( ".dartmouthtoprovidencedirections" ).show();
	$( "#dartmoutharrows" ).show();
	$( "#nyarrows" ).hide();
	$( "#dartmoutharrows .providencearrow" ).show();
	$( "#dartmoutharrows .bostonarrow" ).hide();
	$( "#dartmoutharrows .newyorkarrow" ).hide();
	$( "#dartmoutharrows .newportarrow" ).hide();
	$( "#dartmoutharrows .newbedfordarrow" ).hide();
	$( ".dartmouthtobostondirections" ).hide();
	$( ".dartmouthtonydirections" ).hide();
	$( ".dartmouthtonewportdirections" ).hide();
	$( ".dartmouthtonewbedforddirections" ).hide();
});

$( ".dartmouthtonewbedford" ).click(function() {
	$( ".dartmouthtonewbedforddirections" ).show();
	$( "#dartmoutharrows" ).show();
	$( "#nyarrows" ).hide();
	$( "#dartmoutharrows .newbedfordarrow" ).show();
	$( "#dartmoutharrows .bostonarrow" ).hide();
	$( "#dartmoutharrows .newyorkarrow" ).hide();
	$( "#dartmoutharrows .newportarrow" ).hide();
	$( "#dartmoutharrows .providencearrow" ).hide();
	$( ".dartmouthtobostondirections" ).hide();
	$( ".dartmouthtonydirections" ).hide();
	$( ".dartmouthtonewportdirections" ).hide();
	$( ".dartmouthtoprovidencedirections" ).hide();
});


$( ".nytoboston" ).click(function() {
	$( "#ny" ).show();
	$( ".nytobostondirections" ).show();
	$( "#dartmoutharrows" ).hide();
	$( "#nyarrows" ).show();
	$( "#nyarrows .bostonarrow" ).show();
	$( "#nyarrows .newyorkarrow" ).hide();
	$( "#nyarrows .newportarrow" ).hide();
	$( "#nyarrows .providencearrow" ).hide();
	$( "#nyarrows .newbedfordarrow" ).hide();
	$( ".nytonydirections" ).hide();
	$( ".nytonewportdirections" ).hide();
	$( ".nytoprovidencedirections" ).hide();
	$( ".nytonewbedforddirections" ).hide();
});

$( ".nytony" ).click(function() {
	$( ".nytonydirections" ).show();
	$( "#dartmoutharrows" ).hide();
	$( "#nyarrows" ).show();
	$( "#nyarrows .newyorkarrow" ).show();
	$( "#nyarrows .bostonarrow" ).hide();
	$( "#nyarrows .newportarrow" ).hide();
	$( "#nyarrows .providencearrow" ).hide();
	$( "#nyarrows .newbedfordarrow" ).hide();
	$( ".nytobostondirections" ).hide();
	$( ".nytonewportdirections" ).hide();
	$( ".nytoprovidencedirections" ).hide();
	$( ".nytonewbedforddirections" ).hide();
});

$( ".nytonewport" ).click(function() {
	$( ".nytonewportdirections" ).show();
	$( "#dartmoutharrows" ).hide();
	$( "#nyarrows" ).show();
	$( "#nyarrows .newportarrow" ).show();
	$( "#nyarrows .bostonarrow" ).hide();
	$( "#nyarrows .newyorkarrow" ).hide();
	$( "#nyarrows .providencearrow" ).hide();
	$( "#nyarrows .newbedfordarrow" ).hide();
	$( ".nytobostondirections" ).hide();
	$( ".nytonydirections" ).hide();
	$( ".nytoprovidencedirections" ).hide();
	$( ".nytonewbedforddirections" ).hide();
});

$( ".nytoprovidence" ).click(function() {
	$( ".nytoprovidencedirections" ).show();
	$( "#dartmoutharrows" ).hide();
	$( "#nyarrows" ).show();
	$( "#nyarrows .providencearrow" ).show();
	$( "#nyarrows .bostonarrow" ).hide();
	$( "#nyarrows .newyorkarrow" ).hide();
	$( "#nyarrows .newportarrow" ).hide();
	$( "#nyarrows .newbedfordarrow" ).hide();
	$( ".nytobostondirections" ).hide();
	$( ".nytonydirections" ).hide();
	$( ".nytonewportdirections" ).hide();
	$( ".nytonewbedforddirections" ).hide();
});
$( ".nytonewbedford" ).click(function() {
	$( ".nytonewbedforddirections" ).show();
	$( "#dartmoutharrows" ).hide();
	$( "#nyarrows" ).show();
	$( "#nyarrows .newbedfordarrow" ).show();
	$( "#nyarrows .bostonarrow" ).hide();
	$( "#nyarrows .newyorkarrow" ).hide();
	$( "#nyarrows .newportarrow" ).hide();
	$( "#nyarrows .providencearrow" ).hide();
	$( ".nytobostondirections" ).hide();
	$( ".nytonydirections" ).hide();
	$( ".nytonewportdirections" ).hide();
	$( ".nytoprovidencedirections" ).hide();
});



$( "#staff1" ).click(function() {
	$( ".staff" ).hide();
	$( "#detail-crew" ).show();
	$( ".detail-crew-arrow" ).show();
	$( ".dock-crew-arrow" ).hide();
	$( ".mechanics-crew-arrow" ).hide();
	$( ".rigging-crew-arrow" ).hide();
	$( ".yard-crew-arrow" ).hide();
});

$( "#staff2" ).click(function() {
	$( ".staff" ).hide();
	$( "#dock-crew" ).show();
	$( ".dock-crew-arrow" ).show();
	$( ".detail-crew-arrow" ).hide();
	$( ".mechanics-crew-arrow" ).hide();
	$( ".rigging-crew-arrow" ).hide();
	$( ".yard-crew-arrow" ).hide();
});

$( "#staff3" ).click(function() {
	$( ".staff" ).hide();
	$( "#mechanics-crew" ).show();
	$( ".mechanics-crew-arrow" ).show();
	$( ".detail-crew-arrow" ).hide();
	$( ".dock-crew-arrow" ).hide();
	$( ".rigging-crew-arrow" ).hide();
	$( ".yard-crew-arrow" ).hide();
});

$( "#staff4" ).click(function() {
	$( ".staff" ).hide();
	$( "#rigging-crew" ).show();
	$( ".rigging-crew-arrow" ).show();
	$( ".detail-crew-arrow" ).hide();
	$( ".dock-crew-arrow" ).hide();
	$( ".mechanics-crew-arrow" ).hide();
	$( ".yard-crew-arrow" ).hide();
});

$( "#staff5" ).click(function() {
	$( ".staff" ).hide();
	$( "#yard-crew" ).show();
	$( ".yard-crew-arrow" ).show();
	$( ".detail-crew-arrow" ).hide();
	$( ".dock-crew-arrow" ).hide();
	$( ".mechanics-crew-arrow" ).hide();
	$( ".rigging-crew-arrow" ).hide();
});



$( "#employees1" ).click(function() {
	$( ".employees" ).hide();
	$( "#brokersposts" ).show();
	$( "#officestaffposts" ).hide();
	$( "#customerserviceposts" ).hide();
	$( ".brokers-arrow" ).show();
	$( ".office-staff-arrow" ).hide();
	$( ".customer-service-arrow" ).hide();
});

$( "#employees2" ).click(function() {
	$( ".employees" ).hide();
	$( "#brokersposts" ).hide();
	$( "#officestaffposts" ).show();
	$( "#customerserviceposts" ).hide();
	$( ".brokers-arrow" ).hide();
	$( ".office-staff-arrow" ).show();
	$( ".customer-service-arrow" ).hide();
});

$( "#employees3" ).click(function() {
	$( ".employees" ).hide();
	$( "#brokersposts" ).hide();
	$( "#officestaffposts" ).hide();
	$( "#customerserviceposts" ).show();
	$( ".brokers-arrow" ).hide();
	$( ".office-staff-arrow" ).hide();
	$( ".customer-service-arrow" ).show();
});






$( "#showreferences" ).click(function() {
	$( ".reference-container" ).show();
	$( ".submitreference" ).hide();
	$( ".slidernav" ).show();
});

$( "#submitreference" ).click(function() {
	$( ".submitreference" ).show();
	$( ".reference-container" ).hide();
	$( ".slidernav" ).hide();
});

$( "#viewreference" ).click(function() {
	$( ".testimonial" ).show();
	$( ".crsl-wrap" ).hide();
});

$( "#showreferences2" ).click(function() {
	$( ".reference-container" ).show();
	$( ".testimonial" ).hide();
	$( ".crsl-wrap" ).show();
});

$('#viewreference a').click(function(){     
	var thisAttr = $(this).attr('href');
	$( "#w" ).fadeOut('100');
	var loadedTestimonial = $( thisAttr ).html();
	document.querySelector('#loaded-testimonial-content').innerHTML = loadedTestimonial;
	$( "#testimonial-stage" ).delay(400).fadeIn('slow');
	
});

$('#showreferences2').click(function(){ 
	$( "#testimonial-stage" ).fadeOut('100');
		$( "#w" ).delay(400).fadeIn('slow');

});



	
$('div#locations-boxes a').click(function(){
	$('div#locations-boxes a').removeClass('active');
	$(this).addClass('active');
});


$('ul.sub-menu li.menu-item a').click(function(){
	var gotothis = $( thisAttr ).html();
	window.location.href = gotothis;
});

$('ul#menu-footernav li.menu-item a').click(function(){
	var gotothisfooter = $( thisAttr ).html();
	window.location.href = gotothisfooter;
});

$( document ).ready(function() {
	$( "#sent-message" ).delay( 2000 ).fadeOut( "slow" );
});

</script>

<?php 
if ($_GET['sent'] == "yes"){
         echo "<div id=\"sent-message\">" . "<img src=\"../images/anchor-dark.png\">" .
         "<h2>Your message was sent successfully!</h2></div>";
    } ?>

</body>
</html>