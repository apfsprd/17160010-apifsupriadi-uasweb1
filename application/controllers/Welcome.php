<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function home()
	{
		$this->template->load('theme', 'welcome_message', $data);
	}

	public function form()
	{
		$this->template->load('theme', 'input_form');
	}

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

		$this->model('Modperson');
		$this->Modperson->save_data();

		$this->template->load('theme', 'notif');
	}

}
