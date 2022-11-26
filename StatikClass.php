<?php
use phpDocumentor\Reflection\Types\Static_;

class Statik
{
    public static string $angka;

    public function __construct($angka)
    {
        self::$angka = $angka;
    }

    public static function countStatik()
    {
        self::$angka ++;
        echo self::$angka . PHP_EOL;
    }
}

$statik = new Statik(0);
$statik->countStatik();
$statik->countStatik();
$statik->countStatik();
$statik->countStatik();
$statik->countStatik();
$statik->countStatik();
$statik->countStatik();
