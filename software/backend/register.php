<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$regnum = $mobile = $email = $UserID = $username2 = $username = $password = $confirm_password = "";
$regnum_err = $mobile_err = $email_err = $UserID_err = $username2_err = $username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username2);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This First name is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    // Validate username2
    if(empty(trim($_POST["username2"]))){
        $username2_err = "Please enter a Lastname.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username2 = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username2);
            
            // Set parameters
            $param_username2 = trim($_POST["username2"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username2_err = "This Lastname is already taken.";
                } else{
                    $username2 = trim($_POST["username2"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }


     // Validate StudentID
    if(empty(trim($_POST["UserID"]))){
        $StudentID_err = "Please enter the User ID.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE UserID = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_UserID);
            
            // Set parameters
            $param_UserID = trim($_POST["UserID"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $UserID_err = "This User ID is already taken.";
                } else{
                    $UserID = trim($_POST["UserID"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter the email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE Email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

      // Validate room number
    if(empty(trim($_POST["mobile"]))){
        $mobile_err = "Please enter a Contact Number.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE Mobile = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_mobile);
            
            // Set parameters
            $param_mobile = trim($_POST["mobile"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $mobile_err = "This Contact number is already taken.";
                } else{
                    $mobile = trim($_POST["mobile"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($username2_err) && empty($UserID_err) && empty($email_err) && empty($mobile_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password,username2, StudentID,Email,room) VALUES (?, ?,?,?,?,?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $param_password, $param_username2, $param_UserID, $param_email, $param_mobile);
            
            // Set parameters
            $param_mobile = $mobile;
            $param_email = $email;
            $param_UserID = $UserID;
            $param_username = $username;
            $param_username2 = $username2;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        /* body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; } */
        .custom-select{
            width: 100%;
            height: 33px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <script>
        $("#seeAnotherField").change(function() {
          if ($(this).val() == "2") {
            $('#otherFieldDiv').show();
            $('#otherField').attr('required', '');
            $('#otherField').attr('data-error', 'This field is required.');
        } else {
            $('#otherFieldDiv').hide();
            $('#otherField').removeAttr('required');
            $('#otherField').removeAttr('data-error');
        }
    });
        $("#seeAnotherField").trigger("change");
    </script><!-------------------------------------------------------------------------------------------------------->
    <div class="container">
        <!--<div class="wrapper">-->
            <h2>Greenhouse sytem - Sign Up</h2>
            <p>Please fill this form to create an account.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="row">
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?> col-md-6">
                        <label>First Name</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div> 
                    <div class="form-group <?php echo (!empty($username2_err)) ? 'has-error' : ''; ?> col-md-6">
                        <label>Last Name</label>
                        <input type="text" name="username2" class="form-control" value="<?php echo $username2; ?>">
                        <span class="help-block"><?php echo $username2_err; ?></span>
                    </div>   
                </div> <!--row-->
                <div class="row">
                    <div class="form-group <?php echo (!empty($UserID_err)) ? 'has-error' : ''; ?> col-md-3">
                        <label>Username</label>
                        <input type="text" name="UserID" class="form-control" value="<?php echo $UserID; ?>">
                        <span class="help-block"><?php echo $UserID_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?> col-md-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div> 
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?> col-md-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>col-md-3">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                        <span class="help-block"><?php echo $confirm_password_err; ?></span>
                    </div>

                </div><!--row-->
                <div class="row">
                    <div class="form-group <?php echo (!empty($mobile_err)) ? 'has-error' : ''; ?> col-md-3">
                        <label>Contact Number</label>
                        <input type="tel" name="mobile" class="form-control" value="<?php echo $mobile; ?>">
                        <span class="help-block"><?php echo $mobile_err; ?></span>
                    </div>   
                    <div class="form-group <?php echo (!empty($mobile_err)) ? 'has-error' : ''; ?> col-md-3 ">
                        <label> district</label>
                        <select class="browser-default custom-select">
                          <option selected>select the district</option>
                          <option value="1">Ampara</option>
                          <option value="2">Anuradhapura</option>
                          <option value="3">Badulla</option>
                          <option value="4">Batticaloa</option>
                          <option value="5">Colombo</option>
                          <option value="6">Galle</option>
                          <option value="7">Gampaha</option>
                          <option value="8">Hambantota</option>
                          <option value="9">Jaffna</option>
                          <option value="10">Kalutara</option>
                          <option value="11">Kandy</option>
                          <option value="12">Kegalle</option>
                          <option value="13">Kilinochchi</option>
                          <option value="14">Kurunegala</option>
                          <option value="15">Mannar</option>
                          <option value="16">Matale</option>
                          <option value="17">Matara</option>
                          <option value="18">Monaragala</option>
                          <option value="19">Mullaitivu</option>
                          <option value="20">Nuwara Eliya</option>
                          <option value="21">Polonnaruwa</option>
                          <option value="22">Puttalam</option>
                          <option value="23">Ratnapura</option>
                          <option value="24">Trincomalee</option>
                          <option value="25">Vavuniya</option>
                      </select>
                      
                  </div>   
                  <div class="form-group <?php echo (!empty($mobile_err)) ? 'has-error' : ''; ?> col-md-3 ">
                    <label for="seeAnotherField"> Sign up As</label>
                    <select class="browser-default custom-select" id="seeAnotherField">
                      <option selected>select the user type</option>
                      <option value="1">Greenhouse owner</option>
                      <option value="2">Agriculture instructor</option>
                  </select>
                  
              </div>   

          </div><!--row-->

          <div class="row" id="otherFieldDiv">
            <hr>
            
            <div class="form-group <?php echo (!empty($regnum_err)) ? 'has-error' : ''; ?> col-md-3" id="otherFieldDiv">
                <label for="seeAnotherField">Registration Number</label>
                <input type="text" name="regnum" class="form-control" value="<?php echo $regnum; ?>" id="otherField">
                <span class="help-block"><?php echo $regnum_err; ?></span>
            </div>   
            
        </div><!--row-->



        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-default" value="Reset">
        </div>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </form>
    <!--</div>--> 
</div><!--container-->  


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>