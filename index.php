<?php
    include_once ("koneksi.php") ;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width",
        initial-scale="1.0">

        <!--Bootstrap Offline-->
        <link rel="stylesheet" href="assets/css/bootstrap.css">

        <!--Bootstrap Online-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"> 

        <title>Poliklinik</title>
    </head>
    <body>
        <nav class="navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    Sistem Informasi Poliklinik
                </a>
                <button class="navbar-toggler"
                    type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" herf="index.php">
                                Home
                            </a>
                            <ul class="dropdow-menu">
                                <li>
                                    <a class="dropdown-item" herf="index.php?page=pasien">
                                        pasien
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                            href="index.php?page=periksa">
                                Periksa
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main role="main" class="container">
            <?php
                if (isset($_GET['page'])) {
            ?>
            <h2><?php echo ucwords($_GET['page']) ?></h2>
            <?php
                include($_GET['page'] . ".php");
            } else {
                echo "Selamat Datang di Sistem Informasi Poliklinik";
                }
            ?>
        </main>
    </body>
</html>