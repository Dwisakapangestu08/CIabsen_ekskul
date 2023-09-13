<?php $this->extend('layouts/template.php'); ?>


<?php $this->section('konten'); ?>
<div class="container mt-4">
    <div class="row mb-2">
        <div class="col">
            <h2><?= $title; ?></h2>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <button type="submit" class="btn btn-danger btn-lg" name="reset" onclick="window.location.reload(true)">Reset</button>
            <button type="submit" class="btn btn-success btn-lg" name="tambah_data">
                <a href="/absen_web/insert" style="text-decoration: none;">
                    Tambah Data
                </a>
            </button>
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success mt-3" role="alert">
                    <?= session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container mb-5 mt-2">
    <div class="row">
        <table class="w3-table-all">
            <thead>
                <tr class="w3-teal">
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Kelas</th>
                    <th scope="col" class="w3-center">Jumlah Kehadiran</th>
                    <th scope="col" class="w3-center">Cek List Absen</th>
                    <th scope="col" class="w3-center">Pilih Aksi</th>
                </tr>
            </thead>
            <?php
            $nomor = 1;
            foreach ($absen as $a) {
                $jml_kehadiran = $a['jml_kehadiran'];
                $id = $a['id'];
            ?>
                <tbody>
                    <tr>
                        <th scope="row"> <?php echo $nomor++ ?></th>
                        <td><?php echo $a['nama'] ?></td>
                        <td><?php echo $a['kelas'] ?></td>
                        <form>
                            <td class="w3-center">
                                <input type="hidden" placeholder="<?php echo $a['jml_kehadiran'] ?>" value="<?= $a['jml_kehadiran'] ?>" name="jml_kehadiran">
                                <?php echo $a['jml_kehadiran'] ?>
                            </td>
                            <td class="w3-center">
                                <input type="hidden" value="<?= $a['id'] ?>" name="id">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type='submit' name='submit' class="w3-button w3-round-large w3-hover-green" onclick="window.location.reload(true)">Absen</button>
                                </div>
                            </td>
                            <td class="w3-center">
                                <button type="submit" class="btn btn-warning">
                                    <a class="edit" href="/absen_web/<?php echo $a['id']; ?>">Edit</a>
                                </button>
                                <button type="submit" class="w3-button w3-round-large w3-red">
                                    <a class="hapus" href="<?php echo $a['id']; ?>">Hapus</a>
                                </button>
                            </td>
                        </form>
                    </tr>
                </tbody>

            <?php
            }

            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $jml_absenn = $_POST['jml_kehadiran'];
                $hasil_absen = $jml_absenn + 1;
            }

            if (isset($_POST['reset'])) {
            }

            // if (isset($_POST['tambah_data'])) {

            // }
            ?>

        </table>
    </div>
</div>
<?php $this->endSection(); ?>