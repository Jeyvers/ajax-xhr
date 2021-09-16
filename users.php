<?php

// Create Connnection 
$conn =  mysqli_connect('localhost', 'root', '123456', 'ajax');

$query = 'SELECT * FROM users';

//  Get Result 
$result = mysqli_query($conn, $query);

// Fetch Data
$users = mysqli_fetch_all($result, MYSQL_ASSOC);

echo json-encode($users);
// Takes result and puts in a JSON format