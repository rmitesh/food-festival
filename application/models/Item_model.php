<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends MY_Model
{
		
	/**
	 * @var string
	 */
	protected $_table = 'items';
	
	/**
	 * Constructor for the class
	 */
	public function __construct()
	{
		parent::__construct();
	}


	public function get_items( $user_id = null ) {
		if (empty($user_id)) {
			$user_id = get_loggedin_user_id();
		}
		$this->db->select([
			'item.id', 'item.name', 'item.price', 'category.name AS category_name', 'item.created_at',
		]);

		$this->db->from( TBL_ITEMS . ' AS item' );
		$this->db->join( TBL_CATEGORIES . ' AS category', 'item.category_id = category.id' );

		$this->db->where([
			'item.user_id' => $user_id,
		]);

		$this->db->order_by('item.updated_at', 'desc');
		$result = $this->db->get();
		$respose = array();
		if ( $result ) {
			$respose = $result->result_array();
		}

		return $respose;
	}
}
