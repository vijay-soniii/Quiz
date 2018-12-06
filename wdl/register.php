
<!DOCTYPE html>
<html>
<head>


	<title>Select Quiz</title>


	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase|Rubik+Mono+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/boostrap.css" rel="stylesheet" type="text/css">


</head>


<body  background="images/bg1.jpg">

		
<!-- 		<script> alert("Successfully Registered")</script>
 -->
		<p id="arrows" ><a href="index.php" style="color: red; margin-left: 80px;"><i class="fas fa-arrow-left"></i></a></p>


 		<div class="container1"">
   				
   			


   				<center><label for="option"><b>Select Category of Quiz</b></label><br><br></center>


		   				<div class="customselect" style="width: 350px;">

				   			<select id="links" onchange="getlink()" name="dd" style="margin-left: 15%">
									<option value="1">INDIAN HISTORY</option>
									<option value="2">BASIC SCIENCE</option>
									<option value="3">BASIC MATHEMATICS</option>
							</select>

						</div>

				<br><br>


				<center>	

<a id="click" href='start.php' style="font-style: bold;color: black">							<button style="margin-top: -18px" type="submit" class="signupbtn" >

				    				<i class="fas fa-arrow-right"></i> 

				   			</button></a>
				</center>
				
    	</div>
    	<script type="text/javascript">
    		function getlink(){
    			links = ['start.php','somee2.php','somee3.php'];
    			x = document.getElementById("links").value -1;
    			document.getElementById('click').href = links[x];
    			console.log(links[x]);    		}
    	</script>
</body>
</html>