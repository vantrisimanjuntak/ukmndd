<nav>
    <?php
    $uri = $this->uri->segment(2);
    if ($uri == 'dashboard') : ?>
        <ul class="metismenu" id="menu">
            <li class="active">
                <a href="<?= base_url('admin/dashboard'); ?>" aria-expanded="false"><i class="ti-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href="<?= base_url('admin/anggota'); ?>" aria-expanded="true"><i class="ti-user"></i><span>Keanggotaan</span></a>
                <ul class="collapse">
                    <li><a href="<?= base_url('admin/anggota') ?>">Data Anggota</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('admin/keuangan') ?>" aria-expanded="true"><i class="ti-palette"></i><span>Keuangan</span></a>
                <ul class="collapse">
                    <li><a href="grid.html">grid system</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('admin/postingan') ?>" aria-expanded="true"><i class="ti-pie-chart"></i><span>Postingan</span></a>
                <ul class="collapse">
                    <li><a href="barchart.html">bar chart</a></li>
                    <li><a href="linechart.html">line Chart</a></li>
                    <li><a href="piechart.html">pie chart</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('admin/sistem') ?>" aria-expanded="true"><i class="ti-pie-chart"></i><span>Sistem</span></a>
                <ul class="collapse">
                    <li><a href="barchart.html">bar chart</a></li>
                    <li><a href="linechart.html">line Chart</a></li>
                    <li><a href="piechart.html">pie chart</a></li>
                </ul>
            </li>
        </ul>

    <?php elseif ($uri == 'anggota') : ?>
        <ul class="metismenu" id="menu">
            <li>
                <a href="<?= base_url('admin/dashboard'); ?>" aria-expanded="false"><i class="ti-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li class="active">
                <a href="<?= base_url('admin/anggota'); ?>" aria-expanded="true"><i class="ti-user"></i><span>Keanggotaan</span></a>
                <ul class="collapse">
                    <li><a href="<?= base_url('admin/anggota') ?>">Data Anggota</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('admin/keuangan') ?>" aria-expanded="true"><i class="ti-palette"></i><span>Keuangan</span></a>
                <ul class="collapse">
                    <li><a href="grid.html">grid system</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('admin/postingan') ?>" aria-expanded="true"><i class="ti-pie-chart"></i><span>Postingan</span></a>
                <ul class="collapse">
                    <li><a href="barchart.html">bar chart</a></li>
                    <li><a href="linechart.html">line Chart</a></li>
                    <li><a href="piechart.html">pie chart</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('admin/sistem') ?>" aria-expanded="true"><i class="ti-pie-chart"></i><span>Sistem</span></a>
                <ul class="collapse">
                    <li><a href="barchart.html">bar chart</a></li>
                    <li><a href="linechart.html">line Chart</a></li>
                    <li><a href="piechart.html">pie chart</a></li>
                </ul>
            </li>
        </ul>
    <?php elseif ($uri == 'keuangan') : ?>
        <ul class="metismenu" id="menu">
            <li>
                <a href="<?= base_url('admin/dashboard'); ?>" aria-expanded="false"><i class="ti-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href="<?= base_url('admin/anggota'); ?>" aria-expanded="true"><i class="ti-user"></i><span>Keanggotaan</span></a>
                <ul class="collapse">
                    <li><a href="<?= base_url('admin/anggota') ?>">Data Anggota</a></li>
                </ul>
            </li>
            <li class="active">
                <a href="<?= base_url('admin/keuangan') ?>" aria-expanded="true"><i class="ti-palette"></i><span>Keuangan</span></a>
                <ul class="collapse">
                    <li><a href="grid.html">grid system</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('admin/postingan') ?>" aria-expanded="true"><i class="ti-pie-chart"></i><span>Postingan</span></a>
                <ul class="collapse">
                    <li><a href="barchart.html">bar chart</a></li>
                    <li><a href="linechart.html">line Chart</a></li>
                    <li><a href="piechart.html">pie chart</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('admin/sistem') ?>" aria-expanded="true"><i class="ti-pie-chart"></i><span>Sistem</span></a>
                <ul class="collapse">
                    <li><a href="barchart.html">bar chart</a></li>
                    <li><a href="linechart.html">line Chart</a></li>
                    <li><a href="piechart.html">pie chart</a></li>
                </ul>
            </li>
        </ul>
    <?php elseif ($uri == 'postingan') : ?>
        <ul class="metismenu" id="menu">
            <li>
                <a href="<?= base_url('admin/dashboard'); ?>" aria-expanded="false"><i class="ti-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href="<?= base_url('admin/anggota'); ?>" aria-expanded="true"><i class="ti-user"></i><span>Keanggotaan</span></a>
                <ul class="collapse">
                    <li><a href="<?= base_url('admin/anggota') ?>">Data Anggota</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('admin/keuangan') ?>" aria-expanded="true"><i class="ti-palette"></i><span>Keuangan</span></a>
                <ul class="collapse">
                    <li><a href="grid.html">grid system</a></li>
                </ul>
            </li>
            <li class="active">
                <a href="<?= base_url('admin/postingan') ?>" aria-expanded="true"><i class="ti-pie-chart"></i><span>Postingan</span></a>

            </li>
            <li>
                <a href="<?= base_url('admin/sistem') ?>" aria-expanded="true"><i class="ti-pie-chart"></i><span>Sistem</span></a>
                <ul class="collapse">
                    <li><a href="barchart.html">bar chart</a></li>
                    <li><a href="linechart.html">line Chart</a></li>
                    <li><a href="piechart.html">pie chart</a></li>
                </ul>
            </li>
        </ul>
    <?php elseif ($uri == 'sistem') : ?>
        <ul class="metismenu" id="menu">
            <li>
                <a href="<?= base_url('admin/dashboard'); ?>" aria-expanded="false"><i class="ti-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href="<?= base_url('admin/anggota'); ?>" aria-expanded="true"><i class="ti-user"></i><span>Keanggotaan</span></a>
                <ul class="collapse">
                    <li><a href="<?= base_url('admin/anggota') ?>">Data Anggota</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('admin/keuangan') ?>" aria-expanded="true"><i class="ti-palette"></i><span>Keuangan</span></a>
                <ul class="collapse">
                    <li><a href="grid.html">grid system</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('admin/postingan') ?>" aria-expanded="true"><i class="ti-pie-chart"></i><span>Postingan</span></a>
                <ul class="collapse">
                    <li><a href="barchart.html">bar chart</a></li>
                    <li><a href="linechart.html">line Chart</a></li>
                    <li><a href="piechart.html">pie chart</a></li>
                </ul>
            </li>
            <li class="active">
                <a href="<?= base_url('admin/sistem') ?>" aria-expanded="true"><i class="ti-pie-chart"></i><span>Sistem</span></a>
                <ul class="collapse">
                    <li><a href="barchart.html">bar chart</a></li>
                    <li><a href="linechart.html">line Chart</a></li>
                    <li><a href="piechart.html">pie chart</a></li>
                </ul>
            </li>
        </ul>
    <?php endif; ?>
</nav>