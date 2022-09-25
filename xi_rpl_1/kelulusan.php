<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        <input type ="text" name="nama" id="" placeholder = "Nama Siswa"><br><br>
        <input type ="text" name="mat" id="" placeholder = "Nilai Matematika"><br><br>
        <input type ="text" name="bing" id="" placeholder = "Bahasa Inggris"><br><br>
        <input type ="text" name="bin" id="" placeholder = "Bahasa Indonesia"><br><br>
        <input type ="text" name="prod" id="" placeholder = "Produktif"><br><br>
        <input type ="submit" name = "Hitung" value="Olah Data">
        </form>
        <hr>
        <center><h2>Hasil</h2><center>
            <?php
            if (isset ($_POST['Hitung'])){
                $nama = $_POST['nama'];
                $mat  = $_POST['mat'];
                $bing  = $_POST['bing'];
                $bin  = $_POST['bin'];
                $prod  = $_POST['prod'];

                $total = $mat + $bing + $bin + $prod;
                $na = $total / 4;
                echo "Total Nilai = ".$total."<br />Nilai Rata Rata = ".$na."<br />";
                if ($na >= 75) {
                    echo $nama." Dinyatakan lulus";
                }else{
                    echo $nama." Dinyatakan Tidak Lulus";
                }
            }
            
            ?>
</body>
</html>