<?php

include 'dbconnection.php';

if(isset($_POST['submit']))

{

	$fname=$_POST['first_name'];

	$lname=$_POST['last_name'];

	$cno=$_POST['contact_no'];

	$email=$_POST['email_id'];

	$uname=$_POST['user_name'];

	$psswrd=$_POST['password'];

	$sql = "INSERT INTO userreg(first_name,last_name,contact_no,email_id,user_name,password)VALUES ('$fname','$lname','$cno','$email','$uname','$psswrd')";


	if (mysqli_query($conn, $sql)) {

  		echo "New record created successfully";

		} else {

  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);

		}


	mysqli_close($conn);

}

else

{


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group input:focus {
            outline: none;
            border-color: #007bff;
        }
        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registration Form</h2>
        <form action="" method="POST">
            <!-- CSRF Token Placeholder -->
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required placeholder="Enter your first name"> 
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required placeholder="Enter your last name">
            </div>
            <div class="form-group">
                <label for="contact_no">Contact No:</label>
                <input type="tel" id="contact_no" name="contact_no" pattern="[0-9]{10}" required placeholder="Enter your contact number">
            </div>
            <div class="form-group">
                <label for="email_id">Email ID:</label>
                <input type="email" id="email_id" name="email_id" required placeholder="Enter your email address">
            </div>
            <div class="form-group">
                <label for="user_name">User Name:</label>
                <input type="text" id="user_name" name="user_name" required placeholder="Choose your username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="Create a password">
            </div>
            <input type="submit" class="btn-submit"  name="submit" value="Register">
            <p>Already have an account?<a href="#">Login</a></p>
        </form>
    </div>
</body>
</html>
<?php
}
?>
