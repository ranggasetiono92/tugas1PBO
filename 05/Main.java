import java.util.Arrays;

public class Main {
    public static void main(String[] args) {
        /**
         * ASOSIASI
         */
        // object dokter
        Dokter dokter = new Dokter("Dr. Agung");
        // object pasien
        Pasien pasien = new Pasien("Bagus");

        // asosiasi. Pak Dokter merawat Pasien
        dokter.merawat(pasien);

        /**
         * AGREGASI
         */
        // object Pemain Eko
        Pemain pemain1 = new Pemain("Chelsea");
        // object Pemain Diana
        Pemain pemain2 = new Pemain("David");

        // Membuat Tim
        Tim tim = new Tim("Garuda", Arrays.asList(pemain1, pemain2));
        tim.tampilkanPemain();

        /**
         * KOMPOSISI
         */
        // object Buku
        Buku buku = new Buku("Belajar Java");
        buku.tampilkanBab();
        // Jika buku dihancurkan, bab juga ikut hilang
        buku = null;
    }
}
