<!DOCTYPE html>
<html>
<head>
	<title>belajarphp</title>

</head>
<body>
	<?php echo "OGHEY"; ?>
<h1>konstanta</h1>
<?php  
	define ('konstanta','konstanta adalah tetapan nilai dalam aplikasi');
    define ('phi','3.14');

    //identifier
    /*Identifief adalah sebutan laim untuk nama suatu variabel
    - Dimulai dengan tanda doalar $
    -Karakter berikutnya dapat berupa huruf,angka, atau underscore
    -Bersifat Case sensitive
    -Karakter setelah tanda dolar adalah huruf atau underscore
    */
    $r = 18;
    echo "<p>Menghitung Luas Lingkaran</p>";
    echo "<p>Jari-jari : " . $r . "</p>";
    $luas = PHI * $r * $r;
    echo "<p>Luas Lingkaran : " . $luas . "</p>";
    echo "<h1>Tipe Data</h1>";
    echo "<h3>integer</h3>";
    echo "<p>Digunakan untuk menyimpan bilangan bulat</p>";
    $a = 18; //variable $a memiliki tipe data integer
    echo $a;
    echo "<h3>Double</h3>";
    $b = 16.05; //variabel $b memiliki tipe data double
    echo $b;
    echo "<h3>Boolean</h3>";
    $jawaban = TRUE;
    echo $jawaban;
    echo "<h3>string</h3>";
    $c = "BElajar php"; //bariabel $c memiliki tipe data string
    echo $c;
    echo "<h3>String</h3>";
    echo "<p>digunakan untuk menyimpan data</p>";
    $hari[0] = "Senin";
     $hari[1] = "Selasa";
      $hari[2] = "Rabu";
       $hari[3] = "Kamis";
        $hari[4] = "Jumat";
         $hari[5] = "Sabtu";
          $hari[6] = "Minggu";
    echo "Sekarang adalah $hari[2] <br/>"; //menampilkan tanpa perulangan for($i=0;$i++){ //menampilkan dengan perulangan 
    echo $hari[$i] . "<br/>";
    }

    <h1>Object</h1>
    <p>Digunakan untuk menyimpan data bertipe object</p>
    </php
    class belajar_rpl();
    echo "pelajaran hari ini adalah".$obj->belajar();

    ?>
    <h1>Operator</h1>
    <p>Operatot digunakan untuk membandingka nilai dari suatu variabel terhadap variabel atau nilai yang lain.Beberapa operator dalam PHP ditunjukka dalam gambar dibawah.</p>
    <img src="operator.JPG">
    <h1>percabangan</h1>
    <p>Terhadap empat tipe percabangan dalam PHP.</p>
    <h4>1. If</h4>
    <p>Digunakan jika terdapat satu alternatif yang harus dipilih.</p>
    <?php
            $d = 8;
            if($d <10){
            	$d = $d + 5;
            	echo $d;
            }
    
?>
<h4>3. If...Elseif</h4>
<p>Digunakan jika terdapat lebih dari dua alternatif yang harus dipilih</p>
<?php
        $nilai =55;
        if ($nilai <60) {
        	echo "Nilai Anda adalah $nilai.Selamat ,Anda Lulus dengan nilai biasa saja!!";
        }elseif($Nilai >=60 && $nilai <80){
        	echo "Nilai Anda adalah $nilai.Selamat ,Anda Lulus dengan nilai lumayan!!";
        }else {
        	echo "SELAMAT ANDA LULUS DENGAN NILAI LUAR BIASA";
        }
    ?>
    <h4>4. Switch</h4>
    <p>Digunakan jika terdapat banyak alternatif yang harus dipilih/diseleksi.</p>
    <?php
         $f = 1;
         switch ($f) {
         	case 1:
         	       echo "RPL";
         	break;
         	case 2:
         	       echo "MM";
         	break;
         	case 3:
         	       echo "TKJ";
         	break;
         	case 4:
         	       echo "AKN";
         	break;                 }
         	?>
         	<h1>perulangan</h1>
         	<h4>1. For</h4>
         	<p>Sintaks Umum</p>
         	<pre>
         		for(nilai awal,nilai akhir,peningkatan/penururnan){
         		statement;
         	}
         </pre>
         <p>contoh</p>
         <?php
              for($g=1; $g <=10; $g++){ 
              	echo $g;
              	echo "<br>"
              }
              ?>
              <h4>2. While</h4>
              <p>Sintaks umum</p>
              <pre>
              	while(kondisi berhenti){
              	statement;
              }
          </pre>
          <p>contoh</p>
          <?php
               $h = 1;
               while ($h <=10){
               	echo $h;
               	echo "<br>";
               	$h=$h+1;
               }
        ?>
        <h4>3. Do...While</h4>
        <p>sintaks umum</p>
        <pre>
        	$i = 1;
        	do{
        	      statement
        }while (kondisi berhenti);
             </pre>
             <p>contoh</p>
             <?php
             $i = 1;
             do{

             	echo "perulangan ke-$i<br>/n";
             	$i++;
             }while($i <=10);
          ?>
          <h1>Cookies</h1>
          <p>Cookies adalah file berukuran sangat kecil yang berada di komputer client (dalam konteks konsep client-server website).File ini berisi data atau informasi tertentu yang berasal dari aktifitas browsing pengunjung website, misalnya informasi login, sejarah website yang dikunjungi, browserdan lain sebagainya. File ini dapat dipanggil kembali ketika pengunjung website membuka website yang sama dan mengunggah informasi yang sama pada saat website dibuka pada waktu lampau. Hal ini memudahkan pengunjung, misalnya tidak perlu login setiap kali membuka sebuah halaman website yang sama.Dalam PHP, sintaks untuk membuat cookies adalah sebagai berikut.</p>
	  <img src="cookies.JPG">
	  <p>Catatan : setcookie() harus diletakkan sebelum tag html</p>
	  <?php
			if(count($_COOKIE) > 0) {
			    echo "Cookies are enabled.";
			} else {
			    echo "Cookies are disabled.";
			}
		?>
	<h1>Session</h1>
	<p>Session memiliki fungsi yang sama dengan cookies.Hanya saja session akan disimpan di server.session adalah mekanisme untuk bertukar informasi antar halaman dalam satu website.</p>
	<?php
		$_SESSION["kelas"] = "RPL";
		echo $_SESSION['kelas'];
	?>

		<h1>Tugas Penilaian </h1>
          	<p>Buatlah suatu kalkulator rumus luas-luas bidang datar (persegi, persegi panjang, segitiga, jajar genjang,layang-layang,belah ketupat, trapesium dan lingkaran). Kalkulator ini memiliki aturan sebagai berikut. Ketika pengguna memasukkan sebuah nilai minus, sistem tidak akan melakukan proses perhitungan dan memunculkan pesan error. </p>
    <ol>
		<li>Dhini = Persegi panjang dan jajar genjang.</li>
		<li>Noel = layang-layang, Belah ketupat.</li>
		<li>Roni = Persegi dan segitiga.</li>
		<li>Syafwan = lingkaran, trapesium.</li>
	</ol>
	<?php
	uses crt:
	var d1,d2,L:real;
	begin
	clrscr;
	write('masukkan Diagonal1 Layang-layang(cm):'):Readln(d1);
	write('masukkan Diagonal1 Layang-layang(cm):'):Readln(d2);
         L:=1/2*d1*d2;
         writeln;
         writeln('Luas Layang-layang:',L:10:1,'cm2');
         readln;
</body>
</html>  