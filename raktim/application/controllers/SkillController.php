<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class SkillController extends CI_Controller {
        
        public function __construct() {
            parent::__construct();

            $this->load->model("Skill");
            $this->load->model("Category");
        }

        public function index() {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());            
                return ;
            }
            
            $skills = [];
            $skills = $this->Skill->get();

            $categories = [];
            $categories = $this->Category->get();

            $this->load->view("Skill/index", ["skills" => $skills, "categories" => $categories]);
        }

        public function get_all() {
            header('Access-Control-Allow-Origin: *');
            header("Access-Control-Allow-Methods: GET, OPTIONS");
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($skills = $this->Skill->get());
        }

        public function store() {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());            
                return ;
            }

            if($this->input->post("id")) {
                $this->update($this->input->post("id"));
            }
            else {
                $data = [
                    "name"       => $this->input->post("name"),
                    "category"   => empty($this->input->post("category")) ? null : implode(",", $this->input->post("category")),
                    "number"     => $this->input->post("number")
                ];
                
                $this->Skill->add($data);

                $this->session->set_flashdata("status", "New skill is added");

                redirect (base_url(). 'skill');
            }
        }

        public function update($id) {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());            
                return ;
            }

            $data = [
                "name"       => $this->input->post("name"),
                "category"   => empty($this->input->post("category")) ? null : implode(",", $this->input->post("category")),
                "number"     => $this->input->post("number")
            ];

            $this->Skill->update($id, $data);

            redirect (base_url(). 'skill');
        }

        public function delete($id) {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());
            }

            $this->Skill->delete($id);

            redirect (base_url(). 'skill');

        }
    }