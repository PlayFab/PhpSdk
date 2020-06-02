<?php
include 'PlayFabHttp.php';

class PlayFabEventsApi
{
    /// <summary>
    /// Write batches of entity based events to PlayStream. The namespace of the Event must be 'custom' or start with 'custom.'.
    /// https://docs.microsoft.com/rest/api/playfab/events/playstream-events/writeevents
    /// </summary>
    public static function WriteEvents($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Event/WriteEvents", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Write batches of entity based events to as Telemetry events (bypass PlayStream). The namespace must be 'custom' or start
    /// with 'custom.'
    /// https://docs.microsoft.com/rest/api/playfab/events/playstream-events/writetelemetryevents
    /// </summary>
    public static function WriteTelemetryEvents($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Event/WriteTelemetryEvents", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
