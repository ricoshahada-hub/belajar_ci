<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                    <h4>Profil Pengguna</h4>
                    <ul>
                        <li><strong>Username:</strong> <?= esc($username) ?></li>
                        <li><strong>Role:</strong> <?= esc($role) ?></li>
                        <li><strong>Email:</strong> <?= esc($email ?? '-') ?></li>
                        <li><strong>Waktu Login:</strong> <?= esc($waktu_login ?? '-') ?></li>
                        <li><strong>Status Login:</strong> <?= $isLoggedIn ? 'Sudah Login' : 'Belum Login' ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>