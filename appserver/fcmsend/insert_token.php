<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //code to process data

    // TODO: Add request code
    // TODO: Add the response thing as a function
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

        /**
         * INSERT INTO `table` (`value1`, `value2`) 
         * SELECT 'stuff for value1', 'stuff for value2' FROM DUAL 
         * WHERE NOT EXISTS (SELECT * FROM `table` 
         * WHERE `value1`='stuff for value1' AND `value2`='stuff for value2' LIMIT 1)
         */
        // $sql = "INSERT INTO `user_token_table` (`dataID`, `firebaseID`, `deviceToken`) VALUES (NULL, '$firebase_user_id', '$token')";

        // Insert only if device token not there
        $sql = "INSERT INTO `user_token_table` (`dataID`, `firebaseID`, `deviceToken`) SELECT NULL, '$firebase_user_id', '$token' FROM DUAL WHERE NOT EXISTS (SELECT * FROM `user_token_table` WHERE `deviceToken`='$token' LIMIT 1)";

        $check = mysqli_query($link, $sql);

        // TODO: Maybe do something against SQL injection
        if ($check) {
            echo "Device token successfully added <br>";
        } else {
            echo "ERROR HAS OCCURRED WHILE ADDING TOKEN " . mysqli_errno();
        }
    } else {
        echo "Your request failed";
    }
}

// Right SQL code INSERT INTO `user_token_table` (`dataID`, `firebaseID`, `deviceToken`) VALUES (NULL, 'abc', 'aded')";

mysqli_close($link);
