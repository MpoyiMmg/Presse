<?php

    class Article extends CI_Model{
        
        #############################################
        public function set_article($data){
            $this->db->insert('article', $data);
        }
        #############################################
        public function get_article(){
            $query = $this->db->get('article')
                              ->result();
            return $query;
        }
        #############################################
        public function set_commentaire($id_article, $data){
            $this->db->where('id', $id_article)
                     ->insert('commentaire', $data);
        }
    }
?>