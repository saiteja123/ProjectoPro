<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php
      session_start();
      ?>
   
   
   
   
   
    <div class="container">
      <form class="well form-horizontal" action="validation.php" method="POST"  id="contact_form">
        <fieldset>
          <!-- Form Name -->
          <legend>
            <center>
              <h2><b>Registration Form</b></h2>
            </center>
          </legend>
          <br>
          <section>
            <div class="row">
              <div class="col-md-8">
                <!-- First Name-->
                <div class="form-group">
                  <label class="col-md-4 control-label">First Name</label>  
                  <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
                    </div>
                    <span class="error"><?php if(isset($_SESSION["fname_err"])) echo "<p style='color:#D2691E'>".$_SESSION["fname_err"]."<p>";?></span>
                  </div>
                </div>
                <!-- Last Name-->
                <div class="form-group">
                  <label class="col-md-4 control-label" >Last Name</label> 
                  <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
                    </div>
                    <span class="error"><?php if(isset($_SESSION["lname_err"])) echo "<p style='color:#D2691E'>".$_SESSION["lname_err"]."<p>";?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Gender</label>
                  <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                      <input type="radio" name="gender" value="male" checked>Male&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
                      <span><input type="radio" name="gender" value="female">Female</span>
                    </div>
                  </div>
                </div>
                <!-- E-mail-->
                <div class="form-group">
                  <label class="col-md-4 control-label">E-Mail</label>  
                  <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                      <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                    </div>
                    <span class="error"><?php if(isset($_SESSION["email_err"]))  echo  "<p style='color:#D2691E'>".$_SESSION["email_err"]."<p>";?></span>
                  </div>
                </div>
                <!-- Username-->
                <div class="form-group">
                  <label class="col-md-4 control-label">Username</label>  
                  <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input  name="user_name" placeholder="Username" class="form-control"  type="text">
                    </div>
                    <span class="error"><?php if(isset($_SESSION["user_err"])) echo "<p style='color:#D2691E'>".$_SESSION["user_err"]."<p>";?></span>
                  </div>
                </div>
                <!-- Password-->
                <div class="form-group">
                  <label class="col-md-4 control-label" >Password</label> 
                  <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input name="user_password" placeholder="Password" class="form-control"  type="password">
                    </div>
                    <span class="error"><?php  if(isset($_SESSION["pass_err"])) echo "<p style='color:#D2691E'>".$_SESSION["pass_err"]."<p>";?></span>
                  </div>
                </div>
                <!-- Confirm Password-->
                <div class="form-group">
                  <label class="col-md-4 control-label" >Confirm Password</label> 
                  <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
                    </div>
                    <span class="error"><?php if(isset($_SESSION["confirm_err"])) echo "<p style='color:#D2691E'>".$_SESSION["confirm_err"]."<p>";?></span>
                  </div>
                </div>
                <!-- Date Of Birth-->
                <div class="form-group">
                  <label class="col-md-4 control-label" >DOB</label> 
                  <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input name="DOB" placeholder="Date of Birth" class="form-control"  type="date">
                    </div>
                     <span class="error"><?php if(isset($_SESSION["dob_err"])) echo "<p style='color:#D2691E'>".$_SESSION["dob_err"]."<p>";?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Designation</label>
                  <div class="col-md-4 selectContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select name="designation" class="form-control selectpicker">
                        <option value="">---</option>
                        <option value="admin">Admin</option>
                        <option value="manager">Manager</option>
                        <option value="employee">Employee</option>
                      </select>
                    </div>
                     <span class="error"><?php if(isset($_SESSION["design_err"])) echo "<p style='color:#D2691E'>".$_SESSION["design_err"]."<p>";?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Department</label>
                  <div class="col-md-4 selectContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select name="department" class="form-control selectpicker">
                        <option value="">---</option>
                        <option value="Front End">Front End</option>
                        <option value="Back End">Back End</option>
                        <option value="Database">Database</option>
                      </select>
                    </div>
                     <span class="error"><?php if(isset($_SESSION["dept_err"])) echo "<p style='color:#D2691E'>".$_SESSION["dept_err"]."<p>";?></span>
                  </div>
                </div>
                <!-- Contact-->
                <div class="form-group">
                  <label class="col-md-4 control-label">Contact No.</label>  
                  <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                      <input name="contact_no" placeholder="(+91)" class="form-control" type="text">
                    </div>
                     <span class="error"><?php if(isset($_SESSION["cont_err"])) echo "<p style='color:#D2691E'>".$_SESSION["cont_err"]."<p>";?></span>
                  </div>
                </div>
              </div>
              <div class="image_section col-md-3 col-sm-5 col-xs-6">
                <img src="#imgInp"  align="center" class="img-circle image" alt="images/man.png" width="200px" height="200px">
                <div class="form-group" id="img-upload">
                  <div class="input-group">
                    <span class="input-group-btn">
                    <span class="btn btn-default btn-file">
                    Upload Image <input type="file" id="imgInp">
                    </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Select Basic -->
          <!-- Success message -->
          <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>
          <!-- Button -->
          <div class="form-group">
            <center>
              <label class="col-md-12 control-label"></label>
              <div class="submit col-md-12"><br>
                <button type="submit" class="btn btn-warning" name="submit" >SUBMIT <span class="glyphicon glyphicon-send"></span></button>
              </div>
            </center>
          </div>
        </fieldset>
      </form>
    </div>
    <!-- /.container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  
  </body>
</html>




