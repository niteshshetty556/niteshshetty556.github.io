<?php

Class login_m extends CI_Model {

    function user_login($name, $password) {

        $sql = 'CALL sp_login_user(?,?)';
        $parameters = array($name, $password);
        $query = $this->db->query($sql, $parameters);
        $result = $query->result();
        $query->free_result();
        return $result;
    }
    function android_user_login($name,$password,$imei) {
        $sql = 'CALL sp_login_user_android(?,?,?)';
        $parameters = array($name,$password,$imei);
        $query = $this->db->query($sql, $parameters);
        $result = $query->result();
        $query->free_result();
        return $result;
    }
    function user_logout($user_id) {
        $sql = 'CALL sp_logout_user(?)';
        $parameters = array($user_id);
        $query = $this->db->query($sql, $parameters);
        $result = $query->result();
        $query->free_result();
        return $result;
    }

    function verify_user($activation_code) {
        $sql = 'CALL sp_verify_user(?)';
        $parameters = array($activation_code);
        $query = $this->db->query($sql, $parameters);
        if ($query) {

            return $query->result();
            //print_r($query->result());
        } else {
            return null;
        }
    }

    function getUserInfoForSubscription($email) {
        $sql = 'CALL sp_get_user_details_email(?)';
        $parameters = array($email);
        $query = $this->db->query($sql, $parameters);
        if ($query) {
            //$data_array = array();
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
    // validating session for each request
    function validate_session($user_id,$inst_id,$session_id)
    {
        $qry = 'call sp_validate_session(?,?,?)';
        $parameters = array($user_id,$inst_id,$session_id);
        $response = $this->db->query($qry,$parameters);
        if($response->num_rows()>0)
        {
            return true;
        }
        else
       {
            return false;
       }
    }

}

?>