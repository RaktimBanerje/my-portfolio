<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Message extends CI_Model {
        public function get($id = NULL) {
            if($id) {
                return $this->db->where("id", $id)->get("message")->row();
            }
            else {
                return $this->db->get("message")->result();
            }
        }

        public function add($data) {
            $this->db->insert("message", $data);
        }

        public function delete($id) {
            $this->db->where("id", $id)->delete("message");
        }
    }