<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animated Form</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body style="background-image:url(images/2.jpg)">
  <div class="container">
    <form action="connection.php" method="post">
      <h2>User Register</h2>
      <div class="inputbox">
          <input type="text" name="fname" placeholder="First Name" required onkeypress="return chr(event);"
          maxlength="30">
          <i class='bx bxs-user'></i>
      </div>
      <div class="inputbox">
        <input type="text" name="lname" placeholder="Last Name" required onkeypress="return chr(event);" maxlength="30">
        <i class='bx bxs-user'></i>
    </div>
    <div class="inputbox">
      <input type="text" name="uname" placeholder="User Name" required onkeypress="return chr(event);" maxlength="30">
      <i class='bx bxs-user'></i>
      
  </div>
  <div class="inputbox">
    <input type="email" name="email" placeholder="Email Address" required maxlength="30">
    <i class='bx bxs-envelope-open'></i>
</div>
<div class="inputbox">
  <input type="password" name="password" placeholder="Password" required maxlength="15" minlength="8">
  <i class="bx bx-low-vision"></i>
</div>
<div class="inputbox">
  <input type="password" name="cpassword" placeholder="Confirm Password" required maxlength="15" minlength="8">
  <i class="bx bx-low-vision"></i>
</div>

<div class="checkbox">
    <input type="checkbox" name="checkbox" required>
    <span>Terms and conditions</span>
</div>
  <button name="sumit">Register</button>
    </form>
  </div>


  <script language="javascript">

    function chr(e)
  {
  ascii = e.keyCode;
  //alert(ascii);
  if(((ascii >=65) && (ascii <=90)) ||((ascii >=97) && (ascii <=122)) || (ascii ==32))
    return true;
    else 
    return false;
  }
  
  function numb(e)
  {
  ascii = e.keyCode;
  //alert(ascii);
  
    if(((ascii >=48) && (ascii <=58)) || (ascii ==32))
      return true;
      else 
      return false;
  }
    </script>
   





</body>
</html>