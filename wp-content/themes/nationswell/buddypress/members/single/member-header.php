<?php
/**
 * BuddyPress - Users Header
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

?>

<?php
global $bp;
/**
 * Fires before the display of a member's header.
 *
 * @since 1.2.0
 */
 
 
do_action( 'bp_before_member_header' ); ?>


<div class="member-row">
     <div class="left-wrapper">
        <div class="member-info-card">
            <div id="item-header-avatar" class="member-header-avatar">
                <a href="<?php bp_displayed_user_link(); ?>">
    
                    <?php bp_displayed_user_avatar( 'type=full' ); ?>
    
                </a>
            </div><!-- #item-header-avatar -->
            <div id="item-meta-bio" class="member-meta-bio">
                <h2 class="user-nicename"><?php echo get_user_meta( $bp->displayed_user->id, 'first_name', true )." ".get_user_meta( $bp->displayed_user->id, 'last_name', true );?></h2>
                <p class="user-company">
				<?php 
				$user_title = bp_get_profile_field_data(array('field'=>'Title','user_id'=>$bp->displayed_user->id));
				$user_company = bp_get_profile_field_data(array('field'=>'Company','user_id'=>$bp->displayed_user->id));
				if (!empty($user_title)) :
					echo $user_title .', '.$user_company;
                elseif (!empty($user_company)):
					echo $user_company;
				endif;
				?>
                </p>
                <div class="item-block-content">
                    <?php 
                        $url = wp_extract_urls( bp_get_profile_field_data(array('field'=>'LinkedIn','user_id'=>$bp->displayed_user->id)));
                        $display_email = bp_get_profile_field_data(array('field'=>'Enable other members to email you?','user_id'=>$bp->displayed_user->id)); ?>
                    <?php
                    if(!empty($url[0]) || $bp->loggedin_user->id != $bp->displayed_user->id || !empty($display_email)): ?>
                    <div class="item-subblock">
                        
                        <?php
                        if (!empty($url[0])): ?>
                        <a href="<?php echo $url[0]; ?>" title="<?php _e("LinkedIn","buddypress");?>" target="_blank"><span class="item-block-button-linkedin icon icon_linkedin"></span></a>
                        <?php endif; ?>
                        <?php if($bp->loggedin_user->id != $bp->displayed_user->id ){?><a href="<?php echo($bp->root_domain."/members/".$bp->loggedin_user->userdata->user_nicename."/messages/compose/?r=".$bp->displayed_user->userdata->user_nicename); ?>" title="<?php _e("Message","buddypress");?>"><span class="item-block-button-email icon icon_chat-bubble" style="font-size:22px"></span></a><?php }?>
                        
                        <?php 
                        
                        if( !empty($display_email) ): ?>
                        <a href="mailto:<?php echo($bp->displayed_user->userdata->user_email);?>" title="<?php _e("Send email","buddypress");?>"><span class="item-block-button-email icon icon_envelope-empty"></span></a>
                        <?php endif; ?>
                        
                        
                    </div>
                    <?php endif; ?>
                    <div class="item-subblock">
                        <ul>
                            <?php if( ($bp->current_component != 'profile' && $bp->current_action != 'public') ||  ($bp->current_component == 'profile' && $bp->current_action == 'edit') || $bp->current_action =='change-avatar' ){?><li><a href="<?php echo($bp->bp_options_nav['profile']['public']['link']); ?>"><?php _e("View profile","buddypress");?></a></li><?php }?>
                            <?php if($bp->loggedin_user->id == $bp->displayed_user->id && $bp->current_action != 'edit' ){?> <li><a href="<?php echo($bp->bp_options_nav['profile']['edit']['link']); ?>"><?php _e("Edit profile","buddypress");?></a></li><?php }?>
                            <?php if($bp->loggedin_user->id == $bp->displayed_user->id && $bp->current_action !='change-avatar'){?><li><a href="<?php echo($bp->bp_options_nav['profile']['change-avatar']['link']); ?>"><?php _e("Change photo","buddypress");?></a></li><?php }?>
                        <ul>
                    </div>
                </div>
            </div><!-- #item-meta-bio -->
        </div>
        
         <?php
		  if( $bp->current_action =='general' || $bp->current_action =='notifications' ) {
			echo '<div class="member-notifications">';
			require( 'settings/cloudred-notifications.php' );
			echo '</div>';
		  }
		  ?>
        
    </div>
    <?php 
		//if we're on the change pic page, show the form
		
		//if(!empty(strpos($_SERVER['REQUEST_URI'], 'avatar'))){
		if ( $bp->current_action =='change-avatar' ) {
			echo '<div class="member-change-avatar">';
			require( 'profile/cloudred-change-avatar.php' );
			echo '</div>';
		//if we're on the settings page, show the settings form
		} else if( $bp->current_action =='general' || $bp->current_action =='notifications' ) {
			echo '<div class="member-settings">';
			require( 'settings/cloudred-general.php' );
			//require( 'settings/cloudred-notifications.php' );
			echo '</div>';
		
		
		} else if( $bp->current_component=='profile' && $bp->current_action =='edit' ) {
		//print the edit form
			require( 'profile/cloudred-profile-edit.php' );
		//in all other cases, show the two callouts
		} else {

		?>
	
	
	<?php if($bp->current_component=='profile' && $bp->current_action =='public'){?>
		<div id="item-meta-member-profile" class="profile-callout-block">
			
			<div class="profile-info">
				<div class="one">
					<div class="council-branch border">
						<p class="headline"><span class="icon icon_marker"></span><?php _e("Council Branch");?><span class="item-block-content"><?php echo bp_get_profile_field_data(array('field'=>'Council branch','user_id'=>$bp->displayed_user->id));?></span></p>
					</div>
					<?php
					if (!empty(bp_get_profile_field_data(array('field'=>'Industry','user_id'=>$bp->displayed_user->id)))) : ?>
					<div class="industry">
						<p class="headline"><span class="icon icon_briefcase"></span><?php _e("Industry");?><span class="item-block-content"><?php echo bp_get_profile_field_data(array('field'=>'Industry','user_id'=>$bp->displayed_user->id));?></span></p>
						
					</div>
					<?php endif; ?>
				</div>
						
				<div class="two">
					<div class="date-joined border">
						<p class="headline"><span class="icon icon_calendar"></span><?php _e("Date Joined");?><span class="item-block-content"><?php echo bp_get_profile_field_data(array('field'=>'Date joined','user_id'=>$bp->displayed_user->id));?></span></p>
					</div>
				
					<?php
					if (!empty(bp_get_profile_field_data(array('field'=>'Member status','user_id'=>$bp->displayed_user->id)))) : ?>
					<div class="member-status">
						<p class="headline"><span class="icon icon_heart"></span><?php _e("Member Status");?><span class="item-block-content"><?php echo bp_get_profile_field_data(array('field'=>'Member status','user_id'=>$bp->displayed_user->id));?></span></p>
						
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div><!-- #item-meta-member-directory -->
	<?php }else{ ?>
		<div id="item-meta-member-directory" class="callout-block">
			<h2><span class="icon icon_people"></span><?php _e("Member Directory");?></h2>
			<div class="item-block-content"><?php _e("Connect directly with other Council Members who are passionate about impact!");?></div>
			<a href="<?php echo($bp->root_domain."/".$bp->members->root_slug); ?>"><span class="item-block-button-go"><?php _e("Go!");?></span></a>
		</div><!-- #item-meta-member-directory -->

		<div id="item-meta-get-in-touch" class="callout-block">
			<h2><span class="icon icon_comments"></span><?php _e("Get in touch!");?></h2>
			<div class="item-block-content"><?php _e("Refer a member, recommend a speaker, or tell NationSwell about your experience.");?></div>
			<a href="<?php echo($bp->root_domain."/get-in-touch/"); ?>"><span class="item-block-button-go"><?php _e("Go!");?></span></a>
		</div><!-- #item-meta-get-in-touch -->
    <?php } ?>
    	<?php } ?>

</div>



<?php

/**
 * Fires after the display of a member's header.
 *
 * @since 1.2.0
 */
do_action( 'bp_after_member_header' ); ?>

<?php

/** This action is documented in bp-templates/bp-legacy/buddypress/activity/index.php */
do_action( 'template_notices' ); ?>
