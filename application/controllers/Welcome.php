<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function formuas(){
		$this->template->load('theme', 'formuas');
	}

	public function savedata(){
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$gen = $this->input->post('gender');
		$date = $this->input->post('date');
		$cat = $this->input->post('cat');
		$member = $this->input->post('member');

		$this->load->model('Modperson');
		$this->Modperson->save_data($fname, $lname, $gen, $date, $cat, $member);
		redirect('welcome/viewdata');
	}

	public function viewdata(){
		$this->load->model('Modperson');
		$data['person'] = $this->Modperson->select_data()->result();
		$this->template->load('theme', 'notif', $data);
	}

	public function deldata($birth){
		$this->load->model('Modperson');
		$this->Modperson->delete_data();
	}

}
