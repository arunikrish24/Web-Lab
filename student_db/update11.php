<?php
include 'dbconnection.php';
if (isset($_GET['student_id'])) {
    $studentid = $_GET['student_id'];

    // Fetch the existing data for the given student ID
    $sql = "SELECT * FROM student_details WHERE student_id = '$studentid'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);

        // Redirect to the update page with student data
        $query = http_build_query($student);
        header("Location: update22.php?$query");
        exit();
    } else {
        echo "No student found with ID: $studentid";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Retrieve Student Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-size: 14px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 400px) {
            form {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <h2>Retrieve Student Details</h2>
    <form method="GET" action="">
        <label for="student_id">Student ID:</label>
        <input type="text" name="student_id" id="student_id" required>
        <button type="submit">Retrieve</button>
    </form>
</body>
</html>