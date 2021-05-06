<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $description = $_POST['des'];
    $price = $_POST['price'];
    $percent = $_POST['percent'];
}
function calculate($price, $percent) {
    $discountAmount = $price * $percent * 0.1;
    $discountPrice = $price - $discountAmount;
    echo "<p>Discount Amount: " . $discountAmount . "</p><br>" . "<p>Discount Price: " . $discountPrice . "</p>";
}
calculate($price,$percent);