<?php
// Get leave details from POST data
$employee_id = $_POST['employee_id'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

// Validate input (add more validation as needed)

// Insert leave request into database
$sql = "INSERT INTO leave_requests (employee_id, start_date, end_date, status)
        VALUES ('$employee_id', '$start_date', '$end_date', 'Pending')";

if ($conn->query($sql) === TRUE) {
    echo "Leave request submitted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
