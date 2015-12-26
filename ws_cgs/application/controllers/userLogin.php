<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';

class UserLogin extends REST_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('login_m','',TRUE);
    }
    function get() 
    {
        $data = $this->_get_args;
        $method= $data['method'];
        switch ($method) {
        case "login_user":
            $name =$data['name'];
            $password =$data['password'];         
            $result = $this->login_m->user_login($name,$password);
            break;
        case "logout_user":
            $user_id =$data['userid'];
            $result = $this->login_m->user_logout($user_id);
            break;
//        case "verifyUser":
//            $user_id = $data['user_id'];
//            $result = $this->login_m->user_login($name,$password);
//            break;
        case "getUserInfo":
            $email =$data['email'];
            $result = $this->login_m->getUserInfoForSubscription($email);
            break;
        case "android_login_user":
            $name =$data['name'];
            $password =$data['password']; 
            $imei=$data['imei'];
            $result = $this->login_m->android_user_login($name,$password,$imei);
            break;   
            
        }
        if($result){
            $this->response($result, 200);} // 200 being the HTTP response code
        else{
            $this->response(array('error' => 'Login Not Successful'), 404);}
        
    }
    function login_user_get($name,$password)
    {
        $result = $this->login_m->user_login($name,$password);            
        if($result)
        {
            $this->response($result, 200); // 200 being the HTTP response code
        } 
        else
        {
            $this->response(array('error' => 'Couldn\'t find user!'), 404);
        }
    } 
    public function post()
    {
        $data = $this->_post_args;
          log_message('error', json_encode($data));
	try {
        $method= $data['method'];
        switch ($method) {
        case "verifyUser":
            $activation_code = $data['activation_code'];
            $result = $this->login_m->verify_user($activation_code); 
            if ($result['0']->message == 'success') 
                {
                    $email = $result['0']->email_id;
                    $username = $result['0']->user_name;
                    $password = $result['0']->password;
                    $name = $result['0']->first_name;
                    $this->sendverifyemail($username,$email,$password,$name);
                }   
        
            break;
        }
        if($result['0']->message == 'success')
        {$this->response($result="success", 200);}
        else if ($result['0']->message == 'failed')
        {$this->response($result="", 200);}
        else
        { $this->response((array('error' => 'Could Not update subscription information!')), 404); }
	} catch (Exception $e) {			
            $this->response(array('error' => $e->getMessage()), $e->getCode());
	}
        
   
    }
    function sendverifyemail($username,$email,$password,$name){
            $emaillink = $this->config->item('link');
            $From = $this->config->item('email');
            $To = $email;
            $Subject = "CET PRACTICE TEST";
            $msg = "Dear $name,\r\n
                    Activation Complete!\r\n
                    Thank you for verifying your E-mail address.\r\nYour CET /Smart IQ account has been activated now. Your login credentials:
                    Username : $username
                    Password : $password \r\n
                    If you need to correct or update any of your account information then visit\r\n
                    $emaillink \r\nOnce you have logged in, select the My Account
                    link at the Dashboard in the Homepage.
                    With Sincere Regards & Cheers,\r\n
                    The Smart IQ team.
                    Happy Practising!";
                                      
            //------ To be included for every mail --------------//	
            $this->load->library('email');
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'smtpout.secureserver.net';
            $config['smtp_port'] = '25';
            $config['smtp_timeout'] = '7';
            $config['smtp_user'] = 'contact@codefruxtechnology.com';
            $config['smtp_pass'] = 'contact123#';
            $config['charset'] = 'utf-8';
            $config['newline'] = "\r\n";
            $config['mailtype'] = 'text'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not    
            $this->email->initialize($config);           
            $this->email->from($From);
            $this->email->to($To);
            $this->email->subject($Subject);
            $this->email->message($msg);
            if ($this->email->send()) {
                
            } else
                show_error($this->email->print_debugger());
    }
}
?>