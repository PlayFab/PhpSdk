<?php
include 'PlayFabHttp.php';

class PlayFabEventsApi
{
    /// <summary>
    /// Write batches of entity based events to PlayStream.
    /// https://api.playfab.com/Documentation/Events/method/WriteEvents
    /// </summary>
    public static function WriteEvents($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Event/WriteEvents", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
