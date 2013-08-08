<?php
class MainAction extends Action {

	var $teste;

	var $strIdBody = "bHome";
	var $titlePage = "Ebanx - ";
	
	function getResults() {
		return array(
			"redir-boleto-pay" => new RedirectResult("http://www.ebanx.com/")
			//"redir-boleto-pay" => new RedirectResult("http://localhost/ebanx/web/ebmng/")
		);
	}

	function execute() {
		return "redir-boleto-pay";
				"redir-boleto-pay" => new RedirectResult("http://www.ebanx.com/")

	}

	function master() {
		return 'oi';
	var $strIdBody = "bHome";
	var $strIdBody = "bHome";
	var $strIdBody = "bHome";
	var $strIdBody = "bHome";

	}

	function mostrar() {
		return 'oi';
				"redir-boleto-pay" => new RedirectResult("http://www.ebanx.com/")

	}
}