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
    <!-- razorpay payment gatway integration -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <title>Payment</title>
    <style>
        body{background-color:aliceblue;}
        .d-center{display:grid; place-items: center;}
    </style>
</head>
<body>
    <div class="container d-center">
        <div class="col-lg-3 pb-5">
            <div class="border bg-light rounded mt-5">
                <form action="purchase.php" method="POST">
                    <div class="rounded-5">
                        <div class="border-bottom border-2 p-3">
                            <h5 class="text-center">Complete Your Payment</h5>
                        </div>
                        <div class="p-4">
                            <div class="input-group flex-nowrap mb-2">
                                <span class="input-group-text" id="addon-wrapping"><i class='bx bxs-user'></i></span>
                                <input type="text" class="form-control" id="name" name="fname" value="<?php echo $_POST['fname']; ?>">
                            </div>
                            <div class="input-group flex-nowrap mb-2">
                                <span class="input-group-text" id="addon-wrapping"><i class='bx bxs-phone'></i></span>
                                <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $_POST['phone']; ?>">
                            </div>

                            <input type="hidden" class="form-control" id="address" name="address" value="<?php echo $_POST['address']; ?>">

                            <div class="input-group flex-nowrap mb-2">
                                <span class="input-group-text" id="addon-wrapping"><i class='bx bx-credit-card'></i></span>
                                <input type="text" class="form-control" id="pay_mode" name="pay_mode" value="<?php echo $_POST['pay_mode']; ?>">
                            </div>
                            <div class="input-group flex-nowrap mb-3">
                                <span class="input-group-text" id="addon-wrapping"><i class='bx bx-rupee'></i></span>
                                <input type="text" class="form-control" id="amt" name="gtotalVal" value="<?php echo $_POST['gtotalVal']; ?>">
                            </div>
                            <button type="button" class="btn btn-primary btn-block form-control" id="btn" name="btn" value="Pay Now" onclick="pay_now()">Pay Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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