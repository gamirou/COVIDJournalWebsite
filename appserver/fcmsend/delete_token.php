<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //code to process data

    $firebase_user_id = $_POST["firebaseID"];
    $token = $_POST["deviceToken"];

    if (empty($firebase_user_id) || empty($token)) {
        $response = array('status' => false, 'message' => 'Invalid Values');    
    } else {
        $response = array('status' => true,'message' => 'success');
    }

    // Is the status true?
    if ($response['status']) {
        // So the data is fetched from the POST request
        require_once('../includes/init.php');

        echo "Device token: $token <br>";
        
        $sql = "DELETE FROM user_token_table WHERE deviceToken='$token'";
        $check = mysqli_query($link, $sql);

        echo "Check result: $check <br>";

        // TODO: Maybe do something against SQL injection
        if ($check) {
            echo "Device token successfully removed <br>";
        } else {
            echo "ERROR HAS OCCURRED WHILE REMOVING TOKEN " . mysqli_errno();
        }
    } else {
        echo "Your request failed";
    }
}

mysqli_close($link);
