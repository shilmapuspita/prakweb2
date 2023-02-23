<?php
//cara penulisan array assosiatif
$buah = ["p"=>'pisang', "m"=>'mangga',"j"=> 'jeruk'];
//mencetak array dengan foreach
echo "<ol>";
foreach ($buah as $fruit => $k) {
   echo "<li> $fruit - $k </li>";
}
echo "</ol>";

?>