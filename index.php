<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--icons used form boxicons -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
        <!-- bootstarp css $ js -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Home Page</title>
    </head>
    <body>
        <section class="slider_section ">
            <div class="slider_bg_box"> <img src="images/slider-bg.jpg" alt=""> </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1> <span> Sale 20% Off </span> <br> On Everything </h1>
                                        <p>
                                            Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                        </p>
                                        <div class="btn-box">
                                            <a href="product.php" class="btn bttn btn-lg"> Shop Now </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>

        <section>
            <div class="container">
                <div class="p-5"><h1 class="heading-shop mb-0">Why Shop With Us</h1> </div>
                <div class="row text-center align-self-center justify-content-center">
                    <div class="row row-cols-1 row-cols-md-3 pb-5">
                        <div class="col ">
                            <div class="card card-1 bg-dark rounded p-3">
                                <div class="">
                                    <i class='bx bx-run fs-2 fw-bold text-light'></i>
                                </div>
                                <div class="card-body">
                                    <h4 class="align-self-center card-title fw-bold text-light"> Fast Delivery </h4>
                                    <p class="card-text text-center text-light">variations of passages of Lorem Ipsum available</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-1 bg-dark rounded p-3">
                                <div class="">
                                    <i class='bx bx-car fs-2 fw-bold text-light'></i>
                                </div>
                                <div class="card-body">
                                    <h4 class="align-self-center card-title fw-bold text-light"> Free Shiping </h4>
                                    <p class="card-text text-center text-light">variations of passages of Lorem Ipsum available</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-1 bg-dark rounded p-3">
                                <div class="">
                                    <i class='bx bx-podcast fs-2 fw-bold text-light'></i>
                                </div>
                                <div class="card-body">
                                    <h4 class="align-self-center card-title fw-bold text-light"> Best Quality </h4>
                                    <p class="card-text text-center text-light">variations of passages of Lorem Ipsum available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        
        <section class="slider_section ">
            <div class="slider_bg_box"> <img src="images/arrival-bg.jpg" alt="image"> </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 "></div>
                                <div class="col-md-6 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1> #NewArrivals </h1>
                                        <p>
                                            Vitae fugiat laboriosam officia perferendis provident aliquid voluptatibus dolorem, fugit ullam sit earum id eaque nisi hic?
                                            Tenetur commodi, nisi rem vel, ea eaque ab ipsa, autem similique ex unde!
                                        </p>
                                        <div class="btn-box">
                                            <a href="product.php" class="btn bttn btn-lg"> Shop Now </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
    
        <div class="container">
            <div class="pt-5"><h1 class="heading-shop"> Our Products </h1> </div>
            <div class="row">
                <div class="col-lg-3">
                    <form action="managecart.php" method="POST">
                        <div class="card text-center justify-content-center mt-4" style="width:17rem;">
                            <img src="images/p1.png" class="card-img-top img-fluid align-self-center p-2" alt="Men Shirt Aliceblue" style="height:15rem; width:12rem;">
                            <div class="card-body">
                                <h5 class="card-title">Men Shirt Aliceblue</h5>
                                <p class="card-text">Prices: Rs.500</p>
                                <button type="submit" class="btn btn-info" name="addtocart">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Men Shirt Aliceblue">
                                <input type="hidden" name="Price" value="500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="managecart.php" method="POST">
                        <div class="card text-center justify-content-center mt-4" style="width:17rem;">
                            <img src="images/p2.png" class="card-img-top img-fluid align-self-center p-2" alt="Men Shirt Black" style="height:15rem; width:12rem;">
                            <div class="card-body">
                                <h5 class="card-title">Men Shirt Black</h5>
                                <p class="card-text">Prices: Rs.550</p>
                                <button type="submit" class="btn btn-info" name="addtocart">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Men Shirt Black">
                                <input type="hidden" name="Price" value="550">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="managecart.php" method="POST">
                        <div class="card text-center justify-content-center mt-4" style="width:17rem;">
                            <img src="images/p3.png" class="card-img-top img-fluid align-self-center p-2" alt="Women Dress Frock" style="height:15rem; width:12rem;">
                            <div class="card-body">
                                <h5 class="card-title">Women Dress Frock</h5>
                                <p class="card-text">Prices: Rs.700</p>
                                <button type="submit" class="btn btn-info" name="addtocart">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Women Dress Frock">
                                <input type="hidden" name="Price" value="700">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="managecart.php" method="POST">
                        <div class="card text-center justify-content-center mt-4" style="width:17rem;">
                            <img src="images/p4.png" class="card-img-top img-fluid align-self-center p-2" alt="Women Dress Brown" style="height:15rem; width:12rem;">
                            <div class="card-body">
                                <h5 class="card-title">Women Dress Brown</h5>
                                <p class="card-text">Prices: Rs.650</p>
                                <button type="submit" class="btn btn-info" name="addtocart">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Women Dress Brown">
                                <input type="hidden" name="Price" value="650">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="managecart.php" method="POST">
                        <div class="card text-center justify-content-center mt-5" style="width:17rem;">
                            <img src="images/p5.png" class="card-img-top img-fluid align-self-center p-2" alt="Women Dress Kurti" style="height:15rem; width:12rem;">
                            <div class="card-body">
                                <h5 class="card-title">Women Dress Kurti</h5>
                                <p class="card-text">Prices: Rs.600</p>
                                <button type="submit" class="btn btn-info" name="addtocart">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Women Dress Kurti">
                                <input type="hidden" name="Price" value="600">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="managecart.php" method="POST">
                        <div class="card text-center justify-content-center mt-5" style="width:17rem;">
                            <img src="images/p6.png" class="card-img-top img-fluid align-self-center p-2" alt="Women Dress Double" style="height:15rem; width:12rem;">
                            <div class="card-body">
                                <h5 class="card-title">Women Dress Double</h5>
                                <p class="card-text">Prices: Rs.900</p>
                                <button type="submit" class="btn btn-info" name="addtocart">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Women Dress Double">
                                <input type="hidden" name="Price" value="900">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="managecart.php" method="POST">
                        <div class="card text-center justify-content-center mt-5" style="width:17rem;">
                            <img src="images/p7.png" class="card-img-top img-fluid align-self-center p-2" alt="Women Dress Black" style="height:15rem; width:12rem;">
                            <div class="card-body">
                                <h5 class="card-title">Women Dress Black</h5>
                                <p class="card-text">Prices: Rs.850</p>
                                <button type="submit" class="btn btn-info" name="addtocart">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Women Dress Black">
                                <input type="hidden" name="Price" value="850">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="managecart.php" method="POST">
                        <div class="card text-center justify-content-center mt-5" style="width:17rem;">
                            <img src="images/p8.png" class="card-img-top img-fluid align-self-center p-2" alt="Men Shirt Blue" style="height:15rem; width:12rem;">
                            <div class="card-body">
                                <h5 class="card-title">Men Shirt Blue</h5>
                                <p class="card-text">Prices: Rs.600</p>
                                <button type="submit" class="btn btn-info" name="addtocart">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Men Shirt Blue">
                                <input type="hidden" name="Price" value="600">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mb-5 mt-5 text-center">
                    <a href="product.php" class="btn bttn btn-lg">View All Products</a>
                </div>
                
            </div>
        </div>

        <?php include('footer.php'); ?>
    </body>
</html>