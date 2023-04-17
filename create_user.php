<html>
<head>
<title>Create User</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<h2 align="center">Create User</h2>
<div class="container">
<form method="post">
<input type="text" name="nm" class="name" placeholder="NAME"><br>
<input type="text" name="en" class="email" placeholder="EMAIL"><br>
<input type="number" name="b" class="balance" placeholder="BALANCE"><br>
<input type="Submit" name="sb" class="submit">
<h3>your account created successfully...!</h3>
<div class="reg"></div>
</form>
</div>
<?php
$con=mysqli_connect('localhost','root','','bankrecord');
if(isset($_POST['sb']))
{
 $name=$_POST['nm'];
 $email=$_POST['en'];
 $balance=$_POST['b'];
 $query="INSERT INTO user_data(Name,Email,Balance) VALUES ('$name','$email','$balance')";
 $run=mysqli_query($con,$query);
}
?>
</body>
</html>
