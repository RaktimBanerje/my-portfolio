<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Portfolio extends CI_Model {
        public function get($id = NULL) {
            
            if($id) {
                $portfolio = $this->db->where("id", $id)->get("portfolio")->row_array();
                $portfolio["images"] = $this->db->where("portfolio_id", $portfolio["id"])->order_by("order")->get("portfolio_images")->result_array();
                
                return $portfolio;
            }
            else {
                $portfolios = $this->db->order_by("order")->get("portfolio")->result_array();
                
                for ($index=0; $index < count($portfolios); $index++) { 
                    $portfolios[$index]["images"] = $this->db->where("portfolio_id", $portfolios[$index]["id"])->order_by("order")->get("portfolio_images")->result_array();
                }

                return $portfolios;
            }
        
        }

        public function getOtherImage($id) {
            return $this->db->where("id", $id)->get("portfolio_images")->row_array();
        }
        
        public function add($data, $images) {
            $this->db->insert("portfolio", $data);
            $id = $this->db->insert_id();

            foreach ($images as $key => $image) {
                $this->db->insert("portfolio_images", array(
                    "portfolio_id" => $id,
                    "image" => $image
                ));
            }
        }

        public function update($id, $data, $images) {
            $this->db->where("id", $id)->update("portfolio", $data);

            foreach ($images as $key => $image) {
                $this->db->insert("portfolio_images", array(
                    "portfolio_id" => $id,
                    "image" => $image
                ));
            }
        }

        public function updatePortfolioOrder($orders) {
            for ($index=0; $index < count($orders); $index++) { 
                $this->db->where("id", $orders[$index])->update("portfolio", array("order" => $index + 1));
            }
        }

        public function updateOtherImageOrder($orders) {
            for ($index=0; $index < count($orders); $index++) { 
                $this->db->where("id", $orders[$index])->update("portfolio_images", array("order" => $index + 1));
            }
        }

        public function delete($id) {
            $this->db->where("id", $id)->delete("portfolio");
        }

        public function deleteOtherImage($id) {
            $this->db->where("id", $id)->delete("portfolio_images");
        }
    }