<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
			$this->user->update($user_id, $data);
			set_alert('success', 'Profile has been updated.');
			redirect(site_url());
		}

		$this->db->select(array(
			'id', 'first_name', 'last_name', 'email_id', 'contact_number', 'dept_id',
		));
		$this->data['user'] = $this->user->get($user_id);
		$this->template->load( 'index', 'content', 'user/profile/index', $this->data );
	}

}
