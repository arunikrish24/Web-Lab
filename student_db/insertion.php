<?php
include 'dbconnection.php';
if(isset($_POST['submit']))
{
    $sname=$_POST['name'];
    $crse=$_POST['course'];
    $sem=$_POST['semester'];
    $gender1=$_POST['gender'];

    // Handle hobbies as an array and join them into a single string
    if (isset($_POST['hobbies'])) {
        $hobbies1 = implode(", ", $_POST['hobbies']); // Convert array to comma-separated string
    } else {
        $hobbies1 = ""; // If no hobbies are selected, set as empty
    }

    $sql = "INSERT INTO student_details(student_name, course_name, semester, gender, hobbies) 
            VALUES ('$sname', '$crse', '$sem', '$gender1', '$hobbies1')";

    if (mysqli_query($conn, $sql)) {
        header("Location: homepage.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
else
{
?>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"], input[type="radio"], input[type="checkbox"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 20px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="radio"], input[type="checkbox"] {
            width: auto;
            margin-right: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
            font-size: 16px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-group input[type="submit"]:active {
            background-color: #004085;
        }
        
        .hobbies-checkbox {
            display: flex;
            flex-wrap: wrap;
        }

        .hobbies-checkbox input {
            margin-right: 15px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Student Registration</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Student Name:</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="semester">Semester:</label>
                <input type="text" name="semester" id="semester" required>
            </div>

            <div class="form-group">
                <label for="course">Course:</label>
                <input type="text" name="course" id="course" required>
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <input type="radio" name="gender" value="female" required> Female
                <input type="radio" name="gender" value="male"> Male
            </div>

            <div class="form-group">
                <label>Hobbies:</label>
                <div class="hobbies-checkbox">
                    <input type="checkbox" name="hobbies[]" value="sports"> Sports
                    <input type="checkbox" name="hobbies[]" value="reading"> Reading
                    <input type="checkbox" name="hobbies[]" value="dance"> Dance
                    <input type="checkbox" name="hobbies[]" value="music"> Music
                </div>
            </div>

            <div class="form-group">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
<?php
}
?>
