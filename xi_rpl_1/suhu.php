<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Konversi Suhu</a>
    </div>
    </nav>
    <form method = 'post'>
        <div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
            <input type ="text" name="input" class="form-control" placeholder="masukkan nilai">
            <select name="pilihan" class="mt-3 form-select" aria-label="Disabled select example">
                <option>Satuan Nilai</option>
                <option value="celcius">Celcius</option>
                <option value="farenhit">Farenhit</option>
                <option value="reamur">Reamur</option>
                <option value="kelvin">Kelvin</option>
            </select>  
            <input style="margin-left: 90%" type="submit" name="submit" class="btn btn-success mt-3" value="Submit">
        </div>
    </form>
</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        $x = $_POST['input'];
        $y = $_POST['pilihan'];
        $C = "";
        $F = "";
        $R = "";
        $K = "";

        if ($y == "celcius") {
            $C = $x;

            $R = (4 / 5) * $x;

            $K = $x + 273;

            $F = (9 / 5 * $x + 32);

            echo '<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
            <h3>Hasil Konversi</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Celcius</th>
                        <th scope="col">Reamur</th>
                        <th scope="col">Kelvin</th>
                        <th scope="col">Farenheit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>' .$C. '</td>
                        <td>' .$R. '</td>
                        <td>' .$K. '</td>
                        <td>' .$F. '</td>
                    </tr>
                </tbody>
            </table>
        </div>';
           
     
        }elseif ($y == "reamur") {
            $C = (5 / 4) * $x;
            
            $R = $x;

            $K = (5 / 4) * $x + 273;

            $F = (9 / 4) * $x + 32;

            echo '<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
            <h3>Hasil Konversi</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Celcius</th>
                        <th scope="col">Reamur</th>
                        <th scope="col">Kelvin</th>
                        <th scope="col">Farenheit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>' .$C. '</td>
                        <td>' .$R. '</td>
                        <td>' .$K. '</td>
                        <td>' .$F. '</td>
                    </tr>
                </tbody>
            </table>
        </div>';

        }elseif ($y == "kelvin") {
            $C = $x - 273;

            $R = 4 / 5 * ($x - 273);

            $K = $x;

            $F = 9 / 5 * ($x - 273) + 32;

            echo '<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
            <h3>Hasil Konversi</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Celcius</th>
                        <th scope="col">Reamur</th>
                        <th scope="col">Kelvin</th>
                        <th scope="col">Farenheit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>' .$C. '</td>
                        <td>' .$R. '</td>
                        <td>' .$K. '</td>
                        <td>' .$F. '</td>
                    </tr>
                </tbody>
            </table>
        </div>';

        }elseif ($y == "farenhit") {
            $C = 5 / 9 * ($x-32);

            $R = 4 / 9 * ($x-32);

            $K = 5 / 9 * ($x-32) + 273;

            $F = $x;

            echo '<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
            <h3>Hasil Konversi</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Celcius</th>
                        <th scope="col">Reamur</th>
                        <th scope="col">Kelvin</th>
                        <th scope="col">Farenheit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>' .$C. '</td>
                        <td>' .$R. '</td>
                        <td>' .$K. '</td>
                        <td>' .$F. '</td>
                    </tr>
                </tbody>
            </table>
        </div>';
        }
}
?>