<?php
require_once 'MahasiswaInternational.php';

$mhsInt1 = new MahasiswaInternational();
$mhsInt1->setNama("Rangga Prataya Setiono Putro");
$mhsInt1->setNim("4525210131");
$mhsInt1->setUmur(20);
$mhsInt1->setNegaraAsal("Indonesia");
$mhsInt1->tampilkanInfo();

echo "\n";

$mhsInt2 = new MahasiswaInternational("Sahru Khan", "4525210132", "India");
$mhsInt2->setUmur(21);
$mhsInt2->tampilkanInfo();

echo "\n";

$mhsInt3 = new MahasiswaInternational("Kevin", "4525210133", 29, "USA");
$mhsInt3->tampilkanInfo();
