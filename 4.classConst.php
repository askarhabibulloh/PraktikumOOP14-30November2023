<?
//cara akses class const dari dalam class
class Produk{
  public $hargaUSD = 0;
  private const KURSUSD = 15000;

  public function hargaIDR(){
    return $this->hargaUSD * self::KURSUSD;
  }

}

$produk = new Produk();
$produk->hargaUSD = 15;

echo $produk->hargaIDR().PHP_EOL;
