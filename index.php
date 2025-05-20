<?php
include(__DIR__ . '/init.inc.php');

MiniEngine::dispatch(function($uri){
    if ($uri == '/robots.txt') {
        return ['index', 'robots'];
    }

    if ($uri == '/swagger' or $uri == '/') {
        return ['swagger', 'ui'];
    }

    if ($uri == '/swagger.yaml') {
        return ['swagger', 'index'];
    }

    // 假設資料名稱為 Example
    // 處理 /examples, /example/{id} => example
    // 依照有沒有 libraries/API/Type/{Example}.php 決定
    //   /examples => ApiController::collectionAction({"type":"example"})
    //   /example/{id} => ApiController::itemAction({"type":"example","id":["id"]})
    //   /example/{id}/foo => ApiController::itemAction({"type":"example","id":["id"]})
    $param = API_Helper::getApiType($uri);
    if ($param) {
        return $param;
    }

    // default
    return null;
});
