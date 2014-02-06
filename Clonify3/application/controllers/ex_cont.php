<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ex_cont extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		
	}
	function index()
	{
		//elfinder_init();
	}
	function elfinder_init()
	{
	$this->load->helper('path');
	$opts = array(
		// 'debug' => true, 
		'roots' => array(
		array( 
			'driver' => 'LocalFileSystem', 
			'path'   => set_realpath('C:\xampp\htdocs\Clonify3\files'), 
			'URL'    => site_url('http://localhost/Clonify3') . '/'
			// more elFinder options here
		) 
		)
	);
	$this->load->library('elfinder_lib', $opts);
	}
}
?>