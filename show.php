<?php
    include('..\dbcon\config.php');
    include('auth.php');
    $data="SELECT * FROM inser";
    $run = mysqli_query($conn,$data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Profile</h2>
  <p>If You want to edit your profile click the update button</p>            
  <table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th>Id</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>               
        <th>Phone</th>        
        <th>Address</th>        
        <th>Gender</th>        
        <th>Designation</th>        
        <th>Qualification</th>        
        <th>Experience</th>  
        <th>Action</th>      
      </tr>
    </thead>
    <tbody>
    <?php 
        $i=1;
        while($res=mysqli_fetch_assoc($run)){?>
        <tr>
            <td><?php echo $i ?><?php $i++;?></td>
            <td><img src="<?php echo 'uploads/'. $res['img'];?>" width="100px" alt="image"></td>
            <td><?php echo $res['name'];?></td>            
            <td><?php echo $res['email'];?></td>                       
            <td><?php echo $res['phone'];?></td>            
            <td><?php echo $res['address'];?></td>            
            <td><?php echo $res['gender'];?></td>            
            <td><?php echo $res['designation'];?></td>            
            <td><?php echo $res['qualification'];?></td>            
            <td><?php echo $res['experience'];?></td> 
            <td><button type="button" class="btn"><a href="update.php?id=$res['id']">Edit</a></button>
            <button type="button" class="btn"><a href="delete.php?$res=['id']">Delete</a></button></td>
        </tr>
        <?php
        }
        ?>
        <style>
          .btn{
            /* float:left; */
            display:flex;
            display:block;
            border:2px solid red;
            display:inline-block;
            padding-left:3px;
          }
        </style>
    </tbody>
  </table>
</div>

</body>
</html>
