<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

class Profile extends Frontend_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model(array(
			'User_model' => 'user',
			'Department_model' => 'department',
			'Stall_owner_model' => 'stall_owner',
		));
	}

	public function index() {
		$this->set_page_title('Stall Onwer Profile');
		$user_id = get_loggedin_user_id();

		if ($this->input->post()) {
			$data = $this->input->post();
			$user = array(
				'first_name' => $data['first_name'],
				'last_name' => $data['last_name'],
				'email_id' => $data['email_id'],
				'contact_number' => $data['contact_number'],
				'dept_id' => $data['department'],
			);
			$this->user->update($user_id, $user);

			$stall_owner = array(
				'stall_name' => $data['stall_name'],
				'stall_number' => $data['stall_number'],
				'total_members' => $data['total_members'],
			);

			$this->db->select('id');
			$stall_owner_exists = $this->stall_owner->get_by(array('user_id' => $user_id));
			if (empty($stall_owner_exists)) {
				$stall_owner['user_id'] = $user_id;
				$stall_owner_id = $this->stall_owner->insert($stall_owner);
				$this->stall_owner->update($stall_owner_id, $stall_owner);
			} else {
				$stall_owner_id = $stall_owner_exists['id'];
				// $this->stall_owner->update($stall_owner_id, $stall_owner);
			}

			$username = get_loggedin_info('username');
			$username = str_replace(' ', '', $username);

			$spark_id = get_loggedin_info('spark_id');

			$qr_code = "stall-$stall_owner_id-$username-$spark_id.png";
			$stall_url = base_url('stall/' . $stall_owner['stall_name']);

			(new QRCode)->render($stall_url, FCPATH . "assets/img/qr/$qr_code");

			$stall_owner = array(
				'stall_qr_code' => $qr_code,
			);

			$this->stall_owner->update($stall_owner_id, $stall_owner);
			
			
			set_alert('success', 'Profile has been updated.');
			redirect(site_url());
		}

		$this->db->select(array(
			'id', 'first_name', 'last_name', 'email_id', 'dept_id', 'spark_id', 'wallet_balance', 'contact_number'
		));
		$this->data['user'] = $this->user->get($user_id);

		$this->db->select(array(
			'id', 'stall_number', 'stall_qr_code', 'stall_name', 'total_members', 
		));
		$this->data['stall_owner'] = $this->stall_owner->get_by(array('user_id' => $user_id));

		$this->db->select(array(
			'id', 'dept_name',
		));
		$this->db->order_by('dept_name', 'asc');
		$this->data['departments'] = $this->department->get_all();

		$this->template->load( 'index', 'content', 'user/profile/index', $this->data );
	}

}
