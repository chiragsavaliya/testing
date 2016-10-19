<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post();

$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
 ?>
 
 <div class="inner_page_header">
  <div class="header_portion_cont">
    <div class="inner_page_header_in">
      <div class="iphi_left">
        <div class="iphi_left_t1">
          <?php the_title();?>
        </div>
        <div class="iphi_left_t2">
          <div class="iphi_l_t2_left"><img src="<?php echo get_template_directory_uri(); ?>/images/home_icon.png" width="27" height="19" alt=""></div>
          <div class="iphi_l_t2_left">/
            <?php the_title();?>
          </div>
        </div>
      </div>
      <!--<div class="iphi_right">
        <?php the_field('pricing_title_content');?>
      </div>-->
      <div class="clear"></div>
    </div>
  </div>
  <img src="<?php echo $src[0]; ?>" width="1309" height="238" alt=""  class="header_desktop"> <img src="<?php echo get_template_directory_uri(); ?>/images/pricing_header_sm.jpg" width="601" height="163" alt="" class="header_mobile"> </div>
  
  <?php endwhile; ?>


<div class="body_portion">
	<!-- left portion start -->
	<div class="bp_left">
    	<div class="bp_left_inner contacth">
            <h2>contact us</h2>
            <div class="contact_text">The team at Triumph would love to hear from you – whether landlord or tenant. If you have any questions or queries, please don’t hesitate to contact us today. We will get back to you very shortly.</div>
            
            <div class="contact_info_container">
            	<div class="cic_left">
                	<div class="cic_l_content cico1">
                    	<h3>PHYSICAL ADDRESS</h3>
                        911 North Buffalo Dr. Suite 202<br>Las Vegas, Nevada 89128
                    </div>
                    
                    <div class="cic_l_content cico2">
                    	<h3>MAILING ADDRESS</h3>
                        9030 W. Sahara Ave, Suite 668<br>Las Vegas, Nevada 89117
                    </div>
                </div>
          		<div class="cic_right">
                	<div class="cic_r_content cic_r_ico1">(702) 367-2323</div>
                    <div class="cic_r_content cic_r_ico2"><a href="mailto:contact@triumphPM.com">contact@triumphPM.com</a></div>
        			<div class="cic_r_content cic_r_ico3">(702) 367-2323</div>
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="our_location_container">
           	  <h2>our location</h2>
                <div><img src="<?php bloginfo('template_url'); ?>/images/location.jpg" width="624" height="253" alt=""></div>
            </div>
        </div>
	</div>
    <!-- left portion end -->
    
    <!-- right portion start -->
    <div class="bp_right">
    	<!-- quote box start -->
    	<div class="right_quote_box_inner_contact">
        	<div class="rqb_heading_container_contact">
            	<div class="rqb_hc_left1_contact">GET IN TOUCH</div>
            </div>
            
            <div class="rqb_text_form_white">If you have any questions about what our team can do for you – get in touch today or fill out the form below with your personal det ails and message and we will get back to you very shortly.</div>
            
<div style="padding:15px;margin-top:30px;"><?php gravity_form( 9, false, false, false, '', false ); ?></div>
        </div>
        <!-- quote box end -->
        
        <!-- review box start -->
        <div class="review_container1"></div>
        <!-- review box end -->
    </div>
    <!-- right portion end -->
    <div class="clear"></div>
    
 
 
 








 
    <div class="department_container">
    	<h3>DEPARTMENT CONTACTS</h3>
        
        
        
        
   <?php if( have_rows('department_contacts') ): $i=1; while ( have_rows('department_contacts') ) : the_row(); ?>     
        
        <div class="dep_four_boxes">
        	<div class="dfb_inner_left dfb_bg">
            	<h4><?php the_sub_field('name'); ?></h4>
                <h5><?php the_sub_field('department'); ?></h5>
                <div class="dfb_bg_ph"><?php the_sub_field('contact_no'); ?></div>
                <div class="dfb_bg_mail"><a href="mailto:kami@TriumphPM.com"><?php the_sub_field('email_id'); ?></a></div>
            </div>
        </div>
        
      <?php $i++; endwhile; endif; ?>   
        

        
        
        <div class="clear"></div>
    </div>
    
</div>


<?php

get_footer();
