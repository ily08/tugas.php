<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table align="center">
            <tr>
                <td><select name="perulangan" id="">
                    <option selected>Pilih Perulangan</option>
                    <option value="1">For</option>
                    <option value="2">Do While</option>
                    <option value="3">Do While segitiga siku</option>
                    <option value="4">Do While Segitiga Sama Kaki</option>
                    <option value="5">Do While Segitiga Sama Kaki Terbalik</option>
                    </select></td>
                    <td><input type="submit" value="Kirim" name="proses"></td><hr>
            </tr>
        </table>
    </form>
</body>
</html>



<?php

for ($a=0; $a<10; $a++){
    echo"*";
}
echo "<br>";

for ($a=0; $a<10; $a++){
    echo"ini perulangan ke-$a <br>";
}

for ($a = 1; $a < 10; $a++){
    for ($s = 1; $s <= $a; $s++){
        echo "$s";
    }
    echo "<br>";
}
echo "<center>";
for( $a=10; $a>0; $a--){
    for($i=1; $i<=$a; $i++){
        echo "  ";
    }for($a1=10; $a1>$a; $a1--){
        echo"x";
    }for($a2=11; $a2>$a; $a2--){
        echo"x";
    }echo"<br>";
}

?>