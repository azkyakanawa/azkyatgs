<?php
    echo "<form action = 'proses_coba.php'>";
    echo "Pilih Operator <select name = 'operator'>
    <option>Penjumlahan</option>
    <option>Pengurangan</option>
    <option>Perkalian</option>
    <option>Pembagian</option>
    <option>Modulus</option>
    </select>";
    echo "<p>Masukkan bilangan pertama : <input type = 'number' name = 'pertama'/></p>";
    echo "<p>Masukkan bilangan kedua : <input type = 'number' name = 'kedua'/></p>";
    echo "<input type = 'submit' value = 'Hitung'>";
    echo "</form>";
?>