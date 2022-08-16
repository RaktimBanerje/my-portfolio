<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class CategoryController extends CI_Controller {
        public function __construct() {
            parent::__construct();
            
            $this->load->model("Category");
        }

        public function get_all() {
            header('Access-Control-Allow-Origin: *');
            header("Access-Control-Allow-Methods: GET, OPTIONS");
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($categories = $this->Category->get());
        }

        public function store() {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());            
                return ;
            }

            if($this->input->post("category_id")) {
                $this->update($this->input->post("category_id"));
            }
            else {
                $data = [
                    "label"   => $this->input->post("category_label"),
                    "value"   => $this->input->post("category_value"),
                ];
                
                $this->Category->add($data);

                $this->session->set_flashdata("status", "New Category is added");

                redirect (base_url(). 'skill');
            }
        }

        public function update($id) {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());            
                return ;
            }

            $data = [
                "label"   => $this->input->post("category_label"),
                "value"   => $this->input->post("category_value"),
            ];

            $this->Category->update($id, $data);

            redirect (base_url(). 'skill');
        }

        public function delete($id) {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());
            }

            $this->Category->delete($id);

            redirect (base_url(). 'skill');

        }
    }