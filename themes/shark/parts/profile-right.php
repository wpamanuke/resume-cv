<!-- == profile == -->
<?php
$profile_options = get_option( 'resumecv_profile_options');
if ( resumecv_data($profile_options,'show') == 'enable') {
?>
	<div class="sidebar-right__content">
		<?php resumecv_output('<h2 class="rcv-profile__title">',resumecv_data($profile_options,'title'),'</h2>'); ?>
		<?php resumecv_output('<div class="rcv-profile__description">',resumecv_data($profile_options,'description'),'</div>'); ?>
	</div>
<?php } ?>
<!-- profile -->