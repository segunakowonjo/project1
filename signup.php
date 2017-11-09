<!DOCTYPE html>
<html>


<head>
	<title>HTML Forms</title>
	<link rel="stylesheet" href="signup.css">
</head>
<body>

	<h1 style="color: blue">Signup Page</h1>
	<form class="form-horizontal" action="./loginpage.php" method="POST" target="_blank">
First name: <input type="text" name="firstname"><br><br>
Last name: <input type="text" name="lastname"><br><br>
E-mail address: <input type="text" name="email-address"><br><br>
Password: <input type="text" name="password"><br></br>
Phone number: <input type="text" name="phonenumber"><br><br>
Birthday: <input type="text" name="Birthday"><br><br>
Gender: <input type="text" name="Gender"><br><br>

<button type="submit" class="signupbtn">Sign Up</button>
       <button type="button"  class="cancelbtn">Cancel</button>


	</form>
</body>
</html>