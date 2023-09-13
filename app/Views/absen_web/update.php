<?php $this->extend('layouts/template'); ?>


<?php $this->section('konten'); ?>

<div class="container mt-5 mb-5">
    <div class="row shadow-lg bg-body-tertiary rounded p-2">
        <div class="card border-0">
            <h2><?= $title; ?></h2>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo $absen['id'] ?>">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" value="<?php echo $absen['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control" value="<?php echo $absen['kelas'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-info">
                        <a href="/absen_web" class="kembali">
                            Kembali
                        </a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>