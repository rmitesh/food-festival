<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

class Home extends Frontend_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model(array(
			'User_model' => 'user',
			'Menu_model' => 'menu',
			'Stall_owner_model' => 'stall_owner',
		));
	}

	public function index() {
		$user_id = get_loggedin_user_id();

		$this->db->select(array(
			'id', 'stall_number', 'stall_qr_code', 'stall_name',
		));
		$stall_owner = $this->stall_owner->get_by(array(
			'user_id' => $user_id,
		));

		if ($this->input->post()) {

			$stall_name = $this->input->post('stall_name');
			$username = get_loggedin_info('username');
			$username = str_replace(' ', '', $username);

			$spark_id = get_loggedin_info('spark_id');

			$stall_owner_id = $stall_owner['id'];
			$qr_code = "stall-$stall_owner_id-$username-$spark_id.png";
			$stall_url = base_url('stall/' . $stall_name);

			(new QRCode)->render($stall_url, FCPATH . "assets/img/qr/$qr_code");

			$stall_owner = array(
				'stall_qr_code' => $qr_code,
				'stall_name' => $stall_name,
			);

			$this->stall_owner->update($stall_owner_id, $stall_owner);
			
			set_alert('success', 'Your stall number is added.');
			redirect(site_url());
		}

		$this->data['stall_owner'] = $stall_owner;

		$menus = $this->menu->get_many_by(array(
			'user_id' => $user_id,
		));

		$this->data['menus'] = $menus;

		$this->set_page_title('Welcome Stall Owner');
		$this->template->load( 'index', 'content', 'user/index', $this->data );
	}

}
