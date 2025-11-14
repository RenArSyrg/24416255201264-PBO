<?php

class Hewan {
    // property
    public string $mata;
    public bool $kaki;
    public int $jumlahKaki;

    // constant
    public const BERNAFAS = 'Semua hewan bernafas';
}

$kucing = new Hewan();

// mengisi property
$kucing->mata = 'biru';
$kucing->kaki = true;
$kucing->jumlahKaki = 4;

// menampilkan data
echo $kucing->mata . PHP_EOL;
echo $kucing->kaki . PHP_EOL;
echo $kucing->jumlahKaki . PHP_EOL;
echo Hewan::BERNAFAS . PHP_EOL;
