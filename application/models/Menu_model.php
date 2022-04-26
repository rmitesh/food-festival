<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends MY_Model {

	protected $_table = 'menu';
	/**
	 * @var boolean
	 */
	protected $soft_delete = TRUE;

	/**
	 * @var string
	 */
	protected $soft_delete_key = 'is_delete';

	/**
	 * Constructor for the class
	 */
	public function __construct()
	{
		parent::__construct();
	}

}
