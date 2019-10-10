<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("127.0.0.1", "root", "", "legion");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 // Define variables and initialize with empty values
$result = "";
// Escape user inputs for security

 

// Prepare an insert statement

$sql = "INSERT INTO  register (sName, fName, mName, dOb, gender, blood, religion, mStatus, lga, origin, nation, phone, email, qualif, occupation, occuDesig, Raddress, workAddress,
nOk , nokRelate, nOkAge, nokPhone, nokmail, nokOccup, nOkaddress, guarantor, guaRelate, guaAge, guaPhone, guamail, guaOccup, guaddress) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,   ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,   ?, ?, ?, ?, ?, ?, ?)";
if($stmt = mysqli_prepare($link, $sql)){

    // Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "sssssssssssissssssssssssssssssss", $sName, $fName, $mName, $dOb, $gender, $blood, $religion, $mStatus, $lga, $origin, $nation,  $phone, $email, $qualif, $occupation, $occuDesig, $Raddress, $workAddress , $nOk , $nokRelate, $nOkAge, $nokPhone,
$nokmail, $nokOccup, $nOkaddress, $guarantor, $guaRelate, $guaAge, $guaPhone, $guamail, $guaOccup, $guaddress);
   
/* Set the parameters values and execute
    the statement again to insert another row */

    $sName = $_POST['sName'];
    #if(empty($sName)){
       # echo "Name cannot be empty";
   # }esle{

   # }
    
$fName =  $_POST['fName'];
$mName = $_POST['mName'];
$dOb = $_POST['dOb'];
$gender = $_POST['gender'];
$blood  =  $_POST['blood'];
$religion =  $_POST['religion'];
$mStatus = $_POST['mStatus'];
$lga =  $_POST['lga'];
$origin = $_POST['origin'];
$nation =  $_POST['nation'];
$phone =  $_POST['phone'];
$email = $_POST['email'];
$qualif =  $_POST['qualif'];
$occupation=  $_POST['occupation'];
$occuDesig = $_POST['occuDesig'];
$Raddress =  $_POST['Raddress'];
$workAddress = $_POST['workAddress'];

$nOk = mysqli_real_escape_string($link, $_REQUEST['nOk']);
$nokRelate = mysqli_real_escape_string($link, $_REQUEST['nokRelate']);
$nokPhone = mysqli_real_escape_string($link, $_REQUEST['nokPhone']);
$nokmail = mysqli_real_escape_string($link, $_REQUEST['nokmail']);
$nokOccup = mysqli_real_escape_string($link, $_REQUEST['nokOccup']);
$nOkaddress = mysqli_real_escape_string($link, $_REQUEST['nOkaddress']);
$guarantor = mysqli_real_escape_string($link, $_REQUEST['guarantor']);
$guaRelate = mysqli_real_escape_string($link, $_REQUEST['guaRelate']);
$guaAge = mysqli_real_escape_string($link, $_REQUEST['guaAge']);
$guaPhone = mysqli_real_escape_string($link, $_REQUEST['guaPhone']);
$guamail = mysqli_real_escape_string($link, $_REQUEST['guamail']);
$guaOccup = mysqli_real_escape_string($link, $_REQUEST['guaOccup']);
$guaddress = mysqli_real_escape_string($link, $_REQUEST['guaddress']);
 

   // Attempt to execute the prepared statement
   if(mysqli_stmt_execute($stmt)){
      $result = "Your form has been sucessfully submitted"; // ." " .  $_POST["sName"] . " " .$_POST['fName'];
   
   
 
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

