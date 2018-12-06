<?php   

session_start();
			$servername ="localhost";
			$username="root";
			$password ="";
			$dbname ="wdl";
$ans=$_SESSION['ans'];
$ans=0;
			$conn =mysqli_connect($servername,$username,$password,$dbname);
			if(isset($_POST)){
				$q1 = $_POST['1'];
				$q2 = $_POST['2'];
				if($q1=='c'){
				$_SESSION['ans']=$_SESSION['ans']+1;
				}
				if($q2=='c'){
				$_SESSION['ans']=$_SESSION['ans']+1;
				}
			}

				
?>