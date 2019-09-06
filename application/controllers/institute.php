<?php

class institute extends CI_Controller{
public function Home(){
		$this->load->view('instituteLogin/index');

	}
  public function InstitutePage(){
  		$this->load->view('instituteLogin/profile');

  	}
    public function logout(){
    		$this->load->view('instituteLogin/logout');

    	}
}
?>
