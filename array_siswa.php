<?php
$ns1 = ['id' =>1, 'nim'=>'0110122038','uts'=>80,'uas'=>86,'tugas'=>78];
$ns2 = ['id' =>2, 'nim'=>'0110122037','uts'=>82,'uas'=>90,'tugas'=>88];
$ns3 = ['id' =>2, 'nim'=>'0110122036','uts'=>85,'uas'=>98,'tugas'=>98];
//simpan seluruh data variable array assosiatif ke dalam array indexing
$ar_nilai = [$ns1,$ns2,$ns3];
?>

<!--codingan HTML-->
<h3 style="text-align: center; color:red">Daftar Nilai Siswa</h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <td>No</td>
            <td>NIM</td>
            <td>UTS</td>
            <td>UAS</td>
            <td>Tugas</td>
            <td>Nilai Akhir</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_nilai as $nilai){
        echo '<tr><td>' .$nomor. '</td>';
        echo '<td>' .$nilai['nim']. '</td>';
        echo '<td>' .$nilai['uts']. '</td>';
        echo '<td>' .$nilai['uas']. '</td>';
        echo '<td>' .$nilai['tugas']. '</td>';
        echo '<tr>';
        $nomor++;
        }
        ?>
    </tbody>
</table>