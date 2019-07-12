<?php

    class Article extends CI_Model{
        
        public function set_article($data){
            $this->db->insert('article', $data);
        }

        public function get_article(){
            $query = $this->db->get('article')
                              ->result();
            return $query;
        }
    }
?>