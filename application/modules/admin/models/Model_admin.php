<?php class Model_admin extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function GetDataAnggota()
    {
        $dataAnggota = $this->db->get('testing');
        return $dataAnggota;
    }
}
