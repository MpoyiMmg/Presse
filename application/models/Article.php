<?php

    class Article extends CI_Model{
        
        ################### ARTICLE ##########################
        public function set_article($data){
            $this->db->insert('article', $data);
        }
        #############################################
        public function get_article(){
            $query = $this->db->get('article')
                              ->result();
            return $query;
        }
        ################### COMMENTAIRE ##########################
        public function set_commentaire($data){
            $this->db->insert('commentaire', $data);
        }
        ##########################################################
        public function get_comment($id_article){
            $query = $this->db->where('id',$id_article)
                     ->get('commentaire')
                     ->result();
            return $query;
        }
    }
?>