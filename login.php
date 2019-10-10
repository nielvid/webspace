<?PHP
include 'config.php';

    $sql = "INSERT INTO signup (username , passwor) VALUE(?, ?)";
    if($stmt = mysqli_prepare($link, $sql)){

        // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ss", $username, $passwor);
    
   

        
    $username =  $_POST['username'];
    $passwor = $_POST['passwor'];
   
    
       // Attempt to execute the prepared statement
       if(mysqli_stmt_execute($stmt)){
           ECHO "Signup sucessfully" ;
       
       
     
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
    }
    } else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
    }
    
    // Close statement
    mysqli_stmt_close($stmt);
    
     
    // Close connection
    mysqli_close($link);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nigerian Legion Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="login.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name ='username' placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name ='passwor'placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="register.php">Create an Account</a></p>
</div>
</body>
</html>                                		                            