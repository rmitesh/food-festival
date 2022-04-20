<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

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

		$stall_no = get_user_info(get_loggedin_user_id(), 'stall_no');
		$stall_url = '';
		$this->data['stall_no'] = $stall_no;
		if ($stall_no) {
			$stall_url = base_url('stall/' . $stall_no);
			$stall_url = (new QRCode)->render($stall_url);
		}
		$this->data['stall_url'] = $stall_url;
		$this->set_page_title('Welcome');
		$this->template->load( 'index', 'content', 'user/index', $this->data );
	}

}
