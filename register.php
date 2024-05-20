    <!DOCTYPE html>
        <html lang="en">
            <head>
            <meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Halaman Login</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.c
ss">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">
<h1>Register Market</h1>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse"
data-target="#navbarNav"
aria-controls="navbarNav" aria-expanded="false"
aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button><div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="login.php">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="produk.php">Product</a>
</li>
<li class="nav-item">
<a class="nav-link" href="proses-resgister.php">Register</a>
</li>
</ul>
</div>
</nav>
<!-- Login Form -->
<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<div class="card-body">
<h5 class="card-title">Register</h5>
<form action="proses_register.php" method="POST">
<div class="form-group">
<label for="nama_lengkap">Nama Lengkap</label>
<input required type="text" class="form-control"
id="nama_lengkap"
placeholder="Masukan nama lengkap"
name="nama_lengkap">
</div>
<div class="form-group">
<label for="no_hp">No Hp</label>
<input required type="text" class="form-control"
id="no_hp"
placeholder="Masukan no hp"
name="no_hp">
</div>
<div class="form-group">
<label for="email">Email</label>
<input required type="email" class="form-control"
id="email" placeholder="Masukan email"
name="email">
</div>
<div class="form-group">
<label for="password">Password</label>
<input required type="password" class="form-control"
id="password"placeholder="masukan password"
name="password">
</div>
<button type="submit" class="btn
btn-primary">Daftar</button>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.mi
n.js"></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
></script>
</body>
</html>