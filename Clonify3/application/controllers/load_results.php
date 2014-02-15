<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Load_results extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		$this->form_validation->set_error_delimiters('', '');
		
		$this->load->model('load_results_model');
	}

	function index()
	{
		$data['user_name'] = $this->tank_auth->get_username();
		$data['results']=$this->load_results_model->get_all_results();
		$this->load->view('partials/main_header');
		$this->load->view('load_result',$data);
		$this->load->view('partials/main_footer');
	}
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */