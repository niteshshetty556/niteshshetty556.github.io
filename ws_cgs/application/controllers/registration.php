<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Registration extends REST_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('registration_m');
    }

    public function post() {
        $data = $this->_post_args;
        $method = $data['method'];
        switch ($method) {
            case "checkDuplicateEmail":
                // server side emailid validation
                $email_id = $data['emailid'];
                $result = $this->registration_m->check_email_exists($email_id);
                break;
            case "register":
                // registration
                $name = $data['name'];
                $password = $data['password'];
                $emailid = $data['emailid'];
                $result = $this->registration_m->register($name, $emailid, $password);
                break;
            case "login":
                // login
                $emailid = $data['emailid'];
                $password = $data['password'];
                $result = $this->registration_m->login($emailid, $password);
                break;
            case "forgotPassword":
                // forgot password
                $emailid = $data['emailid'];
                $result = $this->registration_m->forgotPassword($emailid);
                if ($result[0]->result_status == 1) {
                    $password = $result[0]->password;
                    $this->forgotPassword1($emailid, $password);
                }
                break;
            case "resetPassword":
                // reset password
                $emailid = $data['emailid'];
                $password = $data['password'];
                $result = $this->registration_m->resetPassword($emailid, $password);
                break;
        }
        if ($result) {

            $this->response($result, 200);
        }
    }

    function forgotPassword1($emailid, $password) {
        $From = 'nshetty556@gmail';
        $To = $emailid;
        $Subject = "New Password";
        $Message = "As per your request for your new password, we have sent you a new password for your account. In this email please find your new password details for your Smart IQ account. 
                        Your new login password: $password
                        Please change your password soon after you login to your account with this password.
                        With SincereRegards & Cheers,
                        The Smart IQ team.
                        Happy Practising!";
        //------ To be included for every mail --------------//	
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '5';
        $config['smtp_user'] = '//emailid';
        $config['smtp_pass'] = '//password';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'text'; // or text
        $config['validation'] = TRUE; // bool whether to validate email or not   
        $this->email->initialize($config);
        //----------------------------------------------------//
        $this->email->from($From);
        $this->email->to($To);
        $this->email->subject($Subject);
        $this->email->message($Message);
        if ($this->email->send()) {
//            echo 1;
        } else {
            show_error($this->email->print_debugger());
//            echo 0;
        }
    }

}

?>