<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="fbstyle.css">


</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "petstorefeedback";

$connection = new mysqli($servername, $username, $password, $database);
if ($connection->connect_error) {
    die ("Connection Failed".$connection->connect_error);
}

$sql = "select * from feedback";
$result = $connection->query($sql);


while ($row =$result -> fetch_assoc()) {
    echo "
    <tr>
    <td>$row[Name]</td>
    <td>$row[Phone]</td>
    <td>$row[Feedback]</td>
    <td>$row[Time]</td>
  </tr>
    ";
}


?>

    <header>
        <div class="navbar">
            <div class="header">
        <a class="header" href="index.php">Pet Shop</a>
            </div>
                    <div class="search-box">
                <input type="text" placeholder="Search">
                <button>Search</button>
            </div>
        </div>
    </header>
    <table>
  <tr>
    <th width=200px>Name</th>
    <th width=100px>Phone</th>
    <th>Feedback</th>
  </tr>
  
</table>




</body>
</html>
