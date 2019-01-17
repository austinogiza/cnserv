<?php
session_start();

//begin validation
//



if (isset($_POST['name']) && trim($_POST['name'])!= "" )
{
$name=$_POST['name'];
$_SESSION['name']= $name;

}
else{

	$_SESSION['error']= "";

}

if (isset($_POST['email']) && trim($_POST['email'])!= "" )
{
$email=$_POST['email'];
$_SESSION['email']= $email;

}
else{

	$_SESSION['error']= "";

}

if (isset($_POST['budget']) && trim($_POST['budget'])!= "" )
{
$budget=$_POST['budget'];
$_SESSION['budget']= $budget;
}
else{

	$_SESSION['error']= "";

}
if (isset($_POST['message']) && trim($_POST['message'])!= "" )
{
$message=$_POST['message'];
$_SESSION['message']= $message;
}
else{

	$_SESSION['error']= "";

}
if (isset($_POST['number']) && trim($_POST['number'])!= "" )
{
$number=$_POST['number'];
$_SESSION['number']= $number;

}
else{

	$_SESSION['error']= "";

}
if (isset($_SESSION['error'])) 

{
	//redirect user back to registration page
header("location: ../contactus.php");
}

else {
//save user details to database
	$mailTo ="info@cnserv.com.ng";
	$headers = "From : " .$email;
	$txt = "You have received an e-mail from " .$name.".\n\n".$message;

	mail($mailTo, $budget, $txt, $headers) or die("Error!");
$_SESSION['success']='mailsent';
   header("Location: ../contactus.php");

}



?>
