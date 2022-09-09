<?php
    $con = mysqli_connect("localhost","root","","shopping");
    if(mysqli_connect_error()){
        echo "<script>
           alert('Can not connect to database');
           window.location.href='mycart.php';
        </script>";
        exit();
    }
?>
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
        <a class="ps-2" href="index.php"><img width="250" src="images/codeaegis.jpg" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Pages </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">About</a></li>
                        <li><a class="dropdown-item" href="#">Testimonial</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="product.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <?php
                        session_start();
                        $count = 0;
                        if(isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                        }
                    ?>
                    <a class="nav-link active" href="mycart.php"><i class='bx bxs-cart size'><sup><?php echo $count; ?></sup></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class='bx bxs-heart-circle size'></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class='bx bx-search size'></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class='bx bxs-user size'></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>