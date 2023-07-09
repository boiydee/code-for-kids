<?php
include "./php/connect.php";

// Handle the registration form submission
if (isset($_POST['register'])) {
  // Get the submitted form data
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $password = $_POST['password'];

//  // Create a new database connection
//  $conn = new mysqli($servername, $username, $serverPassword, $dbname);
//
//  // Check for connection errors
//  if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//  }

  // Prepare the SQL statement with placeholders for user data
  //Binding params to stop SQL injection
  $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";

  // Create a prepared statement
  $stmt = $connection->prepare($sql);

  // Generate a hashed password for secure storage
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Bind the user data to the prepared statement placeholders
  //Param binds to stop SQL injection`
  $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

  // Execute the prepared statement
  if ($stmt->execute()) {
    // Registration successful, redirect to a success page or perform any additional actions
    header("Location: index.php");
    exit();
  } else {
    // Registration failed, handle the error accordingly
    echo "Registration failed: " . $stmt->error;
  }

  // Close the prepared statement and database connection
  $stmt->close();
  $connection->close();
}
?>
