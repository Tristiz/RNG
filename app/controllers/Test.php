<?php
namespace controllers;
 use Ubiquity\utils\http\USession;

 /**
 * Controller Test
 **/
class RandomNumberGame extends ControllerBase{
    const SESSION_KEY="random";

	public function index(){
	    $this->loadView("RandomNumberGame/index.html");
		
	}

	public function genere(){
	    $number=\mt_rand(1,10);
	    USession::set(self::SESSION_KEY, $number)
	    $this->index.html();
	}

}
