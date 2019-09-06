<?php

class Registration extends CI_Controller{
public function registered(){
		$this->load->view('/newRegistration/registrationController.php');

	}

public function Login(){
		$this->load->view('/newRegistration/index.php');

	}
public function LoginPage(){
		$this->load->view('/newRegistration/login.php');

	}
public function studentProfilePage(){
		$this->load->view('/newRegistration/profile.php');

	}
public function Logout(){
		$this->load->view('/newRegistration/logout.php');

	}
public function mainLogic(){
		$this->load->view('/newRegistration/session.php');

	}
public function confirmPage(){
		$this->load->view('/newRegistration/confirmPage.php');

	}
}
?>
