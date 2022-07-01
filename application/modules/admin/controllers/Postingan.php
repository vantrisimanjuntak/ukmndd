<?php class Postingan extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['title'] = 'Postingan - UKM Musik Nada Do ITDA';
        $this->load->view('index', $data);
    }
    function post()
    {
        $postingan = $this->input->post('berita');
        print_r($postingan);
    }
}
