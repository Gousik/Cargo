<?php

    include 'db.php';

    if(isset($_POST['signup']))
    {
        $f_name = $_POST['first_name'];
		$l_name = $_POST['last_name'];
        $pass = $_POST['password'];
        $email = $_POST['email'];
		$company = $_POST['company'];

        $sql = "INSERT INTO user(firstname,lastname,email,pass,company) VALUES('$f_name','$l_name','$email','$pass','$company')";

        $result = mysqli_query($conn, $sql);
        
        if ($result === TRUE) {
            echo "<script>window.location='Cargo/signed.html';</script>"; 
        }
    }
?>