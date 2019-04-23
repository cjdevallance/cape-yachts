<?php
/*
* Header
*/
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<title><?php wp_title( '|', true, 'right' ); ?></title>

<meta name="viewport" content="width=1200">

<link href="<?php bloginfo( 'url' ); ?>/favicon-capeyachts.ico" rel="shortcut icon">
<link href="<?php bloginfo( 'url' ); ?>/apple-touch-icon.png" rel="apple-touch-icon">

<!--<link rel="profile" href="http://gmpg.org/xfn/11">-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/cape-style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/cape-style-t2h.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/homepage-slideshow.css">

<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<!-- scrolling posts -->
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/responsiveCarousel.min.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/pagination-styles.css">


<!-- accordian -->
<script src="<?php bloginfo( 'template_url' ); ?>/js/accordion.js"></script>

<script>
$(function() {
	$( "#accordion" ).accordion(
	collapsible: false
	});
});
</script>

<script>
$(document).ready(function(){
	// Cache the Window object
	$window = $(window);
                
	$('section[data-type="background"]').each(function(){
	var $bgobj = $(this); // assigning the object
                    
		$(window).scroll(function() {
                    
		// Scroll the background at var speed							
		var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
		
		// Put together our final background position
		var coords = '50% '+ yPos + 'px';

		// Move the background
		$bgobj.css({ backgroundPosition: coords });
		
		}); // window scroll Ends

	});	

}); 

document.createElement("article");
document.createElement("section");

</script>




<?php if ( is_home() ) { ?>

<!-- slideshow 
<link href="<?php bloginfo( 'template_url' ); ?>/css/superslides.css" rel="stylesheet">

<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.animate-enhanced.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>-->

<?php } ?>

 
<?php if (is_page( array( 121, 123, 0 ) )) { 

//Include configuration parameters
require("setup/config.php");

?>   

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/galleria/themes/classic/galleria.classic.css">
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/galleria/galleria-1.2.8.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/galleria/themes/classic/galleria.classic.min.js"></script>

<style>

.galleria-errors
		{visibility: hidden;
		display: none;}

</style>


<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/includes/brokerage-boats.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/shadowbox/shadowbox.css">

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/shadowbox/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({ language: 'en', players: ['img', 'html', 'iframe', 'qt', 'wmp', 'swf', 'flv'] });
</script>

<!-- Facebook Opengraph -->
<meta property="og:title" content="<?php echo $boat['Make'] . " " . $boat['Model']; ?> for sale">
<meta property="og:type" content="product" />
<meta property="og:url" content="<?php echo $url; ?>">
<meta property="og:description" content="View this boat for sale. Includes price information, photos, downloadable PDF brochure, videos (where available) and more!">
<meta property="og:site_name" content=<?php echo $brokername; ?> >
<meta property="fb:admins" content="100002748181602">
<meta property="fb:app_id" content="228358150539054">

<div id="fb-root"></div>
<script type="text/javascript">
window.fbAsyncInit = function() {
	FB.init({appId: '228358150539054', status: true, cookie: true, xfbml: true});
		};
window.setTimeout(function() {
	FB.Canvas.setAutoResize();
	}, 250);
	};
	(function() {
	var e = document.createElement('script'); e.async = true;
	e.src = document.location.protocol +
		'http://connect.facebook.net/en_US/all.js';
	document.getElementById('fb-root').appendChild(e);
}());
</script>

<!-- phone number validator -->
<script>
function isNumber(event) {
if (event) {
	var charCode = (event.which) ? event.which : event.keyCode;
	if (charCode != 190 && charCode > 31 && 
	(charCode < 48 || charCode > 57) && 
	(charCode < 96 || charCode > 105) && 
	(charCode < 37 || charCode > 40) && 
	charCode != 110 && charCode != 8 && charCode != 46 )
	return false;
	}
return true;
}
</script>

<?php } ?>

<?php if ((is_page( 227 ))) { ?>

<link href="<?php bloginfo( 'url' ); ?>/capeyachts_search.css" rel="stylesheet" type="text/css">

<? } ?>
   
<script type="text/javascript">
function goTo(page) {
	var url="";
	hu=window.location.search.substring(1);
	query=hu.replace(/page=[0-9][0-9]/g,"");
	query=query.replace(/page=[0-9]/g,"");
		url=url+"?page="+page+"&"+query;
		url=url.replace(/&&/g,'&');
	document.location.href = url;
	return false;
}
</script>

<!-- Validate forms -->
<script type="text/javascript">
	function validate_contact_home(){
		if(!document.contact_home.firstname.value){
			alert("You did not enter a first name. Please do so before continuing.");
		}
		else if(!document.contact_home.lastname.value){
			alert("You did not enter a last name. Please do so before continuing.");
		}
		else if(!document.contact_home.email.value){
			alert("You did not enter an email. Please do so before continuing.");
		}
		else if(!document.contact_home.comment.value){
			alert("You did not enter a comment. Please do so before continuing.");
		}	
		else {
			document.contact_home.submit();
		}
	}
	function validate_contact_references(){
		if(!document.contact_references.firstname.value){
			alert("You did not enter a first name. Please do so before continuing.");
		}
		else if(!document.contact_references.lastname.value){
			alert("You did not enter a last name. Please do so before continuing.");
		}
		else if(!document.contact_references.email.value){
			alert("You did not enter an email. Please do so before continuing.");
		}
		else if(!document.contact_references.boatname.value){
			alert("You did not enter a boat name. Please do so before continuing.");
		}
		else if(!document.contact_references.boattype.value){
			alert("You did not enter a boat type. Please do so before continuing.");
		}
		else if(!document.contact_references.comment.value){
			alert("You did not enter a comment. Please do so before continuing.");
		}
		else {
			document.contact_references.submit();
		}
	}		
	function validate_contact_boat_details(){
		if(!document.contact_boat_details.firstname.value){
			alert("You did not enter a first name. Please do so before continuing.");
		}
		else if(!document.contact_boat_details.lastname.value){
			alert("You did not enter a last name. Please do so before continuing.");
		}
		else if(!document.contact_boat_details.email.value){
			alert("You did not enter an email. Please do so before continuing.");
		}
		else if(!document.contact_boat_details.subject.value){
			alert("You did not enter a subject. Please do so before continuing.");
		}		
		else {
			document.contact_boat_details.submit();
		}
	}	
	function validate_contact_form_boatworth(){
		if(!document.contact_form_boatworth.name.value){
			alert("You did not enter a name. Please do so before continuing.");
		}
		else if(!document.contact_form_boatworth.phone.value){
			alert("You did not enter a phone number. Please do so before continuing.");
		}
		else if(!document.contact_form_boatworth.email.value){
			alert("You did not enter an email. Please do so before continuing.");
		}
		else if(!document.contact_form_boatworth.comment.value){
			alert("You did not enter a boat description. Please do so before continuing.");
		}		
		else {
			document.contact_form_boatworth.submit();
		}
	}
	function validate_contact_form_pls(){
		if(!document.contact_form_pls.firstname.value){
			alert("You did not enter a first name. Please do so before continuing.");
		}
		else if(!document.contact_form_pls.lastname.value){
			alert("You did not enter a last name. Please do so before continuing.");
		}
		else if(!document.contact_form_pls.email.value){
			alert("You did not enter an email. Please do so before continuing.");
		}
		else if(!document.contact_form_pls.subject.value){
			alert("You did not enter a subject. Please do so before continuing.");
		}
		else if(!document.contact_form_pls.comment.value){
			alert("You did not enter a comment. Please do so before continuing.");
		}		
		else {
			document.contact_form_pls.submit();
		}
	}
	function validate_email_form(){
		if(!document.email_form.email.value){
			alert("You did not enter an email. Please do so before continuing.");
		}
		else {
			document.email_form.submit();
		}
	}
</script>

<!-- removes commas in price searches  -->
<? $_GET['maxprice']=str_replace(",","",$_GET['maxprice']);
$_GET['minprice']=str_replace(",","",$_GET['minprice']);?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37368369-43', 'auto');
  ga('send', 'pageview');

</script>

<meta name="google-site-verification" content="axhSTHTstz9QQxfr4pixsQjnfwyZbujSeNLwHa5jubg" />

<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>


<div id="page" class="hfeed site">

	<header id="mastheadx" class="site-headerx" role="bannerx">

		<div id="navbar" class="navbar">

			<nav id="site-navigation" class="navigation main-navigation" role="navigation">

				<div class="header-logo">
                	<a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/headerlogo.png"></a>
				</div>
                
				<div class="box-shadow-menu"><h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3></div>

				<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>

			</nav><!-- #site-navigation -->

		</div><!-- #navbar -->

	</header><!-- #masthead -->

	<div id="main" class="site-main">
