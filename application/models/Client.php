<?php 

    class Client extends CI_Model{

        public function set_client($data){
            $this->db->insert('client', $data);
        }

        public function get_client($id_client){
            $query = $this->db->where('id', $id_client)
                              ->get('client')
                              ->result();
        }

        public function login($data){
            $query = $this->db->where(array(
                                        "email" => $data['email'],
                                        "pwd"  => $data['pwd']
                                ))
                              ->get('client')
                              ->result();
            return $query;
        }
    }

?>