<?php
/**
 * @link              http://webmachine.io/referb
 * @since             1.0.0
 * @package           Referb
 */

	// Don't run if called directly
	defined('referbApp') or die();


	class referer {

		public $refurb_URL = "notset";

		public function __construct() {
			if ( isset( $_SERVER["HTTP_REFERER"] ) && !isset( $_SESSION["refererUrl"] ) ) {
				$_SESSION["refererUrl"] = $_SERVER["HTTP_REFERER"];
			}
		}

		public function __destruct() {
	  	session_unset();
	  }

		public function url() {
			if ( isset( $_SESSION["refererUrl"] ) ) { 
				return $_SESSION["refererUrl"]; 
			} else {
				return 'No Referer';
			}
		}

	}

?>