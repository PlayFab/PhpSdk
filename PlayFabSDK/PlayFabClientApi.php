<?php
include 'PlayFabHttp.php';

class PlayFabClientApi
{
    /// <summary>
    /// Accepts an open trade (one that has not yet been accepted or cancelled), if the locally signed-in player is in the
    /// allowed player list for the trade, or it is open to all players. If the call is successful, the offered and accepted
    /// items will be swapped  between the two players' inventories.
    /// https://api.playfab.com/Documentation/Client/method/AcceptTrade
    /// </summary>
    public static function AcceptTrade($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/AcceptTrade", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds the PlayFab user, based upon a match against a supplied unique identifier, to the friend list of the local user. At
    /// least one of FriendPlayFabId,FriendUsername,FriendEmail, or FriendTitleDisplayName should be initialized.
    /// https://api.playfab.com/Documentation/Client/method/AddFriend
    /// </summary>
    public static function AddFriend($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/AddFriend", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds the specified generic service identifier to the player's PlayFab account. This is designed to allow for a PlayFab
    /// ID lookup of any arbitrary service identifier a title wants to add. This identifier should never be used as
    /// authentication credentials, as the intent is that it is easily accessible by other players.
    /// https://api.playfab.com/Documentation/Client/method/AddGenericID
    /// </summary>
    public static function AddGenericID($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/AddGenericID", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds or updates a contact email to the player's profile.
    /// https://api.playfab.com/Documentation/Client/method/AddOrUpdateContactEmail
    /// </summary>
    public static function AddOrUpdateContactEmail($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/AddOrUpdateContactEmail", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds users to the set of those able to update both the shared data, as well as the set of users  in the group. Only
    /// users in the group can add new members. Shared Groups are designed for sharing data between a very  small number of
    /// players, please see our guide: https://api.playfab.com/docs/tutorials/landing-players/shared-groups
    /// https://api.playfab.com/Documentation/Client/method/AddSharedGroupMembers
    /// </summary>
    public static function AddSharedGroupMembers($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/AddSharedGroupMembers", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds playfab username/password auth to an existing account created via an anonymous auth method, e.g. automatic device
    /// ID login.
    /// https://api.playfab.com/Documentation/Client/method/AddUsernamePassword
    /// </summary>
    public static function AddUsernamePassword($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/AddUsernamePassword", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Increments the user's balance of the specified virtual currency by the stated amount
    /// https://api.playfab.com/Documentation/Client/method/AddUserVirtualCurrency
    /// </summary>
    public static function AddUserVirtualCurrency($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/AddUserVirtualCurrency", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Registers the Android device to receive push notifications
    /// https://api.playfab.com/Documentation/Client/method/AndroidDevicePushNotificationRegistration
    /// </summary>
    public static function AndroidDevicePushNotificationRegistration($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/AndroidDevicePushNotificationRegistration", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Attributes an install for advertisment.
    /// https://api.playfab.com/Documentation/Client/method/AttributeInstall
    /// </summary>
    public static function AttributeInstall($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/AttributeInstall", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Cancels an open trade (one that has not yet been accepted or cancelled). Note that only the player who created the trade
    /// can cancel it via this API call, to prevent griefing of the trade system (cancelling trades in order to prevent other
    /// players from accepting  them, for trades that can be claimed by more than one player).
    /// https://api.playfab.com/Documentation/Client/method/CancelTrade
    /// </summary>
    public static function CancelTrade($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/CancelTrade", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Confirms with the payment provider that the purchase was approved (if applicable) and adjusts inventory and  virtual
    /// currency balances as appropriate
    /// https://api.playfab.com/Documentation/Client/method/ConfirmPurchase
    /// </summary>
    public static function ConfirmPurchase($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/ConfirmPurchase", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Consume uses of a consumable item. When all uses are consumed, it will be removed from the player's inventory.
    /// https://api.playfab.com/Documentation/Client/method/ConsumeItem
    /// </summary>
    public static function ConsumeItem($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/ConsumeItem", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Requests the creation of a shared group object, containing key/value pairs which may be updated by  all members of the
    /// group. Upon creation, the current user will be the only member of the group. Shared Groups are designed  for sharing
    /// data between a very small number of players, please see our guide:
    /// https://api.playfab.com/docs/tutorials/landing-players/shared-groups
    /// https://api.playfab.com/Documentation/Client/method/CreateSharedGroup
    /// </summary>
    public static function CreateSharedGroup($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/CreateSharedGroup", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Executes a CloudScript function, with the 'currentPlayerId' set to the PlayFab ID of the authenticated player.
    /// https://api.playfab.com/Documentation/Client/method/ExecuteCloudScript
    /// </summary>
    public static function ExecuteCloudScript($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/ExecuteCloudScript", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the user's PlayFab account details
    /// https://api.playfab.com/Documentation/Client/method/GetAccountInfo
    /// </summary>
    public static function GetAccountInfo($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetAccountInfo", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Lists all of the characters that belong to a specific user. CharacterIds are not globally unique; characterId must be
    /// evaluated with the parent PlayFabId to guarantee uniqueness.
    /// https://api.playfab.com/Documentation/Client/method/GetAllUsersCharacters
    /// </summary>
    public static function GetAllUsersCharacters($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetAllUsersCharacters", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the specified version of the title's catalog of virtual goods, including all defined properties
    /// https://api.playfab.com/Documentation/Client/method/GetCatalogItems
    /// </summary>
    public static function GetCatalogItems($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetCatalogItems", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the character which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Client/method/GetCharacterData
    /// </summary>
    public static function GetCharacterData($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetCharacterData", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the specified character's current inventory of virtual goods
    /// https://api.playfab.com/Documentation/Client/method/GetCharacterInventory
    /// </summary>
    public static function GetCharacterInventory($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetCharacterInventory", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked characters for the given statistic, starting from the indicated point in the leaderboard
    /// https://api.playfab.com/Documentation/Client/method/GetCharacterLeaderboard
    /// </summary>
    public static function GetCharacterLeaderboard($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetCharacterLeaderboard", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the character which can only be read by the client
    /// https://api.playfab.com/Documentation/Client/method/GetCharacterReadOnlyData
    /// </summary>
    public static function GetCharacterReadOnlyData($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetCharacterReadOnlyData", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the details of all title-specific statistics for the user
    /// https://api.playfab.com/Documentation/Client/method/GetCharacterStatistics
    /// </summary>
    public static function GetCharacterStatistics($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetCharacterStatistics", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// This API retrieves a pre-signed URL for accessing a content file for the title. A subsequent  HTTP GET to the returned
    /// URL will attempt to download the content. A HEAD query to the returned URL will attempt to  retrieve the metadata of the
    /// content. Note that a successful result does not guarantee the existence of this content -  if it has not been uploaded,
    /// the query to retrieve the data will fail. See this post for more information:
    /// https://community.playfab.com/hc/en-us/community/posts/205469488-How-to-upload-files-to-PlayFab-s-Content-Service.
    /// Also, please be aware that the Content service is specifically PlayFab's CDN offering, for which standard CDN rates
    /// apply.
    /// https://api.playfab.com/Documentation/Client/method/GetContentDownloadUrl
    /// </summary>
    public static function GetContentDownloadUrl($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetContentDownloadUrl", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Get details about all current running game servers matching the given parameters.
    /// https://api.playfab.com/Documentation/Client/method/GetCurrentGames
    /// </summary>
    public static function GetCurrentGames($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetCurrentGames", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked friends of the current player for the given statistic, starting from the indicated point in
    /// the leaderboard
    /// https://api.playfab.com/Documentation/Client/method/GetFriendLeaderboard
    /// </summary>
    public static function GetFriendLeaderboard($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetFriendLeaderboard", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked friends of the current player for the given statistic, centered on the requested PlayFab
    /// user. If PlayFabId is empty or null will return currently logged in user.
    /// https://api.playfab.com/Documentation/Client/method/GetFriendLeaderboardAroundPlayer
    /// </summary>
    public static function GetFriendLeaderboardAroundPlayer($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetFriendLeaderboardAroundPlayer", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the current friend list for the local user, constrained to users who have PlayFab accounts. Friends from
    /// linked accounts (Facebook, Steam) are also included. You may optionally exclude some linked services' friends.
    /// https://api.playfab.com/Documentation/Client/method/GetFriendsList
    /// </summary>
    public static function GetFriendsList($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetFriendsList", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Get details about the regions hosting game servers matching the given parameters.
    /// https://api.playfab.com/Documentation/Client/method/GetGameServerRegions
    /// </summary>
    public static function GetGameServerRegions($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetGameServerRegions", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked users for the given statistic, starting from the indicated point in the leaderboard
    /// https://api.playfab.com/Documentation/Client/method/GetLeaderboard
    /// </summary>
    public static function GetLeaderboard($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetLeaderboard", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked characters for the given statistic, centered on the requested Character ID
    /// https://api.playfab.com/Documentation/Client/method/GetLeaderboardAroundCharacter
    /// </summary>
    public static function GetLeaderboardAroundCharacter($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetLeaderboardAroundCharacter", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked users for the given statistic, centered on the requested player. If PlayFabId is empty or
    /// null will return currently logged in user.
    /// https://api.playfab.com/Documentation/Client/method/GetLeaderboardAroundPlayer
    /// </summary>
    public static function GetLeaderboardAroundPlayer($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetLeaderboardAroundPlayer", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of all of the user's characters for the given statistic.
    /// https://api.playfab.com/Documentation/Client/method/GetLeaderboardForUserCharacters
    /// </summary>
    public static function GetLeaderboardForUserCharacters($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetLeaderboardForUserCharacters", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// For payments flows where the provider requires playfab (the fulfiller) to initiate the transaction, but the client
    /// completes the rest of the flow. In the Xsolla case, the token returned here will be passed to Xsolla by the client to
    /// create a cart. Poll GetPurchase using the returned OrderId once you've completed the payment.
    /// https://api.playfab.com/Documentation/Client/method/GetPaymentToken
    /// </summary>
    public static function GetPaymentToken($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPaymentToken", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Gets a Photon custom authentication token that can be used to securely join the player into a Photon room. See
    /// https://api.playfab.com/docs/using-photon-with-playfab/ for more details.
    /// https://api.playfab.com/Documentation/Client/method/GetPhotonAuthenticationToken
    /// </summary>
    public static function GetPhotonAuthenticationToken($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPhotonAuthenticationToken", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves all of the user's different kinds of info.
    /// https://api.playfab.com/Documentation/Client/method/GetPlayerCombinedInfo
    /// </summary>
    public static function GetPlayerCombinedInfo($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPlayerCombinedInfo", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the player's profile
    /// https://api.playfab.com/Documentation/Client/method/GetPlayerProfile
    /// </summary>
    public static function GetPlayerProfile($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPlayerProfile", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// List all segments that a player currently belongs to at this moment in time.
    /// https://api.playfab.com/Documentation/Client/method/GetPlayerSegments
    /// </summary>
    public static function GetPlayerSegments($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPlayerSegments", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the indicated statistics (current version and values for all statistics, if none are specified), for the local
    /// player.
    /// https://api.playfab.com/Documentation/Client/method/GetPlayerStatistics
    /// </summary>
    public static function GetPlayerStatistics($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPlayerStatistics", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the information on the available versions of the specified statistic.
    /// https://api.playfab.com/Documentation/Client/method/GetPlayerStatisticVersions
    /// </summary>
    public static function GetPlayerStatisticVersions($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPlayerStatisticVersions", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Get all tags with a given Namespace (optional) from a player profile.
    /// https://api.playfab.com/Documentation/Client/method/GetPlayerTags
    /// </summary>
    public static function GetPlayerTags($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPlayerTags", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Gets all trades the player has either opened or accepted, optionally filtered by trade status.
    /// https://api.playfab.com/Documentation/Client/method/GetPlayerTrades
    /// </summary>
    public static function GetPlayerTrades($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPlayerTrades", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of Facebook identifiers.
    /// https://api.playfab.com/Documentation/Client/method/GetPlayFabIDsFromFacebookIDs
    /// </summary>
    public static function GetPlayFabIDsFromFacebookIDs($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPlayFabIDsFromFacebookIDs", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of Game Center identifiers (referenced in the Game Center
    /// Programming Guide as the Player Identifier).
    /// https://api.playfab.com/Documentation/Client/method/GetPlayFabIDsFromGameCenterIDs
    /// </summary>
    public static function GetPlayFabIDsFromGameCenterIDs($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPlayFabIDsFromGameCenterIDs", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of generic service identifiers. A generic identifier is the
    /// service name plus the service-specific ID for the player, as specified by the title when the generic identifier was
    /// added to the player account.
    /// https://api.playfab.com/Documentation/Client/method/GetPlayFabIDsFromGenericIDs
    /// </summary>
    public static function GetPlayFabIDsFromGenericIDs($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPlayFabIDsFromGenericIDs", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of Google identifiers. The Google identifiers are the IDs for
    /// the user accounts, available as "id" in the Google+ People API calls.
    /// https://api.playfab.com/Documentation/Client/method/GetPlayFabIDsFromGoogleIDs
    /// </summary>
    public static function GetPlayFabIDsFromGoogleIDs($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPlayFabIDsFromGoogleIDs", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of Kongregate identifiers. The Kongregate identifiers are the
    /// IDs for the user accounts, available as "user_id" from the Kongregate API methods(ex:
    /// http://developers.kongregate.com/docs/client/getUserId).
    /// https://api.playfab.com/Documentation/Client/method/GetPlayFabIDsFromKongregateIDs
    /// </summary>
    public static function GetPlayFabIDsFromKongregateIDs($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPlayFabIDsFromKongregateIDs", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of Steam identifiers. The Steam identifiers  are the profile
    /// IDs for the user accounts, available as SteamId in the Steamworks Community API calls.
    /// https://api.playfab.com/Documentation/Client/method/GetPlayFabIDsFromSteamIDs
    /// </summary>
    public static function GetPlayFabIDsFromSteamIDs($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPlayFabIDsFromSteamIDs", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of Twitch identifiers. The Twitch identifiers are the IDs for
    /// the user accounts, available as "_id" from the Twitch API methods (ex:
    /// https://github.com/justintv/Twitch-API/blob/master/v3_resources/users.md#get-usersuser).
    /// https://api.playfab.com/Documentation/Client/method/GetPlayFabIDsFromTwitchIDs
    /// </summary>
    public static function GetPlayFabIDsFromTwitchIDs($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPlayFabIDsFromTwitchIDs", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the key-value store of custom publisher settings
    /// https://api.playfab.com/Documentation/Client/method/GetPublisherData
    /// </summary>
    public static function GetPublisherData($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPublisherData", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves a purchase along with its current PlayFab status. Returns inventory items from the purchase that are still
    /// active.
    /// https://api.playfab.com/Documentation/Client/method/GetPurchase
    /// </summary>
    public static function GetPurchase($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetPurchase", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves data stored in a shared group object, as well as the list of members in  the group. Non-members of the group
    /// may use this to retrieve group data, including membership, but they  will not receive data for keys marked as private.
    /// Shared Groups are designed for sharing data between a  very small number of players, please see our guide:
    /// https://api.playfab.com/docs/tutorials/landing-players/shared-groups
    /// https://api.playfab.com/Documentation/Client/method/GetSharedGroupData
    /// </summary>
    public static function GetSharedGroupData($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetSharedGroupData", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the set of items defined for the specified store, including all prices defined
    /// https://api.playfab.com/Documentation/Client/method/GetStoreItems
    /// </summary>
    public static function GetStoreItems($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetStoreItems", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the current server time
    /// https://api.playfab.com/Documentation/Client/method/GetTime
    /// </summary>
    public static function GetTime($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetTime", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the key-value store of custom title settings
    /// https://api.playfab.com/Documentation/Client/method/GetTitleData
    /// </summary>
    public static function GetTitleData($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetTitleData", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the title news feed, as configured in the developer portal
    /// https://api.playfab.com/Documentation/Client/method/GetTitleNews
    /// </summary>
    public static function GetTitleNews($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetTitleNews", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Returns the title's base 64 encoded RSA CSP blob.
    /// https://api.playfab.com/Documentation/Client/method/GetTitlePublicKey
    /// </summary>
    public static function GetTitlePublicKey($titleId, $authValue, $request)
    {

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetTitlePublicKey", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Gets the current status of an existing trade.
    /// https://api.playfab.com/Documentation/Client/method/GetTradeStatus
    /// </summary>
    public static function GetTradeStatus($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetTradeStatus", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Client/method/GetUserData
    /// </summary>
    public static function GetUserData($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetUserData", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the user's current inventory of virtual goods
    /// https://api.playfab.com/Documentation/Client/method/GetUserInventory
    /// </summary>
    public static function GetUserInventory($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetUserInventory", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the publisher-specific custom data for the user which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Client/method/GetUserPublisherData
    /// </summary>
    public static function GetUserPublisherData($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetUserPublisherData", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the publisher-specific custom data for the user which can only be read by the client
    /// https://api.playfab.com/Documentation/Client/method/GetUserPublisherReadOnlyData
    /// </summary>
    public static function GetUserPublisherReadOnlyData($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetUserPublisherReadOnlyData", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which can only be read by the client
    /// https://api.playfab.com/Documentation/Client/method/GetUserReadOnlyData
    /// </summary>
    public static function GetUserReadOnlyData($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetUserReadOnlyData", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Requests a challenge from the server to be signed by Windows Hello Passport service to authenticate.
    /// https://api.playfab.com/Documentation/Client/method/GetWindowsHelloChallenge
    /// </summary>
    public static function GetWindowsHelloChallenge($titleId, $authValue, $request)
    {

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GetWindowsHelloChallenge", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Grants the specified character type to the user. CharacterIds are not globally unique; characterId must be evaluated
    /// with the parent PlayFabId to guarantee uniqueness.
    /// https://api.playfab.com/Documentation/Client/method/GrantCharacterToUser
    /// </summary>
    public static function GrantCharacterToUser($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/GrantCharacterToUser", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Links the Android device identifier to the user's PlayFab account
    /// https://api.playfab.com/Documentation/Client/method/LinkAndroidDeviceID
    /// </summary>
    public static function LinkAndroidDeviceID($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LinkAndroidDeviceID", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Links the custom identifier, generated by the title, to the user's PlayFab account
    /// https://api.playfab.com/Documentation/Client/method/LinkCustomID
    /// </summary>
    public static function LinkCustomID($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LinkCustomID", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Links the Facebook account associated with the provided Facebook access token to the user's PlayFab account
    /// https://api.playfab.com/Documentation/Client/method/LinkFacebookAccount
    /// </summary>
    public static function LinkFacebookAccount($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LinkFacebookAccount", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Links the Game Center account associated with the provided Game Center ID to the user's PlayFab account
    /// https://api.playfab.com/Documentation/Client/method/LinkGameCenterAccount
    /// </summary>
    public static function LinkGameCenterAccount($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LinkGameCenterAccount", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Links the currently signed-in user account to their Google account, using their Google account credentials
    /// https://api.playfab.com/Documentation/Client/method/LinkGoogleAccount
    /// </summary>
    public static function LinkGoogleAccount($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LinkGoogleAccount", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Links the vendor-specific iOS device identifier to the user's PlayFab account
    /// https://api.playfab.com/Documentation/Client/method/LinkIOSDeviceID
    /// </summary>
    public static function LinkIOSDeviceID($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LinkIOSDeviceID", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Links the Kongregate identifier to the user's PlayFab account
    /// https://api.playfab.com/Documentation/Client/method/LinkKongregate
    /// </summary>
    public static function LinkKongregate($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LinkKongregate", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Links the Steam account associated with the provided Steam authentication ticket to the user's PlayFab account
    /// https://api.playfab.com/Documentation/Client/method/LinkSteamAccount
    /// </summary>
    public static function LinkSteamAccount($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LinkSteamAccount", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Links the Twitch account associated with the token to the user's PlayFab account.
    /// https://api.playfab.com/Documentation/Client/method/LinkTwitch
    /// </summary>
    public static function LinkTwitch($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LinkTwitch", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Link Windows Hello authentication to the current PlayFab Account
    /// https://api.playfab.com/Documentation/Client/method/LinkWindowsHello
    /// </summary>
    public static function LinkWindowsHello($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LinkWindowsHello", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Signs the user in using the Android device identifier, returning a session identifier that can subsequently be used for
    /// API calls which require an authenticated user
    /// https://api.playfab.com/Documentation/Client/method/LoginWithAndroidDeviceID
    /// </summary>
    public static function LoginWithAndroidDeviceID($titleId, $authValue, $request)
    {
        if (!isset($titleId)) $titleId = PlayFabSettings::$titleId;
        if (!isset($request->$titleId)) !$request->titleId = $titleId;

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LoginWithAndroidDeviceID", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Signs the user in using a custom unique identifier generated by the title, returning a session identifier that can
    /// subsequently be used for API calls which require an authenticated user
    /// https://api.playfab.com/Documentation/Client/method/LoginWithCustomID
    /// </summary>
    public static function LoginWithCustomID($titleId, $authValue, $request)
    {
        if (!isset($titleId)) $titleId = PlayFabSettings::$titleId;
        if (!isset($request->$titleId)) !$request->titleId = $titleId;

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LoginWithCustomID", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Signs the user into the PlayFab account, returning a session identifier that can subsequently be used for API calls
    /// which require an authenticated user. Unlike most other login API calls, LoginWithEmailAddress does not permit the
    /// creation of new accounts via the CreateAccountFlag. Email addresses may be used to create accounts via
    /// RegisterPlayFabUser.
    /// https://api.playfab.com/Documentation/Client/method/LoginWithEmailAddress
    /// </summary>
    public static function LoginWithEmailAddress($titleId, $authValue, $request)
    {
        if (!isset($titleId)) $titleId = PlayFabSettings::$titleId;
        if (!isset($request->$titleId)) !$request->titleId = $titleId;

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LoginWithEmailAddress", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Signs the user in using a Facebook access token, returning a session identifier that can subsequently be used for API
    /// calls which require an authenticated user
    /// https://api.playfab.com/Documentation/Client/method/LoginWithFacebook
    /// </summary>
    public static function LoginWithFacebook($titleId, $authValue, $request)
    {
        if (!isset($titleId)) $titleId = PlayFabSettings::$titleId;
        if (!isset($request->$titleId)) !$request->titleId = $titleId;

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LoginWithFacebook", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Signs the user in using an iOS Game Center player identifier, returning a session identifier that can subsequently be
    /// used for API calls which require an authenticated user
    /// https://api.playfab.com/Documentation/Client/method/LoginWithGameCenter
    /// </summary>
    public static function LoginWithGameCenter($titleId, $authValue, $request)
    {
        if (!isset($titleId)) $titleId = PlayFabSettings::$titleId;
        if (!isset($request->$titleId)) !$request->titleId = $titleId;

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LoginWithGameCenter", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Signs the user in using their Google account credentials
    /// https://api.playfab.com/Documentation/Client/method/LoginWithGoogleAccount
    /// </summary>
    public static function LoginWithGoogleAccount($titleId, $authValue, $request)
    {
        if (!isset($titleId)) $titleId = PlayFabSettings::$titleId;
        if (!isset($request->$titleId)) !$request->titleId = $titleId;

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LoginWithGoogleAccount", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Signs the user in using the vendor-specific iOS device identifier, returning a session identifier that can subsequently
    /// be used for API calls which require an authenticated user
    /// https://api.playfab.com/Documentation/Client/method/LoginWithIOSDeviceID
    /// </summary>
    public static function LoginWithIOSDeviceID($titleId, $authValue, $request)
    {
        if (!isset($titleId)) $titleId = PlayFabSettings::$titleId;
        if (!isset($request->$titleId)) !$request->titleId = $titleId;

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LoginWithIOSDeviceID", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Signs the user in using a Kongregate player account.
    /// https://api.playfab.com/Documentation/Client/method/LoginWithKongregate
    /// </summary>
    public static function LoginWithKongregate($titleId, $authValue, $request)
    {
        if (!isset($titleId)) $titleId = PlayFabSettings::$titleId;
        if (!isset($request->$titleId)) !$request->titleId = $titleId;

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LoginWithKongregate", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Signs the user into the PlayFab account, returning a session identifier that can subsequently be used for API calls
    /// which require an authenticated user. Unlike most other login API calls, LoginWithPlayFab does not permit the  creation
    /// of new accounts via the CreateAccountFlag. Username/Password credentials may be used to create accounts via
    /// RegisterPlayFabUser, or added to existing accounts using AddUsernamePassword.
    /// https://api.playfab.com/Documentation/Client/method/LoginWithPlayFab
    /// </summary>
    public static function LoginWithPlayFab($titleId, $authValue, $request)
    {
        if (!isset($titleId)) $titleId = PlayFabSettings::$titleId;
        if (!isset($request->$titleId)) !$request->titleId = $titleId;

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LoginWithPlayFab", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Signs the user in using a Steam authentication ticket, returning a session identifier that can subsequently be used for
    /// API calls which require an authenticated user
    /// https://api.playfab.com/Documentation/Client/method/LoginWithSteam
    /// </summary>
    public static function LoginWithSteam($titleId, $authValue, $request)
    {
        if (!isset($titleId)) $titleId = PlayFabSettings::$titleId;
        if (!isset($request->$titleId)) !$request->titleId = $titleId;

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LoginWithSteam", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Signs the user in using a Twitch access token.
    /// https://api.playfab.com/Documentation/Client/method/LoginWithTwitch
    /// </summary>
    public static function LoginWithTwitch($titleId, $authValue, $request)
    {
        if (!isset($titleId)) $titleId = PlayFabSettings::$titleId;
        if (!isset($request->$titleId)) !$request->titleId = $titleId;

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LoginWithTwitch", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Completes the Windows Hello login flow by returning the signed value of the challange from GetWindowsHelloChallenge.
    /// Windows Hello has a 2 step client to server authentication scheme. Step one is to request from the server a challenge
    /// string. Step two is to request the user sign the string via Windows Hello and then send the signed value back to the
    /// server.
    /// https://api.playfab.com/Documentation/Client/method/LoginWithWindowsHello
    /// </summary>
    public static function LoginWithWindowsHello($titleId, $authValue, $request)
    {
        if (!isset($titleId)) $titleId = PlayFabSettings::$titleId;
        if (!isset($request->$titleId)) !$request->titleId = $titleId;

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/LoginWithWindowsHello", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Attempts to locate a game session matching the given parameters. If the goal is to match the player into a specific
    /// active session, only the LobbyId is required. Otherwise, the BuildVersion, GameMode, and Region are all required
    /// parameters. Note that parameters specified in the search are required (they are not weighting factors). If a slot is
    /// found in a server instance matching the parameters, the slot will be assigned to that player, removing it from the
    /// availabe set. In that case, the information on the game session will be returned, otherwise the Status returned will be
    /// GameNotFound.
    /// https://api.playfab.com/Documentation/Client/method/Matchmake
    /// </summary>
    public static function Matchmake($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/Matchmake", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Opens a new outstanding trade. Note that a given item instance may only be in one open trade at a time.
    /// https://api.playfab.com/Documentation/Client/method/OpenTrade
    /// </summary>
    public static function OpenTrade($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/OpenTrade", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Selects a payment option for purchase order created via StartPurchase
    /// https://api.playfab.com/Documentation/Client/method/PayForPurchase
    /// </summary>
    public static function PayForPurchase($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/PayForPurchase", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Buys a single item with virtual currency. You must specify both the virtual currency to use to purchase,  as well as
    /// what the client believes the price to be. This lets the server fail the purchase if the price has changed.
    /// https://api.playfab.com/Documentation/Client/method/PurchaseItem
    /// </summary>
    public static function PurchaseItem($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/PurchaseItem", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds the virtual goods associated with the coupon to the user's inventory. Coupons can be generated  via the
    /// Economy->Catalogs tab in the PlayFab Game Manager.
    /// https://api.playfab.com/Documentation/Client/method/RedeemCoupon
    /// </summary>
    public static function RedeemCoupon($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/RedeemCoupon", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Registers the iOS device to receive push notifications
    /// https://api.playfab.com/Documentation/Client/method/RegisterForIOSPushNotification
    /// </summary>
    public static function RegisterForIOSPushNotification($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/RegisterForIOSPushNotification", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Registers a new Playfab user account, returning a session identifier that can subsequently be used for API calls which
    /// require an authenticated user. You must supply either a username or an email address.
    /// https://api.playfab.com/Documentation/Client/method/RegisterPlayFabUser
    /// </summary>
    public static function RegisterPlayFabUser($titleId, $authValue, $request)
    {
        if (!isset($titleId)) $titleId = PlayFabSettings::$titleId;
        if (!isset($request->$titleId)) !$request->titleId = $titleId;

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/RegisterPlayFabUser", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Registers a new PlayFab user account using Windows Hello authentication, returning a session ticket  that can
    /// subsequently be used for API calls which require an authenticated user
    /// https://api.playfab.com/Documentation/Client/method/RegisterWithWindowsHello
    /// </summary>
    public static function RegisterWithWindowsHello($titleId, $authValue, $request)
    {
        if (!isset($titleId)) $titleId = PlayFabSettings::$titleId;
        if (!isset($request->$titleId)) !$request->titleId = $titleId;

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/RegisterWithWindowsHello", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Removes a contact email from the player's profile.
    /// https://api.playfab.com/Documentation/Client/method/RemoveContactEmail
    /// </summary>
    public static function RemoveContactEmail($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/RemoveContactEmail", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Removes a specified user from the friend list of the local user
    /// https://api.playfab.com/Documentation/Client/method/RemoveFriend
    /// </summary>
    public static function RemoveFriend($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/RemoveFriend", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Removes the specified generic service identifier from the player's PlayFab account.
    /// https://api.playfab.com/Documentation/Client/method/RemoveGenericID
    /// </summary>
    public static function RemoveGenericID($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/RemoveGenericID", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Removes users from the set of those able to update the shared data and the set of users  in the group. Only users in the
    /// group can remove members. If as a result of the call, zero users remain with  access, the group and its associated data
    /// will be deleted. Shared Groups are designed for sharing data between  a very small number of players, please see our
    /// guide: https://api.playfab.com/docs/tutorials/landing-players/shared-groups
    /// https://api.playfab.com/Documentation/Client/method/RemoveSharedGroupMembers
    /// </summary>
    public static function RemoveSharedGroupMembers($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/RemoveSharedGroupMembers", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Write a PlayStream event to describe the provided player device information. This API method is not designed to be
    /// called directly by developers. Each PlayFab client SDK will eventually report this information automatically.
    /// https://api.playfab.com/Documentation/Client/method/ReportDeviceInfo
    /// </summary>
    public static function ReportDeviceInfo($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/ReportDeviceInfo", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Submit a report for another player (due to bad bahavior, etc.), so that customer service representatives for the title
    /// can take action concerning potentially toxic players.
    /// https://api.playfab.com/Documentation/Client/method/ReportPlayer
    /// </summary>
    public static function ReportPlayer($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/ReportPlayer", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Restores all in-app purchases based on the given restore receipt
    /// https://api.playfab.com/Documentation/Client/method/RestoreIOSPurchases
    /// </summary>
    public static function RestoreIOSPurchases($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/RestoreIOSPurchases", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Forces an email to be sent to the registered email address for the user's account, with a link allowing the user to
    /// change the password
    /// https://api.playfab.com/Documentation/Client/method/SendAccountRecoveryEmail
    /// </summary>
    public static function SendAccountRecoveryEmail($titleId, $authValue, $request)
    {

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/SendAccountRecoveryEmail", $request, null, $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the tag list for a specified user in the friend list of the local user
    /// https://api.playfab.com/Documentation/Client/method/SetFriendTags
    /// </summary>
    public static function SetFriendTags($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/SetFriendTags", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Sets the player's secret if it is not already set. Player secrets are used to sign API requests. To reset a player's
    /// secret use the Admin or Server API method SetPlayerSecret.
    /// https://api.playfab.com/Documentation/Client/method/SetPlayerSecret
    /// </summary>
    public static function SetPlayerSecret($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/SetPlayerSecret", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Start a new game server with a given configuration, add the current player and return the connection information.
    /// https://api.playfab.com/Documentation/Client/method/StartGame
    /// </summary>
    public static function StartGame($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/StartGame", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Creates an order for a list of items from the title catalog
    /// https://api.playfab.com/Documentation/Client/method/StartPurchase
    /// </summary>
    public static function StartPurchase($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/StartPurchase", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Decrements the user's balance of the specified virtual currency by the stated amount. It is possible to make a VC
    /// balance negative with this API.
    /// https://api.playfab.com/Documentation/Client/method/SubtractUserVirtualCurrency
    /// </summary>
    public static function SubtractUserVirtualCurrency($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/SubtractUserVirtualCurrency", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Unlinks the related Android device identifier from the user's PlayFab account
    /// https://api.playfab.com/Documentation/Client/method/UnlinkAndroidDeviceID
    /// </summary>
    public static function UnlinkAndroidDeviceID($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UnlinkAndroidDeviceID", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Unlinks the related custom identifier from the user's PlayFab account
    /// https://api.playfab.com/Documentation/Client/method/UnlinkCustomID
    /// </summary>
    public static function UnlinkCustomID($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UnlinkCustomID", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Unlinks the related Facebook account from the user's PlayFab account
    /// https://api.playfab.com/Documentation/Client/method/UnlinkFacebookAccount
    /// </summary>
    public static function UnlinkFacebookAccount($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UnlinkFacebookAccount", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Unlinks the related Game Center account from the user's PlayFab account
    /// https://api.playfab.com/Documentation/Client/method/UnlinkGameCenterAccount
    /// </summary>
    public static function UnlinkGameCenterAccount($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UnlinkGameCenterAccount", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Unlinks the related Google account from the user's PlayFab account
    /// (https://developers.google.com/android/reference/com/google/android/gms/auth/GoogleAuthUtil#public-methods).
    /// https://api.playfab.com/Documentation/Client/method/UnlinkGoogleAccount
    /// </summary>
    public static function UnlinkGoogleAccount($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UnlinkGoogleAccount", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Unlinks the related iOS device identifier from the user's PlayFab account
    /// https://api.playfab.com/Documentation/Client/method/UnlinkIOSDeviceID
    /// </summary>
    public static function UnlinkIOSDeviceID($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UnlinkIOSDeviceID", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Unlinks the related Kongregate identifier from the user's PlayFab account
    /// https://api.playfab.com/Documentation/Client/method/UnlinkKongregate
    /// </summary>
    public static function UnlinkKongregate($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UnlinkKongregate", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Unlinks the related Steam account from the user's PlayFab account
    /// https://api.playfab.com/Documentation/Client/method/UnlinkSteamAccount
    /// </summary>
    public static function UnlinkSteamAccount($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UnlinkSteamAccount", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Unlinks the related Twitch account from the user's PlayFab account.
    /// https://api.playfab.com/Documentation/Client/method/UnlinkTwitch
    /// </summary>
    public static function UnlinkTwitch($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UnlinkTwitch", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Unlink Windows Hello authentication from the current PlayFab Account
    /// https://api.playfab.com/Documentation/Client/method/UnlinkWindowsHello
    /// </summary>
    public static function UnlinkWindowsHello($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UnlinkWindowsHello", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Opens the specified container, with the specified key (when required), and returns the contents of the opened container.
    /// If the container (and key when relevant) are consumable (RemainingUses > 0), their RemainingUses will be decremented,
    /// consistent with the operation of ConsumeItem.
    /// https://api.playfab.com/Documentation/Client/method/UnlockContainerInstance
    /// </summary>
    public static function UnlockContainerInstance($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UnlockContainerInstance", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Searches target inventory for an ItemInstance matching the given CatalogItemId, if necessary unlocks it using an
    /// appropriate key, and returns the contents of the opened container. If the container (and key when relevant) are
    /// consumable (RemainingUses > 0), their RemainingUses will be decremented, consistent with the operation of ConsumeItem.
    /// https://api.playfab.com/Documentation/Client/method/UnlockContainerItem
    /// </summary>
    public static function UnlockContainerItem($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UnlockContainerItem", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Update the avatar URL of the player
    /// https://api.playfab.com/Documentation/Client/method/UpdateAvatarUrl
    /// </summary>
    public static function UpdateAvatarUrl($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UpdateAvatarUrl", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Creates and updates the title-specific custom data for the user's character which is readable  and writable by the
    /// client
    /// https://api.playfab.com/Documentation/Client/method/UpdateCharacterData
    /// </summary>
    public static function UpdateCharacterData($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UpdateCharacterData", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the values of the specified title-specific statistics for the specific character. By default, clients are not
    /// permitted to update statistics. Developers may override this setting in the Game Manager > Settings > API Features.
    /// https://api.playfab.com/Documentation/Client/method/UpdateCharacterStatistics
    /// </summary>
    public static function UpdateCharacterStatistics($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UpdateCharacterStatistics", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the values of the specified title-specific statistics for the user. By default, clients are not permitted to
    /// update statistics. Developers may override this setting in the Game Manager > Settings > API Features.
    /// https://api.playfab.com/Documentation/Client/method/UpdatePlayerStatistics
    /// </summary>
    public static function UpdatePlayerStatistics($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UpdatePlayerStatistics", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds, updates, and removes data keys for a shared group object. If the permission is set to Public, all fields updated
    /// or added in this call will be readable by users not in the group. By default, data permissions are set to Private.
    /// Regardless of the permission setting, only members of the group can update the data. Shared Groups are designed  for
    /// sharing data between a very small number of players, please see our guide:
    /// https://api.playfab.com/docs/tutorials/landing-players/shared-groups
    /// https://api.playfab.com/Documentation/Client/method/UpdateSharedGroupData
    /// </summary>
    public static function UpdateSharedGroupData($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UpdateSharedGroupData", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Creates and updates the title-specific custom data for the user which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Client/method/UpdateUserData
    /// </summary>
    public static function UpdateUserData($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UpdateUserData", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Creates and updates the publisher-specific custom data for the user which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Client/method/UpdateUserPublisherData
    /// </summary>
    public static function UpdateUserPublisherData($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UpdateUserPublisherData", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the title specific display name for the user
    /// https://api.playfab.com/Documentation/Client/method/UpdateUserTitleDisplayName
    /// </summary>
    public static function UpdateUserTitleDisplayName($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/UpdateUserTitleDisplayName", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Validates with Amazon that the receipt for an Amazon App Store in-app purchase is valid and that it matches the
    /// purchased catalog item
    /// https://api.playfab.com/Documentation/Client/method/ValidateAmazonIAPReceipt
    /// </summary>
    public static function ValidateAmazonIAPReceipt($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/ValidateAmazonIAPReceipt", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Validates a Google Play purchase and gives the corresponding item to the player.
    /// https://api.playfab.com/Documentation/Client/method/ValidateGooglePlayPurchase
    /// </summary>
    public static function ValidateGooglePlayPurchase($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/ValidateGooglePlayPurchase", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Validates with the Apple store that the receipt for an iOS in-app purchase is valid and that it matches the purchased
    /// catalog item
    /// https://api.playfab.com/Documentation/Client/method/ValidateIOSReceipt
    /// </summary>
    public static function ValidateIOSReceipt($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/ValidateIOSReceipt", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Validates with Windows that the receipt for an Windows App Store in-app purchase is valid and that it matches the
    /// purchased catalog item
    /// https://api.playfab.com/Documentation/Client/method/ValidateWindowsStoreReceipt
    /// </summary>
    public static function ValidateWindowsStoreReceipt($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/ValidateWindowsStoreReceipt", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Writes a character-based event into PlayStream.
    /// https://api.playfab.com/Documentation/Client/method/WriteCharacterEvent
    /// </summary>
    public static function WriteCharacterEvent($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/WriteCharacterEvent", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Writes a player-based event into PlayStream.
    /// https://api.playfab.com/Documentation/Client/method/WritePlayerEvent
    /// </summary>
    public static function WritePlayerEvent($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/WritePlayerEvent", $request, "X-Authentication", $authValue);
        return $result;
    }

    /// <summary>
    /// Writes a title-based event into PlayStream.
    /// https://api.playfab.com/Documentation/Client/method/WriteTitleEvent
    /// </summary>
    public static function WriteTitleEvent($titleId, $authValue, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Client/WriteTitleEvent", $request, "X-Authentication", $authValue);
        return $result;
    }

}
?>
