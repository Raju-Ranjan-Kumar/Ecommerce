<?php include('navbar.php') ?>

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
        <title>Product page</title>
    </head>
    <body>
        <div class="container">
            <div class="col-lg-12 text-center border rounded bg-secondary my-4 text-light"><h1 class="mb-0 p-1">Our Products</h1></div>
            <div class="row pb-5">
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
                <div class="col-lg-3">
                    <form action="managecart.php" method="POST">
                        <div class="card text-center justify-content-center mt-5" style="width:17rem;">
                            <img src="images/p9.png" class="card-img-top img-fluid align-self-center p-2" alt="Men Court Shirt" style="height:15rem; width:12rem;">
                            <div class="card-body">
                                <h5 class="card-title">Men Court Shirt</h5>
                                <p class="card-text">Prices: Rs.700</p>
                                <button type="submit" class="btn btn-info" name="addtocart">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Men Court Shirt">
                                <input type="hidden" name="Price" value="700">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="managecart.php" method="POST">
                        <div class="card text-center justify-content-center mt-5" style="width:17rem;">
                            <img src="images/p10.png" class="card-img-top img-fluid align-self-center p-2" alt="Men Shirt Green" style="height:15rem; width:12rem;">
                            <div class="card-body">
                                <h5 class="card-title">Men Shirt Green</h5>
                                <p class="card-text">Prices: Rs.500</p>
                                <button type="submit" class="btn btn-info" name="addtocart">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Men Shirt Green">
                                <input type="hidden" name="Price" value="500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="managecart.php" method="POST">
                        <div class="card text-center justify-content-center mt-5" style="width:17rem;">
                            <img src="images/p11.png" class="card-img-top img-fluid align-self-center p-2" alt="Men Shirt Check" style="height:15rem; width:12rem;">
                            <div class="card-body">
                                <h5 class="card-title">Men Shirt Check</h5>
                                <p class="card-text">Prices: Rs.400</p>
                                <button type="submit" class="btn btn-info" name="addtocart">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Men Shirt Check">
                                <input type="hidden" name="Price" value="400">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="managecart.php" method="POST">
                        <div class="card text-center justify-content-center mt-5" style="width:17rem;">
                            <img src="images/p12.png" class="card-img-top img-fluid align-self-center p-2" alt="Women Dress Light" style="height:15rem; width:12rem;">
                            <div class="card-body">
                                <h5 class="card-title">Women Dress Light</h5>
                                <p class="card-text">Prices: Rs.1000</p>
                                <button type="submit" class="btn btn-info" name="addtocart">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Women Dress Light">
                                <input type="hidden" name="Price" value="1000">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </body>
</html>