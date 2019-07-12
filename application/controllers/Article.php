<?php

    class Article extends CI_Controller{
        
        public function set_artcle(){
            $type = $this->input->post('type');
            $mention = $this->input->post('mention');
            $date = $this->input->post('mention');
            $id_client = $this->input->get('id_client');
            $vue = 89;

            $data = array(
                'type' => $type,
                'mention' => $mention,
                'date'  => $date,
                'id_client' => $id_client,
                'vue'   => $vue
            );

            $this->article->set_article($data);
        }

        public function get_article(){
            $data['articles'] = $this->article->get_article();

            
        }
    }

?>