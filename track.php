<?php


    include 'db.php';

    if(isset($_POST['trkbtn']))
    {
        $cname = $_POST['cname'];
        $email = $_POST['email'];

		$sql="SELECT * FROM register WHERE cname='$cname' AND email='$email'";
		$result = mysqli_query($conn, $sql);
		echo "<table>";
		while ($row = mysqli_fetch_array($result)) {
		 echo "<tr><td>".$row['cname']."</td></tr>"."<tr><td>".$row['email']."</td></tr>"."<tr><td>".$row['nocon']."</td></tr>"."<tr><td>".$row['port']."</td></tr>";
	}
	echo "</table>";

    }
?>