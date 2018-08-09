<?php
include 'PlayFabHttp.php';

class PlayFabProfilesApi
{
    /// <summary>
    /// Gets the global title access policy
    /// https://api.playfab.com/Documentation/Profiles/method/GetGlobalPolicy
    /// </summary>
    public static function GetGlobalPolicy($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/GetGlobalPolicy", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Retrieves the entity's profile.
    /// https://api.playfab.com/Documentation/Profiles/method/GetProfile
    /// </summary>
    public static function GetProfile($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/GetProfile", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Retrieves the entity's profile.
    /// https://api.playfab.com/Documentation/Profiles/method/GetProfiles
    /// </summary>
    public static function GetProfiles($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/GetProfiles", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Sets the global title access policy
    /// https://api.playfab.com/Documentation/Profiles/method/SetGlobalPolicy
    /// </summary>
    public static function SetGlobalPolicy($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/SetGlobalPolicy", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Updates the entity's language
    /// https://api.playfab.com/Documentation/Profiles/method/SetProfileLanguage
    /// </summary>
    public static function SetProfileLanguage($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/SetProfileLanguage", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Sets the profiles access policy
    /// https://api.playfab.com/Documentation/Profiles/method/SetProfilePolicy
    /// </summary>
    public static function SetProfilePolicy($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/SetProfilePolicy", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
