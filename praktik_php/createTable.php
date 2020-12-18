<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "praktwebdb";
	
	$connect = mysqli_connect($hostname, $username, $password, $database);
	
	if($connect){
		echo "Koneksi ke MYSQL berhasil <br>";
	}
	else{
		echo "Koneksi ke MYSQL gagal".mysqli_connect_error();
	}
	
	$sql = "CREATE TABLE product(
			id INT PRIMARY KEY,
			product_name VARCHAR (30) NOT NULL,
			harga INT NOT NULL)";
			
	if (mysqli_query($connect, $sql)){
		echo "Tabel product berhasil dibuat";
	}
	else{
		echo "Tabel product gagal dibuat <br>".mysqli_error($connect);
	}
	
	mysqli_close($connect);
		
?>
