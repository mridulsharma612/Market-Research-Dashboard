<?php 
$conn = new mysqli("localhost", "probiqgr_admin", "J7Tn2W=EeA%U", "probiqgr_dashboard");
echo "<center><h1>Survey Quota Full</center></h1>";

$pid = $_GET['id'];
$id= $_GET['s_id'];
$query = "UPDATE new_survey SET quota_full = quota_full + 1 WHERE survey_id = '$id'";
    $sr = $conn->query($query);
    if(!$sr){
        echo "error";
        }

$c ="Quota Full";
$we = "UPDATE report SET our_id='$pid', status='$c', id ='$id' WHERE a_id ='$id'";
$s = $conn->query($we);
if(!$s){
echo "not working";
}

$v_query = "UPDATE report SET status ='$c' WHERE a_id ='$id' ORDER BY date DESC LIMIT 1";
$result = $conn->query($v_query);
    while($rows = $result->fetch_assoc() ){
        $client = $rows['quota_url'];
       echo "<script> window.location.href = \"$client$id\" </script>";
        //PHP Header won;t work well without HTTP protocol
        
}


?>