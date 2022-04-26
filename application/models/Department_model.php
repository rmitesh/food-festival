<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends MY_Model {

	public function __construct() {
		parent::__construct();
	}

	protected $_table = 'department';
	/**
	 * @var boolean
	 */
	protected $soft_delete = TRUE;

	/**
	 * @var string
	 */
	protected $soft_delete_key = 'is_delete';

}
