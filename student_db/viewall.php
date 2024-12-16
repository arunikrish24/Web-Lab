<?php
include 'dbconnection.php';
$sql = "SELECT * FROM student_details";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    echo "<div class='container'>";
    echo "<h2>Student Details</h2>";
    echo "<table>";
    echo "<thead><tr><th>Student ID</th><th>Name</th><th>Semester</th><th>Course</th><th>Gender</th><th>Hobbies</th></tr></thead><tbody>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["student_id"] . "</td>";
        echo "<td>" . $row["student_name"] . "</td>";
        echo "<td>" . $row["semester"] . "</td>";
        echo "<td>" . $row["course_name"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["hobbies"] . "</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
    echo "</div>";
} else {
    echo "No results found.";
}

mysqli_close($conn);
?>

<!-- Navigation Back -->
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
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
            text-align: left;
        }
        th, td {
            padding: 12px;
            font-size: 16px;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <center>
        <a href="homepage.php">&lt; Back</a>
    </center>
</body>
</html>
