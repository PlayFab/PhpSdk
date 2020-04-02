<?php
include 'PlayFabHttp.php';

class PlayFabInsightsApi
{
    /// <summary>
    /// Gets the current values for the Insights performance and data storage retention, list of pending operations, and the
    /// performance and data storage retention limits.
    /// https://docs.microsoft.com/rest/api/playfab/insights/analytics/getdetails
    /// </summary>
    public static function GetDetails($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Insights/GetDetails", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Retrieves the range of allowed values for performance and data storage retention values as well as the submeter details
    /// for each performance level.
    /// https://docs.microsoft.com/rest/api/playfab/insights/analytics/getlimits
    /// </summary>
    public static function GetLimits($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Insights/GetLimits", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets the status of a SetPerformance or SetStorageRetention operation.
    /// https://docs.microsoft.com/rest/api/playfab/insights/analytics/getoperationstatus
    /// </summary>
    public static function GetOperationStatus($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Insights/GetOperationStatus", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets a list of pending SetPerformance and/or SetStorageRetention operations for the title.
    /// https://docs.microsoft.com/rest/api/playfab/insights/analytics/getpendingoperations
    /// </summary>
    public static function GetPendingOperations($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Insights/GetPendingOperations", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Sets the Insights performance level value for the title.
    /// https://docs.microsoft.com/rest/api/playfab/insights/analytics/setperformance
    /// </summary>
    public static function SetPerformance($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Insights/SetPerformance", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Sets the Insights data storage retention days value for the title.
    /// https://docs.microsoft.com/rest/api/playfab/insights/analytics/setstorageretention
    /// </summary>
    public static function SetStorageRetention($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Insights/SetStorageRetention", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
