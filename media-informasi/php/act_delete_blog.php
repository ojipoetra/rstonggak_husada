<?php 
include '../../assets/php/config.php';


if (isset($_GET['id'])) {
	if ($_GET['id'] != "") {
		
		// Mengambil ID diURL
		$id = $_GET['id'];

		// Mengambil data siswa_foto didalam table siswa
		$get_foto = "SELECT gambar_blog FROM tb_blog WHERE id='$id'";
		$data_foto = mysqli_query($conn, $get_foto); 
        // Mengubah data yang diambil menjadi Array
		$foto_lama = mysqli_fetch_array($data_foto);

        // Menghapus Foto lama didalam folder FOTO
		unlink("../gambar/".$foto_lama['gambar_blog']);    

		// Mengapus data siswa berdasarkan ID
		$query = mysqli_query($conn,"DELETE FROM tb_blog WHERE id='$id'");
		if ($query) {
			header("location:../dashboard-media?pesan=hapus");
		}else{
			header("location:../dashboard-media?pesan=gagalhapus");
		}
		
	}else{
		// Apabila ID nya kosong maka akan dikembalikan kehalaman index
		header("location:../dashboard-media");
	}
}else{
	// Jika tidak ada Data ID maka akan dikembalikan kehalaman index
	header("location:../dashboard-media");
}

?>