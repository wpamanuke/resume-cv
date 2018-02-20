<!-- awards -->
<?php 
	$award_options = get_option( 'resumecv_award_options');
	if ( resumecv_data($award_options,'show') == 'enable') {
		$award_items = resumecv_data($award_options,'award_items'); 
		
	
	?>
<div class="sidebar__content">
	<?php resumecv_output('<h3 class="sidebar__h"><i class="fa fa-trophy"></i>',resumecv_data($award_options,'title'),'</h3>'); ?>

	<div class="rcv-award">
		<?php foreach ($award_items as $item) { ?>
		<div class="rcv-award__content">
			<?php resumecv_output('<div class="rcv-award__title">',resumecv_data($item,'title'),'</div>'); ?>
			<?php resumecv_output('<div class="rcv-award__event">',resumecv_data($item,'event'),'</div>'); ?>
			<?php resumecv_output('<div class="rcv-award__description">',resumecv_data($item,'description'),'</div>'); ?>
		</div>
		<?php } ?>
		<div class="clear-fix"></div>
	</div>

</div>
<?php
	}
?>
<!-- awards -->
