<?php

// namespace
namespace Binatang;

// class dengan access modifier
class Hewan {

    public string $nama;      // bisa diakses dari luar class
    protected int $umur;      // hanya bisa diakses di class/child
    private string $jenis;    // hanya class ini sendiri

    public function __construct($nama, $umur, $jenis) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jenis = $jenis;
    }

    public function info() {
        echo "Nama: $this->nama" . PHP_EOL;
        echo "Umur: $this->umur tahun" . PHP_EOL;
        echo "Jenis (private): $this->jenis" . PHP_EOL;
    }
}


namespace Aplikasi;

use Binatang\Hewan;   // import class dengan namespace

$kucing = new Hewan("Kitty", 2, "Mamalia");
$kucing->info();
