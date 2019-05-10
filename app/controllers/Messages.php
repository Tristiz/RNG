<?php
namespace controllers;
 /**
 * Controller Messages
 **/
class Messages extends ControllerBase{

	public function index(){
		echo "Hello world";
	}

	public function hello($destinataire){
		echo "Hello".$destinataire;
	}


}
