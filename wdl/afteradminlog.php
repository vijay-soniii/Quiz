
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


<<!-- button  class="signupbtn" style="width: 100px;margin-top: 20px">
                    <a href="index.php" style="font-style: bold;color: black;">Logout</a>
                    </button>
 -->

<div class="container">
			<?php
                    $hostname='localhost';
			    $username='root';
			    $password='';
			    $dbname='wdl';
			    $connect = mysqli_connect($hostname, $username, $password ,$dbname);  
                    $select_users="SELECT * from logindata";
                    $exe=mysqli_query($connect,$select_users);
                    if(!$exe){
                        echo "Unsuccessfull";
                    }
                    else{
                        ?>
                        <center>
                        <table border="2" height="50%" width="50%">
                            <caption>User data</caption>
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Username</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $num=mysqli_num_rows($exe);
                                if(mysqli_num_rows($exe)==0){
                                    echo '<tr><td colspan="2">No Users</td></tr>';
                                    
                                }
                                else{
                                    while($row=mysqli_fetch_assoc($exe)){
                                        echo "<tr><td>{$row['ID']}</td><td>{$row['USERNAME']}</td></tr>\n";
                                    }
                                }
                            ?>
                        </tbody>
                    </table>



                    <?php 
                }
                echo "<h3>Total Participants = $num</h3>";
                ?>
                <button  class="signupbtn" style="width: 100px;margin-top: 20px">
                    <a href="index.php" style="font-style: bold;color: black;">Logout</a>
                    </button>

            </div>
        </center>



</body>
</html>