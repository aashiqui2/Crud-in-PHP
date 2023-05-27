
<?php 
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['pass'];

  //insert querry

  $sql="insert into crud (name,email,phone,password) values('$name','$email','$phone','$password')";
  $result=mysqli_query($conn,$sql);

  if($result){
   //echo "Successfullt Inserted";
   header('location:display.php');
  }
  else{
    die(mysqli_error($conn));
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

  <title>Crud Operation</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Enter your name" name="name" 
        autocomplete="off">
      </div>
      <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" placeholder="Enter your email" name="email" 
        autocomplete="off">
      </div>
      <div class="form-group">
        <label>Phone</label>
        <input type="tel" class="form-control" placeholder="Enter your phone" name="phone" 
        autocomplete="off">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" placeholder="Enter your password" name="pass" autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>


</body>

</html>