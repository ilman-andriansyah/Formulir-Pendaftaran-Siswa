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
				<!---Form--->
				<form name="Form" method="" action="view.php" enctype="multipart/form-data" >
					<!--------------------------------------------------------------------------------------------------------->
					<h2>Formulir Pendaftaran Siswa Baru</h2><hr/>		
					<!--------------------------------------------------------------------------------------------------------->
					<label>Nama :</label>
					<input type="text" name="nama" id="nama" placeholder="Nama"/>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Alamat :</label>
					<input type="text" name="alamat" id="alamat" placeholder="Alamat"/>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Kota :</label>
					<input type="text" name="kota" id="kota" placeholder="Kota"/>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Kode Pos :</label>
					<input type="text" name="kodePos" id="kodePos" placeholder="Kode Pos"/>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Tempat Tanggal Lahir :</label>
					<input type="text" name="tempatLahir" id="tempatLahir" placeholder="Tempat Lahir"/>
					<input type="date" name="tanggalLahir" id="tanggalLahir" placeholder="Tanggal lahir"/><br>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Jenis Kelamin :</label><br>
					<input type="radio" name="jenisKelamin" value="Laki-laki">Laki-laki<input type="radio" name="jenisKelamin" value="Perempuan">Perempuan<br><br>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Anak Ke- :</label>
					<input type="number" name="anakKe" id="anakKe" placeholder="Anak Ke-"/>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Dari Berapa Saudara :</label>
					<input type="number" name="dariBerapaSaudara" id="dariBerapaSaudara" placeholder="Dari Berapa Saudara"/>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Asal Sekolah :</label>
					<input type="text" name="asalSekolah" id="asalSekolah" placeholder="Asal Sekolah"/>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Nama Ayah :</label>
					<input type="text" name="namaAyah" id="namaAyah" placeholder="Nama Ayah"/>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Alamat Ayah :</label>
					<input type="text" name="alamatAyah" id="alamatAyah" placeholder="Alamat Ayah"/>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Pekerjaan Ayah :</label>
					<input type="text" name="pekerjaanAyah" id="pekerjaanAyah" placeholder="Pekerjaan Ayah"/>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Nama Ibu :</label>
					<input type="text" name="namaIbu" id="namaIbu" placeholder="Nama Ibu"/>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Alamat Ibu :</label>
					<input type="text" name="alamatIbu" id="alamatIbu" placeholder="Alamat Ibu"/>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Pekerjaan Ibu :</label>
					<input type="text" name="pekerjaanIbu" id="pekerjaanIbu" placeholder="Pekerjaan Ibu"/>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Diterima di Kelas :</label>
					<select name="diterimadiKelas"><option value="X">X</option><option value="XI">XI</option><option value="XII">XII</option></select>
					<br><br>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Raport :</label><br>
					<input type="file" name="raport" id="raport" required="required" />
					<br><br><br>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Surat Keterangan Nilai Raport :</label><br>
					<input type="file" name="skNr" id="skNr" required="required" />
					<br><br><br>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Ijazah :</label><br>
					<input type="file" name="ijazah" id="ijazah" required="required" />
					<br><br><br>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Kartu Keluarga :</label><br>
					<input type="file" name="kartuKeluarga" id="kartuKeluarga" required="required" />
					<br><br><br>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Pas Foto :</label><br>
					<input type="file" name="pasFoto" id="pasFoto" required="required" />
					<br><br><br>
					<!--------------------------------------------------------------------------------------------------------->
					<label>Pilih Metode :</label>
					<span>
					<input type="radio" name="method" value="get" checked> GET &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="method" value="post" > POST 
					</span>
					<input type="submit" name="submit" id="submit" value="Submit"><br><br><br>
				</form>
				<!---End of Form--->
			</div>
	   </div>
	</body>
</html>