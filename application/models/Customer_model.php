<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends MY_Model
{
		
	/**
	 * @var string
	 */
	protected $_table = 'customers';
	
	/**
	 * Constructor for the class
	 */
	public function __construct()
	{
		parent::__construct();

	}
}
