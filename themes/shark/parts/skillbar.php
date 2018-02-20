<!-- skillbar -->
<?php 
$skillbar_options = get_option( 'resumecv_skillbar_options');
if ( resumecv_data($skillbar_options,'show') == 'enable') {
	$skillbar_items = resumecv_data($skillbar_options,'skillbar_items'); ?>
	<?php if ($skillbar_items) { ?>
		
		<?php foreach ($skillbar_items as $item) { ?>
		<div class="sidebar__content">
			<?php resumecv_output('<h3 class="sidebar__h"><i class="fa fa-pencil"></i>',$item['title'],'</h3>'); ?>
			<?php $skillbar = resumecv_data($item,'skillbar'); ?>
			<?php if ($skillbar) { ?>
				<?php foreach ($skillbar as $myitem) { ?>
					<div class="rcv-skillbar">
						<div class="rcv-skillbar__content">
							<?php resumecv_output('<span class="rcv-skillbar__name">',$myitem['skill-name'],'</span> - '); ?>
							<?php resumecv_output('<span class="rcv-skillbar__value">',$myitem['skill-value'],'%</span> '); ?>
						</div>
						<div class="rcv-skillbar__item" style="width:<?php echo esc_attr($myitem['skill-value']); ?>%"></div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
		<?php } ?>
	<?php } ?>
<?php } ?>
<!-- skillbar -->
