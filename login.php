<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @media (min-width: 768px) {
            .gradient-form {height: 100vh !important;}
        }
        @media (min-width: 769px) {
            .gradient-custom-2 {border-top-right-radius: .3rem; border-bottom-right-radius: .3rem;}
        }
        .p-md-5 {padding:1rem!important;}
        .btn-paragraph{background-color:cornflowerblue;}
    </style>
</head>
<body>
    <?php
      if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM singup WHERE Email='$email'";
        $res = mysqli_query($con, $query);
        if(mysqli_num_rows($res)>0){
            $row = mysqli_fetch_assoc($res);
            $veryfy = password_verify($password,$row['Password']);
            if($veryfy==1){
                echo "<script>
                    alert('You have sucessfully loogin');
                    window.location.href='index.php';
                </script>";
            }else{
                echo "<script>
                   alert('Please inter correct password..!');
                   window.location.href='login.php';
                </script>";
            }
        }else{
            echo "<script>
                alert('Please inter correct email..!');
                window.location.href='login.php';
            </script>";
        }
      }
    ?>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <form action="" method="POST">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black"> 
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">
                                        <div class="text-center">
                                            <img src="images/codeaegis2.png" style="width:100px;" alt="logo">
                                            <h4 class="mt-1 mb-1 pb-2">We are The CodeAegis Team</h4>
                                        </div>
                                        <form> 
                                            <p>Please login to your account</p>
                                            <div class="form-outline mb-4">
                                                <input type="email" name="email" id="form2Example11" class="form-control" placeholder="Phone number or email address" required/>
                                            </div>
                                            <div class="form-outline mb-3">
                                                <input type="password" name="password" id="form2Example22" class="form-control" placeholder="Password" required/>
                                            </div>
                                            <div class="text-center pt-1 mb-1 pb-1">
                                                <button class="btn btn-block fa-lg mb-3 form-control btn-paragraph" type="submit" name="login">Login</button><br>
                                                <a class="text-muted" href="#!">Forgot password?</a>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center pb-3">
                                                <p class="mb-3 me-2">Don't have an account?</p>
                                                <a href="singup.php"><button type="button" class="btn btn-outline-danger">Create new</button></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center btn-paragraph">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">We are more than just a company</h4>
                                        <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>