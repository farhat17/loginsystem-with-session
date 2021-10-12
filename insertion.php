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
						<h5 style="text-align: center;">Insert Here</h5>
					</div>
					<div class="card-body">	
						<div class="alert alert-warning alert-dismissible fade show">
							<strong>Hello!!</strong>	
							<?php 
								session_start();
						 		echo $_SESSION['status'];
							 ?>		
							 <button type ="button" class="close" data-dismiss ="alert" aria-label="close">

							 </button>
							 	</div>		
						<form enctype ="multipart/form-data" action="code.php" method="POST" >
                            <div class="form-group">
                                <label for="image"><b>Image</b></label>
                                <input type="file" name="img" class="form-control" value="">
                            </div>
                        <div class="form-group">
								<label for="name">Name</label>
								<input type="name" name="name" placeholder="Enter Your Name" class="form-control">
						  </div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" placeholder="Enter email" class="form-control">
							 </div>
						   <div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" placeholder="password" class="form-control">
						  </div>
                          <div class="form-group">
								<label for="confirm_password">Confirm_Password</label>
								<input type="cpassword" name="cpassword" placeholder="cpassword" class="form-control">
						  </div>
                          <div class="form-group">
								<label for="phone">Phone</label>
								<input type="phone" name="phone" placeholder="Enter Your Mobile Number" class="form-control">
						  </div>
                          <div class="form-group">
								<label for="addrerss">Address</label>
								<textarea name='address' placeholder="Enter Your Address" class="form-control"></textarea>
						  </div>
                          <div class="form-group">
								<label for="gender">Gender</label><br>
                                <label>Male</label>
								<input type="radio" name="gender" value="Male" checked>&nbsp &nbsp
                                <label>Female</label>
                                <input type="radio" name="gender" value="Female">
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
						  <button type="submit" name='insert' class="btb btn-primary btn-block" class="form-control">Insert</button>
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