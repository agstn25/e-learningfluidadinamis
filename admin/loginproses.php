<?php 
	session_start();
	
	include("../koneksi/koneksi.php");

	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	$sql = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
	$data	= mysqli_fetch_array($sql);
	$jumlah = mysqli_num_rows($sql);
	
	if($jumlah>0){
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		
		echo"Login berhasil!";
		echo"<meta http-equiv='refresh' content='1; url=admin.php'>";

	}else{
		echo "<center> Gagal, username atau password salah!<br><b><a href='index.php'>ULANGI</a></b></center>";
		
	} 
?>