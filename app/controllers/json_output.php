<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");

class Json_output extends KM_Controller {
    public function index($user_id = 0)
    {
        $data = array('message' => 'This is the message');
        http_response_code(200);
        echo json_encode($data);
    }
}