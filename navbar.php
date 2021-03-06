<?php
include 'modal.php';
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: darksalmon;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="1200px-Ozark_TV_series_logo.svg.png" style="width: 150px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="best seller.php">Best Seller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="katalog.php">Catalog</a>
                    </li>
                    
                    <li class="nav-item">
                        <?php if (isset($_SESSION['useradmin'])) { ?>
                            <a class="nav-link" href="buy.php">Detail Pesanan</a>
                        <?php } else { ?>
                            <a class="nav-link" href="buy.php">Buy Your Glasses!</a>
                        <?php } ?>
                    </li>
                    
                </ul>
                <form class="d-flex">
                    <?php if (isset($_SESSION['username'])) { ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="home.php"><?php echo $_SESSION['username'] ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary border-0" style="background-color:#696969 ; margin-right: 8px;" href="crud/logoutAkun.php">Logout</a>
                            </li>
                        </ul>
                    <?php } else if (isset($_SESSION['useradmin'])) { ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="home.php"><?php echo $_SESSION['useradmin'] ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary border-0" style="background-color:#696969 ; margin-right: 8px;" href="crud/logoutAkun.php">Logout</a>
                            </li>
                        </ul>
                    <?php } else { ?>
                        <a class="btn btn-primary border-0" style="background-color:#696969 ; margin-right: 8px;" href="login.php">Sign In</a>
                        <a class="btn btn-primary border-0" style="background-color: #696969 ;" href="registrasi.php">Sign Up</a>
                    <?php } ?>
                </form>
            </div>
        </div>
    </nav>
</header>