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

    /// <summary>
    /// Cloud Script is one of PlayFab's most versatile features. It allows client code to request execution of any kind of
    /// custom server-side functionality you can implement, and it can be used in conjunction with virtually anything.
    /// https://docs.microsoft.com/rest/api/playfab/cloudscript/server-side-cloud-script/executefunction
    /// </summary>
    public static function ExecuteFunction($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/CloudScript/ExecuteFunction", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all currently registered Azure Functions for a given title.
    /// https://docs.microsoft.com/rest/api/playfab/cloudscript/server-side-cloud-script/listfunctions
    /// </summary>
    public static function ListFunctions($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/CloudScript/ListFunctions", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all currently registered HTTP triggered Azure Functions for a given title.
    /// https://docs.microsoft.com/rest/api/playfab/cloudscript/server-side-cloud-script/listhttpfunctions
    /// </summary>
    public static function ListHttpFunctions($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/CloudScript/ListHttpFunctions", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all currently registered Queue triggered Azure Functions for a given title.
    /// https://docs.microsoft.com/rest/api/playfab/cloudscript/server-side-cloud-script/listqueuedfunctions
    /// </summary>
    public static function ListQueuedFunctions($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/CloudScript/ListQueuedFunctions", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Generate an entity PlayStream event for the provided function result.
    /// https://docs.microsoft.com/rest/api/playfab/cloudscript/server-side-cloud-script/postfunctionresultforentitytriggeredaction
    /// </summary>
    public static function PostFunctionResultForEntityTriggeredAction($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/CloudScript/PostFunctionResultForEntityTriggeredAction", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Generate an entity PlayStream event for the provided function result.
    /// https://docs.microsoft.com/rest/api/playfab/cloudscript/server-side-cloud-script/postfunctionresultforfunctionexecution
    /// </summary>
    public static function PostFunctionResultForFunctionExecution($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/CloudScript/PostFunctionResultForFunctionExecution", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Generate a player PlayStream event for the provided function result.
    /// https://docs.microsoft.com/rest/api/playfab/cloudscript/server-side-cloud-script/postfunctionresultforplayertriggeredaction
    /// </summary>
    public static function PostFunctionResultForPlayerTriggeredAction($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/CloudScript/PostFunctionResultForPlayerTriggeredAction", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Generate a PlayStream event for the provided function result.
    /// https://docs.microsoft.com/rest/api/playfab/cloudscript/server-side-cloud-script/postfunctionresultforscheduledtask
    /// </summary>
    public static function PostFunctionResultForScheduledTask($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/CloudScript/PostFunctionResultForScheduledTask", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Registers an HTTP triggered Azure function with a title.
    /// https://docs.microsoft.com/rest/api/playfab/cloudscript/server-side-cloud-script/registerhttpfunction
    /// </summary>
    public static function RegisterHttpFunction($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/CloudScript/RegisterHttpFunction", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Registers a queue triggered Azure Function with a title.
    /// https://docs.microsoft.com/rest/api/playfab/cloudscript/server-side-cloud-script/registerqueuedfunction
    /// </summary>
    public static function RegisterQueuedFunction($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/CloudScript/RegisterQueuedFunction", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Unregisters an Azure Function with a title.
    /// https://docs.microsoft.com/rest/api/playfab/cloudscript/server-side-cloud-script/unregisterfunction
    /// </summary>
    public static function UnregisterFunction($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/CloudScript/UnregisterFunction", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
