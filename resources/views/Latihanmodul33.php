<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php latihan 3 </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="pesantiket.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link href="css/style.css" rel="stylesheet">
  
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
		
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="Latihanmodul3.php"><span>Pesankereta.com</span></a>
			</div>
			<div class="navbar-collapse collapse">							
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"  class="active"><a href="Latihanmodul3.php">Home</a></li>
						<li role="presentation"><a href="Latihanmodul32.php">Pesan Tiket</a></li>
											
					</ul>
				</div>
			</div>			
		</div>
	</nav>
   
<div id="isi">
<div id="gbox">
          <div id="gbox-top"> </div>
          <div id="gbox-bg">
            <div id="gbox-grd">
              <?php 
                 
$kebaca=true;
$angka=0;
$tandafile=1;

 $num=0;
 $dir=opendir("./");
      while(($file=readdir($dir))!==false)
      {
        if($file!="." AND $file!="..")
       {
        $info=pathinfo($file);
        if (array_key_exists('extension', $info)){ //buat menghindari detek extension css (ga bisa dibaca extensionya)
            $exten=$info["extension"]; 
        
    $name=$info['filename'];
      if($exten=="txt")
     {
    $num++;}
        }
      
       }
     }
  closedir($dir);


//  $directory = new DirectoryIterator(__DIR__);
//  $num = 0;
//  foreach ($directory as $fileinfo) {
//           if ($fileinfo->isFile()) {
//       if($fileinfo->getExtension() == 'txt')
//              $num++;
//      }
//  }
$num=$num+1;

$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jumlahpesan=$_POST['jumlahpesan'];
$hargapesan=$_POST['hargatotal'];
$bayar=$_POST['hargabayar'];
$gender=$_POST['gender'];
$ktp=$_POST['ktp'];

echo "<H3>Terimakasih Sudah memesan &nbsp;".$nama."</H3>";
$filecoba=fopen($nama.'.txt','w');

$kembali=$bayar-$hargapesan;

fwrite($filecoba,"No. Kursi      :".$num."\r\n");
fwrite($filecoba,"No. Ktp        :".$ktp."\r\n");
fwrite($filecoba,"Nama Pemesan   :".$nama."\r\n");
fwrite($filecoba,"Jenis Kelamin  :".$gender."\r\n");
fwrite($filecoba,"Alamat         :".$alamat."\r\n");
fwrite($filecoba,"Pembayaran     :".$bayar."\r\n");
fwrite($filecoba,"Kembali        :".$kembali."\r\n");
fclose($filecoba);
echo"<br></br>";
echo "File pesanan sudah berhasil disimpan,nomor kursi anda :".$num;
echo"<br></br>";
echo "<a href=\"Latihanmodul3.php\">Kembali ke halaman utama</a> ";
?>
</div>
</div>
</div>
</div>

	

<script type="text/javascript">

    function hitung()
    {
        var harga=parseInt(document.getElementById("pesanan").value);   
        harga=harga*90000;
        document.getElementById("hargapesanan").value="Rp."+harga;
    }
    function validasi(form)
    {
        if(form.nama.value=="" || form.gender.value=="" || form.alamat.value==""  || form.jumlahpesan.value==""  || form.hargabayar.value=="" || isNaN(form.hargabayar.value)==true )
        { 
            document.getElementById("error").innerHTML="Ada kesalahan memasukan data";
         
            return(false);
        }
        else
        { 
            var hargabayar=parseInt(document.getElementById("valuebayar").value); 
            var harga=parseInt(document.getElementById("pesanan").value);   
             harga=harga*90000;
          if(hargabayar<harga)
          {
            document.getElementById("error").innerHTML="Total bayar kurang";
            return(false);
          }
            return(true);
       
        }
             
    }
</script>
  </body>
  </html>