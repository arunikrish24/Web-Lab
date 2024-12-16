<?php
include 'dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Handle form submission
    $id = $_POST['student_id'];
    $name = $_POST['student_name'];
    $course = $_POST['course_name'];
    $semester = $_POST['semester'];
    $gender = $_POST['gender'];
    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "";

    // Update student details
    $sql = "UPDATE student_details 
            SET student_name = '$name', course_name = '$course', semester = '$semester', gender = '$gender', hobbies = '$hobbies' 
            WHERE student_id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: homepage.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    exit();
}

// Retrieve student data from query parameters
if (isset($_GET['student_id'])) {
    $student = $_GET;
} else {
    echo "No student data provided.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student Details</title>
</head>
<body>
    <h2>Update Student Details</h2>
    <form method="POST" action="">
        <input type="hidden" name="student_id" value="<?php echo $student['student_id']; ?>">

        <label for="student_name">Name:</label>
        <input type="text" name="student_name" value="<?php echo $student['student_name']; ?>" required><br><br>

        <label for="semester">Semester:</label>
        <input type="text" name="semester" value="<?php echo $student['semester']; ?>" required><br><br>

        <label for="course_name">Course:</label>
        <input type="text" name="course_name" value="<?php echo $student['course_name']; ?>" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="male" <?php if ($student['gender'] == 'male') echo 'checked'; ?>> Male
        <input type="radio" name="gender" value="female" <?php if ($student['gender'] == 'female') echo 'checked'; ?>> Female<br><br>

        <label for="hobbies">Hobbies:</label>
        <?php $existingHobbies = explode(", ", $student['hobbies']); ?>
        <input type="checkbox" name="hobbies[]" value="sports" <?php if (in_array("sports", $existingHobbies)) echo 'checked'; ?>> Sports
        <input type="checkbox" name="hobbies[]" value="music" <?php if (in_array("music", $existingHobbies)) echo 'checked'; ?>> Music
        <input type="checkbox" name="hobbies[]" value="dance" <?php if (in_array("dance", $existingHobbies)) echo 'checked'; ?>> Dance
        <input type="checkbox" name="hobbies[]" value="reading" <?php if (in_array("reading", $existingHobbies)) echo 'checked'; ?>> Reading<br><br>

        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>