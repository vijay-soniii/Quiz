<?php 
session_start();
//print_r($_POST);
$score = 0;
foreach($_POST as $x){
	if($x == 'c'){
		$score++;
	}
}
$wrong = 10 - $score;
	 			
?>
<!DOCTYPE html>
<html>


	<head>


		<title>New Account</title>


				<link rel="stylesheet" type="text/css" href="css/style.css">
				<link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
				<link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase|Rubik+Mono+One" rel="stylesheet">
				<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
			    <link href="css/boostrap.css" rel="stylesheet" type="text/css">
	</head>


	<body background="images/bg1.jpg">
		 
	 	<div class="container1">

	 		<h2>Your Score :</h2>

				 		<table>
				 			<tr>
				 				<td>Total right answers</td>
				 				<td><?php echo $score; ?></td>
				 			</tr>

				 			<tr>
				 				<td>Total wrong answers</td>
				 				<td><?php echo $wrong; ?></td>
				 			</tr>
				 		</table>


	 			<br><br>

	 		<center>



	 				<button type="submit" class="signupbtn" style="width: 250px;margin-right: 40px">
	    			<a href="register.php" style="font-style: bold">Give another quiz?</a></a>
	    			</button>


					<button  class="signupbtn" style="width: 100px;margin-top: 20px">
              		<a href="index.php" style="font-style: bold;color: black;">Logout</a>
            		</button>

			</center>

		</div>

	</body>
	
</html>