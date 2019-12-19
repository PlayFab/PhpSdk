<?php
include 'PlayFabHttp.php';

class PlayFabMultiplayerApi
{
    /// <summary>
    /// Cancel all active tickets the player is a member of in a given queue.
    /// https://api.playfab.com/Documentation/Multiplayer/method/CancelAllMatchmakingTicketsForPlayer
    /// </summary>
    public static function CancelAllMatchmakingTicketsForPlayer($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/CancelAllMatchmakingTicketsForPlayer", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Cancel a matchmaking ticket.
    /// https://api.playfab.com/Documentation/Multiplayer/method/CancelMatchmakingTicket
    /// </summary>
    public static function CancelMatchmakingTicket($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/CancelMatchmakingTicket", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a multiplayer server build alias.
    /// https://api.playfab.com/Documentation/Multiplayer/method/CreateBuildAlias
    /// </summary>
    public static function CreateBuildAlias($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/CreateBuildAlias", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a multiplayer server build with a custom container.
    /// https://api.playfab.com/Documentation/Multiplayer/method/CreateBuildWithCustomContainer
    /// </summary>
    public static function CreateBuildWithCustomContainer($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/CreateBuildWithCustomContainer", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a multiplayer server build with a managed container.
    /// https://api.playfab.com/Documentation/Multiplayer/method/CreateBuildWithManagedContainer
    /// </summary>
    public static function CreateBuildWithManagedContainer($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/CreateBuildWithManagedContainer", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Create a matchmaking ticket as a client.
    /// https://api.playfab.com/Documentation/Multiplayer/method/CreateMatchmakingTicket
    /// </summary>
    public static function CreateMatchmakingTicket($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/CreateMatchmakingTicket", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a remote user to log on to a VM for a multiplayer server build.
    /// https://api.playfab.com/Documentation/Multiplayer/method/CreateRemoteUser
    /// </summary>
    public static function CreateRemoteUser($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/CreateRemoteUser", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Create a matchmaking ticket as a server. The matchmaking service automatically starts matching the ticket against other
    /// matchmaking tickets.
    /// https://api.playfab.com/Documentation/Multiplayer/method/CreateServerMatchmakingTicket
    /// </summary>
    public static function CreateServerMatchmakingTicket($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/CreateServerMatchmakingTicket", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes a multiplayer server game asset for a title.
    /// https://api.playfab.com/Documentation/Multiplayer/method/DeleteAsset
    /// </summary>
    public static function DeleteAsset($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/DeleteAsset", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes a multiplayer server build.
    /// https://api.playfab.com/Documentation/Multiplayer/method/DeleteBuild
    /// </summary>
    public static function DeleteBuild($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/DeleteBuild", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes a multiplayer server build alias.
    /// https://api.playfab.com/Documentation/Multiplayer/method/DeleteBuildAlias
    /// </summary>
    public static function DeleteBuildAlias($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/DeleteBuildAlias", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes a multiplayer server game certificate.
    /// https://api.playfab.com/Documentation/Multiplayer/method/DeleteCertificate
    /// </summary>
    public static function DeleteCertificate($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/DeleteCertificate", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes a remote user to log on to a VM for a multiplayer server build.
    /// https://api.playfab.com/Documentation/Multiplayer/method/DeleteRemoteUser
    /// </summary>
    public static function DeleteRemoteUser($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/DeleteRemoteUser", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Enables the multiplayer server feature for a title.
    /// https://api.playfab.com/Documentation/Multiplayer/method/EnableMultiplayerServersForTitle
    /// </summary>
    public static function EnableMultiplayerServersForTitle($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/EnableMultiplayerServersForTitle", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets the URL to upload assets to.
    /// https://api.playfab.com/Documentation/Multiplayer/method/GetAssetUploadUrl
    /// </summary>
    public static function GetAssetUploadUrl($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetAssetUploadUrl", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets a multiplayer server build.
    /// https://api.playfab.com/Documentation/Multiplayer/method/GetBuild
    /// </summary>
    public static function GetBuild($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetBuild", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets a multiplayer server build alias.
    /// https://api.playfab.com/Documentation/Multiplayer/method/GetBuildAlias
    /// </summary>
    public static function GetBuildAlias($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetBuildAlias", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets the credentials to the container registry.
    /// https://api.playfab.com/Documentation/Multiplayer/method/GetContainerRegistryCredentials
    /// </summary>
    public static function GetContainerRegistryCredentials($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetContainerRegistryCredentials", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Get a match.
    /// https://api.playfab.com/Documentation/Multiplayer/method/GetMatch
    /// </summary>
    public static function GetMatch($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/GetMatch", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Get a matchmaking ticket by ticket Id.
    /// https://api.playfab.com/Documentation/Multiplayer/method/GetMatchmakingTicket
    /// </summary>
    public static function GetMatchmakingTicket($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/GetMatchmakingTicket", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets multiplayer server session details for a build.
    /// https://api.playfab.com/Documentation/Multiplayer/method/GetMultiplayerServerDetails
    /// </summary>
    public static function GetMultiplayerServerDetails($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetMultiplayerServerDetails", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets multiplayer server logs after a server has terminated.
    /// https://api.playfab.com/Documentation/Multiplayer/method/GetMultiplayerServerLogs
    /// </summary>
    public static function GetMultiplayerServerLogs($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetMultiplayerServerLogs", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Get the statistics for a queue.
    /// https://api.playfab.com/Documentation/Multiplayer/method/GetQueueStatistics
    /// </summary>
    public static function GetQueueStatistics($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/GetQueueStatistics", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets a remote login endpoint to a VM that is hosting a multiplayer server build.
    /// https://api.playfab.com/Documentation/Multiplayer/method/GetRemoteLoginEndpoint
    /// </summary>
    public static function GetRemoteLoginEndpoint($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetRemoteLoginEndpoint", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets the status of whether a title is enabled for the multiplayer server feature.
    /// https://api.playfab.com/Documentation/Multiplayer/method/GetTitleEnabledForMultiplayerServersStatus
    /// </summary>
    public static function GetTitleEnabledForMultiplayerServersStatus($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetTitleEnabledForMultiplayerServersStatus", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets the quotas for a title in relation to multiplayer servers.
    /// https://api.playfab.com/Documentation/Multiplayer/method/GetTitleMultiplayerServersQuotas
    /// </summary>
    public static function GetTitleMultiplayerServersQuotas($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/GetTitleMultiplayerServersQuotas", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Join a matchmaking ticket.
    /// https://api.playfab.com/Documentation/Multiplayer/method/JoinMatchmakingTicket
    /// </summary>
    public static function JoinMatchmakingTicket($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/JoinMatchmakingTicket", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists archived multiplayer server sessions for a build.
    /// https://api.playfab.com/Documentation/Multiplayer/method/ListArchivedMultiplayerServers
    /// </summary>
    public static function ListArchivedMultiplayerServers($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListArchivedMultiplayerServers", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists multiplayer server game assets for a title.
    /// https://api.playfab.com/Documentation/Multiplayer/method/ListAssetSummaries
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
    /// https://api.playfab.com/Documentation/Multiplayer/method/ListBuildAliases
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
    /// https://api.playfab.com/Documentation/Multiplayer/method/ListBuildSummaries
    /// </summary>
    public static function ListBuildSummaries($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListBuildSummaries", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists multiplayer server game certificates for a title.
    /// https://api.playfab.com/Documentation/Multiplayer/method/ListCertificateSummaries
    /// </summary>
    public static function ListCertificateSummaries($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListCertificateSummaries", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists custom container images for a title.
    /// https://api.playfab.com/Documentation/Multiplayer/method/ListContainerImages
    /// </summary>
    public static function ListContainerImages($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListContainerImages", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists the tags for a custom container image.
    /// https://api.playfab.com/Documentation/Multiplayer/method/ListContainerImageTags
    /// </summary>
    public static function ListContainerImageTags($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListContainerImageTags", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// List all matchmaking ticket Ids the user is a member of.
    /// https://api.playfab.com/Documentation/Multiplayer/method/ListMatchmakingTicketsForPlayer
    /// </summary>
    public static function ListMatchmakingTicketsForPlayer($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Match/ListMatchmakingTicketsForPlayer", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists multiplayer server sessions for a build.
    /// https://api.playfab.com/Documentation/Multiplayer/method/ListMultiplayerServers
    /// </summary>
    public static function ListMultiplayerServers($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListMultiplayerServers", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists quality of service servers for party.
    /// https://api.playfab.com/Documentation/Multiplayer/method/ListPartyQosServers
    /// </summary>
    public static function ListPartyQosServers($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListPartyQosServers", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists quality of service servers.
    /// https://api.playfab.com/Documentation/Multiplayer/method/ListQosServers
    /// </summary>
    public static function ListQosServers($titleId, $request)
    {

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListQosServers", $request, null, null);
        return $result;
    }

    /// <summary>
    /// Lists quality of service servers.
    /// https://api.playfab.com/Documentation/Multiplayer/method/ListQosServersForTitle
    /// </summary>
    public static function ListQosServersForTitle($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ListQosServersForTitle", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists virtual machines for a title.
    /// https://api.playfab.com/Documentation/Multiplayer/method/ListVirtualMachineSummaries
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
    /// https://api.playfab.com/Documentation/Multiplayer/method/RequestMultiplayerServer
    /// </summary>
    public static function RequestMultiplayerServer($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/RequestMultiplayerServer", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Rolls over the credentials to the container registry.
    /// https://api.playfab.com/Documentation/Multiplayer/method/RolloverContainerRegistryCredentials
    /// </summary>
    public static function RolloverContainerRegistryCredentials($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/RolloverContainerRegistryCredentials", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Shuts down a multiplayer server session.
    /// https://api.playfab.com/Documentation/Multiplayer/method/ShutdownMultiplayerServer
    /// </summary>
    public static function ShutdownMultiplayerServer($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/ShutdownMultiplayerServer", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Untags a container image.
    /// https://api.playfab.com/Documentation/Multiplayer/method/UntagContainerImage
    /// </summary>
    public static function UntagContainerImage($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/UntagContainerImage", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a multiplayer server build alias.
    /// https://api.playfab.com/Documentation/Multiplayer/method/UpdateBuildAlias
    /// </summary>
    public static function UpdateBuildAlias($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/UpdateBuildAlias", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Updates a multiplayer server build's regions.
    /// https://api.playfab.com/Documentation/Multiplayer/method/UpdateBuildRegions
    /// </summary>
    public static function UpdateBuildRegions($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/UpdateBuildRegions", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Uploads a multiplayer server game certificate.
    /// https://api.playfab.com/Documentation/Multiplayer/method/UploadCertificate
    /// </summary>
    public static function UploadCertificate($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/MultiplayerServer/UploadCertificate", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
