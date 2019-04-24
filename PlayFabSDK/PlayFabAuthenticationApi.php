<?php
include 'PlayFabHttp.php';

class PlayFabAuthenticationApi
{
    /// <summary>
    /// Activates the given API key. Active keys may be used for authentication.
    /// https://api.playfab.com/Documentation/Authentication/method/ActivateKey
    /// </summary>
    public static function ActivateKey($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/APIKey/ActivateKey", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates an API key for the given entity.
    /// https://api.playfab.com/Documentation/Authentication/method/CreateKey
    /// </summary>
    public static function CreateKey($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/APIKey/CreateKey", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deactivates the given API key, causing subsequent authentication attempts with it to fail.Deactivating a key is a way to
    /// verify that the key is not in use before deleting it.
    /// https://api.playfab.com/Documentation/Authentication/method/DeactivateKey
    /// </summary>
    public static function DeactivateKey($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/APIKey/DeactivateKey", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes the given API key.
    /// https://api.playfab.com/Documentation/Authentication/method/DeleteKey
    /// </summary>
    public static function DeleteKey($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/APIKey/DeleteKey", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Method to exchange a legacy AuthenticationTicket or title SecretKey for an Entity Token or to refresh a still valid
    /// Entity Token.
    /// https://api.playfab.com/Documentation/Authentication/method/GetEntityToken
    /// </summary>
    public static function GetEntityToken($titleId, $entityToken, $clientSessionTicket, $developerSecreteKey, $request)
    {
        if (!is_null($entityToken)) { $authKey = "X-EntityToken"; $authValue = $entityToken; }
        elseif (!is_null($clientSessionTicket)) { $authKey = "X-Authorization"; $authValue = $clientSessionTicket; }
        elseif (!is_null($developerSecreteKey)) { $authKey = "X-SecretKey"; $authValue = $developerSecreteKey; }

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Authentication/GetEntityToken", $request, $authKey, $authValue);
        return $result;
    }

    /// <summary>
    /// Method to exchange a legacy AuthenticationTicket or title SecretKey for an Entity Token or to refresh a still valid
    /// Entity Token.
    /// https://api.playfab.com/Documentation/Authentication/method/GetEntityToken
    /// </summary>
    public static function GetEntityTokenWithEntityToken($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Authentication/GetEntityToken", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Method to exchange a legacy AuthenticationTicket or title SecretKey for an Entity Token or to refresh a still valid
    /// Entity Token.
    /// https://api.playfab.com/Documentation/Authentication/method/GetEntityToken
    /// </summary>
    public static function GetEntityTokenWithSessionTicket($titleId, $clientSessionTicket, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::GetEntityToken($titleId, "/Authentication/GetEntityToken", $request, "X-Authorization", $clientSessionTicket);
        return $result;
    }

    /// <summary>
    /// Method to exchange a legacy AuthenticationTicket or title SecretKey for an Entity Token or to refresh a still valid
    /// Entity Token.
    /// https://api.playfab.com/Documentation/Authentication/method/GetEntityToken
    /// </summary>
    public static function GetEntityTokenWithSecretKey($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::GetEntityToken($titleId, "/Authentication/GetEntityToken", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Gets the API keys associated with the given entity.
    /// https://api.playfab.com/Documentation/Authentication/method/GetKeys
    /// </summary>
    public static function GetKeys($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/APIKey/GetKeys", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
