<?php class Dashboard extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['title'] = 'Admin - UKM Musik Nada Do ITDA';
        $this->load->view('admin/index', $data);
    }
}
