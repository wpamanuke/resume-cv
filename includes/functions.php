<?php

// Load plugin textdomain.
add_action( 'plugins_loaded', 'resumecv_load_textdomain' );
function resumecv_load_textdomain() {
  load_plugin_textdomain( 'resume-cv', false, basename( dirname( __FILE__ ) ) . '/languages' ); 
}

// Action
function resumecv_head() {
	do_action('resumecv-head');
}

function resumecv_footer() {
	do_action('resumecv-footer');
}

// check variable exist
function resumecv_data($options,$var1,$var2='') {
	if ( isset( $options ) ) {
		if ($var2 == '') {
			if ( isset( $options[$var1] ) ) {
				return $options[$var1];
			}
		} else {
			if ( isset( $options[$var1] ) ) {
				if ( isset( $options[$var1][$var2] ) ) {
					return $options[$var1][$var2];
				}
			}
		}
	}
	return '';
}

// output variable data
function resumecv_output($before='',$content='',$after='') {
	$output = '';
	if ($content) {
		$output =  $before . "\n" . $content . "\n" . $after . "\n";
		echo wp_kses_post($output);
	}
	
}