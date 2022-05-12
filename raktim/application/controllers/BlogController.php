<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class BlogController extends CI_Controller {
        
        public function __construct() {
            parent::__construct();

            $this->load->model("Blog");
        }

        public function index() {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());            
                return ;
            }
            
            $articles = [];
            $articles = $this->Blog->get();

            $this->load->view("Blog/index", ["articles" => $articles]);
        }

        public function get_all() {
            header('Access-Control-Allow-Origin: *');
            header("Access-Control-Allow-Methods: GET, OPTIONS");
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($articles = $this->Blog->get());
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
                        "image"         => base_url().'assets/blog/'.$file['upload_data']['file_name'],
                        "title"         => $this->input->post("title"),
                        "description"   => $this->input->post("description"),
                        "date"       => $this->input->post("date"),
                        "link"          => $this->input->post("link"),
                        "category"          => $this->input->post("category"),
                        "category_link"          => $this->input->post("category_link")
                    ];

                    $this->Blog->add($data);

                    $this->session->set_flashdata("status", "New Article is added");

                    redirect (base_url(). 'blog');
                }
                else {
                    $this->session->set_flashdata("error", $file['error']);
                    
                    redirect (base_url(). 'blog');
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
                "date"       => $this->input->post("date"),
                "link"          => $this->input->post("link"),
                "category"          => $this->input->post("category"),
                "category_link"          => $this->input->post("category_link")
            ];
            
            $file = $this->upload_file("image");

            if(!$file["status"]) {
                $this->Blog->update($id, $data);

                redirect (base_url(). 'blog');
            }
            else {
                $record = $this->Blog->get($id);

                $this->delete_file($record->image);

                $data["image"] = base_url().'assets/blog/'.$file['upload_data']['file_name'];

                $this->Blog->update($id, $data);

                redirect (base_url(). 'blog');
            }
        }

        public function delete($id) {
            if($this->session->userdata("user") == NULL) {
                redirect (base_url());
            }

            $record = $this->Blog->get($id);

            $this->delete_file($record->image);

            $this->Blog->delete($id);

            redirect (base_url(). 'blog');

        }

        protected function upload_file($photo){
            $config['upload_path']          = 'assets/blog';
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
            $path = 'assets/blog';
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