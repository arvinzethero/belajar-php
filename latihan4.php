<!-- Latihan function dan tanggal -->
 <?php
//  Date
// Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

// Time
// echo time();
// echo date("l", time() - 60 * 60 * 24 * 1);
// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l",mktime(0,0,0,10,11,1995)); 

// strtotime
echo date("l",strtotime("10 nov 1998"));
 ?>