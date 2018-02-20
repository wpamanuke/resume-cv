			<!-- == profile == -->
			<?php 
				$profile_options = get_option( 'resumecv_profile_options');
				if ( resumecv_data($profile_options,'show') == 'enable') {
			?>
				<div class="sidebar__content">
					<div class="rcv-profile">
						<?php $photo_url = resumecv_data($profile_options,'photo'); ?>
						<?php if ($photo_url=='') { ?>
							<img src="<?php echo esc_url($template_url) . "images/profile.png"; ?>" alt="" />
						<?php } else { ?>
							<img src="<?php echo esc_url($photo_url); ?>" alt="" />
						<?php } ?>
						<div class="rcv-profile__content">
							<?php resumecv_output('<h1 class="rcv-profile__name">',resumecv_data($profile_options,'name'),'</h1>'); ?>
							<?php resumecv_output('<span class="rcv-profile__profession">',resumecv_data($profile_options,'profession'),'</span>'); ?>
						</div>
						
						<?php $personal_items = resumecv_data($profile_options,'personal_items'); ?>
						
						<?php if ($personal_items) { ?>
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<div class="rcv-profile__personalitems">
									<div>
										<?php foreach ($personal_items as $item) { ?>
										<div class="rcv-profile__personalitem text-center">
											<?php resumecv_output('<div class="--black">',$item['text'],'</div>'); ?>
											<?php resumecv_output('<div class="--white">',$item['value'],'</div>'); ?>
										</div>
										<?php } ?>
									</div>
									
									<div class="clear-fix"></div>
								</div>
							</div>
							<div class="col-md-2"></div>
						</div>
						<?php } ?>
						
					</div>
				
				</div>
				<?php } ?>
			<!-- profile -->