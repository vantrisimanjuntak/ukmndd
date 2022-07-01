<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap  JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/favicon-logo.png') ?>" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <style>
        .bg-bluedark {
            background-color: #FFFF;
        }

        .navbar-toggler-icon {
            width: 47px;
            height: 34px;
            background-color: #7eb444;
            border: none;
        }
    </style>
</head>

<body>
    <section id="header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a href="#" class="navbar-brand">
                        <img src="<?= base_url('assets/logo.png') ?>" width="180px;" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-label="toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="<?= base_url() ?>" class="nav-link">Beranda</a>
                            </li>
                            <li class="nav-item active">
                                <a href="<?= base_url('tentang') ?>" class="nav-link"> Siapa Kami</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Hubungi Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Kenali Kami<br> Lebih Dekat</h2>
                    <p>Lorem ipsum dolor sit amet consectetur </p>
                    <a href="" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <img src="<?= base_url('assets/img-1.jpg') ?>" class="img-fluid" alt="" style="width:100%;height: 100%;">
                </div>
                <div class="col-lg-5">
                    <h1 class="font-weight-bold">Siapa Kami?</h1>
                    <p>Kami adalah salah satu Unit Kegiatan Mahasiswa (UKM) yang ada di Institut Teknologi Dirgantara Adisutjipto yang berlokasi di Yogyakarta (ITDA). Kami adalah Unit Kegiatan Mahasiswa (UKM) Musik Nada Do ITDA. </p>
                    <br>
                    <h5>Kok UKMnya <i>kagak</i> nyambung <i>banget yak</i>? </h5>
                    <br>
                    <button type="button">Baca Lebih</button>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1 class="font-weight-bold">Kok tentang musik?</h1>
                    <p>
                        Kawula muda, musik itu sangat baik untuk otak kita. Musik dapat meningkatkan konsetrasi dalam berpikir maupun bertindak. Jadi tidak buruk-buruk <i>amat sih</i>.
                    </p>
                    <br>
                    <h5>Kok UKMnya <i>kagak</i> nyambung <i>banget yak</i>? </h5>
                    <br>
                    <button type="button">Baca Lebih</button>
                </div>
                <div class="col-lg-7">
                    <img src="<?= base_url('assets/img-2.jpg') ?>" class="img-fluid" alt="" style="width:100%;height: 100%;">
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <img src="<?= base_url('assets/img-3.jpg') ?>" class="img-fluid" alt="" style="width:60%;height: 80%;">
                </div>
                <div class="col-lg-5">
                    <h1 class="font-weight-bold">Masa sih?</h1>
                    <p>
                        Psikologi klinis bidang Cognitive Behavioral Therapy, Dr. Emma Gray, dari The British CBT & Counselling Service, London, melakukan sebuah penelitian terhadap siswa yang mendengarkan genre musik klasik dengan pengaruh kinerja otak. </p>
                    <p>
                        Manfaat mendengarkan musik rupanya bukan hanya mempengaruhi kecerdasan otak, bahkan jenis lagu tersebut memiliki efek menenangkan pikiran agar lebih kondusif untuk berpikir logis. Dikutip dari laman Elite Daily, ditulis Rabu (19/10/2016).
                    </p>
                    <br>
                    <h5>Kok UKMnya <i>kagak</i> nyambung <i>banget yak</i>? </h5>
                    <br>
                    <button type="button">Baca Lebih</button>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: 30px;">
        <div class="container" style="border-radius: 3px solid black;">
            <div class="row">
                <div class="col-lg-5">
                    <h1 class="font-weight-bold">Kegiatannya <i>cuman </i>itu <i>doang</i>?</h1>
                    <p>
                        Pastinya tidak <i>dong</i>. Di UKM kita, banyak kegiatan yang pastinya bagus untuk hidup kita. Kita bisa belajar main alat musik, <i>mixing</i> dan <i>directoring</i>, belajar publikasi dan banyak lagi. Pastinya teman-teman tidak akan bosan dengan UKM kami.
                        <br>
                        Tertarik untuk mencobanya?
                    </p>
                    <br>
                </div>
                <div class="col-lg-7">
                    <img src="<?= base_url('assets/img-4.jpg') ?>" class="img-fluid" alt="" style="width:100%;height: 100%;">
                </div>
            </div>
        </div>
    </section>


    <?php $this->load->view('footer'); ?>

</body>

</html>