<?php
include('dbFunctions.php');

if (isset($_GET['student_id'])) {
    $studentID = $_GET['student_id'];
    $student = array();
    $query = "SELECT * FROM student where student_id = $studentID";

    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $display[] = $row;
    }

    mysqli_close($link);
    echo json_encode($display);
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
// put your code here
?>
    </body>
</html>
