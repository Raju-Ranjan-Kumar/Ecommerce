<?php
    session_start();
    $con = mysqli_connect("localhost","root","","shopping");

    if(mysqli_connect_error()){
        echo "<script>
           alert('Can not connect to database..!');
           window.location.href='mycart.php';
        </script>";
        exit();
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if (isset($_POST['purchase'])) {
            if($_POST['pay_mode'] == "COD"){
                $payment_status = "Pending";
                $added_on = date('y-m-d h:i:s');
                $payment_id = "No";

                $query1 = "INSERT INTO `order_manager`(`Full_Name`, `Phone_Number`, `Address`, `Amount`, `Pay_Mode`, `Payment_Status`, `Payment_Id`, `Added_On`)
                    VALUES ('$_POST[fname]','$_POST[phone]','$_POST[address]','$_POST[gtotalVal]','$_POST[pay_mode]','$payment_status','$payment_id','$added_on')";

                if (mysqli_query($con, $query1)) { 
                    $Order_Id = mysqli_insert_id($con);
                    $query2 = "INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
                    $stmt = mysqli_prepare($con,$query2);
                    if ($stmt) {
                        mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
                        foreach($_SESSION['cart'] as $key => $value){
                            $Item_Name = $value['Item_Name'];
                            $Price = $value['Price'];
                            $Quantity = $value['Quantity'];
                            mysqli_stmt_execute($stmt);
                        }
                        unset($_SESSION['cart']);
                        echo "<script> 
                            alert('Order Placed..!');
                            window.location.href='index.php';
                        </script>";
                    }else{
                        echo "<script> 
                            alert('data query praperd error');
                            window.location.href='mycart.php';
                        </script>";
                    }
                }else{
                    echo "<script> 
                        alert('SQL Error');
                        window.location.href='mycart.php';
                    </script>";
                }
            }else{
?>
                <form action="Payment/razorpay.php" method="POST">
                    <input type="hidden" name="fname" value="<?php echo $_POST['fname']; ?>"/>
                    <input type="hidden" name="phone" value="<?php echo $_POST['phone']; ?>"/>
                    <input type="hidden" name="address" value="<?php echo $_POST['address']; ?>"/>
                    <input type="hidden" name="pay_mode" value="<?php echo $_POST['pay_mode']; ?>"/>
                    <input type="hidden" name="gtotalVal" value="<?php echo $_POST['gtotalVal']; ?>"/>
                </form>
                <script>
                    document.querySelector('form').submit();
                </script>
    <?php
            }
        }
    }
?>