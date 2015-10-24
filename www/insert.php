<html>
<head>
</head>
<body>
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];

    // Open DB connection
    $conn = openDbConnection();
    insertIntoDb($conn, "test", "name", $name);
    $result = selectDataFromDb($conn, "test");
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
        echo "--------------------------------<br>";
    }

    // Close DB connection
    $conn->close();
}
?>

<a href="index.php">Back</a>
</body>
</html>