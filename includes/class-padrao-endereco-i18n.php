<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/rodrigotxt/
 * @since      1.0.0
 *
 * @package    Padrao_Endereco
 * @subpackage Padrao_Endereco/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Padrao_Endereco
 * @subpackage Padrao_Endereco/includes
 * @author     Rodrigo Martins <contato@rodrigo.inf.br>
 */
class Padrao_Endereco_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'padrao-endereco',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
