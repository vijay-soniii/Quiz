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


            <p id="arrows" ><a href="index.php" style="color: red; margin-left: 80px;"><i class="fas fa-arrow-left"></i></a></p>


            


                  <div class="container1">
                    <form method="POST" action="admin_check.php">
                        <label><b>Admin Name</b></label>
                        <input type="text"  name="an" required>

                        <label ><b>Admin Password</b></label>
                        <input type="password"name="pass" required>

                        <center><button type="submit" class="signupbtn" name="submit">GO
                        <!-- <a href="adminpage.php" style="font-style: bold"><i class="fas fa-arrow-right"></i></a> --></button></center>
                    </form>
                  </div>


            

    </body>
    
</html>