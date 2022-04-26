<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stall_owner_model extends MY_Model {

	/**
	 * Constructor for the class
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @var boolean
	 */
	protected $soft_delete = TRUE;
	protected $_table = 'stall_owner';

	/**
	 * @var string
	 */
	protected $soft_delete_key = 'is_delete';

	public function get_profile($user_id) {
		$this->db->select(array(
			'user.first_name', 'user.last_name', 'user.email_id', 'user.spark_id', 'user.contact_number', 'user.dept_id', '( SELECT dept_name FROM '. TBL_DEPARTMENT .' WHERE id = user.dept_id ) AS department_name',
			'owner.id', 'owner.stall_number', 'owner.stall_qr_code', 'owner.stall_name', 'owner.total_members',
		));

		$this->db->from( TBL_STALL_OWNER . ' as owner' );
		$this->db->join( TBL_USERS . ' AS user', 'owner.user_id = user.id' );

		$this->db->where([
			'user.id' => $user_id,
		]);

		$result = $this->db->get();

		$respose = array();
		if ( $result ) {
			$respose = $result->result_array();
		}

		return $respose;
	}

}
