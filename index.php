

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="stylesheet" href="style.css">
        <title>Login Page</title>
      </head>
<body>
  <div class="container" style="margin-top:10% ;">
    <h2> User Login</h2>
    <form action=""  method="post" >
      <input type="text" placeholder="id" required name="id">
      <input type="password" placeholder="Password" name = "password"required>
      <input type="submit" value="Login" name="submit">
  <center>
  <br>
      <a href="admin/adminlogin.php"  >Admin Login</a>
      </center>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


<?php   
session_start();

if(isset($_POST['submit']))
{
  $con =  mysqli_connect("localhost","root","");
  $db =  mysqli_select_db($con,"login");


  $id = $_POST['id'];
  $password = $_POST['password'];



    $query = "SELECT * FROM `login`. `user`  WHERE u_id='$id'";

    $query_run = mysqli_query($con,$query);

    while($row = mysqli_fetch_assoc($query_run))
    {
        if($row['u_id']==$id)
        {

              if($row['u_password']==$password)
              {
                $_SESSION['name']=$row['u_name'];
                $_SESSION['id']=$row['u_id'];
               


                header("location: userdashboard.php");

             
               
             


              }
              else{
                ?>
                <br><br> <center><span class="alert-danger"> <b> Invalid Credentials  </b></span></center>
                 
               <?php
                  
              }
        }
       
    }
    $con->close();
  }
?>