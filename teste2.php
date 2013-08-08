<?php
class MainAction extends Action {

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
	}
}