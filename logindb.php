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
  $uname = $_POST['user'];
  $pass = $_POST['password'];
  $sql = "SELECT * FROM userinfo WHERE name='$uname' AND password='$pass'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);  
        $_SESSION['name'] = $row['name'];
        mysqli_close($conn);
        echo "<script>
          alert('Welcome to FOODIEZONE".$_SESSION['name']."! You have successfully logged in.');
          window.location.href = 'index.html';
      </script>";
        exit();
}
else {
    // Failed login, show error message
    echo "<script>
      alert('Incorrect username or password. Please try again.');
      window.location.href = 'login.php';
  </script>";
  }
?>
