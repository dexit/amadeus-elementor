<?php
namespace AmadeusElementor\Modules\Buttons;

use AmadeusElementor\Base\Module_Base;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Module extends Module_Base {

	public function get_widgets() {
		return [
			'Buttons',
		];
	}

	public function get_name() {
		return 'amadeus-buttons';
	}
}
