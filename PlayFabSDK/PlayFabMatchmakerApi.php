<?php
include 'PlayFabHttp.php';

class PlayFabMatchmakerApi
{
    /// <summary>
    /// Validates a user with the PlayFab service
    /// https://api.playfab.com/Documentation/Matchmaker/method/AuthUser
    /// </summary>
    public static function AuthUser($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Matchmaker/AuthUser", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Informs the PlayFab game server hosting service that the indicated user has joined the Game Server Instance specified
    /// https://api.playfab.com/Documentation/Matchmaker/method/PlayerJoined
    /// </summary>
    public static function PlayerJoined($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Matchmaker/PlayerJoined", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Informs the PlayFab game server hosting service that the indicated user has left the Game Server Instance specified
    /// https://api.playfab.com/Documentation/Matchmaker/method/PlayerLeft
    /// </summary>
    public static function PlayerLeft($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Matchmaker/PlayerLeft", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Instructs the PlayFab game server hosting service to instantiate a new Game Server Instance
    /// https://api.playfab.com/Documentation/Matchmaker/method/StartGame
    /// </summary>
    public static function StartGame($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Matchmaker/StartGame", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the relevant details for a specified user, which the external match-making service can then use to compute
    /// effective matches
    /// https://api.playfab.com/Documentation/Matchmaker/method/UserInfo
    /// </summary>
    public static function UserInfo($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Matchmaker/UserInfo", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

}
?>
