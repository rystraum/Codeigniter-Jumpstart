<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct() {
		parent::__construct();
	}

	function index() {
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->render('welcome', $data);
		}
	}
	
	function contact_us() {
	    if ($this->input->post('contact')) {
    	    $this->load->library('form_validation');
    	    $this->load->helper('email');
    	    $this->form_validation->set_rules('contact[name]','Name','xss_clean');
            $this->form_validation->set_rules('contact[email]','Email','required|valid_email');
            $this->form_validation->set_rules('contact[message]','Message','required|xss_clean');
            
            if ($this->form_validation->run()) {
                $contact = $this->input->post('contact');
                $this->_send_email($contact['name'],$contact['email'],$contact);
            }
        }
        
	    $this->load->helper('form');
	    $this->render('static/contact_us');
	}
	
	function _send_email($name, $email, $message)
	{
		$this->load->library('email');
		$this->email->from($email, $name . 'via Contact Form');
		$this->email->to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->subject('Inquiry via contact form');
		$this->email->message(print_r($message,TRUE));
		$this->email->set_alt_message(print_r($message,TRUE));
		$this->email->send();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
