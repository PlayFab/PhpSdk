<?php
include 'PlayFabHttp.php';

class PlayFabProfilesApi
{
    /// <summary>
    /// Gets the global title access policy
    /// https://docs.microsoft.com/rest/api/playfab/profiles/account-management/getglobalpolicy
    /// </summary>
    public static function GetGlobalPolicy($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/GetGlobalPolicy", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Retrieves the entity's profile.
    /// https://docs.microsoft.com/rest/api/playfab/profiles/account-management/getprofile
    /// </summary>
    public static function GetProfile($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/GetProfile", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Retrieves the entity's profile.
    /// https://docs.microsoft.com/rest/api/playfab/profiles/account-management/getprofiles
    /// </summary>
    public static function GetProfiles($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/GetProfiles", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Retrieves the title player accounts associated with the given master player account.
    /// https://docs.microsoft.com/rest/api/playfab/profiles/account-management/gettitleplayersfrommasterplayeraccountids
    /// </summary>
    public static function GetTitlePlayersFromMasterPlayerAccountIds($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/GetTitlePlayersFromMasterPlayerAccountIds", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Sets the global title access policy
    /// https://docs.microsoft.com/rest/api/playfab/profiles/account-management/setglobalpolicy
    /// </summary>
    public static function SetGlobalPolicy($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/SetGlobalPolicy", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Updates the entity's language. The precedence hierarchy for communication to the player is Title Player Account
    /// language, Master Player Account language, and then title default language if the first two aren't set or supported.
    /// https://docs.microsoft.com/rest/api/playfab/profiles/account-management/setprofilelanguage
    /// </summary>
    public static function SetProfileLanguage($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/SetProfileLanguage", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Sets the profiles access policy
    /// https://docs.microsoft.com/rest/api/playfab/profiles/account-management/setprofilepolicy
    /// </summary>
    public static function SetProfilePolicy($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/SetProfilePolicy", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
