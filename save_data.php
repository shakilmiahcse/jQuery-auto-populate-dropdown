<?php
// Database connection details
$host = 'localhost';
$db = 'test';
$user = 'root';
$password = '';

// Create a PDO instance
try {
  $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die('Error: ' . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $category = $_POST['category'];
  $subcategory = $_POST['subcategory'];
  $division = $_POST['division'];
  $district = $_POST['district'];
  $image = $_FILES['image']['name'];

  // Upload the image to a desired directory
  $targetDir = 'uploads/';
  $targetPath = $targetDir . $image;
  move_uploaded_file($_FILES['image']['tmp_name'], $targetPath);

  // Insert the form data into the database
  $sql = "INSERT INTO shell (name, category, subcategory,  division, district, image) VALUES (:name, :category, :subcategory, :division, :district, :image)";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':category',$category);
  $stmt->bindParam(':subcategory', $subcategory);
  $stmt->bindParam(':division', $division);
  $stmt->bindParam(':district', $district);
  $stmt->bindParam(':image', $image);

  if ($stmt->execute()) {
    echo 'Data stored successfully.';
  } else {
    echo 'Error storing data.';
  }
}
?>
