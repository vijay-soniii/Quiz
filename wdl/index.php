<!DOCTYPE html>	
<html>
<head>



	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/boostrap.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase|Rubik+Mono+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">	



	<title>Quiz Competition</title>


</head>



<body  background="images/bg1.jpg">



		<header>
					<ul class="main-nav" style="float: right;">
						<li><button><a href="login.php"> Login</button></li>
						<li><button style="width: 120px"><a style="display:inline-block;width=100%;height=100%"href="adminlogin.php"> Admin Login</a></button></li>
					</ul>
		</header>

		

		<div>

			<p id="welcome">Welcome</p>
			<p id="to">to</p>
			<p id="qc">Top Quiz Competiton</p>
		
		</div>



		<div>
			
			<div style="margin-top: -45px">
  				
  				<div class="container1" style="width: 320px" > 
  						
  						<form method="POST" action="user_insert.php">
  							
  							<center><h3>Registration Form</h3></center><br><br>
			    
			    			<label style="color: black"><b>Email ID</b></label>
			    			<input type="email" placeholder="Enter Email" name="email" required>
			    			<br>
			   

			   				<label  style="color: black" ><b>Password</b></label>
			    			<input type="password" placeholder="Enter Password" name="password" required>
			    			<br>
				 
				 			<center><button class="signupbtn">Register</button></center>

				
						</form>
	   
  				</div>

			</div>

		</div>


		

	
	<br>



	<footer class="footer-main-div">


		<center><p><h4  style="color: black;">Find us at </h4></p></center>
		
			        <div class="footer-social-icons">
			            <ul style="background-color: red;border-radius: 45px">
			                <li><a href=""><i class="fab fa-facebook-f icons"></i></a></li>
			                <li><a href=""><i class="fab fa-instagram icons"></i></a></li>
			                <li><a href=""><i class="fab fa-twitter icons"></i></a></li>
			                <li><a href=""><i class="far fa-envelope icons"></i></a></li>
			            </ul>
			        </div>
    </footer>    



</body>
</html>