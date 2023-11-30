<?
//class const tidak bisa diakses dari object
class Produk{
  public const KURSUSD = 15000;

}

$produk = new Produk();
echo $produk->KURSUSD;