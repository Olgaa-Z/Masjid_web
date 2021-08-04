<?php

class Currency_m  extends Ci_Model{

    //put your code here
    public function rp($angka) {
        $rupiah = number_format($angka, 0, ',', '.');
        return $rupiah;
    }

    public function rps($angka) {
        $rupiah = number_format($angka, 0, ',', '.');
        return "Rp " . $rupiah;
    }
}