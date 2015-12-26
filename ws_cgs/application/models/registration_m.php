<?php

Class registration_m extends CI_Model {

    function register($name, $emailid, $password) {

        $sql = 'CALL sp_register_user(?,?,?)';
        $parameters = array($name, $emailid, $password);
        $query = $this->db->query($sql, $parameters);
        if ($query) {
            if ($query->num_rows > 0) {
                return $query->result();
            } else {
                $data_array[] = array(
                    'message' => 'No Records Found',
                    'result_status' => '0'
                );
            }
            return $data_array;
        } else {
            $data_array[] = array(
                'message' => 'Something went wrong!',
                'result_status' => '0'
            );
        }
    }

    function login($emailid, $password) {

        $sql = 'CALL sp_login(?,?)';
        $parameters = array($emailid, $password);
        $query = $this->db->query($sql, $parameters);
         if ($query) {
            if ($query->num_rows > 0) {
                return 1;
            } else {
                $data_array[] = array(
                    'message' => 'No Records Found',
                    'result_status' => '0'
                );
            }
            return $data_array;
        } else {
            $data_array[] = array(
                'message' => 'Something went wrong!',
                'result_status' => '0'
            );
        }
    }

    function check_email_exists($email_id) {
        $array = array('emailid' => $email_id);
        $query = $this->db->get_where('user_details', $array);
        if ($query) {
            if ($query->num_rows > 0) {
                return 1;
            } else {
                $data_array[] = array(
                    'message' => 'No Records Found',
                    'result_status' => '0'
                );
            }
            return $data_array;
        } else {
            $data_array[] = array(
                'message' => 'Something went wrong!',
                'result_status' => '0'
            );
        }
    }
    
     function forgotPassword($email_id) {
        $sql = 'CALL sp_forgot_password(?)';
        $parameters = array($email_id);
        $query = $this->db->query($sql, $parameters);
       if ($query) {
            if ($query->num_rows > 0) {
                return $query->result();
            } else {
                $data_array[] = array(
                    'message' => 'No Records Found',
                    'result_status' => '0'
                );
            }
            return $data_array;
        } else {
            $data_array[] = array(
                'message' => 'Something went wrong!',
                'result_status' => '0'
            );
        }
    }

  

    function resetPassword($emailid, $password) {
        $sql = 'CALL sp_reset_password(?,?)';
        $parameters = array($emailid, $password);
//        print_r($parameters);
        $query = $this->db->query($sql, $parameters);
         if ($query) {
            if ($query->num_rows > 0) {
                return 1;
            } else {
                $data_array[] = array(
                    'message' => 'No Records Found',
                    'result_status' => '0'
                );
            }
            return $data_array;
        } else {
            $data_array[] = array(
                'message' => 'Something went wrong!',
                'result_status' => '0'
            );
        }
    }


}

?>
