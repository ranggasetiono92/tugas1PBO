// Kelas Main untuk menjalankan program
public class Aplikasi {
    public static void main(String[] args) {
        // // Menggunakan constructor tanpa parameter
        // Mahasiswa mhs1 = new Mahasiswa();
        // mhs1.tampilkanInfo();

        // System.out.println();

        // // Menggunakan constructor dengan 2 parameter
        // Mahasiswa mhs2 = new Mahasiswa("Budi", "12345678");
        // mhs2.setUmur(20); // Mengatur umur menggunakan setter
        // mhs2.tampilkanInfo();

        // System.out.println();

        // // Menggunakan constructor dengan 3 parameter
        // Mahasiswa mhs3 = new Mahasiswa("Siti", "87654321", 22);
        // mhs3.tampilkanInfo();

        Mahasiswa Rangga = new Mahasiswa();
        Rangga.tampilkanInfo();

        // memberikan value Rangga Purnamasari ke property nama dari objek Rangga
        Rangga.setNama("Rangga Purnamasari");
        System.out.println("Nama : " + Rangga.getNama());

        Rangga.setNim("4523210104");
        System.out.println("NIM : " + Rangga.getNim());

        Rangga.setUmur(15);
        System.out.println("Umur : " + Rangga.getUmur());

        // Constructor lengkap
        Mahasiswa nenden = new Mahasiswa("Nenden Nuraini", "4523210144", 17);
        nenden.tampilkanInfo();
    }
}