<?php
// Tinh tong tu 1 den 100
$tong = 0;
for ($i = 0; $i <= 100; $i++) {
    if ($i > 50) break;
    $tong += $i;
}
echo "i: $i<br>";
echo "Tong: $tong";
?>