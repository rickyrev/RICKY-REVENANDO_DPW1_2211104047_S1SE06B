<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Contoh Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.c
ss">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <h1>Market </h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produk.php">Product</a>
                <li class="nav-item">
                    <a class="nav-link" href="history.php">History</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Selamat Datang Ricky Revenando !</h4>
            <p>Selamat datang di website kami. Temukan produk terbaik dengan harga terjangkau.</p>
        </div>
    </div>
    <!-- Card Produk -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://picsum.photos/150/150" class="card-img-top" alt="Gambar Produk 1">
                    <div class="card-body">
                        <h5 class="card-title">Judul Produk 1</h5>
                        <p class="card-text">Harga: $100</p>
                        <p class="card-text">Stok: 10</p>
                        <form>
                            <div class="form-group">
                                <label for="quantity1">Quantity</label>
                                <input required type="number" class="form-control" id="quantity1" min="1" value="1">

                            </div>
                            <button type="submit" class="btn

btn-primary">Beli</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://picsum.photos/150/150" class="card-img-top" alt="Gambar Produk 2">
                    <div class="card-body">
                        <h5 class="card-title">Judul Produk 2</h5>
                        <p class="card-text">Harga: $150</p>
                        <p class="card-text">Stok: 5</p>
                        <form>
                            <div class="form-group">
                                <label for="quantity2">Quantity</label>
                                <input required type="number" class="form-control" id="quantity2" min="1" value="1">

                            </div>
                            <button type="submit" class="btn

btn-primary">Beli</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://picsum.photos/150/150" class="card-img-top" alt="Gambar Produk 3">
                    <div class="card-body">
                        <h5 class="card-title">Judul Produk 3</h5>
                        <p class="card-text">Harga: $80</p>
                        <p class="card-text">Stok: 8</p>
                        <form>
                            <div class="form-group">
                                <label for="quantity3">Quantity</label>
                                <input required type="number" class="form-control" id="quantity3" min="1" value="1">

                            </div>
                            <button type="submit" class="btn btn-primary">Beli</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>