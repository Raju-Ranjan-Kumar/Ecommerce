<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        .bttn{padding:10px; background-color:#f7444e; border:1px solid #f7444e; border-radius:3px; color:#ffffff; font-weight:bold;}
        .col-md-6 {width:50%; float:right; margin-left:auto;}
        .arrival_section {background-color:#d4ced0;}
        .h1, h1 {font-size: 3.5rem; color:#002c3e;}
        .titl{padding-top:60px;}
        .img-logo{height:65vh; width:100vh;}
        .row {margin-left: 0; --bs-gutter-x: 0;}
        .card{
            border-radius: 4px;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
            transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
            cursor: pointer;
        }
        .card:hover{
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
        }
    </style>
</head>
<body>
    <section class="slider_section ">
        <div class="slider_bg_box"> <img src="images/slider-bg.jpg" alt=""> </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1> <span> Sale 20% Off </span> <br> On Everything </h1>
                                    <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                    </p>
                                    <div class="btn-box">
                                        <a href="product.php" class="btn1"> Shop Now </a>
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
            <div class="p-5">
                <h1 class="heading-shop">Why Shop With Us</h1>
            </div>
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
    
    <section class="arrival_section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-6 imag"><img src="images/arrival-bg.jpg" alt="image" class="img-fluid img-logo"> </div>
                <div class="col-6 titl">
                    <div class="head"><h1> #NewArrivals </h1></div>
                    <div class="paragraph">
                        <p class="pb-3">
                            Vitae fugiat laboriosam officia perferendis provident aliquid voluptatibus dolorem, fugit ullam sit earum id eaque nisi hic? Tenetur commodi, nisi rem vel, ea eaque ab ipsa, autem similique ex unde!
                        </p>
                        <a href="product.php" class="btn btn-danger btn-lg"> Shop Now </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <div class="container">
        <div class="pt-4 heading-shop">Our products</div>
        <div class="row">
            <div class="col-lg-3">
                <form action="managecart.php" method="POST">
                    <div class="card mt-5" style="width:17rem;">
                        <img src="images/p1.png" class="card-img-top img-fluid p-4 ms-4" alt="Men Shirt Aliceblue" style="height:15rem; width:13rem;">
                        <div class="card-body text-center lh-1">
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
                    <div class="card mt-5" style="width:17rem;">
                        <img src="images/p2.png" class="card-img-top img-fluid p-4 ms-4" alt="Men Shirt Black" style="height:15rem; width:13rem;">
                        <div class="card-body text-center lh-1">
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
                    <div class="card mt-5" style="width:17rem;">
                        <img src="images/p3.png" class="card-img-top img-fluid p-4 ms-4" alt="Women Dress Frock" style="height:15rem; width:13rem;">
                        <div class="card-body text-center lh-1">
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
                    <div class="card mt-5" style="width:17rem;">
                        <img src="images/p4.png" class="card-img-top img-fluid p-4 ms-4" alt="Women Dress Brown" style="height:15rem; width:13rem;">
                        <div class="card-body text-center lh-1">
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
                    <div class="card mt-5" style="width:17rem;">
                        <img src="images/p5.png" class="card-img-top img-fluid p-4 ms-4" alt="Women Dress Kurti" style="height:15rem; width:13rem;">
                        <div class="card-body text-center lh-1">
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
                        <img src="images/p6.png" class="card-img-top img-fluid align-self-center p-2" alt="Women Dress Double" style="height1:5rem; width:12rem;">
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
                        <img src="images/p7.png" class="card-img-top img-fluid align-self-center p-2" alt="Women Dress Black" style="height1:5rem; width:12rem;">
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
                        <img src="images/p8.png" class="card-img-top img-fluid align-self-center p-2" alt="Men Shirt Blue" style="height1:5rem; width:12rem;">
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

            <a href="product.php" class="btn form-control bttn mt-5 mb-5">View All Products</a>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>