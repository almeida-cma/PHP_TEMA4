<?php 
$x = 501;

do {
    echo "O valor de x é: $x <br>";
    $x+=2;
} while ($x <= 1000);

for ($i = 501; $i <= 1000; $i+=2) {
    echo "<li class='number-item'>$i</li>";
}
?>