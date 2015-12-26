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

    function get_city_name($city_id) {
        $sql = 'CALL sp_get_city(?)';
        $parameters = array($city_id);
        $query = $this->db->query($sql, $parameters);

        $result = $query->result();
        $query->free_result();
        return $result;
    }

    function update_basic_info($firstname, $lastname, $dob, $college_id, $user_id) {

        $sql = 'CALL sp_update_basic_info(?,?,?,?,?)';
        $parameters = array($firstname, $lastname, $dob, $college_id, $user_id);
        $query = $this->db->query($sql, $parameters);
        $result = $query->result();
        $query->free_result();
        return $result;
    }

    function update_user_details($userid, $firstname, $lastname, $dob, $gender, $email_id, $phone_number, $password) {

        $sql = 'CALL sp_update_user_details(?,?,?,?,?,?,?,?)';
        $parameters = array($userid, $firstname, $lastname, $dob, $gender, $email_id, $phone_number, $password);
        $query = $this->db->query($sql, $parameters);

        $result = $query->result();
        $query->free_result();
        return 1;
    }

    function update_address_info($fb_id, $email_id, $address1, $address2, $pincode, $phonenumber, $state, $city, $user_id, $districtid) {

        $sql = 'CALL sp_update_address_info(?,?,?,?,?,?,?,?,?,?)';
        $parameters = array($fb_id, $email_id, $address1, $address2, $pincode, $phonenumber, $state, $city, $user_id, $districtid);
        $query = $this->db->query($sql, $parameters);

        $result = $query->result();
        $query->free_result();

        return $result;
    }

    function update_login_info($password, $user_id) {

        $sql = 'CALL sp_update_login(?,?)';
        $parameters = array($password, $user_id);
        $query = $this->db->query($sql, $parameters);

        $result = $query->result();
        $query->free_result();

        return $result;
    }

    function update_user_refference($user_id, $name, $email, $contact, $message) {

        $sql = 'CALL sp_update_refference(?,?,?,?,?)';
        $parameters = array($user_id, $name, $email, $contact, $message);
        $query = $this->db->query($sql, $parameters);

        $result = $query->result();
        $query->free_result();

        return $result;
    }

}

?>
