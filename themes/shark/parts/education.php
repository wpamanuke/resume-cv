<!-- education -->
	<?php 
	$education_options = get_option( 'resumecv_education_options');
	if ( resumecv_data($education_options,'show') == 'enable') {
		$education_items = resumecv_data($education_options,'education_items'); 
		echo '<h2 class="rcv-profile__title">'. esc_html('EDUCATION AND EXPERIENCE','resume-cv') .'</h2>';
	
	?>
		<div class="sidebar-right__content">
			<?php
				resumecv_output('<h3 class="sidebar-right__h">',resumecv_data($education_options,'title'),'</h3>');
			?>
			<div class="timeline">
				<?php
					if ($education_items) {
						foreach ($education_items as $item) {
				?>
				<div class="rcv-education">							
					<div class="rcv-education__content">
						<?php resumecv_output('<h3 class="rcv-education__program">',resumecv_data($item,'program'),'</h3>'); ?>
						<?php resumecv_output('<span class="rcv-education__school">',resumecv_data($item,'school_name'),'</span>'); ?>
						<?php resumecv_output('<span class="rcv-education__school">(',resumecv_data($item,'school_address'),')</span>'); ?>
						<?php resumecv_output('<span class="rcv-education__year">',resumecv_data($item,'start_year') . ' - ' . resumecv_data($item,'end_year') ,'</span>'); ?>
						<?php resumecv_output('<div class="rcv-education__description">',resumecv_data($item,'position_description'),'</div>'); ?>
					</div>
				</div>
				<?php
						}
					}
				?>
				
			</div>
		</div>
	<?php } ?>
	<!-- education -->