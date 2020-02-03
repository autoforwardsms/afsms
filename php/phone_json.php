<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $data = json_decode(file_get_contents('php://input'), true);

        # You can parse more variables from Body here
        $phoneNumber = $data['data']['phoneNumber'];
        $smsContent = $data['data']['sms'];

        # From here, you can process Body content further. For demonstration purpose, I only return back the parsed content.
        $json = array("phoneNumber" => $phoneNumber, "sms" => $smsContent);

    }else{
        $json = array("status" => 0, "msg" => "Request method not accepted");
    }
    /* Output header */
	header('Content-type: application/json');
    echo json_encode($json);
?>

<!-- curl -i -H "Content-Type: application/json" -X POST -d '{"data":{"phoneNumber": "123456789", "sms": "This is a test SMS"}}' http://localhost:8080/phone_json.php -->