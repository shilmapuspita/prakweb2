<?php
function kelulusan ($_nilai){
// jika nilai rata-rata siswa di bawah 55 maka tidak lulus
// jika nilai rata-rata diatas 55 maka lulus
    if ($_nilai <= 55 ){
         return 'Tidak Lulus';
     }else{
         return 'Anda Lulus';
 }
}

// 1. buat fungsi grade, lalu kasih ket:
// jika nilai diatas 85 -100 grade A
// jika nilai diatas 70-84 grade B
// jika nilai diatas 56-69 grade C
// jika nilai diatas 36-55 grade D
// jika nilai diatas 10-35 grade E
// jika tidak ada nilai cetak I (anda tidak ada nilai)
function grade($_nilai){
    if ($_nilai >= 85){
        return "A";
    }elseif ($_nilai >= 70){
        return "B";
    }elseif ($_nilai >= 56){
        return "C";
    }elseif ($_nilai >= 36){
        return "D";
    }elseif ($_nilai >= 10){
        return "E";
    }else{
        return "I(Tidak ada nilai)";
    }
    
}
?>