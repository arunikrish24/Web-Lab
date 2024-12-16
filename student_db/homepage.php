<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
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
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Center the navigation */
        .nav-container {
            text-align: center;
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
            margin-bottom: 20px;
            font-size: 28px;
        }

        /* Navigation link styles */
        a {
            display: block;
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
            margin: 10px 0;
            padding: 10px;
            border-radius: 4px;
            background-color: #f1f1f1;
            transition: all 0.3s ease;
        }

        /* Hover effect */
        a:hover {
            background-color: #007bff;
            color: white;
            transform: translateY(-2px);
        }

        /* Active link styling */
        a:active {
            transform: translateY(1px);
        }

        /* Spacing around the links */
        a:first-child {
            margin-top: 0;
        }
        a:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <div class="nav-container">
        <h1>Student Management System</h1>
        <a href="login2.php">Home</a>
        <a href="insertion.php">Add Student Details</a>
        <a href="viewall.php">View All Students</a>
        <a href="search.php">Search a Student by ID</a>
        <a href="delete.php">Delete a Student</a>
        <a href="update11.php">Update Student Details</a>
        <a href="logout.php">Logout</a>
    </div>

</body>
</html>
