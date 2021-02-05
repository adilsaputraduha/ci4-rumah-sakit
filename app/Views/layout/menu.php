<?= $this->extend('layout/main')  ?>

<?= $this->section('menu')  ?>

<li>
    <a href="<?= site_url('layout') ?>" class="waves-effect">
        <i class="fa fa-home"></i>
        <span> Beranda </span>
    </a>
</li>

<li class="menu-title">Master</li>
<li>
    <a href="<?= site_url('dokter') ?>" class="waves-effect">
        <i class="fa fa-user-circle-o"></i>
        <span> Dokter </span>
    </a>
</li>
<li>
    <a href="<?= site_url('pasien') ?>" class="waves-effect">
        <i class="fa fa-users"></i>
        <span> Pasien </span>
    </a>
</li>
<li>
    <a href="<?= site_url('ruangan') ?>" class="waves-effect">
        <i class="fa fa-sitemap"></i>
        <span> Ruangan </span>
    </a>
</li>

<li class="menu-title">Transaksi</li>
<li>
    <a href="<?= site_url('rawatinap') ?>" class="waves-effect">
        <i class="fa fa-bed"></i>
        <span> Rawat Inap </span>
    </a>
</li>
<li>
    <a href="index.html" class="waves-effect">
        <i class="fa fa-wheelchair-alt"></i>
        <span> Rawat Jalan </span>
    </a>
</li>

<li>
    <a href="<?= site_url('uas') ?>" class="waves-effect">
        <i class="fa fa-wheelchair-alt"></i>
        <span> Transaksi</span>
    </a>
</li>
<li class="menu-title">Laporan</li>

<?= $this->endSection(' ')  ?>