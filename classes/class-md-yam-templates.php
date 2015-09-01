<?php

/**
 * Actions and filters refered to templates
 *
 * @link       http://mustdigital.ru
 * @since      0.5.0
 *
 * @package    MD_YAM
 * @subpackage MD_YAM/classes
 */

/**
 * Actions and filters refered to templates.
 * @package    MD_YAM
 * @subpackage MD_YAM/classes
 * @author     Dmitry Korolev <dk@mustdigital.ru>
 */
class MD_YAM_Templates {

	/**
	 * @since    0.5.0
	 * @access   private
	 * @var      string    $project_name    The ID of this project.
	 */
	private $project_name;

	/**
	 * @since    0.5.0
	 * @access   private
	 * @var      string    $version    The current version of this project.
	 */
	private $version;

	/**
	 * @since    0.5.0
	 * @access   private
	 * @var      string    $path    Path to default templates folder
	 */
	private $path;

	/**
	 * @since    0.5.0
	 * @param      string    $project_name       The name of this project.
	 * @param      string    $version    The version of this project.
	 */
	public function __construct( $project_name, $version, $path ) {

		$this->project_name = $project_name;
		$this->version = $version;
		$this->path = $path;

	}


    /**
     * [[Description]]
     * @param  [[Type]] $meta       [[Description]]
     * @return [[Type]] [[Description]]
     */
    public function generate_field_template( $meta ) {

        $template = 'fields/' . $meta['type'] . '.php';

        ob_start();
        if ( file_exists( $this->path . 'templates/' . $template ) ) {
            include $this->path . 'templates/' . $template;
        } else {
            echo 'No template: ' . $template;
        }
        return ob_get_clean();

    }

    /**
     * [[Description]]
     * @param  [[Type]] $meta       [[Description]]
     * @return [[Type]] [[Description]]
     */
    public function generate_fieldset_template( $fields_html, $options ) {

        switch ( $options['type'] ) {

            case ( 'metabox' ):
                $template = 'types/metabox.php';
                break;

            case ( 'dashboard' ):
                $template = 'types/dashboard.php';
                break;

            case ( 'menu_page' ):
            case ( 'submenu_page' ):
            default:
                $template = 'types/options.php';
                break;
        }

        ob_start();
        if ( file_exists( $this->path . 'templates/' . $template ) ) {
            include $this->path . 'templates/' . $template;
        } else {
            echo 'No template: ' . $template;
        }
       return ob_get_clean();

    }

}