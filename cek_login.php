<?php


// menghubungkan php dengan koneksi database
include 'koneksi.php';
session_start();

if (isset($_POST['login'])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$hasil = mysqli_query($koneksi, "SELECT * FROM data_user WHERE username='$username'");

	// cek username

	if (mysqli_num_rows($hasil) === 1) {

		// cek password
		$row = mysqli_fetch_assoc($hasil);
		if (password_verify($password, $row["password"])) {
			header("location:user/index.php");
			exit();
		} else {
			echo "<script>
                    alert('yahh');
                </script>";
		}
	}
}


// mengaktifkan session php

$login = mysqli_query($koneksi, "select * from data_operator where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['username'] == "$username" && $data['password'] == "$password") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION["status_operator"] = "login";
		// alihkan ke halaman dashboard pengurus
		header("location:operator/index.php");

	} else {
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}
} else {
	header("location:index.php?pesan=gagal");
}

$admin = mysqli_query($koneksi, "select * from data_admin where username='$username' and password='$password'");
$data_op = mysqli_fetch_assoc($admin);
if ($data_op['username'] == "$username" && $data_op['password'] == "$password") {
	$_SESSION['username'] = $username;
	$_SESSION["status_admin"] = "login";

	header("location:admin/index.php");
}
?>