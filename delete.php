<?php


    include 'db.php';

    if(isset($_POST['delbtn']))
    {
        $cname = $_POST['cname'];
        $email = $_POST['email'];

        $sql = "DELETE FROM register WHERE cname='$cname' AND email='$email'";

        $result = mysqli_query($conn, $sql);
        
        if (($result) > 0) {
            echo "<div class='alert alert-success'><strong>Details Deleted!</strong> </div>";
			echo "<script>alert('Deleted Successfully!');</script>";
			echo "<script>window.location='Cargo/signed.html';</script>";
        }
    }
?>