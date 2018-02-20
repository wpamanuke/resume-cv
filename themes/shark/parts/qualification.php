<!-- == qualification == -->
<?php 
$qualification_options = get_option( 'resumecv_qualification_options');
if ( resumecv_data($qualification_options,'show') == 'enable') {
	$qualification_items = resumecv_data($qualification_options,'qualification_items'); 
	resumecv_output('<h2 class="rcv-profile__title">',resumecv_data($qualification_options,'title'),'</h2>');
	if ($qualification_items) {
		foreach ($qualification_items as $item) {
?>
		<div class="sidebar-right__content">
			<?php resumecv_output('<h3 class="sidebar-right__h">',$item['title'],'</h3>'); ?>
			<div class="rcv-qualification">
				<ul class="rcv-qualification__list">
					<?php 
						$values = resumecv_data($item,'value');
						foreach ($values as $value) {
							resumecv_output('<li>',$value,'</li>');
						}
					?>
				</ul>
				<div class="clear-fix"></div>
			</div>
		</div>
		<?php	} ?>
	<?php	} ?>
<?php } ?>
<!-- qualification -->
