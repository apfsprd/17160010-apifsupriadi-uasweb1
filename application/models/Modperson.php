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

    public function select_data(){
        return $this->db->get('person');
    }

    public function delete_data($birth){
        $this->db->where('birth', $birth);
        return $this->db->delete('person');
    }

}