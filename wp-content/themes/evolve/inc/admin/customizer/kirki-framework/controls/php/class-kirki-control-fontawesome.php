<?php
/**
 * Customizer Control: kirki-fontawesome.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2019, Ari Stathopoulos (@aristath)
 * @license    https://opensource.org/licenses/MIT
 * @since       1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Select control.
 */
class Kirki_Control_FontAwesome extends Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-fontawesome';

	/**
	 * Enqueue control related scripts/styles.
	 *
	 * @access public
	 */
	public function enqueue() {
		parent::enqueue();

		// evolve customization
		wp_enqueue_style( 'kirki-fontawesome-font', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), '5.8.1' );
		wp_enqueue_style( 'kirki-fontawesome-font-shims', 'https://use.fontawesome.com/releases/v5.8.1/css/v4-shims.css', array(), '5.8.1' );

		ob_start();
		$json_path = wp_normalize_path( Kirki::$path . '/assets/vendor/fontawesome/fontawesome.json' );
		include $json_path; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
		$font_awesome_json = ob_get_clean();

		wp_localize_script( 'kirki-script', 'fontAwesomeJSON', $font_awesome_json );
	}

	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
		?>
        <label>
            <# if ( data.label ) { #><span class="customize-control-title">{{{ data.label }}}</span><# } #>
			<# if ( data.description ) { #><span class="description customize-control-description">{{{ data.description }}}</span><# } #>
            <select {{{ data.inputAttrs }}} {{{ data.link }}}></select>
        </label>
		<?php
	}
}
