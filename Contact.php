
<?php
if(isset($_POST['submit'])){

	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$age=$_POST["age"];
	$age=$_POST["email"];
	
	echo "First Name :".$fname.'</br>';
	echo "Last Name :".$lname.'</br>';
	echo "Age :".$age.'</br>';
	echo "Email Address:".$email.'</br>';

	

}
?>
