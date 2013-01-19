<?php

class Main {
	public function __construct() { if(!php_Boot::$skip_constructor) {
		$params = php_Web::getParams();
		$form = new Formulaire();
		$resultat = $form->verifier($params);
		php_Lib::hprint((($resultat !== "") ? $resultat : $form->afficher()));
	}}
	static function main() {
		new Main();
	}
	function __toString() { return 'Main'; }
}
