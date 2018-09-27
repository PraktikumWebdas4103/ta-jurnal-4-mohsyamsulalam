
<body style="font-family:kristen itc regular;background-color: #2b7cff;">

	<center><h2 style="font-family:kristen itc regular ; text-shadow: 45%">My Profile</h2></center>
	<form action=" " method="POST" enctype="multipart/form-data">
	<table>
		<ul>
		<tr>
			<td><li><b>Photo</b></li></td>
			<td> <input type="file" name="poto" style="width: 70%; height: 30px; border-radius: 20%"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Hobby :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="hoby[]" value="Basket">Basket <br>
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Mendengarkan Musik">Mendengarkan Musik<br> 
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Renang">Renang<br>
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Futsal">Futsal<br>
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Bermain Gitar">Bermain Gitar<br>
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Menari">Menari<br>
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Badminton">Badminton<br>
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Travel">Travel<br>
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Membaca">Membaca<br>
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Dan lain-lain">Dan lain-lain<br>
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Genre Film :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="film[]" value="Horror">Horror<br>
			</td>
			<td>
				<input type="checkbox" name="film[]" value="Action">Action<br> 
			</td>
			<td>
				<input type="checkbox" name="film[]" value="Anime">Anime<br>
			</td>
			<td>
				<input type="checkbox" name="film[]" value="Thriller">Thiller<br>
			</td>
			<td>
				<input type="checkbox" name="film[]" value="Animasi">Animasi<br>
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Tujuan :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="travel[]" value="Bali">Bali<br>
			</td>
			<td>
				<input type="checkbox" name="travel[]" value="Raja Ampat">Raja Ampat<br>
			</td>
			<td>
				<input type="checkbox" name="travel[]" value="Pulau Derawan">Pulau Derawan<br>
			</td>
			<td>
				<input type="checkbox" name="travel[]" value="Bangka Belitung">Bangka Belitung<br>
			</td>
			<td>
				<input type="checkbox" name="travel[]" value="Labuan Bajo">Labuan Bajo<br>
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><input type="submit" name="simpan" value="Submit" style="font-family:kristen itc regular;color: black; width: 100px;height: 40px;border-radius: 10px"></td>
		</tr>	

		</ul>
	</table>

<?php
	if(isset($_POST['simpan'])) {
		$hobby = $_POST['hoby'];
		$genre = $_POST['film'];
		$desti = $_POST['travel'];
		$foto = $_FILES["poto"]["name"];

		echo "<br><br><br>";

		$uploaddir = 'gambar/';
    	$uploadfile = $uploaddir . basename($_FILES['poto']['name']);

    	echo "<p>";

    	

	?>
	<center>
<table style="width: 20%; height: 10%; border-radius: 10%">
	<tr>
		<td colspan="2" align="center"><h3>Pilihan Anda</h3></td>
	</tr>	
	<tr>
		<td><b>Hobby : </b></td>
		<td align="center">
			<?php
				foreach ($hobby as $x) {
					echo $x."<br>";
				}
			?>		
		</td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td><b>Genre : </b></td>
		<td align="center">
			<?php
				foreach ($genre as $y) {
					echo $y."<br>";
				}
			?>
		</td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td><b>Tujuan : </b></td>
		<td align="center">
			<?php
				foreach ($desti as $c) {
					echo $c."<br>";
				}
			?>	
		</td>
	</tr>

	<tr>
		<td>Gambar : </td>
		<td>
			<?php
				if (move_uploaded_file($_FILES['poto']['tmp_name'], $uploadfile)) {
      				echo "<img src='gambar/$foto' style='width:300px;height:300px'>";	
    			} else {
       				echo "Upload failed";
    			}
			?>
		</td>

	</tr>
</table>
	<?php		

	}
?>


</body>
