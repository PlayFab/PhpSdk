<?php
include 'PlayFabHttp.php';

class PlayFabMatchmakerApi
{
    /// <summary>
    /// Validates a user with the PlayFab service
    /// https://docs.microsoft.com/rest/api/playfab/matchmaker/matchmaking/authuser
    /// </summary>
    public static function AuthUser($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Matchmaker/AuthUser", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Informs the PlayFab game server hosting service that the indicated user has joined the Game Server Instance specified
    /// https://docs.microsoft.com/rest/api/playfab/matchmaker/matchmaking/playerjoined
    /// </summary>
    public static function PlayerJoined($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Matchmaker/PlayerJoined", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Informs the PlayFab game server hosting service that the indicated user has left the Game Server Instance specified
    /// https://docs.microsoft.com/rest/api/playfab/matchmaker/matchmaking/playerleft
    /// </summary>
    public static function PlayerLeft($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Matchmaker/PlayerLeft", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Instructs the PlayFab game server hosting service to instantiate a new Game Server Instance
    /// https://docs.microsoft.com/rest/api/playfab/matchmaker/matchmaking/startgame
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
    /// https://docs.microsoft.com/rest/api/playfab/matchmaker/matchmaking/userinfo
    /// </summary>
    public static function UserInfo($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Matchmaker/UserInfo", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

}
?>
