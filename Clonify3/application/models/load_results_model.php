<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Load_results_model extends CI_Model
{


	
	function get_all_results()
	{
		$user_id = $this->session->userdata('user_id');
		$query = "SELECT * FROM user_invocations WHERE user_id='$user_id' order by invoked_time desc";
		$results = $this->db->query($query);
		return $results->result();
	}
}