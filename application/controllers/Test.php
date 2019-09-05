<?php

class Test extends CI_Controller{

	public function index(){
		$this->load->view('home');

	}
	public function about(){
		$this->load->view('page1');

	}

	public function studentResult(){
		$this->load->view('resultDatabase');

	}

	public function moreUpdate(){
		$this->load->view('more.html');

	}

	public function newApplication(){
		$this->load->view('/newRegistration/registration');

	}

	public function registerControl(){
		$this->load->view('/newRegistration/insertDatabase');

	}
}

?>
