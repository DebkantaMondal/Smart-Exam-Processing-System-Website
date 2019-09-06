<?php

class Home extends CI_Controller{
public function IndexContent(){
		$this->load->view('MainContent.html');

	}

public function HomeView()
{
	$this->load->view('NewMainPage');
}

	public function about(){
		$this->load->view('aboutUs.html');

	}
	public function studentdesk(){
		$this->load->view('studentDesk');

	}
	public function SignUp(){
		$this->load->view('RegNew.html');

	}
	public function DataConfirm(){
		$this->load->view('Database');

	}
	public function studentHelpdesk(){
		$this->load->view('help.html');

	}
	public function adminLogin(){
		$this->load->view('index');

	}
	public function logged(){
		$this->load->view('login');

	}

	public function loginAdmin(){
		$this->load->view('profile');

	}
	public function logout(){
		$this->load->view('logout');

	}

	}
	?>
