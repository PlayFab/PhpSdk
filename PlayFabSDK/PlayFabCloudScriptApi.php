<?php
include 'PlayFabHttp.php';

class PlayFabCloudScriptApi
{
    /// <summary>
    /// Executes CloudScript using the Entity Profile
    /// https://api.playfab.com/Documentation/CloudScript/method/ExecuteEntityCloudScript
    /// </summary>
    public static function ExecuteEntityCloudScript($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/CloudScript/ExecuteEntityCloudScript", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
