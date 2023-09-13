<?= $this->extend('layouts/template'); ?>

<?= $this->section('konten'); ?>
<div class="container mt-5 mb-5">
    <div class="row shadow-lg bg-body-tertiary rounded p-2">
        <div class="card border-0">
            <h2 class="mt-3"><?= $title; ?></h2>
            <div class="card-body">
                <form action="/absen_web/insert/save" method="post" class="mb-3">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Contoh: John Doe" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="kelas" placeholder="Contoh: XA DKV">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-info mx-1">
                        <a href="/absen_web" class="kembali">
                            Kembali
                        </a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>