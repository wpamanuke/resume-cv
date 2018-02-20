<?php

/**
 * Handles 'skillbar' custom field type.
 */
class CMB2_Render_Skillbar_Field extends CMB2_Type_Base {

	/**
	 * List of states. To translate, pass array of states in the 'state_list' field param.
	 *
	 * @var array
	 */
	protected static $skill_value_list = array( '10' => '10', '20' => '20', '30' => '30', '40' => '40', '50' => '50',  '60' => '60', '70' => '70',  '80' => '80',  '90' => '90', '100' => '100' );

	public static function init() {
		add_filter( 'cmb2_render_class_skillbar', array( __CLASS__, 'class_name' ) );
		add_filter( 'cmb2_sanitize_skillbar', array( __CLASS__, 'maybe_save_split_values' ), 12, 4 );

		/**
		 * The following snippets are required for allowing the skillbar field
		 * to work as a repeatable field, or in a repeatable group
		 */
		add_filter( 'cmb2_sanitize_skillbar', array( __CLASS__, 'sanitize' ), 10, 5 );
		add_filter( 'cmb2_types_esc_skillbar', array( __CLASS__, 'escape' ), 10, 4 );
	}

	public static function class_name() { return __CLASS__; }

	/**
	 * Handles outputting the skillbar field.
	 */
	public function render() {

		// make sure we assign each part of the value we need.
		$value = wp_parse_args( $this->field->escaped_value(), array(
			'skill-name' => '',
			'skill-value' => ''
		) );

		if ( ! $this->field->args( 'do_country' ) ) {
			$skill_value_list = $this->field->args( 'skill_value_list', array() );
			if ( empty( $skill_value_list ) ) {
				$skill_value_list = self::$skill_value_list;
			}

			// Add the "label" option. Can override via the field text param
			$skill_value_list =  array( '' => esc_html( $this->_text( 'address_select_state_text', 'Select' ) ) ) + $skill_value_list;
			$skill_value_options = '';
			foreach ( $skill_value_list as $abrev => $skill_value ) {
				$skill_value_options .= '<option value="'. $abrev .'" '. selected( $value['skill-value'], $abrev, false ) .'>'. $skill_value .'</option>';
			}
		}

		

		ob_start();
		// Do html
		?>
		<div><p><label for="<?php echo esc_attr($this->_id( '_skill_name_1', false )); ?>"><?php echo esc_html( $this->_text( 'skillbar_skillbar_1_text', 'Skill Name' ) ); ?></label></p>
			<?php echo $this->types->input( array(
				'name'  => $this->_name( '[skill-name]' ),
				'id'    => $this->_id( '_skill_name' ),
				'value' => $value['skill-name'],
				'desc'  => '',
			) ); ?>
		</div>
		<div><p><label for="<?php echo $this->_id( '_skillbar_2', false ); ?>'"><?php echo esc_html( $this->_text( 'skillbar_skillbar_2_text', 'Skill Value (0 - 100)' ) ); ?></label></p>
			<?php echo $this->types->select( array(
						'name'    => $this->_name( '[skill-value]' ),
						'id'      => $this->_id( '_skill_value' ),
						'options' => $skill_value_options,
						'desc'    => '',
					) ); ?>
		</div>
		
		<p class="clear">
			<?php echo wp_kses_post($this->_desc());?>
		</p>
		<?php

		// grab the data from the output buffer.
		return $this->rendered( ob_get_clean() );
	}

	/**
	 * Optionally save the Address values into separate fields
	 */
	public static function maybe_save_split_values( $override_value, $value, $object_id, $field_args ) {
		if ( ! isset( $field_args['split_values'] ) || ! $field_args['split_values'] ) {
			// Don't do the override
			return $override_value;
		}

		$skillbar_keys = array( 'skill-name', 'skill-value' );

		foreach ( $skillbar_keys as $key ) {
			if ( ! empty( $value[ $key ] ) ) {
				update_post_meta( $object_id, $field_args['id'] . 'addr_'. $key, sanitize_text_field( $value[ $key ] ) );
			}
		}

		remove_filter( 'cmb2_sanitize_skillbar', array( __CLASS__, 'sanitize' ), 10, 2 );

		// Tell CMB2 we already did the update
		return true;
	}

	public static function sanitize( $check, $meta_value, $object_id, $field_args, $sanitize_object ) {

		// if not repeatable, bail out.
		if ( ! is_array( $meta_value ) || ! $field_args['repeatable'] ) {
			return $check;
		}

		foreach ( $meta_value as $key => $val ) {
			$meta_value[ $key ] = array_filter( array_map( 'sanitize_text_field', $val ) );
		}

		return array_filter($meta_value);
	}

	public static function escape( $check, $meta_value, $field_args, $field_object ) {
		// if not repeatable, bail out.
		if ( ! is_array( $meta_value ) || ! $field_args['repeatable'] ) {
			return $check;
		}

		foreach ( $meta_value as $key => $val ) {
			$meta_value[ $key ] = array_filter( array_map( 'esc_attr', $val ) );
		}

		return array_filter($meta_value);
	}

}



