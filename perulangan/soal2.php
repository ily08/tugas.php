<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <h1>Pengulangan Segitiga</h1>
        <form action="soal2.php" method="post">
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        1.segitiga siku siku
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        2.Segitiga Sama kaki Terbalik
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        3.segita siku siku angka terbalik
                    </td>
                </tr>
                <tr>
                    <td>Pilih</td>
                    <td>:</td>
                    <td><input type="number" name="pilih"></td>
                </tr>
                <tr>
                    <td>Input Bilangan</td>
                    <td>:</td>
                    <td><input type="number" name="input"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="kirim" value="KIRIM">
                    </td>
                </tr>
            </table>
        </center>
    </form>
<?php

if (isset($_POST ['kirim'])){
    $pilih = $_POST ['pilih'];
    $angka = $_POST ['input'];


    if ($pilih == 1) {
        
        echo "<h3>segitiga siku siku<h3/>";
        for ($i = 1; $i <= $angka; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "&nbsp";
                echo "$j";
            }
            echo "<br>";
        }
        
        echo "</center>";
    }elseif ($pilih == 2) {
        echo "<center>";
        echo "<h3>Segitiga Sama Kaki Terbalik</h3>";
        for ($x = $angka; $x >= 1; $x--){
            for ($v = $angka; $v > $x; $v--){
                echo " ";
            }for ($c = 1; $c <= $x; $c++){
                echo "$c ";
            }
            echo "<br>";
        }
        echo "</center>";
    }elseif ($pilih == 3){
        echo "<h3>Segitiga siku siku angka terbalik</h3>";
        for ($i = $angka; $i >= 1; --$i) {
            for ($j = $angka; $j >= $i; --$j) {
                echo "$j &nbsp";
            }
            echo '<br>';
        }
    }
}
?>
</body>
</html>