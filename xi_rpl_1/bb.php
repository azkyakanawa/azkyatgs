<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Berat Badan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Aplikasi Hitung Berat Badan</a>
    </div>
    </nav>
    <form method = 'post'>
        <div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
            <select name="gender" class="form-select" aria-label="Disabled select example">
                <option>Jenis Kelamin</option>
                <option value="Lakilaki">Laki-Laki</option>
                <option value="Wanita">Wanita</option>
            </select>
            <div class="row g-3 mt-1">
                <div class="col">
                    <input type="text" name="bb" class="form-control" placeholder="Berat Badan" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" name="tb" class="form-control" placeholder="Tinggi Badan" aria-label="Last name">
                </div>
            </div>
            <input style="margin-left: 90%" type="submit" name="submit" class="btn btn-success mt-3" value="Submit">
        </div>
    </form>
</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        $gender = $_POST['gender'];
        $berat = $_POST['bb'];
        $tinggi = $_POST['tb'];

        if ($gender == 'Wanita') {
            if ($tinggi < 0) {
                echo '<div class="alert alert-danger" role="alert">
                    Tinggi Yang Di Inputkan Tidak Valid
                  </div>';
            } else {
                $pIdeal = (($tinggi - 100) - (0.15 * ($tinggi - 100)));
                $pIdeal = round($pIdeal, 0);
                if ($berat < 0) {
                    echo '<div class="alert alert-danger" role="alert">
                    Berat Yang Di Inputkan Tidak Valid
                  </div>';
                } elseif ($berat == $pIdeal) {
                    echo '<div class="alert alert-success" role="alert">
                    Berat Badan Anda Ideal!
                  </div';
                } else {
                    $req = $pIdeal - $berat;
                    echo '<div class="alert alert-danger" role="alert">
                    Berat Badan Anda Kurang Ideal Perlu ' .$req. ' kg untuk mencapai Berat Ideal
                  </div>';
                }
            }
        } else if ($gender == 'Lakilaki') {
            if ($tinggi < 0) {
                echo '<div class="alert alert-danger" role="alert">
                    Tinggi Yang Di Inputkan Tidak Valid
                  </div>';
            } else {
                $lIdeal = (($tinggi - 100) - (0.10 * ($tinggi - 100)));
                $lIdeal = round($lIdeal, 0);
                if ($berat < 0) {
                    echo '<div class="alert alert-danger" role="alert">
                    Berat Yang Di Inputkan Tidak Valid
                  </div>';
                } elseif ($berat == $lIdeal) {
                    echo '<div class="alert alert-success" role="alert">
                    Berat Badan Anda Ideal!
                  </div';
                } else {
                    $req = $lIdeal - $berat;
                    echo '<div class="alert alert-danger" role="alert">
                    Berat Badan Anda Kurang Ideal Perlu ' .$req. ' kg untuk mencapai Berat Ideal
                  </div>';
                }
            }
        }
    }
    
?>