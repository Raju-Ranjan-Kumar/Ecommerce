<?php
    session_start();
    $con = mysqli_connect("localhost","root","","shopping");
  
    //if the user only click on pay now button
    if(isset($_POST['amt']) && isset($_POST['name'])){
        $amt = $_POST['amt'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $pay_mode = $_POST['pay_mode'];
        $payment_status = "Pending";
        $added_on = date('y-m-d h:i:s');

        mysqli_query($con,"INSERT INTO `order_manager`(`Full_Name`, `Phone_Number`, `Address`, `Amount`, `Pay_Mode`, `Payment_Status`, `Added_On`)
            VALUES ('$name','$phone','$address','$amt','$pay_mode','$payment_status','$added_on')");

        $_SESSION['OID'] = mysqli_insert_id($con);
    }

    //if the user payment successful
    if(isset($_POST ['payment_id']) && isset($_SESSION['OID'])){
        $payment_id = $_POST['payment_id'];

        $qry1 = "UPDATE `order_manager` SET `Payment_Status`='Complete', `Payment_Id`='$payment_id' WHERE Order_Id='".$_SESSION['OID']."'";

        mysqli_query($con,$qry1);
    }
?>