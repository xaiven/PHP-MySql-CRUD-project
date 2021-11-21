<?php
require_once "config.php";
if (isset($_GET['term'])) {
     
   $query = "SELECT * FROM employees WHERE name LIKE '{$_GET['term']}%' LIMIT 25";
    $result = mysqli_query($link, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($employees = mysqli_fetch_array($result)) {
      $res[] = $employees['name'];

    //   console.log('WORKS 11111');
     }
    } else {
      $res = array();
    }
    //return json res
    echo json_encode($res);
}
?>