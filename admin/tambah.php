<?php
    include "koneksi.php";
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Login - SB Admin</title>
	<link href="../css/styles.css" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	<style>
		.file-upload {
			background-color: #ffffff;
			width: 500px;
			margin: 0 auto;
			padding: 20px;
		}



		.file-upload-btn:hover {
			background: white;
			color: #ffffff;
			transition: all .2s ease;
			cursor: pointer;
		}

		.file-upload-btn:active {
			border: 0;
			transition: all .2s ease;
		}

		.file-upload-content {
			display: none;
			text-align: center;
		}

		.file-upload-input {
			position: absolute;
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
			outline: none;
			opacity: 0;
			cursor: pointer;
		}

		.image-upload-wrap {
			margin-top: 20px;
			border: 4px dashed #0d6efd;
			position: relative;
		}

		.image-dropping,
		.image-upload-wrap:hover {
			background-color: #0d6efd;
			border: 4px dashed #ffffff;
		}

		.image-title-wrap {
			padding: 0 15px 15px 15px;
			color: #222;
		}

		.drag-text {
			text-align: center;
		}

		.drag-text h3 {
			font-weight: 100;
			text-transform: uppercase;
			color: #0044aa;
			padding: 60px 0;
		}

		.drag-text h3:hover {
			color: #fff;
		}

		.file-upload-image {
			max-height: 200px;
			max-width: 200px;
			margin: auto;
			padding: 20px;
		}

		.remove-image {
			width: 200px;
			margin: 0;
			color: #fff;
			background: #cd4535;
			border: none;
			padding: 10px;
			border-radius: 4px;
			border-bottom: 4px solid #b02818;
			transition: all .2s ease;
			outline: none;
			text-transform: uppercase;
			font-weight: 700;
		}

		.remove-image:hover {
			background: #c13b2a;
			color: #ffffff;
			transition: all .2s ease;
			cursor: pointer;
		}

		.remove-image:active {
			border: 0;
			transition: all .2s ease;
		}
	</style>
</head>

<body class="bg-primary">
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<div class="card shadow-lg border-0 rounded-lg mt-5">
								<div class="card-header">
									<h3 class="text-center font-weight-light my-4">TAMBAH REKENING</h3>
								</div>
								<div class="card-body">
									<form method="POST" action="tambah_aksi.php" enctype="multipart/form-data">
										<div class="form-floating mb-3 ">
											<input type="hidden" name="id_buku">
											<input class="form-control" id="nama" type="text" placeholder="Nama"
												name="judul" />
											<label for="nama">BANK</label>
										</div>
										<div class="row">
											<div class="form-floating mb-3 col">
												<input type="hidden" name="id_admin">
												<input class="form-control" id="nama" type="text" placeholder="Nama"
													name="penulis" />
												<label for="nama" style="margin-left:12px">NAMA</label>
											</div>
											<div class="form-floating mb-3 col">
												<input type="hidden" name="id_admin">
												<input class="form-control" id="inputPenerbit" type="text" placeholder="Nama"
													name="penerbit" list="penerbit"/>
												<label for="penerbit" style="margin-left:12px">NAMA IBU</label>
											</div>
										</div>
										<div class="row">
											<div class="form-floating mb-3 col">
												<input type="hidden" name="id_admin">
												<input class="form-control" id="nama" type="text" placeholder="Nama"
													name="penulis" />
												<label for="nama" style="margin-left:12px">NO REK</label>
											</div>
											<div class="form-floating mb-3 col">
												<input type="hidden" name="id_admin">
												<input class="form-control" id="inputPenerbit" type="text" placeholder="Nama"
													name="penerbit" list="penerbit"/>
												<label for="penerbit" style="margin-left:12px">NO ATM</label>
											</div>
										</div>
										<div class="row">
											<div class="form-floating mb-3 col">
												<input type="hidden" name="id_admin">
												<input class="form-control" id="nama" type="text" placeholder="Nama"
													name="penulis" />
												<label for="nama" style="margin-left:12px">PIN ATM</label>
											</div>
											<div class="form-floating mb-3 col">
												<input type="hidden" name="id_admin">
												<input class="form-control" id="inputPenerbit" type="text" placeholder="Nama"
													name="penerbit" list="penerbit"/>
												<label for="penerbit" style="margin-left:12px">NO HP</label>
											</div>
										</div>
										<div class="row">
											<div class="form-floating mb-3 col">
												<input type="hidden" name="id_admin">
												<input class="form-control" id="nama" type="text" placeholder="Nama"
													name="penulis" />
												<label for="nama" style="margin-left:12px">POSISI ATM</label>
											</div>
											<div class="form-floating mb-3 col">
												<input type="hidden" name="id_admin">
												<input class="form-control" id="inputPenerbit" type="text" placeholder="Nama"
													name="penerbit" list="penerbit"/>
												<label for="penerbit" style="margin-left:12px">SUPPLIER</label>
											</div>
										</div>
										<div class="form-floating mb-3">
											<input class="form-control" id="inputEmail" type="date"
												placeholder="Username" name="tahun_terbit" />
											<label for="inputEmail">TTL</label>
										</div>
										<div class="form-floating mb-3">
											<input class="form-control" id="inputEmail" type="date"
												placeholder="Username" name="tahun_terbit" />
											<label for="inputEmail">TANGGAL TERIMA</label>
										</div>
										<div class="row">

												<!-- <input class="form-control" id="inputPassword" type="text"
													placeholder="Password" name="genre" />
												<label for="inputPassword" style="margin-left:12px">Genre</label> -->
												<select name="genre" id="genre" class="form-select col" aria-label="Default select example" style="height:3.6rem;margin-left:12px">
													<option selected>STATUS</option>
													<option value="active">ACTIVE</option>
													<option value="blockir">BLOCKIR</option>
													<option value="stock">STOCKED</option>
													<option value="closed">CLOSED</option>
												</select>

											<div class="form-floating mb-3 col">
												<input class="form-control" id="inputPassword" type="text"
													placeholder="Password" name="no_isbn" />
												<label for="inputPassword" style="margin-left:12px">SALDO</label>
											</div>
										</div>

										<div class="form-floating mb-3 col">
											<input class="form-control" id="inputPassword" type="text"
												placeholder="Password" name="sinopsis" />
											<label for="inputPassword" style="margin-left:12px">JENIS KARTU</label>
										</div>
										<script class="jsbin"
											src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
										<div class="file-upload" name="foto">
											<!-- <button class="file-upload-btn" type="button"
													onclick="$('.file-upload-input').trigger( 'click' )">Add
													Image</button> -->

											<div class="image-upload-wrap">
												<input class="file-upload-input" type='file' onchange="readURL(this);"
													accept="gambar/" name="foto" />
												<div class="drag-text">
													<h3>Drag and drop a file or select add Image</h3>
												</div>
											</div>
											<div class="file-upload-content">
												<img class="file-upload-image" src="gambar" alt="your image" />
												<div class="image-title-wrap">
													<button type="button" onclick="removeUpload()"
														class="remove-image">Remove <span class="image-title">Uploaded
															Image</span></button>
												</div>
											</div>
										</div>
										<script>
											function readURL(input) {
												if (input.files && input.files[0]) {

													var reader = new FileReader();

													reader.onload = function (e) {
														$('.image-upload-wrap').hide();

														$('.file-upload-image').attr('src', e.target.result);
														$('.file-upload-content').show();

														$('.image-title').html(input.files[0].name);
													};

													reader.readAsDataURL(input.files[0]);

												} else {
													removeUpload();
												}
											}

											function removeUpload() {
												$('.file-upload-input').replaceWith($('.file-upload-input').clone());
												$('.file-upload-content').hide();
												$('.image-upload-wrap').show();
											}
											$('.image-upload-wrap').bind('dragover', function () {
												$('.image-upload-wrap').addClass('image-dropping');
											});
										</script>
										<div class="d-flex align-items-right justify-content-between mt-2 mb-0">
											<input type="submit" value="SIMPAN" class="btn btn-primary">
											<a href="index.php" class="btn btn-danger">Kembali</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<div id="layoutAuthentication_footer">
			<footer class="py-4 bg-light mt-5">
				<div class="container-fluid px-4">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted">Copyright &copy; Your Website 2023 </div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		crossorigin="anonymous"></script>
	<script src="../js/scripts.js"></script>
</body>

</html>