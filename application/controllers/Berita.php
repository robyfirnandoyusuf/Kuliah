<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model');
    }

    public function index()
    {
        $data = array(
            'title' => 'My Title',
            'heading' => 'My Heading'
        );

        $data['message'] = 'My Message';
        $data['berita'] = $this->berita_model->get();
        $this->load->view('berita/view', $data);
    }
}
