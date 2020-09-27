<?php
	$con = mysqli_connect("localhost", "root" , "" , "users")
		or die ("Failed to connect mysql server " .mysqli_connect_error ());

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
	$gender = mysqli_real_escape_string($con, $_POST['gender']);
	$emails = mysqli_real_escape_string($con, $_POST['emails']);
	$DOB = mysqli_real_escape_string($con, $_POST['DOB']);
	$Qualification = mysqli_real_escape_string($con, $_POST['Qualification']);
	$Board = mysqli_real_escape_string($con, $_POST['Board']);
	$Passed = mysqli_real_escape_string($con, $_POST['Passed']) ;
    $Score = mysqli_real_escape_string($con, $_POST['Score']) ;
    $Phone = mysqli_real_escape_string($con, $_POST['Phone']);
    $Address = mysqli_real_escape_string($con, $_POST['Address']) ;
    $course = mysqli_real_escape_string($con, $_POST['course']) ;


	$query = "INSERT INTO regt(name,lastName,gender, emails ,DOB ,Qualification ,Board ,Passed ,Score,Phone ,Address,course) 
	VALUES('$name', '$lastname' , '$gender' , '$emails' , '$DOB' , '$Qualification' , '$Board' , '$Passed' , '$Score' , '$Phone' , '$Address' , '$course')";

	if (!mysqli_query($con, $query))
	{
		echo "Error" .mysqli_error($con);
	}

 {
    echo 'Inserted';
    
}        

        header("refresh:2; url=sec.html");
?>