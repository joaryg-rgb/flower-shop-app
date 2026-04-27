<?php

$roseQuantity = (int)$_POST["rose_quantity"];
$tulipQuantity = (int)$_POST["tulip_quantity"];
$lilyQuantity = (int)$_POST["lily_quantity"];
$peonyQuantity = (int)$_POST["peony_quantity"];

$rosePrice = 10;
$tulipPrice = 5;
$lilyPrice = 8;
$peonyPrice = 9;

$roseTotal = $roseQuantity * $rosePrice;
$tulipTotal = $tulipQuantity * $tulipPrice;
$lilyTotal = $lilyQuantity * $lilyPrice;
$peonyTotal = $peonyQuantity * $peonyPrice;

$total = $roseTotal + $tulipTotal + $lilyTotal + $peonyTotal;

echo "<h2>Order Summary</h2>";

if ($roseQuantity > 0) {
    echo "Roses: $roseQuantity x $rosePrice PLN = $roseTotal PLN<br>";
}

if ($tulipQuantity > 0) {
    echo "Tulips: $tulipQuantity x $tulipPrice PLN = $tulipTotal PLN<br>";
}

if ($lilyQuantity > 0) {
    echo "Lilies: $lilyQuantity x $lilyPrice PLN = $lilyTotal PLN<br>";
}

if ($peonyQuantity > 0) {
    echo "Peonies: $peonyQuantity x $peonyPrice PLN = $peonyTotal PLN<br>";
}

if ($total == 0) {
    echo "No flowers selected.";
} else {
    echo "<br><strong>Total price: $total PLN</strong>";
}

?>