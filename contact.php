<?php include "header.php"; ?>

	
<div id="content">
	<div class="jarak">
		<center><h1>HUBUNGI KAMI</h1></center>

		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" target="_blank">
			<table>
				<tr>
					<td>Nama</td>
					<td>
						<input type="text" name="nama">
					</td>
				</tr>
					<tr>
					<td>Jenis Kelamin</td>
					<td>
						<select name="jeniskelamin" id="">
							<option value="Laki-Laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</td>
				</tr>
					<tr>
					<td>No HP</td>
					<td><input type="text" name="nomorhp"></td>
				</tr>
					<tr>
					<td>Alamat Email</td>
					<td><input type="text" name="alamatemail"></td>
				</tr>
					<tr>
					<td>Catatan</td>
					<td>
						<textarea name="catatan" id="" cols="30" rows="10"></textarea>
					</td>
				</tr>
			</table>
			<input type="submit" name="kirimdata" value="submit"> <br>
		</form>
		<?php
			if(isset($_POST['kirimdata']))
		{ ?>
			<?php 
$nama=$_POST["nama"];
$jeniskelamin=$_POST["jeniskelamin"];
$nomorhp=$_POST["nomorhp"];
$alamatemail=$_POST["alamatemail"];
$catatan=$_POST["catatan"];

?>
	
<div id="content">
	<div class="jarak">
	
	  <hr/>
		Terimakasih telah menghubungi kami. <br>
		Berikut data anda: <br>
		Nama:	<?php echo"$nama"; ?> <br> 
		Jenis Kelamin:	<?php echo"$jeniskelamin";?> <br>
		Nomor HP:	<?php	echo"$nomorhp";	?> <br>
		Alamat email:	<?php	echo"$alamatemail";?> <br>
		Catatan:	<?php echo"$catatan"; ?><br>
		
	<?php	}
		?>
	</div>
</div>


	<div style="clear:both;">
	<div id="footer">
		<div class="jarak">

		<center>Copyright &copy 2018 <mark>PawidPri</mark></center>
		</div>
	</div>	
</div>

</body>
</html>