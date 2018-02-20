<!-- reference -->
<?php 
	$reference_options = get_option( 'resumecv_reference_options');
	if ( resumecv_data($reference_options,'show') == 'enable') {
		$reference_items = resumecv_data($reference_options,'reference_items'); 
		
	
	?>
<div class="sidebar__content">
	<?php resumecv_output('<h3 class="sidebar__h"><i class="fa fa-trophy"></i>',resumecv_data($reference_options,'title'),'</h3>'); ?>
	<div class="rcv-reference">
		<?php if ($reference_items) { ?>
		<?php foreach ($reference_items as $item) { ?>
		<div class="rcv-award__content">
			<?php resumecv_output('<div class="rcv-reference__name">',resumecv_data($item,'name'),'</div>'); ?>
			<?php resumecv_output('<div class="rcv-reference__title">',resumecv_data($item,'position'),'</div>'); ?>
			<?php resumecv_output('<div class="rcv-reference__company">',resumecv_data($item,'company_name'),'</div>'); ?>
			<div class="rcv-reference__list">
				<?php resumecv_output('<div class="rcv-reference__items"> <span class="rcv-reference__item">Phone</span> : <span class="rcv-reference__value">',resumecv_data($item,'phone'),'</span> </div>'); ?>
				<?php resumecv_output('<div class="rcv-reference__items"> <span class="rcv-reference__item">Email</span> : <span class="rcv-reference__value">',resumecv_data($item,'email'),'</span> </div>'); ?>
			</div>
			<?php resumecv_output('<div class="rcv-reference__description">',resumecv_data($item,'description'),'</div>'); ?>
		</div>
		<?php } ?>
		<?php } ?>
		
	
		<div class="clear-fix"></div>
	</div>

</div>
	<?php } ?>
<!-- awards -->
