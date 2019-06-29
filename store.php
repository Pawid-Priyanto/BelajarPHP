<?php include "header.php"; ?>
  

	
	<div id="content">
		<div class="jarak">

		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" target="_blank">
			<table>
				<tr>
					<td>ID Produk</td>
					<td>
						<input type="text" name="idproduk">
					</td>
				</tr>
					<tr>
					<td>Nama Produk</td>
					<td><input type="text" name="namaproduk"></td>
				</tr>
					<tr>
					<td>Stock Produk</td>
					<td><input type="text" name="stockproduk"></td>
				</tr>
					<tr>
					<td>Harga Produk</td>
					<td>
						<input type="text" name="hargaproduk">
					</td>
				</tr>
					<tr>
					<td>Kategori</td>
					<td>
						<select name="kategoriproduk" id="">
							<option value="sendal">Sendal</option>
							<option value="sepatu">Sepatu</option>
						</select>
					</td>
				</tr>
			</table>
			<input type="submit" name="tambahdata" value="Add data"> 
		</form>

		<!-- start add data -->
	<?php if(isset($_POST['tambahdata'])) { 
		$idproduk=$_POST["idproduk"];
		$namaproduk=$_POST["namaproduk"];
		$stockproduk=$_POST["stockproduk"];
		$hargaproduk=$_POST["hargaproduk"];
		$kategoriproduk=$_POST["kategoriproduk"];

		$tambahdata= $koneksidb->query("INSERT INTO produk (id_produk, nama_produk, qty_produk, harga_produk, kategori_produk) VALUES ('$idproduk', '$namaproduk', '$stockproduk', '$hargaproduk', '$kategoriproduk')");
		?>

	<?php } ?>
		<!-- end add data -->
		<!-- start hapus data -->
		<?php if(isset($_POST['hapusdata'])) { 
		$idproduk=$_POST["id_produk"];
		$hapusdata= $koneksidb->query("DELETE FROM produk WHERE id_produk = '$idproduk'");
		?>
		<hr> Data telah dihapus <br>
		<hr>
		<?php } ?>

		<!-- end hapus data -->
<!-- start edit data -->

<?php if(isset($_POST['editdata'])) { 
		$idproduk=$_POST["id_produk"];

		$show_edit = mysqli_query($koneksidb, "SELECT * FROM produk where id_produk = '$idproduk'" );
			while ($hs_show_edit = mysqli_fetch_array($show_edit)) {
				
				$vid_produk ="$hs_show_edit[id_produk]";
				$vnama_produk ="$hs_show_edit[nama_produk]";
				$vqty_produk ="$hs_show_edit[qty_produk]";
				$vharga_produk ="$hs_show_edit[harga_produk]";
				$vkategori_produk ="$hs_show_edit[kategori_produk]";
			}
		?>

		<b>Edit Data</b>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" target="_self">
			<table>
				<tr>
					<td>ID Produk</td>
					<td>
						<input type="text" disable name="idproduk" value='<?php echo "$vid_produk"; ?>'>
						<input type="hidden" name="idproduk" value='<?php echo "$vid_produk"; ?>'>
					</td>
				</tr>
					<tr>
					<td>Nama Produk</td>
					<td><input type="text" name="namaproduk"value='<?php echo "$vnama_produk"; ?>'></td>
				</tr>
					<tr>
					<td>Stock Produk</td>
					<td><input type="text" name="stockproduk" value='<?php echo "$vqty_produk"; ?>'></td>
				</tr>
					<tr>
					<td>Harga Produk</td>
					<td>
						<input type="text" name="hargaproduk" value='<?php echo "$vharga_produk"; ?>'>
					</td>
				</tr>
					<tr>
					<td>Kategori</td>
					<td>
						<select name="kategoriproduk" id="">
							<option value="sendal"<?php if($vkategori_produk=="sendal"){echo"selected";}?>>Sendal</option>
							<option value="sepatu"<?php if($vkategori_produk=="sendal"){echo"selected";}?>>Sepatu</option>
						</select>
					</td>
				</tr>
			</table>
			<input type="submit" name="editdatafinal" value="Update"> 
		</form>
		<?php } ?>
		<!-- end edit data -->
<!-- update data -->
		<?php if(isset($_POST['editdatafinal'])) { 
		$idproduk=$_POST["idproduk"];
		$namaproduk=$_POST["namaproduk"];
		$stockproduk=$_POST["stockproduk"];
		$hargaproduk=$_POST["hargaproduk"];
		$kategoriproduk=$_POST["kategoriproduk"];

		 $updatedata= $koneksidb->query("UPDATE produk SET nama_produk='$namaproduk', qty_produk='$stockproduk', harga_produk='$hargaproduk', kategori_produk='$kategoriproduk' WHERE id_produk='$idproduk'");
		?>
			<b>Data <?php echo "$namaproduk"; ?> sudah diupdate</b>
	<?php } ?>
<!-- end update data -->
	<center><h1>DATA BARANG</h1></center>
		<table border="1" width="100%">
			<tr>
				<th>No</th>
				<th>ID</th>
				<th>Nama</th>
				<th>Stock</th>
				<th>Harga</th>
				<th>Kategori</th>
				<th>Action</th>
			</tr>

			<?php 
			$urut=0;
			$produk_show = mysqli_query($koneksidb, "SELECT * FROM produk" );
			while ($hs_show = mysqli_fetch_array($produk_show)) {
			$urut++;
				
				$vid_produk ="$hs_show[id_produk]";
				$vnama_produk ="$hs_show[nama_produk]";
				$vqty_produk ="$hs_show[qty_produk]";
						$vqty_produk=number_format($vqty_produk, 0, ',', '.');
				$vharga_produk ="$hs_show[harga_produk]";
						$vharga_produk = number_format($vharga_produk, 0, ',', '.' );
				$vkategori_produk ="$hs_show[kategori_produk]";

		
		?>
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" target="_self">
			<tr>
				<td><?php echo "$urut"; ?></td>
				<td>
				<?php echo "$vid_produk"; ?>
				 <input type="hidden" name="id_produk" id="" value='<?php echo"$vid_produk";?>'> 
				</td>
				<td><?php echo "$vnama_produk"; ?></td>
				<td><?php echo "$vqty_produk"; ?></td>
				<td>Rp. <?php echo "$vharga_produk"; ?></td>
			  <td><?php echo "$vkategori_produk"; ?></td>	
				<td>
					<input type="submit" value="Delete" name="hapusdata">
					<button name="editdata">Edit</button>
				</td>
			</tr>
			</form>
			<?php } ?>
		</table>

			</div>
		</div>	
		<div style="clear:both;">
	<div id="footer">
	<div class="jarak">

		<center>Copyright &copy 2018 PawidPri</center>
		</div>
	</div>	
</div>

</body>
</html>