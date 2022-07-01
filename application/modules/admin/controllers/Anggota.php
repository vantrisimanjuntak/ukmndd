<?php class Anggota extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
    }
    function index()
    {
        $data['title'] = 'Keanggotaan - UKM Musik Nada Do';
        $data['DataAnggota'] = $this->Model_admin->GetDataAnggota();
        $this->load->view('index', $data);
    }
}
