<?php
include 'PlayFabHttp.php';

class PlayFabServerApi
{
    /// <summary>
    /// Increments the character's balance of the specified virtual currency by the stated amount
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/addcharactervirtualcurrency
    /// </summary>
    public static function AddCharacterVirtualCurrency($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AddCharacterVirtualCurrency", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds the Friend user to the friendlist of the user with PlayFabId. At least one of
    /// FriendPlayFabId,FriendUsername,FriendEmail, or FriendTitleDisplayName should be initialized.
    /// https://docs.microsoft.com/rest/api/playfab/server/friend-list-management/addfriend
    /// </summary>
    public static function AddFriend($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AddFriend", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds the specified generic service identifier to the player's PlayFab account. This is designed to allow for a PlayFab
    /// ID lookup of any arbitrary service identifier a title wants to add. This identifier should never be used as
    /// authentication credentials, as the intent is that it is easily accessible by other players.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/addgenericid
    /// </summary>
    public static function AddGenericID($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AddGenericID", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds a given tag to a player profile. The tag's namespace is automatically generated based on the source of the tag.
    /// https://docs.microsoft.com/rest/api/playfab/server/playstream/addplayertag
    /// </summary>
    public static function AddPlayerTag($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AddPlayerTag", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds users to the set of those able to update both the shared data, as well as the set of users in the group. Only users
    /// in the group (and the server) can add new members. Shared Groups are designed for sharing data between a very small
    /// number of players, please see our guide:
    /// https://docs.microsoft.com/gaming/playfab/features/social/groups/using-shared-group-data
    /// https://docs.microsoft.com/rest/api/playfab/server/shared-group-data/addsharedgroupmembers
    /// </summary>
    public static function AddSharedGroupMembers($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AddSharedGroupMembers", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Increments the user's balance of the specified virtual currency by the stated amount
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/adduservirtualcurrency
    /// </summary>
    public static function AddUserVirtualCurrency($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AddUserVirtualCurrency", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Validated a client's session ticket, and if successful, returns details for that user
    /// https://docs.microsoft.com/rest/api/playfab/server/authentication/authenticatesessionticket
    /// </summary>
    public static function AuthenticateSessionTicket($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AuthenticateSessionTicket", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Awards the specified users the specified Steam achievements
    /// https://docs.microsoft.com/rest/api/playfab/server/platform-specific-methods/awardsteamachievement
    /// </summary>
    public static function AwardSteamAchievement($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AwardSteamAchievement", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Bans users by PlayFab ID with optional IP address, or MAC address for the provided game.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/banusers
    /// </summary>
    public static function BanUsers($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/BanUsers", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Consume uses of a consumable item. When all uses are consumed, it will be removed from the player's inventory.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/consumeitem
    /// </summary>
    public static function ConsumeItem($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/ConsumeItem", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Requests the creation of a shared group object, containing key/value pairs which may be updated by all members of the
    /// group. When created by a server, the group will initially have no members. Shared Groups are designed for sharing data
    /// between a very small number of players, please see our guide:
    /// https://docs.microsoft.com/gaming/playfab/features/social/groups/using-shared-group-data
    /// https://docs.microsoft.com/rest/api/playfab/server/shared-group-data/createsharedgroup
    /// </summary>
    public static function CreateSharedGroup($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/CreateSharedGroup", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Deletes the specific character ID from the specified user.
    /// https://docs.microsoft.com/rest/api/playfab/server/characters/deletecharacterfromuser
    /// </summary>
    public static function DeleteCharacterFromUser($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/DeleteCharacterFromUser", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Removes a user's player account from a title and deletes all associated data
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/deleteplayer
    /// </summary>
    public static function DeletePlayer($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/DeletePlayer", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Deletes push notification template for title
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/deletepushnotificationtemplate
    /// </summary>
    public static function DeletePushNotificationTemplate($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/DeletePushNotificationTemplate", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Deletes a shared group, freeing up the shared group ID to be reused for a new group. Shared Groups are designed for
    /// sharing data between a very small number of players, please see our guide:
    /// https://docs.microsoft.com/gaming/playfab/features/social/groups/using-shared-group-data
    /// https://docs.microsoft.com/rest/api/playfab/server/shared-group-data/deletesharedgroup
    /// </summary>
    public static function DeleteSharedGroup($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/DeleteSharedGroup", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Inform the matchmaker that a Game Server Instance is removed.
    /// https://docs.microsoft.com/rest/api/playfab/server/matchmaking/deregistergame
    /// </summary>
    public static function DeregisterGame($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/DeregisterGame", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Returns the result of an evaluation of a Random Result Table - the ItemId from the game Catalog which would have been
    /// added to the player inventory, if the Random Result Table were added via a Bundle or a call to UnlockContainer.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/evaluaterandomresulttable
    /// </summary>
    public static function EvaluateRandomResultTable($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/EvaluateRandomResultTable", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Executes a CloudScript function, with the 'currentPlayerId' variable set to the specified PlayFabId parameter value.
    /// https://docs.microsoft.com/rest/api/playfab/server/server-side-cloud-script/executecloudscript
    /// </summary>
    public static function ExecuteCloudScript($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/ExecuteCloudScript", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves an array of player segment definitions. Results from this can be used in subsequent API calls such as
    /// GetPlayersInSegment which requires a Segment ID. While segment names can change the ID for that segment will not change.
    /// https://docs.microsoft.com/rest/api/playfab/server/playstream/getallsegments
    /// </summary>
    public static function GetAllSegments($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetAllSegments", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Lists all of the characters that belong to a specific user. CharacterIds are not globally unique; characterId must be
    /// evaluated with the parent PlayFabId to guarantee uniqueness.
    /// https://docs.microsoft.com/rest/api/playfab/server/characters/getalluserscharacters
    /// </summary>
    public static function GetAllUsersCharacters($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetAllUsersCharacters", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the specified version of the title's catalog of virtual goods, including all defined properties
    /// https://docs.microsoft.com/rest/api/playfab/server/title-wide-data-management/getcatalogitems
    /// </summary>
    public static function GetCatalogItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetCatalogItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which is readable and writable by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/character-data/getcharacterdata
    /// </summary>
    public static function GetCharacterData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetCharacterData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user's character which cannot be accessed by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/character-data/getcharacterinternaldata
    /// </summary>
    public static function GetCharacterInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetCharacterInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the specified character's current inventory of virtual goods
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/getcharacterinventory
    /// </summary>
    public static function GetCharacterInventory($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetCharacterInventory", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked characters for the given statistic, starting from the indicated point in the leaderboard
    /// https://docs.microsoft.com/rest/api/playfab/server/characters/getcharacterleaderboard
    /// </summary>
    public static function GetCharacterLeaderboard($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetCharacterLeaderboard", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user's character which can only be read by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/character-data/getcharacterreadonlydata
    /// </summary>
    public static function GetCharacterReadOnlyData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetCharacterReadOnlyData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the details of all title-specific statistics for the specific character
    /// https://docs.microsoft.com/rest/api/playfab/server/characters/getcharacterstatistics
    /// </summary>
    public static function GetCharacterStatistics($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetCharacterStatistics", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// This API retrieves a pre-signed URL for accessing a content file for the title. A subsequent HTTP GET to the returned
    /// URL will attempt to download the content. A HEAD query to the returned URL will attempt to retrieve the metadata of the
    /// content. Note that a successful result does not guarantee the existence of this content - if it has not been uploaded,
    /// the query to retrieve the data will fail. See this post for more information:
    /// https://community.playfab.com/hc/community/posts/205469488-How-to-upload-files-to-PlayFab-s-Content-Service. Also,
    /// please be aware that the Content service is specifically PlayFab's CDN offering, for which standard CDN rates apply.
    /// https://docs.microsoft.com/rest/api/playfab/server/content/getcontentdownloadurl
    /// </summary>
    public static function GetContentDownloadUrl($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetContentDownloadUrl", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked friends of the given player for the given statistic, starting from the indicated point in the
    /// leaderboard
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/getfriendleaderboard
    /// </summary>
    public static function GetFriendLeaderboard($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetFriendLeaderboard", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the current friends for the user with PlayFabId, constrained to users who have PlayFab accounts. Friends from
    /// linked accounts (Facebook, Steam) are also included. You may optionally exclude some linked services' friends.
    /// https://docs.microsoft.com/rest/api/playfab/server/friend-list-management/getfriendslist
    /// </summary>
    public static function GetFriendsList($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetFriendsList", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked users for the given statistic, starting from the indicated point in the leaderboard
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/getleaderboard
    /// </summary>
    public static function GetLeaderboard($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetLeaderboard", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked characters for the given statistic, centered on the requested user
    /// https://docs.microsoft.com/rest/api/playfab/server/characters/getleaderboardaroundcharacter
    /// </summary>
    public static function GetLeaderboardAroundCharacter($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetLeaderboardAroundCharacter", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked users for the given statistic, centered on the currently signed-in user
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/getleaderboardarounduser
    /// </summary>
    public static function GetLeaderboardAroundUser($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetLeaderboardAroundUser", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of all of the user's characters for the given statistic.
    /// https://docs.microsoft.com/rest/api/playfab/server/characters/getleaderboardforusercharacters
    /// </summary>
    public static function GetLeaderboardForUserCharacters($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetLeaderboardForUserCharacters", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Returns whatever info is requested in the response for the user. Note that PII (like email address, facebook id) may be
    /// returned. All parameters default to false.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/getplayercombinedinfo
    /// </summary>
    public static function GetPlayerCombinedInfo($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayerCombinedInfo", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the player's profile
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/getplayerprofile
    /// </summary>
    public static function GetPlayerProfile($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayerProfile", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// List all segments that a player currently belongs to at this moment in time.
    /// https://docs.microsoft.com/rest/api/playfab/server/playstream/getplayersegments
    /// </summary>
    public static function GetPlayerSegments($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayerSegments", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Allows for paging through all players in a given segment. This API creates a snapshot of all player profiles that match
    /// the segment definition at the time of its creation and lives through the Total Seconds to Live, refreshing its life span
    /// on each subsequent use of the Continuation Token. Profiles that change during the course of paging will not be reflected
    /// in the results. AB Test segments are currently not supported by this operation. NOTE: This API is limited to being
    /// called 30 times in one minute. You will be returned an error if you exceed this threshold.
    /// https://docs.microsoft.com/rest/api/playfab/server/playstream/getplayersinsegment
    /// </summary>
    public static function GetPlayersInSegment($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayersInSegment", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the current version and values for the indicated statistics, for the local player.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/getplayerstatistics
    /// </summary>
    public static function GetPlayerStatistics($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayerStatistics", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the information on the available versions of the specified statistic.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/getplayerstatisticversions
    /// </summary>
    public static function GetPlayerStatisticVersions($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayerStatisticVersions", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Get all tags with a given Namespace (optional) from a player profile.
    /// https://docs.microsoft.com/rest/api/playfab/server/playstream/getplayertags
    /// </summary>
    public static function GetPlayerTags($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayerTags", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of Facebook identifiers.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/getplayfabidsfromfacebookids
    /// </summary>
    public static function GetPlayFabIDsFromFacebookIDs($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayFabIDsFromFacebookIDs", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of Facebook Instant Games identifiers.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/getplayfabidsfromfacebookinstantgamesids
    /// </summary>
    public static function GetPlayFabIDsFromFacebookInstantGamesIds($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayFabIDsFromFacebookInstantGamesIds", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of generic service identifiers. A generic identifier is the
    /// service name plus the service-specific ID for the player, as specified by the title when the generic identifier was
    /// added to the player account.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/getplayfabidsfromgenericids
    /// </summary>
    public static function GetPlayFabIDsFromGenericIDs($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayFabIDsFromGenericIDs", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of Nintendo Switch Device identifiers.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/getplayfabidsfromnintendoswitchdeviceids
    /// </summary>
    public static function GetPlayFabIDsFromNintendoSwitchDeviceIds($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayFabIDsFromNintendoSwitchDeviceIds", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of PlayStation Network identifiers.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/getplayfabidsfrompsnaccountids
    /// </summary>
    public static function GetPlayFabIDsFromPSNAccountIDs($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayFabIDsFromPSNAccountIDs", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of Steam identifiers. The Steam identifiers are the profile
    /// IDs for the user accounts, available as SteamId in the Steamworks Community API calls.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/getplayfabidsfromsteamids
    /// </summary>
    public static function GetPlayFabIDsFromSteamIDs($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayFabIDsFromSteamIDs", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of XboxLive identifiers.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/getplayfabidsfromxboxliveids
    /// </summary>
    public static function GetPlayFabIDsFromXboxLiveIDs($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayFabIDsFromXboxLiveIDs", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the key-value store of custom publisher settings
    /// https://docs.microsoft.com/rest/api/playfab/server/title-wide-data-management/getpublisherdata
    /// </summary>
    public static function GetPublisherData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPublisherData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the configuration information for the specified random results tables for the title, including all ItemId
    /// values and weights
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/getrandomresulttables
    /// </summary>
    public static function GetRandomResultTables($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetRandomResultTables", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the associated PlayFab account identifiers for the given set of server custom identifiers.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/getservercustomidsfromplayfabids
    /// </summary>
    public static function GetServerCustomIDsFromPlayFabIDs($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetServerCustomIDsFromPlayFabIDs", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves data stored in a shared group object, as well as the list of members in the group. The server can access all
    /// public and private group data. Shared Groups are designed for sharing data between a very small number of players,
    /// please see our guide: https://docs.microsoft.com/gaming/playfab/features/social/groups/using-shared-group-data
    /// https://docs.microsoft.com/rest/api/playfab/server/shared-group-data/getsharedgroupdata
    /// </summary>
    public static function GetSharedGroupData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetSharedGroupData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the set of items defined for the specified store, including all prices defined, for the specified player
    /// https://docs.microsoft.com/rest/api/playfab/server/title-wide-data-management/getstoreitems
    /// </summary>
    public static function GetStoreItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetStoreItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the current server time
    /// https://docs.microsoft.com/rest/api/playfab/server/title-wide-data-management/gettime
    /// </summary>
    public static function GetTime($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetTime", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the key-value store of custom title settings
    /// https://docs.microsoft.com/rest/api/playfab/server/title-wide-data-management/gettitledata
    /// </summary>
    public static function GetTitleData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetTitleData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the key-value store of custom internal title settings
    /// https://docs.microsoft.com/rest/api/playfab/server/title-wide-data-management/gettitleinternaldata
    /// </summary>
    public static function GetTitleInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetTitleInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the title news feed, as configured in the developer portal
    /// https://docs.microsoft.com/rest/api/playfab/server/title-wide-data-management/gettitlenews
    /// </summary>
    public static function GetTitleNews($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetTitleNews", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the relevant details for a specified user
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/getuseraccountinfo
    /// </summary>
    public static function GetUserAccountInfo($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserAccountInfo", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Gets all bans for a user.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/getuserbans
    /// </summary>
    public static function GetUserBans($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserBans", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which is readable and writable by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/getuserdata
    /// </summary>
    public static function GetUserData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which cannot be accessed by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/getuserinternaldata
    /// </summary>
    public static function GetUserInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the specified user's current inventory of virtual goods
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/getuserinventory
    /// </summary>
    public static function GetUserInventory($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserInventory", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the publisher-specific custom data for the user which is readable and writable by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/getuserpublisherdata
    /// </summary>
    public static function GetUserPublisherData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserPublisherData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the publisher-specific custom data for the user which cannot be accessed by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/getuserpublisherinternaldata
    /// </summary>
    public static function GetUserPublisherInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserPublisherInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the publisher-specific custom data for the user which can only be read by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/getuserpublisherreadonlydata
    /// </summary>
    public static function GetUserPublisherReadOnlyData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserPublisherReadOnlyData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which can only be read by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/getuserreadonlydata
    /// </summary>
    public static function GetUserReadOnlyData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserReadOnlyData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Grants the specified character type to the user. CharacterIds are not globally unique; characterId must be evaluated
    /// with the parent PlayFabId to guarantee uniqueness.
    /// https://docs.microsoft.com/rest/api/playfab/server/characters/grantcharactertouser
    /// </summary>
    public static function GrantCharacterToUser($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GrantCharacterToUser", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds the specified items to the specified character's inventory
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/grantitemstocharacter
    /// </summary>
    public static function GrantItemsToCharacter($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GrantItemsToCharacter", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds the specified items to the specified user's inventory
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/grantitemstouser
    /// </summary>
    public static function GrantItemsToUser($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GrantItemsToUser", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds the specified items to the specified user inventories
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/grantitemstousers
    /// </summary>
    public static function GrantItemsToUsers($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GrantItemsToUsers", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Links the PlayStation Network account associated with the provided access code to the user's PlayFab account
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/linkpsnaccount
    /// </summary>
    public static function LinkPSNAccount($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/LinkPSNAccount", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Links the custom server identifier, generated by the title, to the user's PlayFab account.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/linkservercustomid
    /// </summary>
    public static function LinkServerCustomId($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/LinkServerCustomId", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Links the Xbox Live account associated with the provided access code to the user's PlayFab account
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/linkxboxaccount
    /// </summary>
    public static function LinkXboxAccount($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/LinkXboxAccount", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Securely login a game client from an external server backend using a custom identifier for that player. Server Custom ID
    /// and Client Custom ID are mutually exclusive and cannot be used to retrieve the same player account.
    /// https://docs.microsoft.com/rest/api/playfab/server/authentication/loginwithservercustomid
    /// </summary>
    public static function LoginWithServerCustomId($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/LoginWithServerCustomId", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Signs the user in using a Xbox Live Token from an external server backend, returning a session identifier that can
    /// subsequently be used for API calls which require an authenticated user
    /// https://docs.microsoft.com/rest/api/playfab/server/authentication/loginwithxbox
    /// </summary>
    public static function LoginWithXbox($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/LoginWithXbox", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Signs the user in using an Xbox ID and Sandbox ID, returning a session identifier that can subsequently be used for API
    /// calls which require an authenticated user
    /// https://docs.microsoft.com/rest/api/playfab/server/authentication/loginwithxboxid
    /// </summary>
    public static function LoginWithXboxId($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/LoginWithXboxId", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Modifies the number of remaining uses of a player's inventory item
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/modifyitemuses
    /// </summary>
    public static function ModifyItemUses($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/ModifyItemUses", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Moves an item from a character's inventory into another of the users's character's inventory.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/moveitemtocharacterfromcharacter
    /// </summary>
    public static function MoveItemToCharacterFromCharacter($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/MoveItemToCharacterFromCharacter", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Moves an item from a user's inventory into their character's inventory.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/moveitemtocharacterfromuser
    /// </summary>
    public static function MoveItemToCharacterFromUser($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/MoveItemToCharacterFromUser", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Moves an item from a character's inventory into the owning user's inventory.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/moveitemtouserfromcharacter
    /// </summary>
    public static function MoveItemToUserFromCharacter($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/MoveItemToUserFromCharacter", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Informs the PlayFab match-making service that the user specified has left the Game Server Instance
    /// https://docs.microsoft.com/rest/api/playfab/server/matchmaking/notifymatchmakerplayerleft
    /// </summary>
    public static function NotifyMatchmakerPlayerLeft($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/NotifyMatchmakerPlayerLeft", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds the virtual goods associated with the coupon to the user's inventory. Coupons can be generated via the
    /// Economy->Catalogs tab in the PlayFab Game Manager.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/redeemcoupon
    /// </summary>
    public static function RedeemCoupon($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RedeemCoupon", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Validates a Game Server session ticket and returns details about the user
    /// https://docs.microsoft.com/rest/api/playfab/server/matchmaking/redeemmatchmakerticket
    /// </summary>
    public static function RedeemMatchmakerTicket($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RedeemMatchmakerTicket", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Set the state of the indicated Game Server Instance. Also update the heartbeat for the instance.
    /// https://docs.microsoft.com/rest/api/playfab/server/matchmaking/refreshgameserverinstanceheartbeat
    /// </summary>
    public static function RefreshGameServerInstanceHeartbeat($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RefreshGameServerInstanceHeartbeat", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Inform the matchmaker that a new Game Server Instance is added.
    /// https://docs.microsoft.com/rest/api/playfab/server/matchmaking/registergame
    /// </summary>
    public static function RegisterGame($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RegisterGame", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Removes the specified friend from the the user's friend list
    /// https://docs.microsoft.com/rest/api/playfab/server/friend-list-management/removefriend
    /// </summary>
    public static function RemoveFriend($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RemoveFriend", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Removes the specified generic service identifier from the player's PlayFab account.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/removegenericid
    /// </summary>
    public static function RemoveGenericID($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RemoveGenericID", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Remove a given tag from a player profile. The tag's namespace is automatically generated based on the source of the tag.
    /// https://docs.microsoft.com/rest/api/playfab/server/playstream/removeplayertag
    /// </summary>
    public static function RemovePlayerTag($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RemovePlayerTag", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Removes users from the set of those able to update the shared data and the set of users in the group. Only users in the
    /// group can remove members. If as a result of the call, zero users remain with access, the group and its associated data
    /// will be deleted. Shared Groups are designed for sharing data between a very small number of players, please see our
    /// guide: https://docs.microsoft.com/gaming/playfab/features/social/groups/using-shared-group-data
    /// https://docs.microsoft.com/rest/api/playfab/server/shared-group-data/removesharedgroupmembers
    /// </summary>
    public static function RemoveSharedGroupMembers($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RemoveSharedGroupMembers", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Submit a report about a player (due to bad bahavior, etc.) on behalf of another player, so that customer service
    /// representatives for the title can take action concerning potentially toxic players.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/reportplayer
    /// </summary>
    public static function ReportPlayer($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/ReportPlayer", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Revoke all active bans for a user.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/revokeallbansforuser
    /// </summary>
    public static function RevokeAllBansForUser($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RevokeAllBansForUser", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Revoke all active bans specified with BanId.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/revokebans
    /// </summary>
    public static function RevokeBans($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RevokeBans", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Revokes access to an item in a user's inventory
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/revokeinventoryitem
    /// </summary>
    public static function RevokeInventoryItem($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RevokeInventoryItem", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Revokes access for up to 25 items across multiple users and characters.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/revokeinventoryitems
    /// </summary>
    public static function RevokeInventoryItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RevokeInventoryItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Saves push notification template for title
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/savepushnotificationtemplate
    /// </summary>
    public static function SavePushNotificationTemplate($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SavePushNotificationTemplate", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Forces an email to be sent to the registered contact email address for the user's account based on an account recovery
    /// email template
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/sendcustomaccountrecoveryemail
    /// </summary>
    public static function SendCustomAccountRecoveryEmail($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SendCustomAccountRecoveryEmail", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Sends an email based on an email template to a player's contact email
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/sendemailfromtemplate
    /// </summary>
    public static function SendEmailFromTemplate($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SendEmailFromTemplate", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Sends an iOS/Android Push Notification to a specific user, if that user's device has been configured for Push
    /// Notifications in PlayFab. If a user has linked both Android and iOS devices, both will be notified.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/sendpushnotification
    /// </summary>
    public static function SendPushNotification($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SendPushNotification", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Sends an iOS/Android Push Notification template to a specific user, if that user's device has been configured for Push
    /// Notifications in PlayFab. If a user has linked both Android and iOS devices, both will be notified.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/sendpushnotificationfromtemplate
    /// </summary>
    public static function SendPushNotificationFromTemplate($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SendPushNotificationFromTemplate", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the tag list for a specified user in the friend list of another user
    /// https://docs.microsoft.com/rest/api/playfab/server/friend-list-management/setfriendtags
    /// </summary>
    public static function SetFriendTags($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetFriendTags", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Sets the custom data of the indicated Game Server Instance
    /// https://docs.microsoft.com/rest/api/playfab/server/matchmaking/setgameserverinstancedata
    /// </summary>
    public static function SetGameServerInstanceData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetGameServerInstanceData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Set the state of the indicated Game Server Instance.
    /// https://docs.microsoft.com/rest/api/playfab/server/matchmaking/setgameserverinstancestate
    /// </summary>
    public static function SetGameServerInstanceState($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetGameServerInstanceState", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Set custom tags for the specified Game Server Instance
    /// https://docs.microsoft.com/rest/api/playfab/server/matchmaking/setgameserverinstancetags
    /// </summary>
    public static function SetGameServerInstanceTags($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetGameServerInstanceTags", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Sets the player's secret if it is not already set. Player secrets are used to sign API requests. To reset a player's
    /// secret use the Admin or Server API method SetPlayerSecret.
    /// https://docs.microsoft.com/rest/api/playfab/server/authentication/setplayersecret
    /// </summary>
    public static function SetPlayerSecret($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetPlayerSecret", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the key-value store of custom publisher settings
    /// https://docs.microsoft.com/rest/api/playfab/server/title-wide-data-management/setpublisherdata
    /// </summary>
    public static function SetPublisherData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetPublisherData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the key-value store of custom title settings
    /// https://docs.microsoft.com/rest/api/playfab/server/title-wide-data-management/settitledata
    /// </summary>
    public static function SetTitleData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetTitleData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the key-value store of custom title settings
    /// https://docs.microsoft.com/rest/api/playfab/server/title-wide-data-management/settitleinternaldata
    /// </summary>
    public static function SetTitleInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetTitleInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Decrements the character's balance of the specified virtual currency by the stated amount. It is possible to make a VC
    /// balance negative with this API.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/subtractcharactervirtualcurrency
    /// </summary>
    public static function SubtractCharacterVirtualCurrency($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SubtractCharacterVirtualCurrency", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Decrements the user's balance of the specified virtual currency by the stated amount. It is possible to make a VC
    /// balance negative with this API.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/subtractuservirtualcurrency
    /// </summary>
    public static function SubtractUserVirtualCurrency($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SubtractUserVirtualCurrency", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Unlinks the related PSN account from the user's PlayFab account
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/unlinkpsnaccount
    /// </summary>
    public static function UnlinkPSNAccount($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UnlinkPSNAccount", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Unlinks the custom server identifier from the user's PlayFab account.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/unlinkservercustomid
    /// </summary>
    public static function UnlinkServerCustomId($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UnlinkServerCustomId", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Unlinks the related Xbox Live account from the user's PlayFab account
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/unlinkxboxaccount
    /// </summary>
    public static function UnlinkXboxAccount($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UnlinkXboxAccount", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Opens a specific container (ContainerItemInstanceId), with a specific key (KeyItemInstanceId, when required), and
    /// returns the contents of the opened container. If the container (and key when relevant) are consumable (RemainingUses >
    /// 0), their RemainingUses will be decremented, consistent with the operation of ConsumeItem.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/unlockcontainerinstance
    /// </summary>
    public static function UnlockContainerInstance($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UnlockContainerInstance", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Searches Player or Character inventory for any ItemInstance matching the given CatalogItemId, if necessary unlocks it
    /// using any appropriate key, and returns the contents of the opened container. If the container (and key when relevant)
    /// are consumable (RemainingUses > 0), their RemainingUses will be decremented, consistent with the operation of
    /// ConsumeItem.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/unlockcontaineritem
    /// </summary>
    public static function UnlockContainerItem($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UnlockContainerItem", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Update the avatar URL of the specified player
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/updateavatarurl
    /// </summary>
    public static function UpdateAvatarUrl($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateAvatarUrl", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates information of a list of existing bans specified with Ban Ids.
    /// https://docs.microsoft.com/rest/api/playfab/server/account-management/updatebans
    /// </summary>
    public static function UpdateBans($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateBans", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user's character which is readable and writable by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/character-data/updatecharacterdata
    /// </summary>
    public static function UpdateCharacterData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateCharacterData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user's character which cannot be accessed by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/character-data/updatecharacterinternaldata
    /// </summary>
    public static function UpdateCharacterInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateCharacterInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user's character which can only be read by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/character-data/updatecharacterreadonlydata
    /// </summary>
    public static function UpdateCharacterReadOnlyData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateCharacterReadOnlyData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the values of the specified title-specific statistics for the specific character
    /// https://docs.microsoft.com/rest/api/playfab/server/characters/updatecharacterstatistics
    /// </summary>
    public static function UpdateCharacterStatistics($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateCharacterStatistics", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the values of the specified title-specific statistics for the user
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/updateplayerstatistics
    /// </summary>
    public static function UpdatePlayerStatistics($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdatePlayerStatistics", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds, updates, and removes data keys for a shared group object. If the permission is set to Public, all fields updated
    /// or added in this call will be readable by users not in the group. By default, data permissions are set to Private.
    /// Regardless of the permission setting, only members of the group (and the server) can update the data. Shared Groups are
    /// designed for sharing data between a very small number of players, please see our guide:
    /// https://docs.microsoft.com/gaming/playfab/features/social/groups/using-shared-group-data
    /// https://docs.microsoft.com/rest/api/playfab/server/shared-group-data/updatesharedgroupdata
    /// </summary>
    public static function UpdateSharedGroupData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateSharedGroupData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user which is readable and writable by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/updateuserdata
    /// </summary>
    public static function UpdateUserData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateUserData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user which cannot be accessed by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/updateuserinternaldata
    /// </summary>
    public static function UpdateUserInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateUserInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the key-value pair data tagged to the specified item, which is read-only from the client.
    /// https://docs.microsoft.com/rest/api/playfab/server/player-item-management/updateuserinventoryitemcustomdata
    /// </summary>
    public static function UpdateUserInventoryItemCustomData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateUserInventoryItemCustomData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the publisher-specific custom data for the user which is readable and writable by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/updateuserpublisherdata
    /// </summary>
    public static function UpdateUserPublisherData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateUserPublisherData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the publisher-specific custom data for the user which cannot be accessed by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/updateuserpublisherinternaldata
    /// </summary>
    public static function UpdateUserPublisherInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateUserPublisherInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the publisher-specific custom data for the user which can only be read by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/updateuserpublisherreadonlydata
    /// </summary>
    public static function UpdateUserPublisherReadOnlyData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateUserPublisherReadOnlyData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user which can only be read by the client
    /// https://docs.microsoft.com/rest/api/playfab/server/player-data-management/updateuserreadonlydata
    /// </summary>
    public static function UpdateUserReadOnlyData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateUserReadOnlyData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Writes a character-based event into PlayStream.
    /// https://docs.microsoft.com/rest/api/playfab/server/analytics/writecharacterevent
    /// </summary>
    public static function WriteCharacterEvent($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/WriteCharacterEvent", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Writes a player-based event into PlayStream.
    /// https://docs.microsoft.com/rest/api/playfab/server/analytics/writeplayerevent
    /// </summary>
    public static function WritePlayerEvent($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/WritePlayerEvent", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Writes a title-based event into PlayStream.
    /// https://docs.microsoft.com/rest/api/playfab/server/analytics/writetitleevent
    /// </summary>
    public static function WriteTitleEvent($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/WriteTitleEvent", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

}
?>
