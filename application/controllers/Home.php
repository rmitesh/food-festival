<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('User_model', 'user');
	}

	public function index() {
		if ($this->input->post()) {
			$data = $this->input->post();
			$this->user->update(get_loggedin_user_id(), $data);
			set_alert('success', 'Your stall number is added.');
			redirect(site_url());
		}

		$this->set_page_title('Dashboard');
		$this->data['stall_no'] = get_user_info(get_loggedin_user_id(), 'stall_no');
		$this->template->load( 'index', 'content', 'user/index', $this->data );
	}

}
