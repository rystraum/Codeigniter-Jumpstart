<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MY_Controller extends CI_Controller {
    var $template_file = 'template';
    var $view = 'default_view';
    var $data = array();
    var $template_data = array(
        'title' => 'Home',
    );

    function __construct() {
        parent::__construct();
    }

    function render($view_file = null, $view_data = null, $template_data = null) {
        if ($view_data) $this->data = $view_data;
        if ($view_file) $this->view = $view_file;
        if ($template_data) $this->template_data = $template_data;
 
        foreach ($this->template_data as $k => $v) {
            $this->template->set($k,$v);
        }
        
        $this->template->load($this->template_file, $this->view, $this->data);
    }
}
