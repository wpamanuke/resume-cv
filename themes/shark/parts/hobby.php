<!-- hobby -->
<?php 
	$hobby_options = get_option( 'resumecv_hobby_options');
	if ( resumecv_data($hobby_options,'show') == 'enable') {
		$hobby_items = resumecv_data($hobby_options,'hobby_items'); 
		
	
	?>
<div class="sidebar-right__content">
	<?php resumecv_output('<h3 class="sidebar-right__h">',resumecv_data($hobby_options,'title'),'</h3>'); ?>
	<div class="rcv-hobby">
		<ul class="--ul-reset">
			<?php
			if ($hobby_items) {
				foreach ($hobby_items as $item) {
			?>
			<li class="rcv-hobby__item">
				<?php
							if ($item['icon']) {
								$url = $template_url .'svg/hobby/'. $item['icon'];
								echo '<div class="rcv-hobby__icon"><img width="70" height="70" src="'. esc_url($url)  .'" alt=""></div>';
								resumecv_output('<div class="rcv-hobby__value">',resumecv_data($item,'title'),'</div>');
							}
				?>
			</li>
			<?php
					}
				}
			?>
			
		</ul>
		<div class="clear-fix"></div>					
	</div>
</div>
<?php  }	?>
<!-- hobby -->