<?php
function openDbConnection() {
    $servername = "localhost:3306";
    $username = "gsm";
    $password = "password";
    $dbname = "cardealer";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function insertIntoDb($conn, $tableName, $columnName, $value) {
    $sql = "INSERT INTO " . $tableName . " (" . $columnName . ") VALUES ('" . $value . "');";
    if (!empty($value)) {
        $conn->query($sql);
    }
}

function selectDataFromDb($conn, $tableName, $columnName = "*", $whereColumnName = "", $value = "") {
    $sql = "SELECT " . $columnName .  " FROM " . $tableName;
    if($whereColumnName != "" && $value != "") {
        $sql .= " WHERE " . $whereColumnName . " = " . "'" . $value . "';";
    }
    return $conn->query($sql);
}

function deleteDataFromDb ($conn, $tableName, $whereColumnName, $value) {
    $sql = "DELETE FROM " . $tableName;
    $sql .= " WHERE " . $whereColumnName . " = " . "'" . $value . "';";
    return $conn->query($sql);
}
?>