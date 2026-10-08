<?php
require_once 'Smartphone.php';
require_once 'FeaturePhone.php';

$daftarHandphone = [
    new Smartphone("Iphone", "18 Pro Max"),
    new FeaturePhone("Infinix", "NOTE 50X")
];

foreach ($daftarHandphone as $hp) {
    $hp->nyalakan();
    $hp->telepon("089237372612");
    $hp->matikan();
    echo "\n";
}

foreach ($daftarHandphone as $hp) {
    if ($hp instanceof Smartphone) {
        $hp->aksesInternet();
    } elseif ($hp instanceof FeaturePhone) {
        $hp->mainGameSnake();
    }
}
