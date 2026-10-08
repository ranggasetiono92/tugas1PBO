<?php
class Mahasiswa {
    private string $nama;
    private string $nim;
    private int $umur;

    // Constructor PHP menggunakan parameter opsional untuk meniru
    // constructor overloading pada Java.
    public function __construct(
        string $nama = "Rangga Prataya Setiono Putro",
        string $nim = "4525210131",
        int $umur = 20
    ) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->umur = $umur;
    }

    public function getNama(): string {
        return $this->nama;
    }

    public function setNama(string $nama): void {
        $this->nama = $nama;
    }

    public function getNim(): string {
        return $this->nim;
    }

    public function setNim(string $nim): void {
        $this->nim = $nim;
    }

    public function getUmur(): int {
        return $this->umur;
    }

    public function setUmur(int $umur): void {
        $this->umur = $umur;
    }

    public function tampilkanInfo(): void {
        echo "Nama: " . $this->nama . "\n";
        echo "NIM: " . $this->nim . "\n";
        echo "Umur: " . $this->umur . "\n";
    }
}
