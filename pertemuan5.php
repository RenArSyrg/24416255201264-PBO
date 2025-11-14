<?php

class Hewan {

    public int $jumlahKaki;

    // constructor (dipanggil saat object dibuat)
    public function __construct() {
        echo 'Hewan ini diciptakan Tuhan' . PHP_EOL;
    }

    // method berjalan
    public function berjalan() {
        echo 'Hewan ini berjalan dengan ' . $this->jumlahKaki . ' kaki' . PHP_EOL;
    }

    // destructor (dipanggil saat object dimusnahkan)
    public function __destruct() {
        echo 'Hewan ini meninggal' . PHP_EOL;
    }
}

// buat object kucing
$kucing = new Hewan();

// menampilkan hasil constructor
$kucing->jumlahKaki = 4;

// menjalankan kode selanjutnya
$kucing->berjalan();
