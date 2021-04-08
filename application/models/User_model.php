<?php


class User_model extends CI_Model
{

    public function getdata()
    {
        $query = $this->db->get('users', 10);
        return $query->result();
    }

    public function registerModel($formData)
    {
        $this->db->insert('users', $formData);
    }

    public function loginModel($Email, $Pass)
    {   
        $this->db->where('email', $Email);
        $query= $this->db->get('users');
        $pwd = $query->row();

        
        $hashed = $pwd->password;

        //We don't need to convert user entered password into hash before inserting into password verify function.
        if (password_verify($Pass, $hashed)) {

            $row = $query->row();
            $data = array(
              'uid' => $row->id,
              'firstname' => $row->firstname,
              'email' => $row->email,
              'validated' => TRUE
            );
      
            $this->session->set_userdata($data);  
            
            return TRUE;

        } else {

            return FALSE;
        }
    }
}
