<?php
include 'PlayFabHttp.php';

class PlayFabLocalizationApi
{
    /// <summary>
    /// Retrieves the list of allowed languages, only accessible by title entities
    /// https://api.playfab.com/Documentation/Localization/method/GetLanguageList
    /// </summary>
    public static function GetLanguageList($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Locale/GetLanguageList", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
