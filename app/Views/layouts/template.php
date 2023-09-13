<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
    <title>Absen Ekskul | SMK BAITUL HIKMAH</title>
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif
        }

        a {
            text-decoration: none;
            color: white;
        }

        .edit {
            color: black;
        }

        .kembali {
            color: black;
        }

        i,
        p {
            color: whitesmoke;
        }
    </style>
</head>

<body class="w3-light-grey">

    <?= $this->include('layouts/navbar'); ?>

    <?= $this->renderSection('konten'); ?>

    <div class="card text-center">
        <div class="card-footer text-body-secondary bg-success">
            <p>Find me on social media and website official.</p>
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity">
                <a href="https://www.instagram.com/websmith__/"></a>
            </i>
            <i class="fa fa-globe w3-hover-opacity"></i>
            <p class="mt-3">copyright &copy;2023 codeOpacity disigned by <span> WEBSMITH_</span></p>
        </div>
    </div>

    <!-- End page content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>