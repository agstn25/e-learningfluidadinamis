<?php

	mysqli_query($koneksi,"UPDATE tabel_soal SET 
			pilihan_a	= '$_POST[pilihan_a]',
			pilihan_b	= '$_POST[pilihan_b]',
			pilihan_c	= '$_POST[pilihan_c]',
			pilihan_d	= '$_POST[pilihan_d]',
			pilihan_e	= '$_POST[pilihan_e]',
			jawaban		= '$_POST[jawaban]',
			publish		= '$_POST[publish]',
			pertanyaan	= '$_POST[pertanyaan]' 
 
		WHERE id_soal	='$_POST[id]'") or die(mysqli_error());
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?page=soal_lihat'>";
?>