<?php
namespace controllers;
 /**
 * Controller RandomNumberGame
 **/
class RandomNumberGame extends ControllerBase{

	public function index(){
		$this->loadView("RandomNumberGame/index.html");
	}

	public function propose(){
		
		$this->loadView('RandomNumberGame/propose.html');

	}

}
