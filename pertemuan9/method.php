<?php
class Rumus {
    var $panjang;
    var $lebar; 
    public function hitung_luas()
 {
 $hasil= $this->panjang * $this->lebar;
 return $hasil;
 }
}
$rumus1 = new Rumus;
$rumus1->panjang=10;
$rumus1->lebar=3;
echo $rumus1->hitung_luas(); 
?>