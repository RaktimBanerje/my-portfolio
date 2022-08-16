<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Category extends CI_Model {
        public function get($id = NULL) {
            
            if($id) {
                return $this->db->where("id", $id)->get("category")->row();
            }
            else {
                return $this->db->get("category")->result();
            }
        
        }
        
        public function add($data) {
            $this->db->insert("category", $data);
        }

        public function update($id, $data) {
            $this->db->where("id", $id)->update("category", $data);
        }

        public function delete($id) {
            $this->db->where("id", $id)->delete("category");
        }
    }