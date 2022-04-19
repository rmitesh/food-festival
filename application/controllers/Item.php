<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends Frontend_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model(array(
			'Category_model' => 'category',
			'Item_model' => 'item',
		));
	}

	public function index() {
		$this->set_page_title('Items');
		$items = $this->item->get_items();
		$this->data['items'] = $items;
		$this->template->load( 'index', 'content', 'user/item/index', $this->data );
	}

	public function create() {
		// create new
		if ($this->input->post()) {
			$data = $this->input->post();
			$data['user_id'] = get_loggedin_user_id();

			if ($this->item->insert($data)) {
				set_alert('success', 'New items has been added.');
				redirect(site_url('item'));
			} else {
				set_alert('error', 'Something went wrong while creating item.');
				redirect(site_url('item/create'));
			}
		}

		$this->set_page_title('Create Item');

		$this->db->select(array('id', 'name'));
		$categories = $this->category->get_all();

		$this->data['categories'] = $categories;

		$this->template->load( 'index', 'content', 'user/item/create', $this->data );
	}

	public function edit($id) {
		if (!is_numeric($id)) {
			set_alert('error', 'Something went wrong.');
			redirect(site_url('item'));
		}

		if ($this->input->post()) {
			$data = $this->input->post();
			$data['updated_at'] = date('Y-m-d h:i:s');
			if ($this->item->update($id, $data)) {
				set_alert('success', 'Items has been updated.');
				redirect(site_url('item'));
			} else {
				set_alert('error', 'Something went wrong while updating item.');
				redirect(site_url('item/create'));
			}
		}

		$this->set_page_title('Edit Item');

		$item = $this->item->get($id);
		$this->data['item'] = $item;

		$this->db->select(array('id', 'name'));
		$categories = $this->category->get_all();

		$this->data['categories'] = $categories;

		$this->template->load( 'index', 'content', 'user/item/edit', $this->data );
	}

}
