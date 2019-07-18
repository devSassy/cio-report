<?php

$method = $_SERVER['REQUEST_METHOD'];

//Process only when method is POST
if($method == "POST"){
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);

    $event = $json->event_type;
    $campaign = $json->data->campaign_name;

//     switch($text) {
//         case 'hi':
//             $speech = "Hi, Nice to meet you";
//             break;

//         case 'bye':
//             $speech = "Bye, Good Night";
//             break;
        
//         case 'anything':
//             $speech = "Yes, you can type anything here.";
//             break;
//         default:
//             $speech = "sorry, I ddint get that, Please ask me something else.";
//             break;
//     }
    $response = new \stdClass();
    $response->event = $event;
    $response->campaign = $campaign;
    echo json_encode($response);
}
else{
    echo "method not allowed";
}

?>
