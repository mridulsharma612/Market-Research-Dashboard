<?php $conn = new mysqli("localhost","root","","probiqgr_dashboard");

// this is the right way to connect to any mysql DB in PHP
    if ($conn->connect_error) {
        trigger_error("Connection to the Database has failed " . $conn->connect_error, E_USER_ERROR);
    
    
}
?>