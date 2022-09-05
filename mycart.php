<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Cart</title>
        <style>
            body{background-color:aliceblue;}
        </style>
    </head>
    <body>
        <div class="container">  
            <div class="row">
                <div class="col-lg-12 text-center border rounded bg-light my-5">
                    <h1>My Cart</h1>
                </div>
                <div class="col-lg-9">
                    <table class="table">
                        <thead class='text-center'>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Item Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Opration</th>
                            </tr>
                        </thead>
                        <tbody class='text-center'>
                            <?php 
                                if (isset($_SESSION['cart'])) {
                                    foreach($_SESSION['cart'] as $key => $value){
                                        $sn = $key + 1;
                                        echo "
                                            <tr>
                                                <td> $sn </td>
                                                <td> $value[Item_Name]</td>
                                                <td> $value[Price] <input type='hidden' class='iprice' value='$value[Price]'> </td>
                                                <td>
                                                    <form action='managecart.php' method='POST'>
                                                        <input type='number' name='mod_quantity' min='1' max='10' class='text-center iquantity' value='$value[Quantity]' onchange='this.form.submit();'>
                                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                    </form>
                                                </td>
                                                <td class='itotal'> </td>
                                                <td>
                                                    <form action='managecart.php' method='POST'>
                                                        <button name='remove_item' class='btn btn-outline-danger btn-sm'>Remove</button>
                                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                    </form>
                                                </td>
                                            </tr>
                                        ";
                                    } 
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-3 pb-5">
                    <div class="border bg-light rounded p-4">
                        <form action="purchase.php" method="POST">
                            <h4 class="">Grand Total:</h4>
                            <h5 id="gtotal"> </h5> <br>
                            <input type="hidden" name="gtotalVal" value="gtotalVal" id="gtotalVal">

                            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {  ?>

                            <div class="mb-3">
                                <input type="text" name="fname" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="address" class="form-control" placeholder="Address" required>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pay_mode" value="ONLINE" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">Online Payment</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">Cash On Delevry</label>
                            </div> <br>
                            <button class="btn btn-primary btn-block form-control" name="purchase">Make Purchase</button>

                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var gt = 0;
            var iprice = document.getElementsByClassName('iprice');
            var iquantity = document.getElementsByClassName('iquantity');
            var itotal = document.getElementsByClassName('itotal');
            var gtotal = document.getElementById('gtotal');
            var gtotalVal = document.getElementById('gtotalVal');

            function subTotal(){
                gt = 0;
                for(i=0; i<iprice.length; i++){
                    itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
                    gt = gt + (iprice[i].value)*(iquantity[i].value);
                }
                gtotal.innerText = gt;
                gtotalVal.value = gt;
            }
            subTotal();
        </script>

    <?php include('footer.php'); ?>
    </body>
</html>