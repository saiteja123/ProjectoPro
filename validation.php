<?php
   require "init.php";
   require_once("included_functions.php");
   session_start();
     
   $fname_err=$lname_err=$email_err=$user_err=$pass_err=$confirm_err=$dob_err=$design_err=$dept_err=$cont_err="";
   $fname=$name=$gender=$email=$user_name=$user_password=$confirm_password=$DOB=$designation=$department=$contact_no="";
   
   $valid=true;
   
   //Checking if SUBMIT Button is clicked  
   if(isset($_POST['submit']))
    {
       //validating First Name
        if (empty($_POST["first_name"])) 
            {
                $_SESSION["fname_err"] = "First Name should not be blank";
                $valid=false;
            } 
        else
            {
                $fname = test_input($_POST["first_name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$fname))
                    {
                        $_SESSION["fname_err"] = "enter a valid name";
                        $valid=false;
                    }
                else
                    {
                        $_SESSION["fname_err"] = "";
                    }
             } 
       
       //validating Last Name
        if (empty($_POST["last_name"])) 
            {
                $_SESSION["lname_err"] = "Last Name should not be blank";
                $valid=false;
            } 
        else 
            {
                $lname = test_input($_POST["last_name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$lname))
                    {
                        $_SESSION["lname_err"]  = "enter a valid username";
                        $valid=false;
                    }
                else
                    {
                        $_SESSION["lname_err"]  = "";
                    }
            }
       
       
       //validating User Name
       if (empty($_POST['user_name'])) 
            {
                $_SESSION["user_err"] = "Username should not be blank";
                $valid=false;
            } 
       else
       {
            $username = test_input($_POST["user_name"]);   
            $sql = "SELECT * FROM user_info WHERE Username = '".$username."'";
            $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result)>=1)
                    {
                        $_SESSION["user_err"] = "Username already exists";
                        $valid=false;
                    }
                else
                    {  
                        $_SESSION["user_err"] = "";
                    }
        }
       
       
       //validating Passord
       if(empty($_POST["user_password"])){
          $_SESSION["pass_err"] = "Your Password should not be blank"; 
       }
        
        if(!empty($_POST["user_password"]))
            {
                $user_password = test_input($_POST["user_password"]);
                if (strlen($_POST["user_password"]) < 8 ) 
                    {
                        $_SESSION["pass_err"] = "Your Password Must Contain At Least 8 Characters!";
                        $valid=false;
                    }
                else if(!preg_match("#[0-9]+#",$user_password)) 
                    {
                         $_SESSION["pass_err"]= "Your Password Must Contain At Least 1 Number!";
                        $valid=false;
                    }
                else if(!preg_match("#[A-Z]+#",$user_password)) 
                    {
                         $_SESSION["pass_err"] = "Your Password Must Contain At Least 1 Capital Letter!";
                        $valid=false;
                    }
                else if(!preg_match("#[a-z]+#",$user_password)) 
                    {
                         $_SESSION["pass_err"] = "Your Password Must Contain At Least 1 Lowercase Letter!";
                        $valid=false;
                    } 
                else 
                    {
                         $_SESSION["pass_err"]="";
                    }
            }
     
   
       //validating Confirm Passord
       if (!empty($_POST["confirm_password"])) 
            {
                $confirm_password = test_input($_POST["confirm_password"]);
                // check if name only contains letters and whitespace
                if (($confirm_password!=$user_password))
                    {
                        $_SESSION["confirm_err"] = "confirm Password and password do not match";
                        $valid=false;
                    }
                else
                    {
                        $_SESSION["confirm_err"] = "";
                    }
             } 
       
    
        
        //validating email
        if(!empty($_POST["email"]))
            {
                $email = test_input($_POST["email"]);
                $_SESSION["email_err"]="";
            }
        else
            {
                 $_SESSION["email_err"] = "email should not be blank";
                $valid=false;
            }
     	
     	
        //validating gender
        if(!empty($_POST["gender"]))
            {
                $gender=test_input($_POST["gender"]);
            }
       

        //validating Date of Birth
        if(empty($_POST["DOB"]))
          {
                $_SESSION["dob_err"]="DOB is not set";
                $valid=false;
          }  
          else
          {
                $DOB=$_POST["DOB"]; 
                $_SESSION["dob_err"]="";
          }
          
        
        //validating Designation
        if(empty($_POST["designation"]))
          {
                $_SESSION["design_err"]="Designation is not set";
                $valid=false;
          }  
          else
          {
                $designation=$_POST["designation"];
                $_SESSION["design_err"]="";
          }
             
        
        //validating Department   
        if(empty($_POST["department"]))
          {
                $_SESSION["dept_err"]="Department is not set";
                $valid=false;
          }  
          else
          {
                $department=$_POST["department"];
                $_SESSION["dept_err"]="";
          }
         
        //validating Contact Number   
        if(empty($_POST["contact_no"]))
          {
                $_SESSION["cont_err"]="Contact should not be blank";
                $valid=false;
          }  
          else
          {
                $contact_no=$_POST["contact_no"];
                $_SESSION["cont_err"]="";
          }
   
   
  
      
   if($valid==true)
   {
   $sql_query="insert into user_info values(null,'$fname','$lname','$gender','$email','$username','$user_password','$DOB','$designation','$department','$contact_no');";
     	if(mysqli_query($con,$sql_query))
          {
              echo "<h3>Data insertion success..<h3>";
          }
           else
            {
               echo "Data insertion error..".mysqli_error($con);
            }
     }
     
     else{
     redirect_to("registration.php");
   
         
     exit;
        
     } 
     }
 session_unset();
session_destroy();
         


     
     
     ?>