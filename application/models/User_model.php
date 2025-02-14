<?php

    class User_model extends CI_Model{
        
        public function register($data){
           return $this->db->insert('user',$data);
        }

        public function login($em,$pw){
            $this->db->where('email',trim($em));
            $user = $this->db->get('user')->row();

            if($user && password_verify(trim($pw),$user->password)){
                return $user;
            }
            return false;
        }
    }


?>