<!-- == contact == -->
			<?php 
				$contact_options = get_option( 'resumecv_contact_options');
				if ( resumecv_data($contact_options,'show') == 'enable') {
			?>
				<div class="sidebar__content">
				<h3 class="sidebar__h">Contact</h3>
				<div class="rcv-contact">
					<ul class="--ul-reset">
						<?php $contact_items = resumecv_data($contact_options,'contact_items'); ?>
						<?php if ($contact_items) { ?>
						<?php foreach ($contact_items as $item) { ?>
						<li>
							<?php resumecv_output('<i class="',$item['icon'],'"></i>'); ?>
							<?php resumecv_output('<span>',$item['value'],'</span>'); ?>							
						</li>
						<?php } ?>
						<?php } ?>
					</ul>
					<div class="clear-fix"></div>
				</div>
				</div>
			<?php
				}
			?>
			<!-- contact -->