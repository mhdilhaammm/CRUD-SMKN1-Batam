<!DOCTYPE html>
<html>
<head>
	<title>FORMULIR SMK NEGRI 1 BATAM</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
	<!------------------------------------------------------------------------Navbar--------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMKN 1 BATAM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>

	<center><h3>Form Input Data</h3></center>
	<div class="container">
		<div class="row">
	<table>
		<form action="<?php echo base_url('Welcome/AksiInsert') ?>" method="post">
		<tr>
		<div class="row mb-3 mt-3">
		<label for="colFormLabel" class="col-sm-2 col-form-label">NIK</label>
		<div class="col-sm-10">
			<input type="text" class="form-control"name="nik" required>
		</div>
		</div>
		</tr>
		<tr>
		<div class="row mb-3">
		<label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
		<div class="col-sm-10">
			<input type="text" class="form-control"  name="nama" required>
		</tr>
		<tr>
		<div class="row mb-3">
		<label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
		<div class="col-sm-10">
			<textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3"required></textarea>
		</tr>
		<tr>
		<div class="row mb-3">
		<label for="colFormLabel" class="col-sm-2 col-form-label">No.Telpone</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="notelpone" required>
			<br>
			<button type="submit" class="btn btn-primary btn-lg" value="simpan" class="row ml-12">SIMPAN</button>
		</tr>
		</tr>
		<form>
	</table>
	</div>
	</div>
	</div>
</body>
</html>