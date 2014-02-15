<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Updatetokens extends CI_Controller
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
		
		$this->load->helper(array('form', 'url'));
		$this->load->model('update_tokens_model');
		$this->load->library('session');
		$this->session->keep_flashdata('result');
	}

	function index()
	{
		$this->session->set_flashdata('result', ''); 
		
		$data['languages']=$this->update_tokens_model->get_all_languages();
		$this->load->view('partials/main_header');
		$this->load->view('update_tokens',$data);
		$this->load->view('partials/main_footer');		
	}
	
	function update()
	{	
		$this->session->set_flashdata('result', ''); 
		
		$config['upload_path'] = './uploads/';		
		$config['allowed_types'] = 'txt';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		$result = '';

		if ( ! $this->upload->do_upload())
		{
			echo "If executed<br/>";
			$result = 'Some error occured';
			$error = array('error' => $this->upload->display_errors());
			
			foreach ($error as &$value) {
				echo 
				if(strlen($result)<1){
					$result = $value;
					
					echo $result;
				}
			}
		}
		else
		{
			echo "else executed<br/>";
			
			$result = array('upload_data' => $this->upload->data());
			$result = 'Successfull';
		}
		
		$this->update_tokens_model->update();

		$this->session->set_flashdata('results', $result); 
	
		$data['languages']=$this->update_tokens_model->get_all_languages();
		$this->load->view('partials/main_header');
		$this->load->view('update_tokens', $data);
		$this->load->view('partials/main_footer');	
	}	
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */