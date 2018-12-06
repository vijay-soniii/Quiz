<!DOCTYPE html>
<html>


<head>

	
				<title>Forgot Password</title>
	
				<link rel="stylesheet" type="text/css" href="css/style.css">
				<link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
				<link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase|Rubik+Mono+One" rel="stylesheet">
				<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
			    <link href="css/boostrap.css" rel="stylesheet" type="text/css">


</head>


<body  background="images/bg1.jpg">


			<p id="arrows" ><a href="index.php" style="color: red; margin-left: 80px;"><i class="fas fa-arrow-left"></i></a></p>

			<form action="" method="POST">

						<div class="container1">

								<label><b>Email Id :</b></label><br><br>
								<input type="email" placeholder="Enter Email id"  width="850px" name="emailid" required><br><br>

								<center><button class="signupbtn" name='submit'>
									<a href="login.php" style="font-style: bold"><i class="fas fa-arrow-right"></i></a>
								</button></center>
						</div>
			</form>

    		<?php 
    			if(isset($_POST['submit']))
    			{	
					$to      = $emailid; // Send email to our user
                	$subject = 'New Password'; // Give the email a subject 
               		$message = 'Your New Password is pass1';
                    $headers = 'From: http://www.gmail.com' . "\r\n"; // Set from headers
                	$mail = mail($to, $subject, $message, $headers); // Send our email
                if($mail){
                    echo"<script>alert('Password sent successfully')</script>";
                    echo"<script>window.open('index.php','_self')</script>";
                }else{
                    echo"<script>alert('Password sent successfully')</script>";
                    echo "<script>window.history.back()</script>";
                    exit();
                }           
            	}
    		?>

</body>
</html>