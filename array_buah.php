<?php
//cara penulisan array indexed
$buah = ['pisang', 'mangga', 'jeruk', 'alpukat'];
echo $buah[1];

//cetak jumlah buah
echo '<br>Jumlah buah ' .count($buah);

//cetak seluruh buah
echo "<ol>";
foreach($buah as $fruit){
   echo "<li>$fruit</li>";
}
echo "</ol>";

//=====================================
//tambahkan buah baru ke dalam array
$buah [] = "durian";

//ubah buah index ke 1
$buah[1] = "apel";

//cetak seluruh buah
echo "<ol>";
foreach($buah as $buas){
   echo "<li>$buas</li>";
}
echo "</ol>";
?>