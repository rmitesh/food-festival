<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends Frontend_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model(array(
			'Category_model' => 'category',
			'Menu_model' => 'menu',
			'Stall_owner_model' => 'stall_owner',
		));
	}

	public function index() {
		redirect(site_url());
	}

	public function create() {
		// create new
		if ($this->input->post()) {
			$user_id = get_loggedin_user_id();

			$this->db->select(array(
				'stall_number', 'id as stall_id',
			));
			$stall_owner = $this->stall_owner->get_by(array(
				'user_id' => $user_id
			));

			$data = $this->input->post();
			$data['user_id'] = $user_id;
			$data = $data + $stall_owner;

			if ($this->menu->insert($data)) {
				set_alert('success', 'New item has been added.');
				redirect(site_url());
			} else {
				set_alert('error', 'Something went wrong while creating item.');
				redirect(site_url('menu/create'));
			}
		}

		$this->set_page_title('Create Item');

		$this->template->load( 'index', 'content', 'user/menu/create', $this->data );
	}

	public function edit($id) {
		if (!is_numeric($id)) {
			set_alert('error', 'Something went wrong.');
			redirect(site_url());
		}

		$user_id = get_loggedin_user_id();

		if ($this->input->post()) {

			$this->db->select(array(
				'stall_number', 'id as stall_id',
			));

			$stall_owner = $this->stall_owner->get_by(array(
				'user_id' => $user_id
			));

			$data = $this->input->post();
			$data['modified_date'] = date('Y-m-d h:i:s');
			$data = $data + $stall_owner;
			
			if ($this->menu->update($id, $data)) {
				set_alert('success', 'Item has been updated.');
				redirect(site_url());
			} else {
				set_alert('error', 'Something went wrong while updating item.');
				redirect(site_url('menu/create'));
			}
		}

		$this->set_page_title('Edit Item');

		$menu = $this->menu->get_by(array(
			'id' => $id,
			'user_id' => $user_id,
		));

		$this->data['item'] = $menu;

		$this->template->load( 'index', 'content', 'user/menu/edit', $this->data );
	}

	public function destory( $id ) {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			if ($this->menu->delete($id)) {
				set_alert('success', 'Item has been deleted.');
			}
		}
		redirect(site_url());
	}

}
