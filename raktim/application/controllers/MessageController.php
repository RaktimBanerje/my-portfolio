<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class MessageController extends CI_Controller {
        public function __construct() {
            
            parent::__construct();

            Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
            Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
            Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed

            $this->load->model("Message");
        }

        public function index() {
            if($this->session->userdata("user") == NULL) {

                redirect (base_url());
            }
            else {
                $messages = [];
                $messages = $this->Message->get();
                
                $this->load->view("Message/index", ["messages" => $messages]);
            }
        }

        public function store() {

            date_default_timezone_set('Asia/Kolkata');

            $data = [
                "name"          => $this->input->post("name"),
                "email"         => $this->input->post("email"),
                "mobile"        => $this->input->post("mobile"),
                "subject"       => $this->input->post("subject"),
                "message"       => $this->input->post("message"),
                "created_at"    => date('Y-m-d')
            ];

            $this->Message->add($data);

            header('content-type: application/json');

            echo json_encode([
                "status"         => "Success",
            ]);
        }

        public function delete($id) {

            if($this->session->userdata("user") == NULL) {
                redirect (base_url());
            }

            $this->Message->delete($id);

            redirect (base_url(). 'message');
        }
    }