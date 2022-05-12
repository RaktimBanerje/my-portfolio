<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Skill extends CI_Model {
        public function get($id = NULL) {
            $skills = [];

            if($id) {
                $skills = $this->db->where("id", $id)->get("skill")->row();
            }
            else {
                $skills = $this->db->get("skill")->result();
            }

            for ($i=0; $i < count($skills); $i++) { 
                
                $skills[$i]->{"categories"} = [];
                $categories = explode(",", $skills[$i]->category);
                
                foreach ($categories as $key => $category_id) {
                     $category = $this->Category->get($category_id);
                     $skills[$i]->{"categories"}[] = $category;
                }
            }

            return $skills;
        }
        
        public function add($data) {
            $this->db->insert("skill", $data);
        }

        public function update($id, $data) {
            $this->db->where("id", $id)->update("skill", $data);
        }

        public function delete($id) {
            $this->db->where("id", $id)->delete("skill");
        }
    }