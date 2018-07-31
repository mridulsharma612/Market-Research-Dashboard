<?php 
    $a = bin2hex(random_bytes(10));
    error_reporting(0); 
include("dbcon.php"); 
$get = $_GET['pid'];
$s_s= 42; 
$s_d= 10021;
$sql_query = $conn->query("INSERT INTO report (v_id,s_id,vendor,a_id) VALUE('$get','$s_s','$s_d','$a')"); if($sql_query) header("Location: http://www.nextonservices.com/smt/views/redirection_operations.php?survey_id=16820&identifier=XXXXXXX$a&s_id=42"); exit; ?>