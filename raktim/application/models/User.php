<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class User extends CI_Model {
        public function add($username, $hash) {
            $this->db->insert("users", [
                "username" => $username,
                "hash" => $hash
            ]);
        }

        public function get($username) {
            return $this->db->where('username', $username)->get("users")->row();
        }
    }