
<?php
include('auth.php');
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
						<h5 style="text-align: center;">Profile</h5>
					</div>
					<div class="card-body text-center">
                        <?php
                        include('..\dbcon\config.php');
                        $data="SELECT * FROM inser";
                        $run = mysqli_query($conn,$data);
                        ?>
                        <table class='table-bordered'>
                            <?php 
                            $res=mysqli_fetch_assoc($run);?>
                             Name:&nbsp &nbsp    <tr>    
                                    <?php echo $res['name'];?>
                                </tr><br/>
                                Email:<tr>    
                                    <?php echo $res['email'];?>
                                </tr><br>
                                Phone:<tr>    
                                    <?php echo $res['phone'];?>
                                </tr><br>
                                Address:<tr>    
                                    <?php echo $res['address'];?>
                                </tr><br>
                                Qualification:<tr>    
                                    <?php echo $res['qualification'];?>
                                </tr><br>
                                Designation:<tr>    
                                    <?php echo $res['designation'];?>
                                </tr>
                        </table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<button type="submit" href="update.php" class= 'btn btn-primary btn-block col-md-2'style="margin-top:10px;float:right;margin-right:180px;"><a href="update.php"style="color:white;text-decoration:none;">Edit_Profile</a></button>
<button type="submit" href="logout.php" class= 'btn btn-primary btn-block col-md-2'style="margin-top:10px;float:left;margin-right:180px;"><a href="update.php"style="color:white;text-decoration:none;">Edit_Profile</a></button>
</body>
</html>