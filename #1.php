<?php
$Token = $_GET['1164696209:AAEd3tXD17C2E2POLkQUaAd7ELlnyZnB22U'];
$tok = json_decode(file_get_contents("https://api.telegram.org/bot".$Token."/getme"));
header('Content-type: application/json');
function Error_msg_json($text)
{
    echo json_encode(
        [
            "ok"=>false,
            "msg_error"=>$text
        ]
    );
}
if (isset($_GET)){
    if (isset($_GET["text"]) and !empty($_GET["text"]) and isset($_GET["name"]) and !empty($_GET["name"])){
        echo json_encode(
            [
                "ok"=>true,
                "text"=> $_GET["text"] . $_GET["name"]
            ]
        );
    }else{
        echo Error_msg_json("add ?text=keko&name=test");
    }
}else{
    echo Error_msg_json("only GET");
}
