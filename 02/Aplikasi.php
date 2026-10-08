<?php
require_once 'Mahasiswa.php';

$Anggun = new Mahasiswa();
$Anggun->tampilkanInfo();

$Anggun->setNama("Anggun Purnamasari");
echo "Nama : " . $Anggun->getNama() . "\n";

$Anggun->setNim("4523210104");
echo "NIM : " . $Anggun->getNim() . "\n";

$Anggun->setUmur(15);
echo "Umur : " . $Anggun->getUmur() . "\n";

// Constructor lengkap
$nenden = new Mahasiswa("Neneng ", "4523210145", 19);
$nenden->tampilkanInfo();
