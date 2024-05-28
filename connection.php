<?php
$servername = "localhost";
$username = "root";
$password = "vertrigo";
$dbname = "animated_form";
  
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$firstname = $_REQUEST['fname'];
$lastname = $_REQUEST['lname'];
$username = $_REQUEST['uname'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$conpassword = $_REQUEST['cpassword'];


    $sql = "INSERT INTO `form_tabel`(`id`, `fname`, `lname`, `uname`, `email`, `password`, `cpassword`) VALUES (Null,'$firstname','$lastname','$username','$email','$password','$conpassword')";
    
    if (mysqli_query($conn, $sql)) {
      echo "New record submited successfully";
      ?>
      <meta http-equiv = "refresh" content = "1; url = http://localhost/Animated%20form/main.php" />
      <?php
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

?>