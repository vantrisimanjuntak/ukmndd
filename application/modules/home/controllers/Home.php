<?php class Home extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['title'] = 'Selamat Datang - UKM Musik Nada Do';
        $this->load->view('home/index', $data);
    }
}
