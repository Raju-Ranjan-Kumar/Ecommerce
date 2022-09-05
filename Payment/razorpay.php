<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstarp5 css $ js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- jquery js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <!-- boxicons css $ js -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <!-- this script is use for razorpay payment gatway integration -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <title>Payment</title>
    <style>
        body{background-color:aliceblue;}
    </style>
</head>
<body>
    <!-- <div class="container">
    <div class="col-lg-3 pb-5">
                    <div class="border bg-light rounded p-4">
                        <form action="" method="">
                            <h4 class="">Complete Your Payment</h4>
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
    </div> -->
    <div class="container mt-5 col-3">
        <form action="" method="post">
            <div class="card rounded-5">
                <div class="border-bottom border-2 p-4">
                    <h5 class="text-center mb-0">Complete Your Payment</h5>
                </div>
                <div class="p-4">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class='bx bxs-user'></i></span>
                        <input type="text" class="form-control" id="name" name="fname" value="<?php echo $_POST['fname']; ?>">
                    </div>
                    <div class="input-group flex-nowrap mt-3">
                        <span class="input-group-text" id="addon-wrapping"><i class='bx bxs-phone'></i></span>
                        <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $_POST['phone']; ?>">
                    </div>

                    <input type="hidden" class="form-control" id="address" name="address" value="<?php echo $_POST['address']; ?>">

                    <div class="input-group flex-nowrap mt-3">
                        <span class="input-group-text" id="addon-wrapping"><i class='bx bx-credit-card'></i></span>
                        <input type="text" class="form-control" id="pay_mode" name="pay_mode" value="<?php echo $_POST['pay_mode']; ?>">
                    </div>
                    <div class="input-group flex-nowrap mt-3">
                        <span class="input-group-text" id="addon-wrapping"><i class='bx bx-rupee'></i></span>
                        <input type="text" class="form-control" id="amt" name="gtotalVal" value="<?php echo $_POST['gtotalVal']; ?>">
                    </div><br>

                    <button type="button" class="btn btn-primary form-control" id="btn" name="btn" value="Pay Now" onclick="pay_now()">Pay Now</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        function pay_now(){
            var name = jQuery('#name').val();
            var amt = jQuery('#amt').val();
            var phone = jQuery('#phone').val();
            var address = jQuery('#address').val();
            var pay_mode = jQuery('#pay_mode').val();

            jQuery.ajax({
                type:'post',
                url:'payment_process.php',
                data:"&amt="+amt+"&name="+name+"&phone="+phone+"&address="+address+"&pay_mode="+pay_mode,
                success:function(result){
                    var options = {
                        "key": "rzp_test_0OEAcUbxNMSwai",
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "CodeAegis Pvt Ltd",
                        "description": "description",
                        "image": "images/codeaegis2.png",
                        "handler": function (response) {
                            jQuery.ajax({
                                type:'post',
                                url:'payment_process.php',
                                data:"payment_id="+response.razorpay_payment_id,
                                success:function(result){
                                    window.location.href="../";    //index.php by default call ho jayegi bcz wo root file hoti h
                                }
                            });
                        }
                    };
                    var pay = new Razorpay(options);
                    pay.open();
                }
            });
        }
    </script>
</body>
</html>