<?php

class Apps extends CI_Controller{
public function resultLoginIde(){
		$this->load->view('Result/resultSearch');

	}
	public function resultView(){
			$this->load->view('Result/resultControl');

		}
		public function captcha(){
				$this->load->view('Result/captcha_code');

			}

public function InstituteRegistration(){
		$this->load->view('/instituteLogin/uploadResume');
	}

public function uploaded(){
			$this->load->view('/instituteLogin/uploadResumeController');
		}
}

?>
