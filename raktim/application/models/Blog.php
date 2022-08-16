<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Blog extends CI_Model {
        public function get($id = NULL) {
            
            if($id) {
                return $this->db->where("id", $id)->get("blog")->row();
            }
            else {
                return $this->db->order_by("order")->get("blog")->result();
            }       
        }
        
        public function add($data) {
            $this->db->insert("blog", $data);
        }

        public function update($id, $data) {
            $this->db->where("id", $id)->update("blog", $data);
        }

        public function updateArticleOrder($orders) {
            for ($index=0; $index < count($orders); $index++) { 
                $this->db->where("id", $orders[$index])->update("blog", array("order" => $index + 1));
            }
        }

        public function delete($id) {
            $this->db->where("id", $id)->delete("blog");
        }
    }