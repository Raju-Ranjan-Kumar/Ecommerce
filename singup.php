<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup</title>
    <style>
      .card-registration .select-input.form-control[readonly]:not([disabled]) {font-size:1rem; line-height:2.15; padding-left: .75em; padding-right: .75em;}
      .card-registration .select-arrow {top:13px; }
    </style>
</head>
<body>
  <?php
    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $dob = $_POST['dob'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $state = $_POST['state'];
      $district = $_POST['district'];
      $password = $_POST['password'];
      $con_pass = $_POST['con_password'];
      $pin = $_POST['pincode'];
      $address = $_POST['address'];

      $pass = password_hash($password,PASSWORD_DEFAULT);
      $c_pass = password_hash($con_pass,PASSWORD_DEFAULT);

      if(mysqli_num_rows(mysqli_query($con,"SELECT * FROM singup WHERE Email='$email'"))>0){
        echo "<script> alert('This email is already register..!')</script>";
      }else{
        if($password === $con_pass){
          $query = "INSERT INTO `singup`(`Name`, `DOB`, `Email`, `Gender`, `State`, `District`, `Password`, `Con_Password`, `Pin_Code`, `Address`) VALUES ('$name','$dob','$email','$gender','$state','$district','$pass','$c_pass','$pin','$address')";
          $run = mysqli_query($con,$query);

          header('location:login.php');
        }else{
          echo "<script> alert('password and Confirm Password not match..!')</script>";
        }
      }
    }
  ?>

<section class="h-100 bg-dark">
  <form action="" method="POST">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="images/denote.jpeg" alt="Sample photo" class="img-fluid h-100" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"/>
              </div>
              <div class="col-xl-6">                
                  <div class="card-body p-md-5 text-black">
                    <h3 class="mb-4 text-uppercase text-center">Singup form</h3>
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" name="name" id="form3Example1m" class="form-control" placeholder="Your name" required/>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="date" name="dob" id="form3Example9" class="form-control" placeholder="DOB" required/>
                        </div>
                      </div>
                    </div>

                  
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-outline">
                          <input type="text" name="email" id="form3Example97" class="form-control" placeholder="Email ID" required/>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <select class="form-control select" id="gender" name="gender">
                          <option value="">Select Gender</option>
                          <option value="Male"> Male </option>
                          <option value="Female"> Female </option>
                          <option value="Other"> Other </option>
                        </select>  <br>  <span id="u_gender" class="error"></span>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <select name="state" id="state" class="form-control select">
                          <option value="Select State">Select State</option>
                          <option value="Andhra Pradesh">Andhra Pradesh</option>
                          <option value="Andaman & Nicobar Islands">Andaman & Nicobar Islands</option>
                          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                          <option value="Assam">Assam</option>
                          <option value="Bihar">Bihar</option>
                          <option value="Chandigarh">Chandigarh</option>
                          <option value="Chhattisgarh">Chhattisgarh</option>
                          <option value="Dadar & Nagar Haveli">Dadar & Nagar Haveli</option>
                          <option value="Daman and Diu">Daman and Diu</option>
                          <option value="Delhi">Delhi</option>
                          <option value="Lakshadweep">Lakshadweep</option>
                          <option value="Puducherry">Puducherry</option>
                          <option value="Goa">Goa</option>
                          <option value="Gujarat">Gujarat</option>
                          <option value="Haryana">Haryana</option>
                          <option value="Himachal Pradesh">Himachal Pradesh</option>
                          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                          <option value="Jharkhand">Jharkhand</option>
                          <option value="Karnataka">Karnataka</option>
                          <option value="Kerala">Kerala</option>
                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                          <option value="Maharashtra">Maharashtra</option>
                          <option value="Manipur">Manipur</option>
                          <option value="Meghalaya">Meghalaya</option>
                          <option value="Mizoram">Mizoram</option>
                          <option value="Nagaland">Nagaland</option>
                          <option value="Odisha">Odisha</option>
                          <option value="Punjab">Punjab</option>
                          <option value="Rajasthan">Rajasthan</option>
                          <option value="Sikkim">Sikkim</option>
                          <option value="Tamil Nadu">Tamil Nadu</option>
                          <option value="Telangana">Telangana</option>
                          <option value="Tripura">Tripura</option>
                          <option value="Uttar Pradesh">Uttar Pradesh</option>
                          <option value="Uttarakhand">Uttarakhand</option>
                          <option value="West Bengal">West Bengal</option>
                        </select>
                      </div>

                      <div class="col-md-6 mb-4">
                        <select class="select form-control" name="district">
                          <option value="Select District">Select District</option>
                          <option value="Araria"> Araria </option>
                          <option value="Arwal"> Arwal</option>
                          <option value="Aurangabad"> Aurangabad</option>
                          <option value="Banka"> Banka</option>
                          <option value="Begusarai"> Begusarai</option>
                          <option value="Bhabhua"> Bhabhua</option>
                          <option value="Bhagalpur"> Bhagalpur</option>
                          <option value="Bhojpur"> Bhojpur</option>
                          <option value="Buxar"> Buxar</option>
                          <option value="Darbhanga"> Darbhanga</option>
                          <option value="East Champaran"> East Champaran</option>
                          <option value="Gaya"> Gaya</option>
                          <option value="Gopalganj"> Gopalganj</option>
                          <option value="Jamui"> Jamui</option>
                          <option value="Jehanabad"> Jehanabad</option>
                          <option value="Jharkhand"> Jharkhand</option>
                          <option value="Katihar"> Katihar</option>
                          <option value="Khagaria"> Khagaria</option>
                          <option value="Kishanganj"> Kishanganj</option>
                          <option value="Lakhisarai"> Lakhisarai</option>
                          <option value="Madhepura"> Madhepura</option>
                          <option value="Madhubani"> Madhubani</option>
                          <option value="Monghyr"> Monghyr</option>
                          <option value="Muzaffarpur"> Muzaffarpur</option>
                          <option value="Nalanda"> Nalanda</option>
                          <option value="Nawada"> Nawada</option>
                          <option value="Patna"> Patna</option>
                          <option value="Purnea"> Purnea</option>
                          <option value="Rohtas">Rohtas</option>
                          <option value="Saharsa"> Saharsa</option>
                          <option value="Samastipur"> Samastipur</option>
                          <option value="Saran"> Saran</option>
                          <option value="Sheikhpura">Sheikhpura</option>
                          <option value="Sheohar">Sheohar</option>
                          <option value="Sitamarhi"> Sitamarhi</option>
                          <option value="Siwan">Siwan</option>
                          <option value="Supaul"> Supaul</option>
                          <option value="Vaishali"> Vaishali</option>
                          <option value="West Champaran"> West Champaran</option>
                        </select>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" name="password" id="form3Example9" class="form-control" placeholder="Password" required/>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" name="con_password" id="form3Example9" class="form-control" placeholder="Conf_Password" required/>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" name="pincode" id="form3Example90" class="form-control" placeholder="Pincode" required/>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline mb-4">
                          <input type="text" name="address" id="form3Example8" class="form-control" placeholder="Address" required/>
                        </div>
                      </div>
                    </div>

                    <div class="d-flex justify-content-center pt-1 mb-4">
                      <button type="button" class="btn btn-danger">Reset all</button> &nbsp;&nbsp;&nbsp;
                      <button type="submit" name="submit" class="btn btn-success ms-2">Submit</button>
                    </div>

                    <div class="text-center">Already have an account? <a href="login.php">Login here</a></div>
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