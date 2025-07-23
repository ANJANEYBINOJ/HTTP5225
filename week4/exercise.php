<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
$url = "https://jsonplaceholder.typicode.com/users";
$data = file_get_contents($url);
return json_decode($data, true);
}
// Get the list of users
$users = getUsers();

    for ($i = 0; $i < count($users); $i++) {
        echo "<h2>User " . ($i + 1)  . "</h2>";
        echo "Name: " . $users[$i]['name'] . "<br>";
        echo "Username: " . $users[$i]['username'] . "<br>";
        echo "Email: "  . $users[$i] ['email']  . "<br>";
        echo "Address: " . $users[$i]['address']['street']; 
     }
        ?>
</body>
</html>