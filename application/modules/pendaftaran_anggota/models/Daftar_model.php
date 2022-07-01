<?php class Daftar_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function ambilData($id, $nama, $email, $password, $waktu_daftar, $link_konfirmasi)
    {
        // echo $id . " " . $nama . " " . $email . " " . $password . " " . $waktu_daftar . " " . $link_konfirmasi;
        $data_anggota_sementara = array(
            'id_anggota' => $id,
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'waktu_pendaftaran' => $waktu_daftar,
            'link_konfirmasi' => $link_konfirmasi,
            'status' => '0'
        );
        $this->db->insert('daftar_anggota', $data_anggota_sementara);
        return TRUE;
    }
    function dataPendaftar()
    {
        $semuaPendaftar = $this->db->get('daftar_anggota');
        return $semuaPendaftar;
    }
    function konfirmasi_anggota()
    {
    }
}
