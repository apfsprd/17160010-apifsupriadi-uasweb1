<?php

class Modperson extends CI_Model {

    public function save_data($fname, $lname, $gen, $date, $cat, $member){
        $data = array(
            'firstname' => $fname,
            'lastname' => $lname,
            'gender' => $gen,
            'birth' => $date,
            'category' => $cat,
            'membership' =>  $member
        );
        
        $this->db->insert('person', $data);
    }

}