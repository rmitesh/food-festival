<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model(array(
			'Customer_model' => 'customer',
			'User_model' => 'user',
			'Item_model' => 'item',
			'Order_model' => 'order',
			'Order_item_model' => 'order_item',
		));
	}

	public function index() {
		if (!empty(get_customer())) {
			return redirect('customer/welcome');
		}
		if ($this->input->post()) {
			$post_data = $this->input->post();
			$cookie_value = serialize($post_data);
			setcookie(COOKIE_NAME, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

			$is_exists = $this->customer->get_by(array(
				'phone_number' => $post_data['phone_number'],
			));

			if (empty($is_exists)) {
				$this->customer->insert($post_data);
			}

			return redirect('customer/welcome');
		}
		$this->data['title'] = 'Customer Login';
		$this->data['invited_by'] = array(
			'mra' => 'Mitesh Rathod',
			'vpt' => 'Viral Patel',
			'nbj' => 'Niket Joshi',
		);
		$this->template->load( 'customer', 'content', 'user/customer/index', $this->data );
	}

	public function welcome() {
		if (empty(get_customer())) {
			return redirect('customer');
		}
		$this->data['title'] = 'Welcome ';
		$this->template->load( 'customer', 'content', 'user/customer/welcome', $this->data );
	}

	public function my_orders() {
		if (empty(get_customer())) {
			return redirect('customer');
		}

		$customer = get_customer();
		$this->data['customer'] = $customer;

		$this->db->select('id');
		unset($customer['refer_employee']);
		$customer = $this->customer->get_by($customer);

		$this->db->order_by('created_at', 'desc');
		$orders = $this->order->get_many_by(array(
			'customer_id' => $customer['id'],
		));

		$order_lists = array();

		$arr = array();
		foreach ($orders as $order) {
			$order_items = array();

			$order_items = $this->order_item->order_items($order['id']);

			$arr[$order['owner_id']][$order['id']] = array(
				'total_amount' => $order['total_amount'],
				'created_at' => $order['created_at'],
				'order_items' => $order_items,
			);
			$order_lists = $arr;
		}
		
		$this->data['title'] = 'Your Orders';
		$this->data['order_lists'] = $order_lists;

		$this->template->load( 'customer', 'content', 'user/customer/my-order', $this->data );
	}

	public function logout() {
		unset($_COOKIE[COOKIE_NAME]); 
		setcookie(COOKIE_NAME, null, -1, '/');
		if (empty(get_customer())) {
			set_alert('success', 'Successfully logout from the ' . get_settings('company_name'));
			return redirect('customer');
		}
	}

}