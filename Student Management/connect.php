<?php
// Establish a database connection (replace with your database credentials)
$db_host = "localhost";
$db_user = "root";
$db_pass= "";
$db_name = "students_companion_app";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: ");
}

// Retrieve form data
if(isset($_POST["submit"])){
$Firstname=$_POST["Firstname"];
$Lastname = $_POST["Lastname"];
$Username=$_POST["Username"];
$email = $_POST["email"];
$phoneNumber = $_POST["phoneNumber"];
$age = $_POST["age"];
$Password = $_POST["Password"];
$Confirmpassword = $_POST["Confirmpassword"];

// Insert data into the database
$sql = "INSERT INTO studentregistration(Firstname, Lastname, Username, email,phoneNumber, age,Password,Confirmpassword)
        VALUES ('$Firstname', '$Lastname', '$Username', '$email',$phoneNumber  ,$age,  '$Password','$Confirmpassword')";
$result=mysqli_query($conn,$sql);

}
$strng= "Success! This page doesn't exist!";
echo '<span style="color: red; font-size: 50px;"> ' . $strng.  '</span>';

?>
