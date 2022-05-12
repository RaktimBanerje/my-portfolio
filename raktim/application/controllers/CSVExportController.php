<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CSVExportController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper("csv");
    }

    public function index() {
        $header = ["Name", "Email", "Password"];

        $data = array(
            array("Raktim Banerjee", "raktimbanerjee9@gmail.com", "Raktim365249"),
            array("Susmita Sahoo", "susmita@gmail.com", "Susmita365249"),
            array("Nisha Datta", "nisha@gmail.com", "Nisha365249")
        );

        csv($header, $data, "users");
    }
}