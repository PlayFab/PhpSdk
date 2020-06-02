<?php
include 'PlayFabHttp.php';

class PlayFabMultiplayerApi
{
    /// <summary>
    /// Cancel all active tickets the player is a member of in a given queue.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/matchmaking/cancelallmatchmakingticketsforplayer
    /// </summary>
    public static function CancelAllMatchmakingTicketsForPlayer($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/CancelAllMatchmakingTicketsForPlayer", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Cancel all active backfill tickets the player is a member of in a given queue.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/matchmaking/cancelallserverbackfillticketsforplayer
    /// </summary>
    public static function CancelAllServerBackfillTicketsForPlayer($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/CancelAllServerBackfillTicketsForPlayer", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Cancel a matchmaking ticket.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/matchmaking/cancelmatchmakingticket
    /// </summary>
    public static function CancelMatchmakingTicket($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/CancelMatchmakingTicket", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Cancel a server backfill ticket.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/matchmaking/cancelserverbackfillticket
    /// </summary>
    public static function CancelServerBackfillTicket($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/CancelServerBackfillTicket", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a multiplayer server build alias.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/createbuildalias
    /// </summary>
    public static function CreateBuildAlias($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/CreateBuildAlias", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a multiplayer server build with a custom container.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/createbuildwithcustomcontainer
    /// </summary>
    public static function CreateBuildWithCustomContainer($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/CreateBuildWithCustomContainer", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a multiplayer server build with a managed container.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/createbuildwithmanagedcontainer
    /// </summary>
    public static function CreateBuildWithManagedContainer($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/CreateBuildWithManagedContainer", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Create a matchmaking ticket as a client.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/matchmaking/creatematchmakingticket
    /// </summary>
    public static function CreateMatchmakingTicket($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/CreateMatchmakingTicket", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a remote user to log on to a VM for a multiplayer server build.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/createremoteuser
    /// </summary>
    public static function CreateRemoteUser($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/CreateRemoteUser", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Create a backfill matchmaking ticket as a server. A backfill ticket represents an ongoing game. The matchmaking service
    /// automatically starts matching the backfill ticket against other matchmaking tickets. Backfill tickets cannot match with
    /// other backfill tickets.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/matchmaking/createserverbackfillticket
    /// </summary>
    public static function CreateServerBackfillTicket($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/CreateServerBackfillTicket", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Create a matchmaking ticket as a server. The matchmaking service automatically starts matching the ticket against other
    /// matchmaking tickets.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/matchmaking/createservermatchmakingticket
    /// </summary>
    public static function CreateServerMatchmakingTicket($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/CreateServerMatchmakingTicket", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes a multiplayer server game asset for a title.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/deleteasset
    /// </summary>
    public static function DeleteAsset($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/DeleteAsset", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes a multiplayer server build.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/deletebuild
    /// </summary>
    public static function DeleteBuild($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/DeleteBuild", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes a multiplayer server build alias.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/deletebuildalias
    /// </summary>
    public static function DeleteBuildAlias($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/DeleteBuildAlias", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Removes a multiplayer server build's region.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/deletebuildregion
    /// </summary>
    public static function DeleteBuildRegion($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/DeleteBuildRegion", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes a multiplayer server game certificate.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/deletecertificate
    /// </summary>
    public static function DeleteCertificate($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/DeleteCertificate", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes a container image repository.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/deletecontainerimagerepository
    /// </summary>
    public static function DeleteContainerImageRepository($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/DeleteContainerImageRepository", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes a remote user to log on to a VM for a multiplayer server build.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/deleteremoteuser
    /// </summary>
    public static function DeleteRemoteUser($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/DeleteRemoteUser", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Enables the multiplayer server feature for a title.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/enablemultiplayerserversfortitle
    /// </summary>
    public static function EnableMultiplayerServersForTitle($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/EnableMultiplayerServersForTitle", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets the URL to upload assets to.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/getassetuploadurl
    /// </summary>
    public static function GetAssetUploadUrl($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetAssetUploadUrl", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets a multiplayer server build.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/getbuild
    /// </summary>
    public static function GetBuild($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetBuild", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets a multiplayer server build alias.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/getbuildalias
    /// </summary>
    public static function GetBuildAlias($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetBuildAlias", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets the credentials to the container registry.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/getcontainerregistrycredentials
    /// </summary>
    public static function GetContainerRegistryCredentials($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetContainerRegistryCredentials", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Get a match.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/matchmaking/getmatch
    /// </summary>
    public static function GetMatch($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/GetMatch", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Get a matchmaking ticket by ticket Id.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/matchmaking/getmatchmakingticket
    /// </summary>
    public static function GetMatchmakingTicket($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/GetMatchmakingTicket", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets multiplayer server session details for a build.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/getmultiplayerserverdetails
    /// </summary>
    public static function GetMultiplayerServerDetails($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetMultiplayerServerDetails", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets multiplayer server logs after a server has terminated.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/getmultiplayerserverlogs
    /// </summary>
    public static function GetMultiplayerServerLogs($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetMultiplayerServerLogs", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets multiplayer server logs after a server has terminated.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/getmultiplayersessionlogsbysessionid
    /// </summary>
    public static function GetMultiplayerSessionLogsBySessionId($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetMultiplayerSessionLogsBySessionId", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Get the statistics for a queue.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/matchmaking/getqueuestatistics
    /// </summary>
    public static function GetQueueStatistics($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/GetQueueStatistics", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets a remote login endpoint to a VM that is hosting a multiplayer server build.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/getremoteloginendpoint
    /// </summary>
    public static function GetRemoteLoginEndpoint($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetRemoteLoginEndpoint", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Get a matchmaking backfill ticket by ticket Id.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/matchmaking/getserverbackfillticket
    /// </summary>
    public static function GetServerBackfillTicket($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/GetServerBackfillTicket", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets the status of whether a title is enabled for the multiplayer server feature.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/gettitleenabledformultiplayerserversstatus
    /// </summary>
    public static function GetTitleEnabledForMultiplayerServersStatus($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetTitleEnabledForMultiplayerServersStatus", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets the quotas for a title in relation to multiplayer servers.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/gettitlemultiplayerserversquotas
    /// </summary>
    public static function GetTitleMultiplayerServersQuotas($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetTitleMultiplayerServersQuotas", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Join a matchmaking ticket.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/matchmaking/joinmatchmakingticket
    /// </summary>
    public static function JoinMatchmakingTicket($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/JoinMatchmakingTicket", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists archived multiplayer server sessions for a build.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/listarchivedmultiplayerservers
    /// </summary>
    public static function ListArchivedMultiplayerServers($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListArchivedMultiplayerServers", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists multiplayer server game assets for a title.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/listassetsummaries
    /// </summary>
    public static function ListAssetSummaries($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListAssetSummaries", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists details of all build aliases for a title. Accepts tokens for title and if game client access is enabled, allows
    /// game client to request list of builds with player entity token.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/listbuildaliases
    /// </summary>
    public static function ListBuildAliases($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListBuildAliases", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists summarized details of all multiplayer server builds for a title. Accepts tokens for title and if game client
    /// access is enabled, allows game client to request list of builds with player entity token.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/listbuildsummaries
    /// </summary>
    public static function ListBuildSummaries($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListBuildSummaries", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists multiplayer server game certificates for a title.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/listcertificatesummaries
    /// </summary>
    public static function ListCertificateSummaries($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListCertificateSummaries", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists custom container images for a title.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/listcontainerimages
    /// </summary>
    public static function ListContainerImages($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListContainerImages", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists the tags for a custom container image.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/listcontainerimagetags
    /// </summary>
    public static function ListContainerImageTags($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListContainerImageTags", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// List all matchmaking ticket Ids the user is a member of.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/matchmaking/listmatchmakingticketsforplayer
    /// </summary>
    public static function ListMatchmakingTicketsForPlayer($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/ListMatchmakingTicketsForPlayer", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists multiplayer server sessions for a build.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/listmultiplayerservers
    /// </summary>
    public static function ListMultiplayerServers($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListMultiplayerServers", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists quality of service servers for party.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/listpartyqosservers
    /// </summary>
    public static function ListPartyQosServers($titleId, $request)
    {

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListPartyQosServers", $request, null, null);
        return $result;
    }

    /// <summary>
    /// Lists quality of service servers.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/listqosservers
    /// </summary>
    public static function ListQosServers($titleId, $request)
    {

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListQosServers", $request, null, null);
        return $result;
    }

    /// <summary>
    /// Lists quality of service servers.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/listqosserversfortitle
    /// </summary>
    public static function ListQosServersForTitle($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListQosServersForTitle", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// List all server backfill ticket Ids the user is a member of.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/matchmaking/listserverbackfillticketsforplayer
    /// </summary>
    public static function ListServerBackfillTicketsForPlayer($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/ListServerBackfillTicketsForPlayer", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists virtual machines for a title.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/listvirtualmachinesummaries
    /// </summary>
    public static function ListVirtualMachineSummaries($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListVirtualMachineSummaries", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Request a multiplayer server session. Accepts tokens for title and if game client access is enabled, allows game client
    /// to request a server with player entity token.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/requestmultiplayerserver
    /// </summary>
    public static function RequestMultiplayerServer($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/RequestMultiplayerServer", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Rolls over the credentials to the container registry.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/rollovercontainerregistrycredentials
    /// </summary>
    public static function RolloverContainerRegistryCredentials($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/RolloverContainerRegistryCredentials", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Shuts down a multiplayer server session.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/shutdownmultiplayerserver
    /// </summary>
    public static function ShutdownMultiplayerServer($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ShutdownMultiplayerServer", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Untags a container image.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/untagcontainerimage
    /// </summary>
    public static function UntagContainerImage($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/UntagContainerImage", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a multiplayer server build alias.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/updatebuildalias
    /// </summary>
    public static function UpdateBuildAlias($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/UpdateBuildAlias", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Updates a multiplayer server build's region. If the region is not yet created, it will be created
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/updatebuildregion
    /// </summary>
    public static function UpdateBuildRegion($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/UpdateBuildRegion", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Updates a multiplayer server build's regions.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/updatebuildregions
    /// </summary>
    public static function UpdateBuildRegions($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/UpdateBuildRegions", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Uploads a multiplayer server game certificate.
    /// https://docs.microsoft.com/rest/api/playfab/multiplayer/multiplayerserver/uploadcertificate
    /// </summary>
    public static function UploadCertificate($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/UploadCertificate", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
