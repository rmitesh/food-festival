<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_item_model extends MY_Model
{
		
	/**
	 * @var string
	 */
	protected $_table = 'order_items';
	
	/**
	 * Constructor for the class
	 */
	public function __construct()
	{
		parent::__construct();

	}

	public function order_items( $order_id ) {
		$this->db->select(array(
			'order_item.id', 'item.name as item_name', 'order_item.quantity', 'item.price',
		));

		$this->db->from( TBL_ORDER_ITEMS . ' as order_item' );
		$this->db->join( TBL_ITEMS . ' AS item', 'order_item.item_id = item.id' );

		$this->db->where([
			'order_item.order_id' => $order_id,
		]);

		$result = $this->db->get();
		$respose = array();
		if ( $result ) {
			$respose = $result->result_array();
		}

		return $respose;
	}
}
