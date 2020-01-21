<?php
include 'PlayFabHttp.php';

class PlayFabAdminApi
{
    /// <summary>
    /// Abort an ongoing task instance.
    /// https://docs.microsoft.com/rest/api/playfab/admin/scheduledtask/aborttaskinstance
    /// </summary>
    public static function AbortTaskInstance($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/AbortTaskInstance", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Update news item to include localized version
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/addlocalizednews
    /// </summary>
    public static function AddLocalizedNews($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/AddLocalizedNews", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds a new news item to the title's news feed
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/addnews
    /// </summary>
    public static function AddNews($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/AddNews", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds a given tag to a player profile. The tag's namespace is automatically generated based on the source of the tag.
    /// https://docs.microsoft.com/rest/api/playfab/admin/playstream/addplayertag
    /// </summary>
    public static function AddPlayerTag($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/AddPlayerTag", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds the game server executable specified (previously uploaded - see GetServerBuildUploadUrl) to the set of those a
    /// client is permitted to request in a call to StartGame
    /// https://docs.microsoft.com/rest/api/playfab/admin/custom-server-management/addserverbuild
    /// </summary>
    public static function AddServerBuild($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/AddServerBuild", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Increments the specified virtual currency by the stated amount
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-item-management/adduservirtualcurrency
    /// </summary>
    public static function AddUserVirtualCurrency($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/AddUserVirtualCurrency", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds one or more virtual currencies to the set defined for the title. Virtual Currencies have a maximum value of
    /// 2,147,483,647 when granted to a player. Any value over that will be discarded.
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/addvirtualcurrencytypes
    /// </summary>
    public static function AddVirtualCurrencyTypes($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/AddVirtualCurrencyTypes", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Bans users by PlayFab ID with optional IP address, or MAC address for the provided game.
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/banusers
    /// </summary>
    public static function BanUsers($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/BanUsers", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Checks the global count for the limited edition item.
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-item-management/checklimitededitionitemavailability
    /// </summary>
    public static function CheckLimitedEditionItemAvailability($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/CheckLimitedEditionItemAvailability", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Create an ActionsOnPlayersInSegment task, which iterates through all players in a segment to execute action.
    /// https://docs.microsoft.com/rest/api/playfab/admin/scheduledtask/createactionsonplayersinsegmenttask
    /// </summary>
    public static function CreateActionsOnPlayersInSegmentTask($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/CreateActionsOnPlayersInSegmentTask", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Create a CloudScript task, which can run a CloudScript on a schedule.
    /// https://docs.microsoft.com/rest/api/playfab/admin/scheduledtask/createcloudscripttask
    /// </summary>
    public static function CreateCloudScriptTask($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/CreateCloudScriptTask", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Registers a relationship between a title and an Open ID Connect provider.
    /// https://docs.microsoft.com/rest/api/playfab/admin/authentication/createopenidconnection
    /// </summary>
    public static function CreateOpenIdConnection($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/CreateOpenIdConnection", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Creates a new Player Shared Secret Key. It may take up to 5 minutes for this key to become generally available after
    /// this API returns.
    /// https://docs.microsoft.com/rest/api/playfab/admin/authentication/createplayersharedsecret
    /// </summary>
    public static function CreatePlayerSharedSecret($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/CreatePlayerSharedSecret", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds a new player statistic configuration to the title, optionally allowing the developer to specify a reset interval
    /// and an aggregation method.
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/createplayerstatisticdefinition
    /// </summary>
    public static function CreatePlayerStatisticDefinition($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/CreatePlayerStatisticDefinition", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Delete a content file from the title. When deleting a file that does not exist, it returns success.
    /// https://docs.microsoft.com/rest/api/playfab/admin/content/deletecontent
    /// </summary>
    public static function DeleteContent($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeleteContent", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Removes a master player account entirely from all titles and deletes all associated data
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/deletemasterplayeraccount
    /// </summary>
    public static function DeleteMasterPlayerAccount($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeleteMasterPlayerAccount", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Removes a relationship between a title and an OpenID Connect provider.
    /// https://docs.microsoft.com/rest/api/playfab/admin/authentication/deleteopenidconnection
    /// </summary>
    public static function DeleteOpenIdConnection($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeleteOpenIdConnection", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Removes a user's player account from a title and deletes all associated data
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/deleteplayer
    /// </summary>
    public static function DeletePlayer($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeletePlayer", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Deletes an existing Player Shared Secret Key. It may take up to 5 minutes for this delete to be reflected after this API
    /// returns.
    /// https://docs.microsoft.com/rest/api/playfab/admin/authentication/deleteplayersharedsecret
    /// </summary>
    public static function DeletePlayerSharedSecret($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeletePlayerSharedSecret", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Deletes an existing virtual item store
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/deletestore
    /// </summary>
    public static function DeleteStore($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeleteStore", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Delete a task.
    /// https://docs.microsoft.com/rest/api/playfab/admin/scheduledtask/deletetask
    /// </summary>
    public static function DeleteTask($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeleteTask", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Permanently deletes a title and all associated configuration
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/deletetitle
    /// </summary>
    public static function DeleteTitle($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/DeleteTitle", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Exports all associated data of a master player account
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/exportmasterplayerdata
    /// </summary>
    public static function ExportMasterPlayerData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ExportMasterPlayerData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Get information about a ActionsOnPlayersInSegment task instance.
    /// https://docs.microsoft.com/rest/api/playfab/admin/scheduledtask/getactionsonplayersinsegmenttaskinstance
    /// </summary>
    public static function GetActionsOnPlayersInSegmentTaskInstance($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetActionsOnPlayersInSegmentTaskInstance", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves an array of player segment definitions. Results from this can be used in subsequent API calls such as
    /// GetPlayersInSegment which requires a Segment ID. While segment names can change the ID for that segment will not change.
    /// https://docs.microsoft.com/rest/api/playfab/admin/playstream/getallsegments
    /// </summary>
    public static function GetAllSegments($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetAllSegments", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the specified version of the title's catalog of virtual goods, including all defined properties
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/getcatalogitems
    /// </summary>
    public static function GetCatalogItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetCatalogItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Gets the contents and information of a specific Cloud Script revision.
    /// https://docs.microsoft.com/rest/api/playfab/admin/server-side-cloud-script/getcloudscriptrevision
    /// </summary>
    public static function GetCloudScriptRevision($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetCloudScriptRevision", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Get detail information about a CloudScript task instance.
    /// https://docs.microsoft.com/rest/api/playfab/admin/scheduledtask/getcloudscripttaskinstance
    /// </summary>
    public static function GetCloudScriptTaskInstance($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetCloudScriptTaskInstance", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Lists all the current cloud script versions. For each version, information about the current published and latest
    /// revisions is also listed.
    /// https://docs.microsoft.com/rest/api/playfab/admin/server-side-cloud-script/getcloudscriptversions
    /// </summary>
    public static function GetCloudScriptVersions($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetCloudScriptVersions", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// List all contents of the title and get statistics such as size
    /// https://docs.microsoft.com/rest/api/playfab/admin/content/getcontentlist
    /// </summary>
    public static function GetContentList($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetContentList", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the pre-signed URL for uploading a content file. A subsequent HTTP PUT to the returned URL uploads the
    /// content. Also, please be aware that the Content service is specifically PlayFab's CDN offering, for which standard CDN
    /// rates apply.
    /// https://docs.microsoft.com/rest/api/playfab/admin/content/getcontentuploadurl
    /// </summary>
    public static function GetContentUploadUrl($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetContentUploadUrl", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves a download URL for the requested report
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/getdatareport
    /// </summary>
    public static function GetDataReport($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetDataReport", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the details for a specific completed session, including links to standard out and standard error logs
    /// https://docs.microsoft.com/rest/api/playfab/admin/matchmaking/getmatchmakergameinfo
    /// </summary>
    public static function GetMatchmakerGameInfo($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetMatchmakerGameInfo", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the details of defined game modes for the specified game server executable
    /// https://docs.microsoft.com/rest/api/playfab/admin/matchmaking/getmatchmakergamemodes
    /// </summary>
    public static function GetMatchmakerGameModes($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetMatchmakerGameModes", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Get the list of titles that the player has played
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/getplayedtitlelist
    /// </summary>
    public static function GetPlayedTitleList($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayedTitleList", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Gets a player's ID from an auth token.
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/getplayeridfromauthtoken
    /// </summary>
    public static function GetPlayerIdFromAuthToken($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayerIdFromAuthToken", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the player's profile
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/getplayerprofile
    /// </summary>
    public static function GetPlayerProfile($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayerProfile", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// List all segments that a player currently belongs to at this moment in time.
    /// https://docs.microsoft.com/rest/api/playfab/admin/playstream/getplayersegments
    /// </summary>
    public static function GetPlayerSegments($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayerSegments", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Returns all Player Shared Secret Keys including disabled and expired.
    /// https://docs.microsoft.com/rest/api/playfab/admin/authentication/getplayersharedsecrets
    /// </summary>
    public static function GetPlayerSharedSecrets($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayerSharedSecrets", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Allows for paging through all players in a given segment. This API creates a snapshot of all player profiles that match
    /// the segment definition at the time of its creation and lives through the Total Seconds to Live, refreshing its life span
    /// on each subsequent use of the Continuation Token. Profiles that change during the course of paging will not be reflected
    /// in the results. AB Test segments are currently not supported by this operation. NOTE: This API is limited to being
    /// called 30 times in one minute. You will be returned an error if you exceed this threshold.
    /// https://docs.microsoft.com/rest/api/playfab/admin/playstream/getplayersinsegment
    /// </summary>
    public static function GetPlayersInSegment($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayersInSegment", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the configuration information for all player statistics defined in the title, regardless of whether they have
    /// a reset interval.
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/getplayerstatisticdefinitions
    /// </summary>
    public static function GetPlayerStatisticDefinitions($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayerStatisticDefinitions", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the information on the available versions of the specified statistic.
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/getplayerstatisticversions
    /// </summary>
    public static function GetPlayerStatisticVersions($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayerStatisticVersions", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Get all tags with a given Namespace (optional) from a player profile.
    /// https://docs.microsoft.com/rest/api/playfab/admin/playstream/getplayertags
    /// </summary>
    public static function GetPlayerTags($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPlayerTags", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Gets the requested policy.
    /// https://docs.microsoft.com/rest/api/playfab/admin/authentication/getpolicy
    /// </summary>
    public static function GetPolicy($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPolicy", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the key-value store of custom publisher settings
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/getpublisherdata
    /// </summary>
    public static function GetPublisherData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetPublisherData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the random drop table configuration for the title
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/getrandomresulttables
    /// </summary>
    public static function GetRandomResultTables($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetRandomResultTables", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the build details for the specified game server executable
    /// https://docs.microsoft.com/rest/api/playfab/admin/custom-server-management/getserverbuildinfo
    /// </summary>
    public static function GetServerBuildInfo($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetServerBuildInfo", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the pre-authorized URL for uploading a game server package containing a build (does not enable the build for
    /// use - see AddServerBuild)
    /// https://docs.microsoft.com/rest/api/playfab/admin/custom-server-management/getserverbuilduploadurl
    /// </summary>
    public static function GetServerBuildUploadUrl($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetServerBuildUploadUrl", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the set of items defined for the specified store, including all prices defined
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/getstoreitems
    /// </summary>
    public static function GetStoreItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetStoreItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Query for task instances by task, status, or time range.
    /// https://docs.microsoft.com/rest/api/playfab/admin/scheduledtask/gettaskinstances
    /// </summary>
    public static function GetTaskInstances($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetTaskInstances", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Get definition information on a specified task or all tasks within a title.
    /// https://docs.microsoft.com/rest/api/playfab/admin/scheduledtask/gettasks
    /// </summary>
    public static function GetTasks($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetTasks", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the key-value store of custom title settings which can be read by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/gettitledata
    /// </summary>
    public static function GetTitleData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetTitleData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the key-value store of custom title settings which cannot be read by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/gettitleinternaldata
    /// </summary>
    public static function GetTitleInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetTitleInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the relevant details for a specified user, based upon a match against a supplied unique identifier
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/getuseraccountinfo
    /// </summary>
    public static function GetUserAccountInfo($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserAccountInfo", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Gets all bans for a user.
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/getuserbans
    /// </summary>
    public static function GetUserBans($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserBans", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which is readable and writable by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/getuserdata
    /// </summary>
    public static function GetUserData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which cannot be accessed by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/getuserinternaldata
    /// </summary>
    public static function GetUserInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the specified user's current inventory of virtual goods
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-item-management/getuserinventory
    /// </summary>
    public static function GetUserInventory($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserInventory", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the publisher-specific custom data for the user which is readable and writable by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/getuserpublisherdata
    /// </summary>
    public static function GetUserPublisherData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserPublisherData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the publisher-specific custom data for the user which cannot be accessed by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/getuserpublisherinternaldata
    /// </summary>
    public static function GetUserPublisherInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserPublisherInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the publisher-specific custom data for the user which can only be read by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/getuserpublisherreadonlydata
    /// </summary>
    public static function GetUserPublisherReadOnlyData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserPublisherReadOnlyData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which can only be read by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/getuserreadonlydata
    /// </summary>
    public static function GetUserReadOnlyData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GetUserReadOnlyData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Adds the specified items to the specified user inventories
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-item-management/grantitemstousers
    /// </summary>
    public static function GrantItemsToUsers($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/GrantItemsToUsers", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Increases the global count for the given scarce resource.
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-item-management/incrementlimitededitionitemavailability
    /// </summary>
    public static function IncrementLimitedEditionItemAvailability($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/IncrementLimitedEditionItemAvailability", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Resets the indicated statistic, removing all player entries for it and backing up the old values.
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/incrementplayerstatisticversion
    /// </summary>
    public static function IncrementPlayerStatisticVersion($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/IncrementPlayerStatisticVersion", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of all Open ID Connect providers registered to a title.
    /// https://docs.microsoft.com/rest/api/playfab/admin/authentication/listopenidconnection
    /// </summary>
    public static function ListOpenIdConnection($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ListOpenIdConnection", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves the build details for all game server executables which are currently defined for the title
    /// https://docs.microsoft.com/rest/api/playfab/admin/custom-server-management/listserverbuilds
    /// </summary>
    public static function ListServerBuilds($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ListServerBuilds", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retuns the list of all defined virtual currencies for the title
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/listvirtualcurrencytypes
    /// </summary>
    public static function ListVirtualCurrencyTypes($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ListVirtualCurrencyTypes", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the game server mode details for the specified game server executable
    /// https://docs.microsoft.com/rest/api/playfab/admin/matchmaking/modifymatchmakergamemodes
    /// </summary>
    public static function ModifyMatchmakerGameModes($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ModifyMatchmakerGameModes", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the build details for the specified game server executable
    /// https://docs.microsoft.com/rest/api/playfab/admin/custom-server-management/modifyserverbuild
    /// </summary>
    public static function ModifyServerBuild($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ModifyServerBuild", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Attempts to process an order refund through the original real money payment provider.
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/refundpurchase
    /// </summary>
    public static function RefundPurchase($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RefundPurchase", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Remove a given tag from a player profile. The tag's namespace is automatically generated based on the source of the tag.
    /// https://docs.microsoft.com/rest/api/playfab/admin/playstream/removeplayertag
    /// </summary>
    public static function RemovePlayerTag($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RemovePlayerTag", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Removes the game server executable specified from the set of those a client is permitted to request in a call to
    /// StartGame
    /// https://docs.microsoft.com/rest/api/playfab/admin/custom-server-management/removeserverbuild
    /// </summary>
    public static function RemoveServerBuild($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RemoveServerBuild", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Removes one or more virtual currencies from the set defined for the title.
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/removevirtualcurrencytypes
    /// </summary>
    public static function RemoveVirtualCurrencyTypes($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RemoveVirtualCurrencyTypes", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Completely removes all statistics for the specified character, for the current game
    /// https://docs.microsoft.com/rest/api/playfab/admin/characters/resetcharacterstatistics
    /// </summary>
    public static function ResetCharacterStatistics($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ResetCharacterStatistics", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Reset a player's password for a given title.
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/resetpassword
    /// </summary>
    public static function ResetPassword($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ResetPassword", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Completely removes all statistics for the specified user, for the current game
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/resetuserstatistics
    /// </summary>
    public static function ResetUserStatistics($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ResetUserStatistics", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Attempts to resolve a dispute with the original order's payment provider.
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/resolvepurchasedispute
    /// </summary>
    public static function ResolvePurchaseDispute($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/ResolvePurchaseDispute", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Revoke all active bans for a user.
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/revokeallbansforuser
    /// </summary>
    public static function RevokeAllBansForUser($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RevokeAllBansForUser", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Revoke all active bans specified with BanId.
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/revokebans
    /// </summary>
    public static function RevokeBans($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RevokeBans", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Revokes access to an item in a user's inventory
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-item-management/revokeinventoryitem
    /// </summary>
    public static function RevokeInventoryItem($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RevokeInventoryItem", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Revokes access for up to 25 items across multiple users and characters.
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-item-management/revokeinventoryitems
    /// </summary>
    public static function RevokeInventoryItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RevokeInventoryItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Run a task immediately regardless of its schedule.
    /// https://docs.microsoft.com/rest/api/playfab/admin/scheduledtask/runtask
    /// </summary>
    public static function RunTask($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/RunTask", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Forces an email to be sent to the registered email address for the user's account, with a link allowing the user to
    /// change the password.If an account recovery email template ID is provided, an email using the custom email template will
    /// be used.
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/sendaccountrecoveryemail
    /// </summary>
    public static function SendAccountRecoveryEmail($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SendAccountRecoveryEmail", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Creates the catalog configuration of all virtual goods for the specified catalog version
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/setcatalogitems
    /// </summary>
    public static function SetCatalogItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetCatalogItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Sets or resets the player's secret. Player secrets are used to sign API requests.
    /// https://docs.microsoft.com/rest/api/playfab/admin/authentication/setplayersecret
    /// </summary>
    public static function SetPlayerSecret($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetPlayerSecret", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Sets the currently published revision of a title Cloud Script
    /// https://docs.microsoft.com/rest/api/playfab/admin/server-side-cloud-script/setpublishedrevision
    /// </summary>
    public static function SetPublishedRevision($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetPublishedRevision", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the key-value store of custom publisher settings
    /// https://docs.microsoft.com/rest/api/playfab/admin/shared-group-data/setpublisherdata
    /// </summary>
    public static function SetPublisherData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetPublisherData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Sets all the items in one virtual store
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/setstoreitems
    /// </summary>
    public static function SetStoreItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetStoreItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Creates and updates the key-value store of custom title settings which can be read by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/settitledata
    /// </summary>
    public static function SetTitleData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetTitleData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the key-value store of custom title settings which cannot be read by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/settitleinternaldata
    /// </summary>
    public static function SetTitleInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetTitleInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Sets the Amazon Resource Name (ARN) for iOS and Android push notifications. Documentation on the exact restrictions can
    /// be found at: http://docs.aws.amazon.com/sns/latest/api/API_CreatePlatformApplication.html. Currently, Amazon device
    /// Messaging is not supported.
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/setuppushnotification
    /// </summary>
    public static function SetupPushNotification($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SetupPushNotification", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Decrements the specified virtual currency by the stated amount
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-item-management/subtractuservirtualcurrency
    /// </summary>
    public static function SubtractUserVirtualCurrency($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/SubtractUserVirtualCurrency", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates information of a list of existing bans specified with Ban Ids.
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/updatebans
    /// </summary>
    public static function UpdateBans($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateBans", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the catalog configuration for virtual goods in the specified catalog version
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/updatecatalogitems
    /// </summary>
    public static function UpdateCatalogItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateCatalogItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Creates a new Cloud Script revision and uploads source code to it. Note that at this time, only one file should be
    /// submitted in the revision.
    /// https://docs.microsoft.com/rest/api/playfab/admin/server-side-cloud-script/updatecloudscript
    /// </summary>
    public static function UpdateCloudScript($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateCloudScript", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Modifies data and credentials for an existing relationship between a title and an Open ID Connect provider
    /// https://docs.microsoft.com/rest/api/playfab/admin/authentication/updateopenidconnection
    /// </summary>
    public static function UpdateOpenIdConnection($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateOpenIdConnection", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates a existing Player Shared Secret Key. It may take up to 5 minutes for this update to become generally available
    /// after this API returns.
    /// https://docs.microsoft.com/rest/api/playfab/admin/authentication/updateplayersharedsecret
    /// </summary>
    public static function UpdatePlayerSharedSecret($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdatePlayerSharedSecret", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates a player statistic configuration for the title, optionally allowing the developer to specify a reset interval.
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/updateplayerstatisticdefinition
    /// </summary>
    public static function UpdatePlayerStatisticDefinition($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdatePlayerStatisticDefinition", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Changes a policy for a title
    /// https://docs.microsoft.com/rest/api/playfab/admin/authentication/updatepolicy
    /// </summary>
    public static function UpdatePolicy($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdatePolicy", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the random drop table configuration for the title
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/updaterandomresulttables
    /// </summary>
    public static function UpdateRandomResultTables($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateRandomResultTables", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates an existing virtual item store with new or modified items
    /// https://docs.microsoft.com/rest/api/playfab/admin/title-wide-data-management/updatestoreitems
    /// </summary>
    public static function UpdateStoreItems($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateStoreItems", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Update an existing task.
    /// https://docs.microsoft.com/rest/api/playfab/admin/scheduledtask/updatetask
    /// </summary>
    public static function UpdateTask($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateTask", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user which is readable and writable by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/updateuserdata
    /// </summary>
    public static function UpdateUserData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateUserData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user which cannot be accessed by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/updateuserinternaldata
    /// </summary>
    public static function UpdateUserInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateUserInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the publisher-specific custom data for the user which is readable and writable by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/updateuserpublisherdata
    /// </summary>
    public static function UpdateUserPublisherData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateUserPublisherData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the publisher-specific custom data for the user which cannot be accessed by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/updateuserpublisherinternaldata
    /// </summary>
    public static function UpdateUserPublisherInternalData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateUserPublisherInternalData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the publisher-specific custom data for the user which can only be read by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/updateuserpublisherreadonlydata
    /// </summary>
    public static function UpdateUserPublisherReadOnlyData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateUserPublisherReadOnlyData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user which can only be read by the client
    /// https://docs.microsoft.com/rest/api/playfab/admin/player-data-management/updateuserreadonlydata
    /// </summary>
    public static function UpdateUserReadOnlyData($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateUserReadOnlyData", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Updates the title specific display name for a user
    /// https://docs.microsoft.com/rest/api/playfab/admin/account-management/updateusertitledisplayname
    /// </summary>
    public static function UpdateUserTitleDisplayName($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Admin/UpdateUserTitleDisplayName", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

}
?>
