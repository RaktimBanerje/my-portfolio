<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class PortfolioController extends CI_Controller {
        
        public function __construct() {
            parent::__construct();

            $this->load->model("Portfolio");
        }

        public function index() {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());            
                return ;
            }
            
            $portfolios = [];
            $portfolios = $this->Portfolio->get();

            $this->load->view("Portfolio/index", ["portfolios" => $portfolios]);
        }

        public function get_all() {
            header('Access-Control-Allow-Origin: *');
            header("Access-Control-Allow-Methods: GET, OPTIONS");
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($portfolios = $this->Portfolio->get());
        }

        public function create() {
            $this->load->view("Portfolio/create");
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
                $file = $this->upload_file("image");

                if($file['status']){
                    $data = [
                        "image"         => $file['upload_data']['file_name'],
                        "title"         => $this->input->post("title"),
                        "description"   => $this->input->post("description"),
                        "category"      => $this->input->post("category"),
                        "link"          => $this->input->post("link"),
                    ];

                    $images = array();

                    $numberOfImages = count($_FILES["images"]["name"]);

                    for ($index=0; $index < $numberOfImages; $index++) { 
                        $_FILES["otherImage"]["name"] = $_FILES["images"]["name"][$index];
                        $_FILES["otherImage"]["type"] = $_FILES["images"]["type"][$index];
                        $_FILES["otherImage"]["size"] = $_FILES["images"]["size"][$index];
                        $_FILES["otherImage"]["tmp_name"] = $_FILES["images"]["tmp_name"][$index];
                        $_FILES["otherImage"]["error"] = $_FILES["images"]["error"][$index];
                        
                        $file = $this->upload_file("otherImage");

                        if($file["status"]) {
                            $images[] = $file['upload_data']['file_name'];
                        }
                    }
        
                    $this->Portfolio->add($data, $images);

                    $this->session->set_flashdata("status", "New Portfolio is added");

                    redirect (base_url(). 'portfolio');
                }
                else {
                    $this->session->set_flashdata("error", $file['error']);
                    
                    redirect (base_url(). 'portfolio');
                }
            }
        }

        public function update($id) {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());            
                return ;
            }

            $data = [
                "title"         => $this->input->post("title"),
                "description"   => $this->input->post("description"),
                "category"   => $this->input->post("category"),
                "link"          => $this->input->post("link"),
            ];

            $images = array();

            $numberOfImages = count($_FILES["images"]["name"]);

            for ($index=0; $index < $numberOfImages; $index++) { 
                $_FILES["otherImage"]["name"] = $_FILES["images"]["name"][$index];
                $_FILES["otherImage"]["type"] = $_FILES["images"]["type"][$index];
                $_FILES["otherImage"]["size"] = $_FILES["images"]["size"][$index];
                $_FILES["otherImage"]["tmp_name"] = $_FILES["images"]["tmp_name"][$index];
                $_FILES["otherImage"]["error"] = $_FILES["images"]["error"][$index];
                
                $file = $this->upload_file("otherImage");

                if($file["status"]) {
                    $images[] = $file['upload_data']['file_name'];
                }
            }
            
            $file = $this->upload_file("image");

            if(!$file["status"]) {
                $this->Portfolio->update($id, $data, $images);

                redirect (base_url(). 'portfolio');
            }
            else {
                $record = $this->Portfolio->get($id);

                $this->delete_file($record["image"]);

                $data["image"] = $file['upload_data']['file_name'];

                $this->Portfolio->update($id, $data, $images);

                redirect (base_url(). 'portfolio');
            }
        }

        public function updatePortfolioOrder() {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());
            }
            
            $orders = $this->input->post("order");
            $orders = explode(",", $orders);

            $this->Portfolio->updatePortfolioOrder($orders);

            header("Content-Type: application/json");
            echo json_encode(array("updated" => 1));
        }


        public function updateOtherImageOrder() {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());
            }
            
            $orders = $this->input->post("order");
            $orders = explode(",", $orders);

            $this->Portfolio->updateOtherImageOrder($orders);

            header("Content-Type: application/json");
            echo json_encode(array("updated" => 1));
        }

        public function delete($id) {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());
            }

            $record = $this->Portfolio->get($id);

            $this->delete_file($record["image"]);

            foreach ($record["images"] as $key => $imageData) {
                $this->delete_file($imageData["image"]);
                $this->Portfolio->deleteOtherImage($imageData["id"]);
            }

            $this->Portfolio->delete($id);

            redirect (base_url(). 'portfolio');

        }

        public function deleteOtherImage($id) {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());
            }

            $record = $this->Portfolio->getOtherImage($id);

            $this->delete_file($record["image"]);

            $this->Portfolio->deleteOtherImage($id);

            redirect (base_url(). 'portfolio');
        }

        protected function upload_file($photo){
            $config['upload_path']          = 'assets/portfolio';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = time(); 
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload($photo))
            {
                return array(
                    'status' => true,
                    'upload_data' => $this->upload->data()
                );                
            }
            else
            {
                return array(
                    'status' => false,
                    'error' => $this->upload->display_errors()
                );    
            }
        }
    
        protected function delete_file($photo){
            $path = 'assets/portfolio';
            $filename =  $path . "/" . $photo;
            
            if (file_exists($filename)) {
                unlink($filename);
                return true;
            } 
            else {
                return false;
            }
        }
    }