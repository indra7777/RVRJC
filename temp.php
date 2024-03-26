<?php
// Establish connection
if ($mysql = new mysqli("localhost", "exam", "exam", "userlogin")) {
    echo "connected successfully";
}

// Check connection
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}

// Query
if ($result = $mysql->query("SELECT * FROM faculty WHERE branch='EC'")) {
    // Fetch data
    while ($rs = $result->fetch_assoc()) {
        foreach ($rs as $key => $value) {
            echo "$key: $value<br>";
        }
echo "<br><br><br>";
    }
    // Free result set
    $result->free();
} else {
    echo "Error: " . $mysql->error;
}

// Close connection
$mysql->close();
?>
