<?php
include 'PlayFabHttp.php';

class PlayFabLocalizationApi
{
    /// <summary>
    /// Retrieves the list of allowed languages, only accessible by title entities
    /// https://docs.microsoft.com/rest/api/playfab/localization/localization/getlanguagelist
    /// </summary>
    public static function GetLanguageList($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Locale/GetLanguageList", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
