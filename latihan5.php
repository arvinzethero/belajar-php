<!-- latihan  function -->
 <?php
 date_default_timezone_set("Asia/Jakarta"); //untuk menampilkan waktu()

function salam($nama = "Admin") {
   $jam = date("H");
   if($jam >= 5 && $jam < 10) {
       $waktu = "Pagi";
   } else if($jam >= 10 && $jam < 15) {
       $waktu = "Siang";
   } else if($jam >= 15 && $jam < 18) {
       $waktu = "Sore";
   } else {
       $waktu = "Malam";
   }
    return "Selamat $waktu, $nama";
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
 </head>
 <body>
    <h1><?= salam(); ?></h1>
 </body>
 </html>