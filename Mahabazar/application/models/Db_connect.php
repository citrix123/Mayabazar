<?php


  class DB_Connect extends CI_Model
  {
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * Check User Exists or Niot
     * if Yes:
     * 	Show Name and load Profile
     * else:
     * 	Display Error
     */
    public function checkUserExists($username)
    {
      $query = $this->db->get_where('login_details', array('username' => $username));
      if($query->conn_id->affected_rows == 0){
        return true;
      }
      return false;
    }

    /**
     * Insert row in 2 tables
     * and create a dummy user name
     * send mail with the dummy username and password to user.
     */
    public function registerUser($registrationData)
    {
      try {
        // Inserting to the login_personal_details
        $this->db->insert('login_personal_details', $registrationData);
        $login_details = array('username' => uniqid('maha_'),
                               'password' => uniqid(),
                               'customer_type' => $registrationData['customer_type'],
                               'status' => 'New');

        $this->db->insert('login_details', $login_details);
        return true;
      } catch (Exception $e) {
        print_r($e);
      }
    }

  }

?>
