<?php

class Hewan {

    public int $jumlahKaki;

    // method biasa
    public function berjalan() {
        echo 'Hewan ini berjalan dengan ' . $this->jumlahKaki . ' kaki';
    }

    // static method
    public static function info() {
        echo 'Ini adalah static method dari class Hewan';
    }
}

// buat object kucing
$kucing = new Hewan();
$kucing->jumlahKaki = 4;

// panggil method biasa
$kucing->berjalan();
echo PHP_EOL;

// panggil static method
Hewan::info();
