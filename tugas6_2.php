<?php
$hargaJambu = 15000;
$hargaPerDus = 2000;
$terdapatDus = 6;
$beratDus = 5;
$totalHargaJambu = $terdapatDus * $beratDus * $hargaJambu;
$totalHargaDus = $terdapatDus * $hargaPerDus;
$hargaSeluruhnya = $totalHargaJambu + $totalHargaDus;

echo("
<p>
  =========================================<br/>
  Harga Jambu = $hargaJambu / Kg <br/>
  Harga Kardus = $hargaPerDus / pcs <br/>
  Total Penjualan (Dus dan Jambu) = Rp $hargaSeluruhnya <br/>
  =========================================<br/>
</p>
");
 ?>
