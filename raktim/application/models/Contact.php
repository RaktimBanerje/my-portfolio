<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Contact extends CI_Model {
        public function get($id = NULL) {
            if($id) {
                return $this->db->where("id", $id)->get("contacts")->row();
            }
            else {
                return $this->db->get("contacts")->result();
            }
        }
        
        public function add($data) {
            $this->db->insert("contacts", $data);
        }

        public function update($id, $data) {
            $this->db->where("id", $id)->update("contacts", $data);
        }

        public function delete($id) {
            $this->db->where("id", $id)->delete("contacts");
        }
    }