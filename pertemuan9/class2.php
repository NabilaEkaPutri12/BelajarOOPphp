<?php
// Class laptop 
class laptop
{
    var $t_brand;
    var $harga;
    var $aksi;

    // function dalam class laptop
    function setBrand($parameter)
    {
        $this->t_brand = $parameter;
    }
    function setharga($parameter)
    {
        $this->harga = $parameter;
    }
    function setAksi($parameter)
    {
        $this->aksi = $parameter;
    }
}

$tampilkan = new laptop;
$tampilkan->setBrand("Lenovo");
$tampilkan->setharga("7000000");
$tampilkan->setAksi("dinyalakan");

echo "Brand Laptop : " . $tampilkan->t_brand . "<br/>";
echo "Harga Laptop :" . $tampilkan->harga . "<br/>";
echo "Aksi :" . $tampilkan->aksi . "<br>";