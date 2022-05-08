<?php

define("USER_REQUEST_CODE", "2102002");

$id = $_POST["userID"];
$title = $_POST["title"];
$body = $_POST["body"];
$action = $_POST["notificationAction"];
$user_request_code = $_POST["request"];

if ($user_request_code === USER_REQUEST_CODE) {
    require '../includes/init.php';

    sendNotification($link, $title, $body, $action, $id);
} else {
    echo "You are unauthorised";
}

/**
 * Sends a notification to a device
 * @param $link: my sql connection
 * @param $title: title of the notification
 * @param $body: body of the notification
 */
function sendNotification($link, $title, $body, $action, $user_id) {
    $fcm_path = 'https://fcm.googleapis.com/fcm/send';
    $firebase_server_key = 'AAAADduA50E:APA91bENG6oJ2QGSzmeB0MSoM87vJMfU56F5XYBec2TnR2wioUDFVfjx72x166QmakuNxtx96paXcduXoowNHGHoQrtntEs1GZf_KDPbd4Klw4G9oujgZFO5s3aOBCjmEl9idJ5xxGFq';

    $sql = "";
    $checked_id = splitIdsIntoArray($user_id);
    if (is_array($checked_id)) {
        $sql = makeSqlForArray($checked_id);
    } else {
        // This is the sql code
        $sql = "SELECT deviceToken FROM user_token_table WHERE firebaseID='$user_id'";
    }

    echo "SQL = $sql <br>" ;

    $result = mysqli_query($link, $sql);
    $device_tokens = array();
    echo "before <br>";

    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        $device_tokens[] = $row[0];
    }
    echo "after <br>";

    // Only one device
    if (count($device_tokens) > 1) {
        $fields = array(
            'registration_ids'=>$device_tokens,
            'notification'=>array(
                'title'=>$title,
                'body'=>$body
            ),
            'data'=>array(
                'action'=>$action
            )
        );    
    } else if (count($device_tokens) === 0) {
        die ("No results given");
    } else {
        $fields = array(
            'to'=>$device_tokens[0],
            'notification'=>array(
                'title'=>$title,
                'body'=>$body
            ),
            'data'=>array(
                'action'=>$action
            )
        );
    }
 
    // Headers and fiels for POST request
    $headers = array(
        'Authorization: key= ' . $firebase_server_key,
        "Content-Type: application/json"
    );
    
    
    foreach ($fields as $key=>$value){
        echo "$key = $value <br>";
        if ($key == "notification") {
            foreach ($fields[$key] as $nkey=>$nvalue) {
                echo "$nkey = $nvalue <br>";
            }
        }
    }
    
    // Payload
    $payload = json_encode($fields);
    
    // Start request
    $curl_session = curl_init();
    curl_setopt($curl_session, CURLOPT_URL, $fcm_path);
    curl_setopt($curl_session, CURLOPT_POST, true);
    curl_setopt($curl_session, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl_session, CURLOPT_IPRESOLVE, CURLOPT_IPRESOLVE_V4);
    curl_setopt($curl_session, CURLOPT_POSTFIELDS, $payload);
    
    $executed = curl_exec($curl_session);
    echo $executed . "<br>";
    
    if (curl_errno($curl_session)) {
        // this would be your first hint that something went wrong
        die('Couldn\'t send request: ' . curl_error($curl_session));
    } else {
        // check the HTTP status code of the request
        $resultStatus = curl_getinfo($curl_session, CURLINFO_HTTP_CODE);
        if ($resultStatus == 200) {
            // everything went better than expected
            echo 'It worked apparently';
        } else {
            // the request did not complete as expected. common errors are 4xx
            // (not found, bad request, etc.) and 5xx (usually concerning
            // errors/exceptions in the remote script execution)
    
            die('Request failed: HTTP status code: ' . $resultStatus);
        }
    }

    curl_close($curl_session);
}

/**
 * @param String
 */
function splitIdsIntoArray($strList) {
    if (strpos($strList, " ") !== false) {
        return explode(" ", $strList);
    } else {
        return $strList;
    }
}

function makeSqlForArray($haystack) {
    $sql = "SELECT deviceToken FROM user_token_table WHERE firebaseID IN (";   

    foreach ($haystack as $firebaseId) {
        $sql .= "'$firebaseId',";
    }

    $sql = substr($sql, 0, -1);
    $sql .= ")";
    return $sql;
}