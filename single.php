<?php

/**

 * Displays a Single Post

 */
get_header(); ?>
<div id="main-wrapper">
  <div id="main">
    <div class="page-content">

      <div id="news-events">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div id="communities-heading-photo">
        <?php
          $image = get_field('featured_photo');
          $size = 'full';

        if( !empty($image) ): 
          echo wp_get_attachment_image( $image, $size );
         endif; ?>
          <div id="communities-heading-link"><a href="#listings">View Listings</a></div>
          <div id="communities-title-box"><div id="page-heading"><h2><?php
        // $category = get_the_category(); 
        // echo $category[0]->cat_name;
        ?></h2>
          <h1><?php the_title()?></h1></div>
          <div style="font-size: 14px; color: #ffffff;"><?php the_field("short_description"); ?></div>
        </div><!-- communities-heading-photo -->
      </div><!-- news-events -->

		<div class="single-page-sidebar">
      <div id="page-text-left">
	  <h1><?php the_title()?></h1>
	  <?php the_content(); ?></div>
      
      <div id="page-right-column">
     <div id="page-heading">
        <a class="analytics cat:community action:call" href="tel:+17049275477">Call Now: 704-927-5477</a>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="clear"></div>
     </div>
<div id="sub-home-search">
<div id="sub-home-search-padding">
<div class="sidebar-form">
<div class="form-header">
    	<h3>Getting the best return <br>from your home?</h3>
        <h4>Contact us to receive a free <br>rental rate analysis today.</h4>
    </div>    
	<div class="form-inner-main padding-above">
<form id="inf_form_4d5ee6a420d70b04ad19f21c014f2f31" class="infusion-form" accept-charset="UTF-8" action="https://wm253.infusionsoft.com/app/form/process/4d5ee6a420d70b04ad19f21c014f2f31" method="POST"><input name="inf_form_name" type="hidden" value="Web Form &gt; Landlord PM request" /><input name="infusionsoft_version" type="hidden" value="1.68.0.134" /><div class="infusion-field"><label for="inf_field_FirstName" style="display:none;">First Name *</label><input id="inf_field_FirstName" class="infusion-field-input-container" name="inf_field_FirstName" type="text" placeholder="First Name *" />
</div>

<div class="infusion-field"><label for="inf_field_LastName" style="display:none;">Last Name *</label><input id="inf_field_LastName" class="infusion-field-input-container" name="inf_field_LastName" type="text" placeholder="Last Name *" />
</div>

<div class="infusion-field"><label for="inf_field_Email" style="display:none;">Email *</label><input id="inf_field_Email" class="infusion-field-input-container" name="inf_field_Email" type="text" placeholder="Email *" />
</div>

<div class="infusion-field"><label for="inf_field_Phone1" style="display:none;">Phone 1 *</label><input id="inf_field_Phone1" class="infusion-field-input-container" name="inf_field_Phone1" type="text" placeholder="Phone 1 *" />
</div>
<div></div>
<div></div>
<div></div>
<div class="infusion-submit"><button id="recaptcha_4d5ee6a420d70b04ad19f21c014f2f31" class="infusion-recaptcha sb-bt" type="submit">Submit</button></div>
</form><script type="text/javascript" src="https://wm253.infusionsoft.com/app/webTracking/getTrackingCode"></script>
</div>

 <div class="bullet-point-content">
 	<h4>JUST A FEW OF THE SERVICES <br>WE PROVIDE ARE:</h4>
    <ul>
    <li>Professional marketing with virtual tour technology</li>
    <li>1 on 1 tenant home tours at your property</li>
    <li>Monthly & year end accounting of owner accounts</li>
    <li>No pre-paid marketing fees</li>
    <li>24/7 Maintenance services & dispatch</li>
    <li>Tenant background checks including credit, employment, criminal and national eviction research</li>
    </ul>
 </div> 
</div>
</div>
</div></div>
</div>
      
      <div id="features-row">
        <div id="features"> 
      
          
          <div class="tab-content">
          <?php the_field("map_&_location"); ?>

            <?php 
            $location = get_field('google_map');
            if( !empty($location) ):
            ?>
              <div class="acf-map" style="margin-top: 20px; margin-bottom: 30px; float: left;">
                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                  <h4><?php the_title(); ?></h4>
                  <p class="address"><?php echo $location['address']; ?></p>
                </div><!-- marker -->
              </div><!-- acf map -->
            <?php endif; ?>
              
          </div><!-- tab content -->  

          <?php if (strlen(get_post_meta($post->ID, "overview_new", true)) > 0) : ?>
            <?php echo do_shortcode("[tabby title='Overview']"); ?>
            <div class="tab-content">
              <?php the_field("overview_new"); ?>
            </div><!--- / tab --> 
          <?php endif; ?>


          <?php if (strlen(get_post_meta($post->ID, "features_new", true)) > 0) : ?>
            <?php echo do_shortcode("[tabby title='Features']"); ?>
            <div class="tab-content">
              <?php the_field("features_new"); ?>
            </div><!--- / tab -->  
           <?php endif; ?>


          <?php if (strlen(get_post_meta($post->ID, "points_of_interest_new", true)) > 0) : ?>
            <?php echo do_shortcode("[tabby title='Points of Interest']"); ?>
            <div class="tab-content">
              <?php the_field("points_of_interest_new"); ?>
            </div><!--- / tab --> 
          <?php endif; ?>


          
          <?php if (strlen(get_post_meta($post->ID, "pricing_new", true)) > 0) : ?>
            <?php echo do_shortcode("[tabby title='Pricing']"); ?>
            <div class="tab-content">
              <?php the_field("pricing_new"); ?>
            </div><!--- / tab -->  
           <?php endif; ?>


        <?php echo do_shortcode("[tabbyending]"); ?> 
        </div><!-- features -->


        <?php 
        $rab = get_field('request_a_brochure');
        if( $rab != '' ) : ?>
          <div id="features-agents">
            <h2>Request a Brochure</h2>

            <?php echo $rab; ?>

          </div><!-- features-agents -->
        <?php endif; ?>
      </div><!--- / features row -->


      <div id="communities-gallery">
       <?php 
      $images = get_field('gallery');
      if( $images ): ?>
      <h2>Photo Gallery</h2>
              <?php 
              $i=0;
              foreach( $images as $image ): $i++; 

              if( $i == 3 ) {
                $photoClass = 'last';
                $i = 0;
              } else {
                $photoClass = 'first';
              }
              ?>
                  <div class="community-gallery-photo <?php echo $photoClass; ?>">
                      <a href="<?php echo $image['url']; ?>" class="group1">
                        <img src="<?php echo $image['sizes']['communities-gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
                      </a>
                     <!--  <p><?php echo $image['caption']; ?></p> -->
                  </div><!-- community-gallery-photo -->
              <?php endforeach; ?>
      <?php endif; ?>
      </div><!-- communities-gallery -->


    </div><!-- page-content -->
  </div><!-- main -->
</div><!-- main-wrapper -->

<div id="main2">

<div id="communities-listings">

  <?php if (strlen(get_post_meta($post->ID, "current_listings", true)) > 0) : ?>     
    <div id="current-listings-header"><a name="listings"></a><h2>Current Listings</h2></div>
    <div id="current-listings-frame">
      <?php the_field("current_listings"); ?>
    </div><!-- current-listings-frame -->
  <?php endif; ?>


</div><!-- main2 -->
<?php endwhile; endif; ?>   

<?php get_footer(); ?>