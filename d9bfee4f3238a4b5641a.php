<?php 
    $a = bin2hex(random_bytes(10));
    error_reporting(0); 
include("dbcon.php"); 
$get = $_GET['pid'];
$s_s= 38; 
$s_d= 5;
$sql_query = $conn->query("INSERT INTO report (v_id,s_id,vendor,a_id) VALUE('$get','$s_s','$s_d','d9bfee4f3238a4b5641a')"); if($sql_query) header("Location: https://edgeapi.innovatemr.net/startSurvey?Test=1&NotLive=1&survNum=mPg2za6K&supCode=92&PID=$a&s_id=38"); exit; ?>