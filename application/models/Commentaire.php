<?php

    class Commentaire extends CI_Model{

        public function set_comment($data){
            $this->db->insert('coommentaire', $data);
        }

        public function get_comment($id_comment){
            $query = $this->db->where('id', $id_comment)
                     ->get('commentaire')
                     ->result();
            return $query;
        }
    }

?>