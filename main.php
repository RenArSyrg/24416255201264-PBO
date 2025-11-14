<?php

class Hewan {

    public string $mata;
    public bool $kaki;
    public int $jumlahKaki;

    public const BERNAFAS = "Semua hewan bernafas";

    public function __construct() {
        echo "Object Hewan dibuat" . PHP_EOL;
    }

    public function berjalan() {
        echo "Hewan ini berjalan dengan $this->jumlahKaki kaki" . PHP_EOL;
    }

    public static function infoUmum() {
        echo "Ini adalah method static Hewan" . PHP_EOL;
    }

    public function __destruct() {
        echo "Destructor dijalankan (object musnah)" . PHP_EOL;
    }
}

// buat object
$kucing = new Hewan();
$kucing->mata = "kuning";
$kucing->kaki = true;
$kucing->jumlahKaki = 4;

echo Hewan::BERNAFAS . PHP_EOL;
$kucing->berjalan();
Hewan::infoUmum();
