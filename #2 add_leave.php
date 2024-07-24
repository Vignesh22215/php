<?php
// Assume employee ID is passed through GET or POST method
$employee_id = $_GET['employee_id']; // Example, retrieve employee ID

// Query to fetch employee information
$sql = "SELECT * FROM employees WHERE id = $employee_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $employee = $result->fetch_assoc();
    echo "Employee Name: " . $employee['name'] . "<br>";
    echo "Employee ID: " . $employee['id'] . "<br>";

    // Form to submit leave request
    echo "<form action='submit_leave.php' method='post'>";
    echo "<input type='hidden' name='employee_id' value='" . $employee['id'] . "'>";
    echo "Start Date: <input type='date' name='start_date'><br>";
    echo "End Date: <input type='date' name='end_date'><br>";
    echo "<input type='submit' value='Submit Leave Request'>";
    echo "</form>";
} else {
    echo "Employee not found.";
}

$conn->close();
?>
