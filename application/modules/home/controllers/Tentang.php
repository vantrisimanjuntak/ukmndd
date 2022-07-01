<?php class Tentang extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['title'] = 'Siapa kami - UKM Musik Nada Do';
        $this->load->view('v_tentang', $data);
    }
}
