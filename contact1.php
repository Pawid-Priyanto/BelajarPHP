<?php include "header.php"; ?>

<?php 
$nama=$_POST["nama"];
$jeniskelamin=$_POST["jeniskelamin"];
$nomorhp=$_POST["nomorhp"];
$alamatemail=$_POST["alamatemail"];
$catatan=$_POST["catatan"];

?>
	
<div id="content">
	<div class="jarak">
		<center><h1>HUBUNGI KAMI</h1></center>
	  <hr>
		Terimakasih telah menghubungi kami. <br>
		Berikut data anda: <br>
		Nama:	<?php echo"$nama"; ?> <br> 
		Jenis Kelamin:	<?php echo"$jeniskelamin";?> <br>
		Nomor HP:	<?php	echo"$nomorhp";	?> <br>
		Alamat email:	<?php	echo"$alamatemail";?> <br>
		Catatan:	<?php echo"$catatan"; ?><br>
		
		

	<div style="clear:both;"></div>
	<div id="footer">
		<div class="jarak">

		Copyright &copy 2018 <mark>PawidPri</mark>
		</div>
	</div>	
</div>

</body>
</html>