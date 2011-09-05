<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email
| -------------------------------------------------------------------------
| This file lets you define parameters for sending emails.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/libraries/email.html
|
*/
$config = array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'email@personal-it-y.com',
    'smtp_pass' => 'password',
    'mailtype' => 'html',
    'charset'  => 'utf-8',
    'newline'  => "\r\n",
);

/* End of file email.php */
/* Location: ./application/config/email.php */
