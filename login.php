<?php


    include 'db.php';

    if(isset($_POST['logbtn']))
    {
        $e_mail = $_POST['email'];
        $pass_wd = $_POST['password'];

        $sql = "SELECT * FROM user WHERE email='$e_mail' AND pass='$pass_wd'";

        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            echo "<div class='alert alert-success'><strong>Success!</strong> </div>";
			echo "<script>window.location='./Cargo/signed.html';</script>";
        }
    }
?>