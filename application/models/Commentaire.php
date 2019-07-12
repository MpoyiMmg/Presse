<?php

    class Commentaire extends CI_Model{

        public function set_comment($data){
            $this->db->insert('coommentaire', $data);
        }
    }

?>