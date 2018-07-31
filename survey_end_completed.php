<?php 
$conn = new mysqli("localhost", "probiqgr_admin", "J7Tn2W=EeA%U", "probiqgr_dashboard");
echo "<center><h1>Survey Completed</center></h1>";
$pid = $_GET['id'];
$id= $_GET['s_id'];
$strSQL = "SELECT * FROM new_survey WHERE survey_id='$id'";
$rs = $conn->query($strSQL);
if (!$rs) {
    echo 'Could not run query: '; //A bit of error checking
    exit;
}
else{
    
    $query = "UPDATE new_survey SET completed = completed + 1 WHERE survey_id = '$id'";
    $sr = $conn->query($query);
    if(!$sr)
        echo "error";
}


$c ="Completed";
$we = "UPDATE report SET our_id='$pid', status='$c', id ='$id' WHERE a_id='$id'";
$s = $conn->query($we);
if(!$s){
echo "not working";
}

$v_query = "UPDATE report SET status ='$c' WHERE a_id ='$id' ORDER BY date DESC LIMIT 1";
$result = $conn->query($v_query);
    while($rows = $result->fetch_assoc() ){
        $client = $rows['complete_end_url'];
        //echo "<script> window.location.href = \$client$pid\" </script>";  
        //create a function that checks url and if http:// is absent, it should be added
        //PHP Header won;t work well without HTTP protocol
        header("Location: $client$id");
        exit;
}


?>