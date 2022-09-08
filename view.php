<!DOCTYPE html>
<html>
	<head>
		<title>Pendaftaran Siswa Baru</title>
		<!---Cascading Style Sheet--->
		<style>
			.container {
				width: 50%;
				margin: 0 auto;
			}
			body {
				background-color:white;
				font-family:times new roman;
			}
			p{
				font-family:times new roman;
			}
			h2{
			 background-color: #53bd84;
			 padding: 30px 35px;
			 margin: -10px -50px;
			 text-align:center;
			 color: #fff;
			}
			 
			span{
			 display: block;
			 margin-bottom: 20px;
			 color: red;
			}
			 
			.success{
			 display: block;
			 margin-top: 20px;
			 margin-bottom: 0;
			 font-size: 14px;
			} 

			b{
			 color:green;
			}

			hr{
			 margin: 10px -50px;
			 border: 0;
			 border-top: 1px solid #ccc;
			 margin-bottom: 25px;
			}
			 
			div.main{
			 width: 500px;
			 padding: 10px 50px 30px;
			 border: 2px solid gray;
			 font-family: raleway;
			 float:left;
			 margin-top:15px;
			}
			 
			input[type=text]{
			 width: 96%;
			 height: 25px;
			 padding: 5px;
			 margin-bottom: 25px;
			 margin-top: 5px;
			 border: 2px solid #ccc;
			 color: #53bd84;
			 font-size: 16px;
			}
			input[type=date]{
			 width: 96%;
			 height: 25px;
			 padding: 5px;
			 margin-bottom: 25px;
			 margin-top: 5px;
			 border: 2px solid #ccc;
			 color: #53bd84;
			 font-size: 16px;
			}
			input[type=number]{
			 width: 96%;
			 height: 25px;
			 padding: 5px;
			 margin-bottom: 25px;
			 margin-top: 5px;
			 border: 2px solid #ccc;
			 color: #53bd84;
			 font-size: 16px;
			} 
			input[type=radio]{
			 margin: 10px 10px 0 10px;
			} 
			 
			label{
			 color: #53bd84;
			 text-shadow: 0 1px 0 #fff;
			 font-size: 14px;
			 font-weight: bold;
			}
			input[type=file]{
			 background-color: #04AA6D;
			  color: white;
			  padding: 12px 20px;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			  float: left;
			} 
			input[type=submit]{
			 background-color: #04AA6D;
			  color: white;
			  padding: 12px 20px;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			  float: left;	
			}
			input[type=submit]:hover {
				background-color: #45a049;
			}
		</style>
		<!---End of Cascading Style Sheet--->		
		<!---Javascript--->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
			$("input[type=radio]").change(function(){
			 var method = $(this).val();
			 $("#form").attr("method", method); 
			});

			$("#submit").click(function(){ 
				var fnama = $("#fnama").val();
				var lalamat = $("#lalamat").val();
				
				if( fnama != '' || lalamat !='' ){
					return true; 
				}	
				else{
					alert("Tolong diisi...!!!!!!");
					return false;
				}
			});
			});
		</script>
		<!---End of Javascript--->
	</head>	
	<body>
		<div class="container">
			<div class="main">
				<!---Output in Same Page (POST METHOD)--->
				<?php 
				if(isset($_POST['nama']))
				{
				$nama = $_POST['nama'];
				$alamat = $_POST['alamat']; 
				$kota = $_POST['kota']; 
				$kodePos = $_POST['kodePos'];
				$tempatLahir = $_POST['tempatLahir'];
				$tanggalLahir = $_POST['tanggalLahir'];
				$jenisKelamin = $_POST['jenisKelamin']; 
				$anakKe = $_POST['anakKe'];
				$dariBerapaSaudara = $_POST['dariBerapaSaudara'];
				$asalSekolah = $_POST['asalSekolah'];
				$namaAyah = $_POST['namaAyah'];
				$alamatAyah = $_POST['alamatAyah'];
				$pekerjaanAyah = $_POST['pekerjaanAyah'];
				$namaIbu = $_POST['namaIbu'];
				$alamatIbu = $_POST['alamatIbu'];
				$pekerjaanIbu = $_POST['pekerjaanIbu'];
				$diterimadiKelas = $_POST['diterimadiKelas'];
				
				echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
				echo "<pre>";
				echo "<p>Nama	   			   : ".$nama. "</p>";
				echo "<p>Alamat 		 	 	   : ".$alamat. "</p>";
				echo "<p>Kota			 	   : ".$kota. "</p>";
				echo "<p>Kode Pos 		 	   : ".$kodePos. "</p>";
				echo "<p>Tempat dan Tanggal Lahir : ".$tempatLahir. ", " .$tanggalLahir."</p>";
				echo "<p>Jenis Kelamin		 	   : ".$jenisKelamin. "</p>";
				echo "<p>Anak Ke			 	   : ".$anakKe. "</p>";
				echo "<p>Dari Berapa Saudara 	   : ".$dariBerapaSaudara. "</p>";
				echo "<p>Asal Sekolah		 	   : ".$asalSekolah. "</p>";
				echo "<p>Nama Ayah		 	   : ".$namaAyah. "</p>";
				echo "<p>Alamat Ayah		 	   : ".$alamatAyah. "</p>";
				echo "<p>Pekerjaan Ayah		   : ".$pekerjaanAyah. "</p>";
				echo "<p>Nama Ibu		 	   : ".$namaIbu. "</p>";
				echo "<p>Alamat Ibu		 	   : ".$alamatIbu. "</p>";
				echo "<p>Pekerjaan Ibu		 	   : ".$pekerjaanIbu. "</p>";
				echo "<p>Diterima di Kelas	 	   : ".$diterimadiKelas. "</p>";
				echo "</pre>";
				
				$folder = "photos";
				$handle = opendir($folder);
				echo '<table cellspacing="2" cellpadding="5">';
				echo '<tr>';
				$i = 1;
				$fileGambar = array('png', 'jpg', 'jpeg', 'gif');
				while(false !== ($file = readdir($handle))){
					$fileAndExt = explode('.', $file);
					if(in_array(end($fileAndExt), $fileGambar)){
						echo '<td style="border:1px solid #000000;" align="center">
							<img src="photos/'.$file.'" width="100" /><br />
							'.$file.'
						</td>';
						if(($i % 4) == 0){
							echo '</tr><tr>';
						}
						$i++;
					}
				}
				echo '</tr>';
				echo '</table>';
				}
				//<!---End of Output in Same Page (POST METHOD)--->
				//<!---Output in Same Page (GET METHOD)--->
				if(isset($_GET['nama']))
				{
				$nama = $_GET['nama'];
				$alamat = $_GET['alamat']; 
				$kota = $_GET['kota']; 
				$kodePos = $_GET['kodePos'];
				$tempatLahir = $_GET['tempatLahir'];
				$tanggalLahir = $_GET['tanggalLahir'];
				$jenisKelamin = $_GET['jenisKelamin']; 
				$anakKe = $_GET['anakKe'];
				$dariBerapaSaudara = $_GET['dariBerapaSaudara'];
				$asalSekolah = $_GET['asalSekolah'];
				$namaAyah = $_GET['namaAyah'];
				$alamatAyah = $_GET['alamatAyah'];
				$pekerjaanAyah = $_GET['pekerjaanAyah'];
				$namaIbu = $_GET['namaIbu'];
				$alamatIbu = $_GET['alamatIbu'];
				$pekerjaanIbu = $_GET['pekerjaanIbu'];
				$diterimadiKelas = $_GET['diterimadiKelas'];
				
				echo "<span class='success'>Dengan <b>METODE GET</b></span><br/>";
				echo "<pre>";
				echo "<p>Nama	   			   : ".$nama. "</p>";
				echo "<p>Alamat 		 	 	   : ".$alamat. "</p>";
				echo "<p>Kota			 	   : ".$kota. "</p>";
				echo "<p>Kode Pos 		 	   : ".$kodePos. "</p>";
				echo "<p>Tempat dan Tanggal Lahir : ".$tempatLahir. ", " .$tanggalLahir."</p>";
				echo "<p>Jenis Kelamin		 	   : ".$jenisKelamin. "</p>";
				echo "<p>Anak Ke			 	   : ".$anakKe. "</p>";
				echo "<p>Dari Berapa Saudara 	   : ".$dariBerapaSaudara. "</p>";
				echo "<p>Asal Sekolah		 	   : ".$asalSekolah. "</p>";
				echo "<p>Nama Ayah		 	   : ".$namaAyah. "</p>";
				echo "<p>Alamat Ayah		 	   : ".$alamatAyah. "</p>";
				echo "<p>Pekerjaan Ayah		   : ".$pekerjaanAyah. "</p>";
				echo "<p>Nama Ibu		 	   : ".$namaIbu. "</p>";
				echo "<p>Alamat Ibu		 	   : ".$alamatIbu. "</p>";
				echo "<p>Pekerjaan Ibu		 	   : ".$pekerjaanIbu. "</p>";
				echo "<p>Diterima di Kelas	 	   : ".$diterimadiKelas. "</p>";
				echo "</pre>";
				
				$folder = "photos";
				$handle = opendir($folder);
				echo '<table cellspacing="2" cellpadding="5">';
				echo '<tr>';
				$i = 1;
				$fileGambar = array('png', 'jpg', 'jpeg', 'gif');
				while(false !== ($file = readdir($handle))){
					$fileAndExt = explode('.', $file);
					if(in_array(end($fileAndExt), $fileGambar)){
						echo '<td style="border:1px solid #000000;" align="center">
							<img src="photos/'.$file.'" width="100" /><br />
							'.$file.'
						</td>';
						if(($i % 4) == 0){
							echo '</tr><tr>';
						}
						$i++;
					}
				}
				echo '</tr>';
				echo '</table>';
				}
				?>
				<!---End of Output in Same Page (GET METHOD)--->
			</div>
	   </div>
	</body>
</html>