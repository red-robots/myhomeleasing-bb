<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=9">
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/style.css?ver=0123" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/colorbox.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/tabs.css" />
<!-- liquid web -->

<!-- lFont Awesome -->
<script src="https://use.fontawesome.com/5001f6a306.js"></script>


<!-- -->

<script type="text/javascript">
 
var namee;
function change(namee){
document.getElementById("Display_content").innerHTML=document.getElementById(namee).innerHTML;
 
//optional Javascript code below - To change color of clicked tab
var livetab, i;
switch(namee){
    case 'tab1':
        livetab='t1';
    break;
    case 'tab2':
        livetab='t2';
    break;
    case 'tab3':
        livetab='t3';
    break;
}
for(i=1;i<=3;i++){
    document.getElementById("t"+i).style.backgroundColor="gray";
}
document.getElementById(livetab).style.backgroundColor="silver";
//optional code ends here
 
}

</script>


<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<?php if( !is_singular('community') ) { ?>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<?php } ?>
<link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>

<!-- RECOMMEND PUTTING THESE CALLS IN THE "HEAD" SECTION, AFTER JQUERY IS DECLARED -->
	
	<script type="text/javascript" language="JavaScript">    
  // Callback to get the button working.
    function enableBtn1(){
        document.getElementById("chat-tab").style.display = "block";
    }
    //

    // Call to rendor the captcha

    var recaptcha1;
    var myCallBack = function() {
      
      //Render the recaptcha1 on the element with ID "recaptcha1"
      recaptcha1 = grecaptcha.render('recaptcha1', {
        //'sitekey' : '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI', //test key
        'sitekey' : '6LcD9BwUAAAAANiqrUTMgjkM1hrY_Dd_FTv9JOLR', // production
        'theme' : 'light',
        'callback' : 'enableBtn1'
      });
    }


</script>

<link href="https://c1203812.cdn.cloudfiles.rackspacecloud.com/jquery.autocomplete.css" rel="stylesheet" type="text/css" />
<?php the_field('google_analytics', 'option'); ?>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '267172457193231');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=267172457193231&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body <?php body_class(); ?>>	

<div class="top-row hide-home">
<div class="bb-container">
<div class="top-content-row">
	<p>Residential Realtors Serving Charlotte, NC <span><a href="http://www.facebook.com/MyTownhome.MaisonProperties.MyHomeLeasing" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></span> <span><a href="https://www.instagram.com/explore/tags/myhomeleasing/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></span></p>
    </div>
</div>
</div>

<div class="header-row hide-home">
	<div class="bb-container">
    <div class="content-row">
		<div class="left-col"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" border="0"></a> </div>
        
    	<div class="right-col"><nav id="site-navigation" class="main-navigation" role="navigation">
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu',  ) ); ?>
        </nav><!-- #site-navigation --></div>
         </div>
        <div class="heading-main">
        	Let us provide property management services for your Charlotte, NC home.
        </div>
        
   <div class="header-bt-row">
   <a href="https://myhomeleasing.com/property-management-services/" target="_self" class="fl-button" role="button">
							<span class="fl-button-text">CONTACT US TODAY!</span>
					</a>
                    
   </div>
   
   <div class="bottom-text">Proudly serving owners of premier properties since 1999.</div>
    </div>
</div>


<div id="main-wrapper-all">
  <div id="header-wrapper">
    <div id="main-header">
      <div id="header">

        <div id="logo">
          <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" border="0"></a> 
        </div><!-- #logo -->

        <div id="header-content-wrapper">
          <div id="header-content">
            
            <div id="header-content1">Residential Realtors serving Charlotte, NC</div><!-- header-content1 -->
          <div class="header-cont-right">
            <div id="social-icons">
              <div id="social1"><a href="http://www.facebook.com/MyTownhome.MaisonProperties.MyHomeLeasing" target="_blank"></a></div><!-- social1 -->
              <div id="social2"><a href="<?php the_field('youtube_link', 'option'); ?>" target="_blank"></a></div><!-- social1 -->
            </div><!-- social-icons -->

            <!-- <div id="header-content2">704.377.4567</div>header-content2 -->
             </div><!-- header cont right -->
          </div><!-- header-content -->
        </div><!-- header-content-wrapper -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu',  ) ); ?>
        </nav><!-- #site-navigation -->

      </div><!-- header -->
    </div><!-- main-header -->
  </div> <!-- header-wrapper -->   
