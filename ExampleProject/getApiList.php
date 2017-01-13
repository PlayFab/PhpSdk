<?php
include "../PlayFabSDK/PlayFabClientApi.php";
include "../PlayFabSDK/PlayFabServerApi.php";
include "../PlayFabSDK/PlayFabMatchmakerApi.php";
include "../PlayFabSDK/PlayFabAdminApi.php";

function ParsePostRequest() {
    try {
        $PlayFabApi = $_POST["PlayFabApi"];
        $apiReflection = new ReflectionClass("PlayFab" . $PlayFabApi . "Api");
        $methodList = $apiReflection->getMethods(ReflectionMethod::IS_STATIC);
        
        $output = new stdClass();
        $output->apiList = array();
        foreach ($methodList as $eachMethod)
            array_push($output->apiList, $eachMethod->name);
        echo json_encode($output);
    } catch (Exception $e) {
        echo "Caught exception: ",  $e->getMessage(), "\n";
    }
}

ParsePostRequest();

?>
