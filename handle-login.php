<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  include "./php/connect.php";

//  // Create connection
//  $conn = new mysqli($servername, $username, $serverPassword, $dbname);
//
//  // Check connection
//  if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//  }

  // Prepare and execute the SQL query
  $stmt = $connection->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
  $stmt->bind_param("ss", $email, $password);
  $stmt->execute();

  // Check if the user exists
  $result = $stmt->get_result();
  if ($result->num_rows === 1) {
    // Store the signed-in user information in a session
    $_SESSION["user"] = $email;
    header("Location: index.php");
    exit();
  } else {
    echo "User not found!";
    // Handle the case when the user does not exist
  }

  // Close the statement and connection
  $stmt->close();
  $connection->close();
}
?>
