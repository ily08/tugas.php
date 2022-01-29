<?php

for ($i = 10; $i >= 1; --$i) {
    for ($j = 10; $j >= $i; --$j) {
        echo "$j &nbsp";
    }
    echo '<br>';
}

?>