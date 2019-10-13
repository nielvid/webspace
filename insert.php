
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Registration Form  | Nigerian Legion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <script src="validate.js"></script>
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
      

<style>
.well {
	height: 910px;
	margin-bottom: 10px;
}
table, th, td {
    border: 1px solid black;
}
table {
    border-collapse: collapse;
}
th, td {
    padding: 10px;
}
 
td {

}
</style>
    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

    <?php include "header.php";
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
Function clean($input){
          $input =trim($input);
          $input =stripslashes($input);
          $input =htmlspecialchars($input);
           return $input;
}
    $sName = clean($_POST['sName']);
    #if(empty($sName)){
       # echo "Name cannot be empty";
   # }esle{

   # }
    
$fName = clean($_POST['fName']);
$mName = clean($_POST['mName']);
$dOb = clean($_POST['dOb']);
$gender = clean($_POST['gender']);
$blood  =  clean($_POST['blood']);
$religion =  clean($_POST['religion']);
$mStatus = clean($_POST['mStatus']);
$lga =  clean($_POST['lga']);
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
     echo " <h3>Form submitted Successfully!</h3>
     <p>Print and submit a copy at <br >
     the State Command Headquarters for further processing!</p>

     <table>
                <tr>       
        <th>Personal Data</th>
        <th>Next of Kin Details</th>
        <th>Guarantor's Details</th>
      
        </tr>
        <tr> 
                <td><b>Surname:</b> $sName</td> 
                <td>Next of Kin Name: $nOk</td> 
                <td>Guarantor's Name: $guarantor</td> 
                
                </tr>

                <tr>   <td>FirstName: $fName</td> 
                <td>Relationship to Next of Kin: $nokRelate</td> 
                <td>Relationship to Guarantor: $guaRelate</td> 
                </tr>

                <tr>   <td>Middle Name: $mName</td> 
                <td>Next of Kin Phone Number: $nokPhone</td> 
                <td>Guarantor's Age: $guaAge</td> 
                </tr>

                <tr>  <td>Date of Birth: $dOb</td> 
                 <td>next of Kin Email: $nokmail</td> 
                <td>Guarantor's Phone Number: $guaPhone</td> 
                </tr>

                <tr>  <td>Gender: $gender</td> 
                <td>next of Kin Occupation: $nokOccup</td> 
                <td>Guarantor's Email: $guamail</td> 
                </tr>

                <tr>  <td>Blood group: $blood</td> 
                <td>Next of Kin Address: $nOkaddress</td> 
                <td>Guarantor's Occupation: $guaOccup</td> 
                </tr>

                <tr>   <td>Religion: $religion</td> 
                <td></td> 
                <td>Guarantor's Address: $guaddress</td> 
                </tr>

                <tr>  <td>Marital Status: $mStatus</td> </tr>
                <tr>   <td>Local Government Area Council: $lga</td> </tr>
                <tr>  <td>State of Origin: $origin</td> </tr>
                <tr>  <td>Nationality: $nation</td> </tr>
                <tr>  <td>Telephone: $phone</td> </tr>
                <tr>   <td>Email: $email</td> </tr>
                <tr>   <td>Qualification: $qualif</td> </tr>
                <tr>   <td>Occupation: $occupation</td> </tr>
                <tr>   <td>Designation: $occuDesig</td> </tr>
                <tr>   <td>Residential Address: $Raddress</td> </tr>
                <tr>   <td>Work Address: $workAddress</td>
                </tr>
                
            
                
        
                   
                </table>
            ";

     // $result = "Your form has been sucessfully submitted";  ." " .  $_POST["sName"] . " " .$_POST['fName'];
   
   
 
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

       



       
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- PrettyPhoto javascript file -->
        <script src="assets/js/jquery.prettyPhoto.js"></script>



        <!-- Google map  -->
        <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>


        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
		<script>
		function myFunction(){
			var x= getElementById("myframe");
			x.style.backgroundColor = "white";
		}
		</script>
    </body>
</html>

