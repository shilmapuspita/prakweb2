<!-- model dlm mvc berfungsi sbg otak dr apk krn memproses data aturan bisnis yg terkait dgn database -->
<?php
class Vendor{
    private $koneksi;


    public function __construct(){
        //sebuah awalan function
        global $conn;
        $this->koneksi = $conn;
    }
    public function TampilVendor(){
        // select semua kolom yg ada di dlm table produk
        $sql = "SELECT * FROM vendor";
        // kirim data select menggunakan method prepare
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data select yg sdh disiapkan menggunakan method prepare menggunakan method execute
        $ps->execute();
        // si,pan data sql yg sdh dieksekusi ke dlm data array menggunakan method fetchall
        $data = $ps->fetchAll();
        // kembalikan data produk yg dlm bentuk data array yg sdh di simpan ke dlm variable $data
        return $data;
    }
}
?>