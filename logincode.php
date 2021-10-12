<?php
session_start();
include('..\dbcon\config.php');
if(isset($_POST['login'])){
// $name=$_POST['name'];
$email=$_POST['email'];
$password = $_POST['password'];
$loginquery="SELECT * FROM inser WHERE email = '$email' AND  password ='$password'"; 
$query = mysqli_query($conn,$loginquery);
$result= mysqli_num_rows($query);
if($result>0)
{
    while($row=mysqli_fetch_assoc($query)){
    $_SESSION['name']=$row['name'];
    $_SESSION['email']=$row['email'];
    echo "success";
    header('location:profile.php');
    }
}
else{
    echo '<div>Email and Password are not matching</div>';
}            
}
    ?>
