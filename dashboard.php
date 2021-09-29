<?php 
$username = "Farhanang";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
    <div class="all">
        <div class="header">
            <div class="pojok">
                <h1>Dashboard</h1>
            </div>
            <div class="pojok">
                <h2>Selamat Datang <?php echo $username;?></h2>
            </div>
        </div>
        <div class="bawah">
            <div class="position-relative">
                <div class="position-absolute top-25 start-25">


                    <div class="row container">
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="img/receipt.png" class="card-img-top" width="140" height="80" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Input Penjualan</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="penjualan.php" class="btn btn-primary">Masuk</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="img/shopping-cart.png" class="card-img-top" width="140" height="80" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Stok Barang</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="stok.php" class="btn btn-primary">Masuk</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="img/time-left.png" class="card-img-top" width="140" height="80" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">History</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="history" class="btn btn-primary">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>