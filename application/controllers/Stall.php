<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stall extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model(array(
			'Customer_model' => 'customer',
			'User_model' => 'user',
			'Item_model' => 'item',
			'Order_model' => 'order',
			'Order_item_model' => 'order_item',
		));

		if (empty(get_customer())) {
			return redirect('customer');
		}
	}

	public function index( $stallNo ) {
		
		$this->db->select(array(
			'id', 'CONCAT(first_name, " ", last_name) as name', 'stall_no',
		));

		$stall = $this->user->get_by(array(
			'stall_no' => $stallNo,
		));

		if (empty($stall)) {
			return redirect('404');
		}

		$this->data['title'] = 'Welcome to ' . $stall['name'] . "'s stall";
		$this->data['items'] = $this->item->get_items($stall['id']);
		$this->data['stall'] = $stall;

		$this->template->load( 'customer', 'content', 'user/stall/index', $this->data );
	}

	public function place_order( $stallNo ) {
		// pr($this->input->post()); die;
		$customer = get_customer();

		$this->db->select('id');
		$customer = $this->customer->get_by($customer);

		$post_data = $this->input->post();
		$total_amount = array_sum($post_data['item']);

		$items = array_keys($post_data['item']);
		$quantity = array_values($post_data['quantity']);

		$total_amount = 0;
		foreach ($post_data['item'] as $item_id => $price) {
			$total_amount += $post_data['quantity'][$item_id] * $price;
		}

		// create order
		$order = array(
			'owner_id' => $post_data['owner_id'],
			'customer_id' => $customer['id'],
			'total_amount' => $total_amount,
			'created_at' => date('Y-m-d h:i:s'),
		);

		$order = $this->order->insert($order);

		foreach ($items as $k => $item) {
			$order_item = array(
				'order_id' => $order,
				'item_id' => $item,
				'quantity' => $quantity[$k],
			);
			$this->order_item->insert($order_item);
		}

		set_alert('success', 'Your order has been placed');

		return redirect('customer/my-order');
	}

}
