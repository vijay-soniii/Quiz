<?php   

			$servername ="localhost";
			$username="root";
			$password ="";
			$dbname ="wdl";

			$conn =mysqli_connect($servername,$username,$password,$dbname);
			if(isset($_POST)){
				$email = $_POST['email'];
				$password = $_POST['password'];
				/*$qry  ="INSERT INTO logindata(USERNAME,PASSWORD) VALUES ('$email','$password')";
				$qry = "INSERT INTO logindata( `USERNAME`, `PASSWORD`) VALUES ($email,$password)";
				$exe = mysqli_query($conn,$qry);*/
				$query = mysqli_query($conn,"SELECT USERNAME FROM logindata WHERE USERNAME='$email'");

		if(mysqli_num_rows($query)!=0){
                    echo "<script>alert('Username already taken')</script>";
                    echo "<script>window.history.back()</script>";
                    exit();
 }
else{
    $qry  ="INSERT INTO logindata(USERNAME,PASSWORD) VALUES ('$email','$password')";
$exe = mysqli_query($conn,$qry);
}




				if($exe){
					echo "<script>alert('Registered Successfully')</script>";
					include 'register.php';
				}
				else
					echo "Error";

			}

		?>
