<?php

class Formulaire {
	public function __construct() { 
	}
	public function verifier($params) {
		$retour = "";
		if($params->exists("login") && $params->exists("pwd")) {
			$login = $params->get("login");
			$pwd = $params->get("pwd");
			if($login !== "" && $pwd !== "") {
				if("twist3r" === $login && "password" === $pwd) {
					$retour = "Authentification réussie.";
				}
			}
		}
		return $retour;
	}
	public function afficher() {
		$form = "<div id=\"formulaire\">\x0A                            <form method=\"post\" action=\"index.php\"> \x0A                                <label for=\"login\">Nom d'utilisateur</label>\x0A                                    <input name=\"login\" id=\"login\" type=\"text\"/> \x0A                                <label for=\"pwd\">Mot de passe</label> \x0A                                    <input type=\"password\" name=\"pwd\" id=\"pwd\"/>\x0A                                <input type=\"submit\" value=\"Envoyer\"/>\x0A                            </form>\x0A                        </div>";
		return $form;
	}
	static $__login = "twist3r";
	static $__pwd = "password";
	function __toString() { return 'Formulaire'; }
}
