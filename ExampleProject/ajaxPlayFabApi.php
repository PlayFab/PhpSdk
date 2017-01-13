<?php
include "../PlayFabSDK/PlayFabClientApi.php";
include "../PlayFabSDK/PlayFabServerApi.php";
include "../PlayFabSDK/PlayFabMatchmakerApi.php";
include "../PlayFabSDK/PlayFabAdminApi.php";

function ParsePostRequest() {
    try {
        $TitleId = $_POST["TitleId"]; // This should just be hard coded into your server
        $PlayFabApi = $_POST["PlayFabApi"];
        $ApiMethod = $_POST["ApiMethod"];
        $ClientSessionToken = !isset($_POST["ClientSessionToken"])? null : $_POST["ClientSessionToken"];
        $DevSecretKey = !isset($_POST["DevSecretKey"])? null : $_POST["DevSecretKey"]; // This should just be hard coded into your server
        $JsonRequest = json_decode($_POST["JsonRequest"]);
        
        $authValue = $PlayFabApi === "Client" ? $ClientSessionToken : $DevSecretKey;
        $apiReflection = new ReflectionClass("PlayFab" . $PlayFabApi . "Api");
        $methodReflection = $apiReflection->getMethod($ApiMethod);
        $result = $methodReflection->invoke(null, $TitleId, $authValue, $JsonRequest);
        echo $result;
    } catch (Exception $e) {
        echo "Caught exception: ",  $e->getMessage(), "\n";
    }
}

ParsePostRequest();

?>
