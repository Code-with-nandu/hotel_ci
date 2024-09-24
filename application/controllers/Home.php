<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('home');
    }
    public function facilites()
    {
        $this->load->view('facilites.php');
    }

    public function about()
    {
        $this->load->view('about.php');
    }
}
