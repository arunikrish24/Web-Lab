<?php
session_start(); 

$validUsername = "admin";
$validPassword = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $validUsername && $password === $validPassword) {

        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;

        header("Location: homepage.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Container for the form */
        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #555;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            color: #333;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        button:active {
            background-color: #003f7f;
        }

        p {
            text-align: center;
            font-size: 14px;
        }

        p a {
            color: #007bff;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            font-size: 14px;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <!-- Display error message if any -->
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
        
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <button type="submit">Login</button>
        </form>

        <!-- Link for potential password recovery or additional links -->
        <p><a href="#">Forgot Password?</a></p>
    </div>

</body>
</html>
