<?php class Index extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Daftar_model');
        date_default_timezone_set('Asia/Jakarta');
    }
    function index()
    {
        $data['title'] = 'Daftar Anggota - UKM Musik Nada Do ITDA';
        $this->load->view('pendaftaran_anggota/index', $data);
    }
    function cek_email()
    {
        $id = bin2hex(random_bytes(5));
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $waktu_daftar = date('Y-m-d H:i:s');
        $route_verifikasi_email = base_url('verifikasi/verify/');
        $link_konfirmasi = $route_verifikasi_email . bin2hex(random_bytes(20));

        if ($nama == " " || $email == " " || $password == " ") {
            redirect('daftar-anggota');
        } else {
            $data_to_DaftarModel = $this->Daftar_model->ambilData($id, $nama, $email, $passwordHash, $waktu_daftar, $link_konfirmasi);

            if ($data_to_DaftarModel == TRUE) {
                $ambilDataPendaftar = $this->Daftar_model->dataPendaftar();
                foreach ($ambilDataPendaftar->result_array() as $row) {
                    $id_anggota = $row['id_anggota'];
                    $email = $row['email'];
                    $nama = $row['nama'];
                    $data['link'] = $row['link_konfirmasi'];
                }
                $config = [
                    'mailtype'    => 'html',
                    'charset'    => 'utf-8',
                    'wordwrap' => TRUE,
                    'protocol'    => 'smtp',
                    'smtp_host'    => 'ssl://smtp.gmail.com',
                    'smtp_user'    => 'findychristy@gmail.com',
                    'smtp_pass'    => '24101998',
                    'smtp_port'    => 465,
                    'crlf'        => "\r\n",
                    'newline'    => "\r\n"
                ];
                $this->load->library('email', $config);
                $this->email->initialize($config);
                $this->email->from('UKM Musik Nada Do ITDA');
                $this->email->to($email);
                $this->email->subject('Konfirmasi Email');
                $this->email->message($this->load->view('email_confirm_template', $data, true));

                if ($this->email->send()) {
                    $base_url = base_url();
                    $this->session->set_flashdata(
                        'failed',
                        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Username dan Password salah!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>'
                    );
                } else {
                    show_error($this->email->print_debugger());
                }
            }
        }
    }
}
