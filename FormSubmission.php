<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Submitted Form</title>
</head>
<body>
<h1> Registration Info </h1>
<legend><b>Basic Information::</b></legend>
<br><br>
<hr>
Firstname: <?php echo $_POST['firstname'];?>
<br><br>
Lastname: <?php echo $_POST['lastname'];?>
<br><br>
Gender:
<?php echo $_POST ['gender'];?>
<br><br>
Date of Birth:<?php echo $_POST['Dob'];?>
<br><br>
Religion:<?php echo $_POST['religion'];?>

<br><br>
<legend><b>Contact information:</b></legend>
<hr>
<br><br>
Present address:<?php echo $_POST['presentaddress'];?>
<br><br>
Permanent address:<?php echo $_POST['permanentaddress'];?>
<br><br>
Phone:<?php echo $_POST['phone'];?>
<br><br>
Email:<?php echo $_POST['email'];?>
<br><br>
Link:<?php echo $_POST['link'];?>
<br><br>
<b><legend><b>Account Information:</b></legend>
<hr>
<br><br>
Username:<?php echo $_POST['username'];?>
<br><br>
Password:<?php echo $_POST['password'];?>
<br><br>



</body>
</html>