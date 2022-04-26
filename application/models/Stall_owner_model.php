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

}
