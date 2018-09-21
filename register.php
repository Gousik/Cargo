<?php

    include 'db.php';

	if(isset($_POST['regbtn']))
    {
        $cname = $_POST['cname'];
		$email = $_POST['email'];
        $nocargo = $_POST['num'];
        $port = $_POST['place'];
		
		$sql = "INSERT INTO register(cname,email,nocon,port) VALUES('$cname','$email','$nocargo','$port')";

        $result = mysqli_query($conn, $sql);
        
        if ($result === TRUE) {
		echo "<div class='alert alert-success'><strong>Registered!</strong> </div>";
		echo "<script>alert('Registered Successfully!')</script>";
		echo "<script>window.location='Cargo/signed.html';</script>";
        }
    }
?>