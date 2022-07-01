<div class="user-profile pull-right">
    <i class="ti-user ti-3x"></i>
    <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?= $this->session->userdata('username'); ?> <i class="fa fa-angle-down"></i></h4>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Message</a>
        <a class="dropdown-item" href="#">Settings</a>
        <a class="dropdown-item" href="<?= base_url('admin/logout') ?>">Log Out</a>
    </div>
</div>