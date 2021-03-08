<?php
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: PUT, GET, POST");
// header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

//  header('Access-Control-Allow-Origin: *');
//     header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
//     header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, X-Requested-With, Accept');

// Header set Access-Control-Allow-Origin 'http://krminfotech.epizy.com/krminfotech/krminfotech/mypage.php'​
// Header always set Access-Control-Allow-Methods "POST, GET, DELETE, PUT"
// Header always set Access-Control-Allow-Headers "*"

// header ("Access-Control-Allow-Origin: 'http://krminfotech.epizy.com/krminfotech/krminfotech/mypage.php'");
// header ("Access-Control-Allow-Credentials: true");
// header('Access-Control-Allow-Methods: POST');
// header('Access-Control-Allow-Headers: Content-Type');
// header('Content-Type: application/json');

// header('Access-Control-Allow-Origin: http://krminfotech.epizy.com/krminfotech/krminfotech/mypage.php');
// header('Access-Control-Allow-Headers: X-Requested-With');
// header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
// header('Content-Type: application/json');

defined('BASEPATH') OR exit('No direct script access allowed');
header ("Access-Control-Allow-Origin: 'http://krminfotech.epizy.com/krminfotech/krminfotech/mypage.php'");
header ("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');



$conn = new mysqli('sql106.epizy.com','epiz_26244093','gwYaGp7ynabeK','epiz_26244093_krminfotech');
$sql = "SELECT * FROM project_data ORDER BY id Asc";
// $sql = "SELECT * FROM userdata ORDER BY id DESC";
$result = $conn->query($sql);
$myArr = array();
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$myArr[] = $row;
}
} else {
echo "0 results";
}
$myJSON = json_encode($myArr);
echo $myJSON;
