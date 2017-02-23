<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://rnaby.github.io/
 * @since      1.0.0
 *
 * @package    Wp_Create_Post_From_Frontend
 * @subpackage Wp_Create_Post_From_Frontend/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Create_Post_From_Frontend
 * @subpackage Wp_Create_Post_From_Frontend/public
 * @author     Khan M Rashedun-Naby <naby88@gmail.com>
 */
class Wp_Create_Post_From_Frontend_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $nonce    Generated nonce.
     */
    private $nonce;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $post_url    WordPress POST URL.
     */
    private $post_url;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
        $this->nonce = new \Brain\Nonces\WpNonce('_wp_nonce');
        $this->post_url = admin_url('admin-post.php');

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Create_Post_From_Frontend_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Create_Post_From_Frontend_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-create-post-from-frontend-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Create_Post_From_Frontend_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Create_Post_From_Frontend_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-create-post-from-frontend-public.js', array( 'jquery' ), $this->version, false );

	}

    /**
     * The method for rendering from by shortcode.
     *
     * @since    1.0.0
     */
    public function render_form() {
        if (is_user_logged_in()){
            include 'partials/html-create-post-form.php';
        } else {
            echo '<p>Please login first.</p>';
        }
    }
}
