<?php
include('..\dbcon\config.php');
include('auth.php');
$id=$_GET['id'];
$sql="select * from inser WHERE id='$id'";
$run = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($run);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
    integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</head>
<body>
<div class="section" style="margin-left: 200px;">
	<div class="container">
		<div class="row-justify-content-center">
			<div class="col-md-10 my-11 bg-dark">
				<div class="card my-10">
					<div class="card-header bg-light">
						<h5 style="text-align: center;">Update</h5>
					</div>
					<div class="card-body">
							 	</div>
						<form enctype ="multipart/form-data" action="" method="POST" >
                            <div class="form-group">
                                <label for="image"><b>Image</b></label>
                                <input type="file" name="img" class="form-control" value="<?php echo $row['img'];?>">
                            </div>
                        <div class="form-group">
								<label for="name">Name</label>
								<input type="name" name="name" placeholder="Enter Your Name" class="form-control" value="<?php echo $row['name'];?>">
						  </div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" placeholder="Enter email" class="form-control" value="<?php echo $row['email'];?>">
							 </div>
                          <div class="form-group">
								<label for="phone">Phone</label>
								<input type="phone" name="phone" placeholder="Enter Your Mobile Number" class="form-control" value="
								<?php echo $row['phone'];?>">
						  </div>
                          <div class="form-group">
								<label for="addrerss">Address</label>
								<textarea name='address' placeholder="Enter Your Address" class="form-control"><?php echo $row['address'];?></textarea>
						  </div>
                          <div class="form-group">
								<label for="gender">Gender</label><br>
                                <label>Male</label>
  								<input type="radio" name="gender" value="<?php if(gender =='male'){
									echo "selected";
								}?>" checked> &nbsp &nbsp
                                <label>Female</label>
                                <input type="radio" name="gender" value="<?php if(gender=='female'){
									echo 'selected';}?>">
						  </div>
                          <div class="form-group">
								<label for="designation">Designation</label>
								<select name="designation" class="form-control">
                                    <option>select designation</option>
                                    <option>Hr</option>
                                    <option>Front_End</option>
                                    <option>Backend</option>
                                    <option>Marketting_Manager</option>
                                </select>
						  </div>
                          <div class="form-group">
								<label for="phone">Qualification</label>&nbsp &nbsp &nbsp &nbsp &nbsp
								12th &nbsp<input type="checkbox" name="qualification[]" value="12th">&nbsp &nbsp &nbsp &nbsp
								B.tech &nbsp<input type="checkbox" name="qualification[]"value="B.tech">&nbsp &nbsp
								M.tech &nbsp<input type="checkbox" name="qualification[]" value="M.tech">
						  </div>
                          <div class="form-group">
								<label for="experience">Experience</label>
								<input type="experience" name="experience" placeholder="Enter Your experience" class="form-control">
						  </div>
						  <hr>
						  <div class="form-group">
						  <button type="submit" name='update' class="btb btn-primary btn-block" class="form-control">Update</button>
						  </div>
					    </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php
include('..\dbcon\config.php');
if(isset($_FILES['img'])){
	$file_name=$_FILES['img']['name'];
	$file_size =$_FILES['img']['size'];
	$file_tmp =$_FILES['img']['tmp_name'];
	$file_type = $_FILES['img']['type'];
	move_uploaded_file($file_tmp,'uploads/'.$file_name);
if(isset($_POST['update'])){
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $address=$_POST['address'];
 $update="UPDATE inser set img='$file_name',name='$name',email='$email',phone='$phone',address='$address'";
 $run=mysqli_query($conn,$update);
 if($run){
 echo "updated successfully";
 header('location:profile.php');
 }else{
 echo "not updated";
 }
 }
 // else{
 // echo "No data to update";
 // }
}
?>