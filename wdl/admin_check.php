   <?php
    // $hostname='localhost';
    // $username='root';
    // $password='';
    // $dbname='wdl';
    // $connect = mysqli_connect($hostname, $username, $password ,$dbname);    

    $username= $_POST['an'];
    $pass = $_POST['pass'];
    $butt = $_POST['submit'];

    /*$q1="SELECT * FROM admin WHERE name='$username' AND password='$pass'";
    $exe=mysqli_query($connect,$q1);*/
    if(isset($butt)){
    if($username=='admin' and $pass=='admin'){    
       
        header('location:afteradminlog.php');
    }
    else{
        
        echo "<script>alert('Username and Password do not match')</script>";
            echo "<script>window.history.back()</script>";
            exit();
    }}
    else{

    }

?>
