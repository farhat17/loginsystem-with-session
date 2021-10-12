<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginsys</title>
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
<div class="section" style="margin-left: 400px;">
	<div class="container">
		<div class="row-justify-content-center">
			<div class="col-md-7 my-11 bg-dark">
				<div class="card my-10">
					<div class="card-header bg-light">
						<h5 style="text-align: center;">Login Here</h5>
					</div>
					<div class="card-body">	
						<div class="alert alert-warning alert-dismissible fade show">
							<strong>Hello!!</strong>	
							 <button type ="button" class="close" data-dismiss ="alert" aria-label="close">

							 </button>
							 	</div>		
						<form  action="logincode.php" method="POST" >
                		  </div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" placeholder="Enter email" class="form-control">
							 </div>
						   <div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" placeholder="password" class="form-control">
						  </div>
       				  </div>
						  <hr>
						  <div class="form-group">
						  <button type="submit" name='login' class="btn btn-primary btn-block" class="form-control"
                          style="width:100%;border:2px solid red;border-radius:2pc;">Login</button>
						  </div><hr>
                          
						  <div class="form-group">
                          <h3><p style="color:white;text-align:center;">Did not have an account</p></h3>
						  <button type="submit" name='register' class="btn btn-primary btn-block" class="form-control"
                           style="width:100%;border-radius:2pc;">
                           <a href="insertion.php"style="color:white;text-decoration:none;">Register</a></button>
						  </div><hr>
                          <button type="submit" name='register' class="btn btn-primary btn-block" class="form-control"
                           style="width:100%;border-radius:2pc;">
                           <a href="register.php"style="color:white;text-decoration:none;">Forgot_Password</a></button>
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