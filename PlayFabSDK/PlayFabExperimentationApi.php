<?php
include 'PlayFabHttp.php';

class PlayFabExperimentationApi
{
    /// <summary>
    /// Creates a new experiment for a title.
    /// https://docs.microsoft.com/rest/api/playfab/experimentation/experimentation/createexperiment
    /// </summary>
    public static function CreateExperiment($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Experimentation/CreateExperiment", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes an existing experiment for a title.
    /// https://docs.microsoft.com/rest/api/playfab/experimentation/experimentation/deleteexperiment
    /// </summary>
    public static function DeleteExperiment($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Experimentation/DeleteExperiment", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets the details of all experiments for a title.
    /// https://docs.microsoft.com/rest/api/playfab/experimentation/experimentation/getexperiments
    /// </summary>
    public static function GetExperiments($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Experimentation/GetExperiments", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets the latest scorecard of the experiment for the title.
    /// https://docs.microsoft.com/rest/api/playfab/experimentation/experimentation/getlatestscorecard
    /// </summary>
    public static function GetLatestScorecard($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Experimentation/GetLatestScorecard", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets the treatment assignments for a player for every running experiment in the title.
    /// https://docs.microsoft.com/rest/api/playfab/experimentation/experimentation/gettreatmentassignment
    /// </summary>
    public static function GetTreatmentAssignment($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Experimentation/GetTreatmentAssignment", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Starts an existing experiment for a title.
    /// https://docs.microsoft.com/rest/api/playfab/experimentation/experimentation/startexperiment
    /// </summary>
    public static function StartExperiment($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Experimentation/StartExperiment", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Stops an existing experiment for a title.
    /// https://docs.microsoft.com/rest/api/playfab/experimentation/experimentation/stopexperiment
    /// </summary>
    public static function StopExperiment($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Experimentation/StopExperiment", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Updates an existing experiment for a title.
    /// https://docs.microsoft.com/rest/api/playfab/experimentation/experimentation/updateexperiment
    /// </summary>
    public static function UpdateExperiment($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Experimentation/UpdateExperiment", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
