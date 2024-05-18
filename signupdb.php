<?php
// session_start();
// initializing variables
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "userinfo";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
// if(isset($_POST['submit']))
// {
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    $email=mysqli_real_escape_string($conn, $_POST['mail']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    mysqli_select_db($conn,"userinfo");
    $quer = "SELECT * FROM userinfo WHERE email='$email'";
    $result = mysqli_query($conn, $quer);
    if (mysqli_num_rows($result) > 0) {
      echo "<script>
      alert('Entered Email is already exist !!Please check again!!');
      window.location.href = 'signup.php';
  </script>";
    } 
    else{
    $query="INSERT INTO `userinfo`(`name`,`email`,`password`) VALUES ('$name','$email','$password')";
    mysqli_query($conn, $query);
    $_SESSION['name'] = $name;
    mysqli_close($conn);
    echo "<script>
      alert('Welcome to FOODIEZONE".$_SESSION['name']."! You have successfully SignUp.');
      window.location.href = 'index.html';
  </script>";
    exit();}

?>