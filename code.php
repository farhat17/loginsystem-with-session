<?php 
session_start();
include('..\dbcon\config.php');
if(isset($_FILES['img'])){
	 $file_name=$_FILES['img']['name'];
	 $file_size =$_FILES['img']['size'];
	 $file_tmp =$_FILES['img']['tmp_name'];
	 $file_type = $_FILES['img']['type'];
	 move_uploaded_file($file_tmp,'uploads/'.$file_name);
if(isset($_POST['insert'])){
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $cpassword = $_POST['cpassword'];
 $phone = $_POST['phone'];
 $address= $_POST['address'];
 $gender = $_POST['gender'];
 $designation = $_POST['designation'];
 $qualification =$_POST['qualification'];
 $imp = implode(" " , $qualification);
 $experience=$_POST['experience'];
 if(empty($name)||empty($email)||empty($password)||empty($cpassword)||empty($phone)||empty($address)||empty($gender)
 ||empty($designation)||empty($qualification)||empty($experience)){
     echo'<h4>All fields are mandatory</h4>';
     header('location:insertion.php');
 }else{
if($password===$cpassword){
 $query = "SELECT * FROM inser WHERE email = '$email'";
 $run = mysqli_query($conn,$query);
 $result =mysqli_num_rows($run);
 if($result > 0)
 {
     echo "already exits";
 }
 else{
    $insert="INSERT INTO inser (img,name,email,password,cpassword,phone,address,gender,designation,qualification,experience)
    VALUES('$file_name','$name','$email','$password','$cpassword','$phone','$address','$gender','$designation','$imp','$experience')";
 $query_run=mysqli_query($conn,$insert);
    if($query_run){
       echo "<script>alert('Data Inserted Successfully')</script>)";
        header('location:login.php');
    }
    else{
        echo "<h3>Insertion Error</h3>";
        header('location:insertion.php');
    }
}
}
else{
    echo "pwd mismatch";
}
}
}}
?>
