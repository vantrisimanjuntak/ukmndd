<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome 4 -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome-4.7.0/css/font-awesome.min.css') ?>">

    <!-- Bootstrap  JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="<?= base_url('assets/font-awesome-5/js/fontawesome.js') ?>"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/favicon-logo.png') ?>" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
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
                            <li class="nav-item active">
                                <a href="<?= base_url() ?>" class="nav-link">Beranda</a>
                            </li>
                            <li class="nav-item">
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

    <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
        <span style="font-size: 30px; background-color: #F3F5F6; padding: 0 10px;">
            Berita Terbaru
            <!--Padding is optional-->
        </span>
    </div>

    <section class="news" style="margin-top: 30px; padding-bottom:30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <a href="#" style="color: black; text-decoration:none">
                        <h3>Selamat Datang Di Website Kami</h3>
                    </a>
                    <small>Diposting oleh </small>
                    <img src="<?= base_url('assets/img-1.jpg') ?>" class="img-fluid" alt="">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                </div>
                <div class="col-lg-3">Agenda UKM Nada Do</div>
            </div>
        </div>
    </section>

    <?= $this->load->view('footer'); ?>

</body>

</html>