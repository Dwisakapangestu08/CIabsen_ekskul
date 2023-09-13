<?= $this->extend('layouts/template.php'); ?>


<?= $this->section('konten'); ?>
<div class="container mt-5 mb-5">
    <div class="row centerDiv">
        <div class="col-sm-12 my-auto">
            <div class="card border-0">
                <div class="row shadow-lg bg-body-tertiary rounded p-5">
                    <div class="col-md-6">
                        <div class="card-body text-center">
                            <img src="/img/smk.jpg" class="img-fluid mt-2 rounded" width="55%;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <div class="mb-5 text-center">
                                <h2 class="h5 mt-2">Login</h2>
                            </div>
                            <form action="cek-login.php" method="post">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Username">
                                    <div id="emailHelp" class="form-text">fill in your username</div>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                    <div id="emailHelp" class="form-text">fill in your password</div>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">LOGIN</button>
                                <div class="mb-1 mt-4 text-center">
                                    <a class="link" href="opsiEkskul.php">BUKAN GURU</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>