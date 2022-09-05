<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if (isset($_POST['addtocart'])) {
            if(isset($_SESSION['cart'])){
                $myitem = array_column($_SESSION['cart'],'Item_Name');

                if (in_array($_POST['Item_Name'],$myitem)) {
                    echo "<script>
                        alert('Item Already Added..!');
                        window.location.href='index.php';
                    </script>";
                }else{
                    $count = count($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
                    echo "<script>
                        alert('Item Added sucessfully..!');
                        window.location.href='index.php';
                    </script>";
                }
            }else{
                $_SESSION['cart'][0] = array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
                echo "<script>
                    alert('Item Added sucessfully..!');
                    window.location.href='index.php';
                </script>";
            }
        }
        //Remove item from cart
        if (isset($_POST['remove_item'])) {
            foreach($_SESSION['cart'] as $key => $value){
                if ($value['Item_Name'] == $_POST['Item_Name']) {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    echo "<script>
                        alert('Product has been Removed...!');
                        window.location.href='mycart.php';
                    </script>";
                }
            }
        } 
        //Modified item in cart
        if(isset($_POST['mod_quantity'])){
            foreach($_SESSION['cart'] as $key => $value){
                if ($value['Item_Name'] == $_POST['Item_Name']) {
                    $_SESSION['cart'][$key]['Quantity'] = $_POST['mod_quantity'];
                    echo "<script>
                        window.location.href='mycart.php';
                    </script>";
                }
            }
        }
    }
?>