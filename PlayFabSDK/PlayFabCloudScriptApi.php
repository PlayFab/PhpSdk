<?php
include 'PlayFabHttp.php';

class PlayFabCloudScriptApi
{
    /// <summary>
    /// Cloud Script is one of PlayFab's most versatile features. It allows client code to request execution of any kind of
    /// custom server-side functionality you can implement, and it can be used in conjunction with virtually anything.
    /// https://docs.microsoft.com/rest/api/playfab/cloudscript/server-side-cloud-script/executeentitycloudscript
    /// </summary>
    public static function ExecuteEntityCloudScript($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/CloudScript/ExecuteEntityCloudScript", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
