<?php 
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Phone_Accessories_Store_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Phone_Accessories_Store_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Phone_Accessories_Store_Customize_Section_Pro( $manager,'phone_accessories_store_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'Phone Accessories Store Pro', 'phone-accessories-store' ),
			'pro_text' => esc_html__( 'Upgrade Pro', 'phone-accessories-store' ),
			'pro_url'  => esc_url('https://www.revolutionwp.com/products/mobile-accessories-WordPress-theme'),
		) )	);

		// Register sections.
		$manager->add_section( new Phone_Accessories_Store_Customize_Section_Pro( $manager,'phone_accessories_store_doc', array(
			'priority'   => 1,
			'title'    => esc_html__( 'Lite Documentation', 'phone-accessories-store' ),
			'pro_text' => esc_html__( 'Instruction', 'phone-accessories-store' ),
			'pro_url'  => esc_url('https://demo.revolutionwp.com/wpdocs/phone-accessories-store-free/'),
		) )	);

		// Register sections.
		$manager->add_section( new Phone_Accessories_Store_Customize_Section_Pro( $manager, 'phone_accessories_store_live_demo', array(
			'priority'   => 1,
			'title'      => esc_html__( 'Pro Theme Demo', 'phone-accessories-store' ),
			'pro_text'   => esc_html__( 'Live Preview', 'phone-accessories-store' ),
			'pro_url'    => esc_url( PHONE_ACCESSORIES_STORE_LIVE_DEMO ),
		) ) );

		// Register sections.
		$manager->add_section( new Phone_Accessories_Store_Customize_Section_Pro( $manager, 'phone_accessories_store_bundle', array(
			'priority'   => 1,
			'title'      => esc_html__( 'Theme Bundle', 'phone-accessories-store' ),
			'pro_text'   => esc_html__( 'Get Bundle', 'phone-accessories-store' ),
			'pro_url'    => esc_url( PHONE_ACCESSORIES_STORE_BUNDLE ),
		) ) );
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_style( 'phone-accessories-store-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customizer.css' );
	}
}

// Doing this customizer thang!
Phone_Accessories_Store_Customize::get_instance();