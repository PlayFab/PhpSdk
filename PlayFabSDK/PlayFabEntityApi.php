<?php
include 'PlayFabHttp.php';

class PlayFabEntityApi
{
    /// <summary>
    /// Abort pending file uploads to an entity's profile.
    /// https://api.playfab.com/Documentation/Entity/method/AbortFileUploads
    /// </summary>
    public static function AbortFileUploads($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/File/AbortFileUploads", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Accepts an outstanding invitation to to join a group
    /// https://api.playfab.com/Documentation/Entity/method/AcceptGroupApplication
    /// </summary>
    public static function AcceptGroupApplication($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/AcceptGroupApplication", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Accepts an invitation to join a group
    /// https://api.playfab.com/Documentation/Entity/method/AcceptGroupInvitation
    /// </summary>
    public static function AcceptGroupInvitation($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/AcceptGroupInvitation", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Adds members to a group or role.
    /// https://api.playfab.com/Documentation/Entity/method/AddMembers
    /// </summary>
    public static function AddMembers($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/AddMembers", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Applies to join a group
    /// https://api.playfab.com/Documentation/Entity/method/ApplyToGroup
    /// </summary>
    public static function ApplyToGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ApplyToGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Blocks a list of entities from joining a group.
    /// https://api.playfab.com/Documentation/Entity/method/BlockEntity
    /// </summary>
    public static function BlockEntity($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/BlockEntity", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Changes the role membership of a list of entities from one role to another.
    /// https://api.playfab.com/Documentation/Entity/method/ChangeMemberRole
    /// </summary>
    public static function ChangeMemberRole($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ChangeMemberRole", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a new group.
    /// https://api.playfab.com/Documentation/Entity/method/CreateGroup
    /// </summary>
    public static function CreateGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/CreateGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a new group role.
    /// https://api.playfab.com/Documentation/Entity/method/CreateRole
    /// </summary>
    public static function CreateRole($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/CreateRole", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Delete files on an entity's profile.
    /// https://api.playfab.com/Documentation/Entity/method/DeleteFiles
    /// </summary>
    public static function DeleteFiles($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/File/DeleteFiles", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes a group and all roles, invitations, join requests, and blocks associated with it.
    /// https://api.playfab.com/Documentation/Entity/method/DeleteGroup
    /// </summary>
    public static function DeleteGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/DeleteGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes an existing role in a group.
    /// https://api.playfab.com/Documentation/Entity/method/DeleteRole
    /// </summary>
    public static function DeleteRole($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/DeleteRole", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Finalize file uploads to an entity's profile.
    /// https://api.playfab.com/Documentation/Entity/method/FinalizeFileUploads
    /// </summary>
    public static function FinalizeFileUploads($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/File/FinalizeFileUploads", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Method to exchange a legacy AuthenticationTicket or title SecretKey for an Entity Token or to refresh a still valid
    /// Entity Token.
    /// https://api.playfab.com/Documentation/Entity/method/GetEntityToken
    /// </summary>
    public static function GetEntityToken($titleId, $entityToken, $clientSessionTicket, $developerSecreteKey, $request)
    {
        if (!is_null($entityToken)) { $authKey = "X-EntityToken"; $authValue = $entityToken; }
        elseif (!is_null($clientSessionTicket)) { $authKey = "X-Authentication"; $authValue = $clientSessionTicket; }
        elseif (!is_null($developerSecreteKey)) { $authKey = "X-SecretKey"; $authValue = $developerSecreteKey; }

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Authentication/GetEntityToken", $request, $authKey, $authValue);
        return $result;
    }

    /// <summary>
    /// Method to exchange a legacy AuthenticationTicket or title SecretKey for an Entity Token or to refresh a still valid
    /// Entity Token.
    /// https://api.playfab.com/Documentation/Entity/method/GetEntityToken
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
    /// https://api.playfab.com/Documentation/Entity/method/GetEntityToken
    /// </summary>
    public static function GetEntityTokenWithSessionTicket($titleId, $clientSessionTicket, $request)
    {
        //TODO: Check the sessionTicket

        $result = PlayFabHttp::GetEntityToken($titleId, "/Authentication/GetEntityToken", $request, "X-Authentication", $clientSessionTicket);
        return $result;
    }

    /// <summary>
    /// Method to exchange a legacy AuthenticationTicket or title SecretKey for an Entity Token or to refresh a still valid
    /// Entity Token.
    /// https://api.playfab.com/Documentation/Entity/method/GetEntityToken
    /// </summary>
    public static function GetEntityTokenWithSecretKey($titleId, $developerSecreteKey, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::GetEntityToken($titleId, "/Authentication/GetEntityToken", $request, "X-SecretKey", $developerSecreteKey);
        return $result;
    }

    /// <summary>
    /// Retrieves file metadata from an entity's profile.
    /// https://api.playfab.com/Documentation/Entity/method/GetFiles
    /// </summary>
    public static function GetFiles($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/File/GetFiles", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets the global title access policy
    /// https://api.playfab.com/Documentation/Entity/method/GetGlobalPolicy
    /// </summary>
    public static function GetGlobalPolicy($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/GetGlobalPolicy", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets information about a group and its roles
    /// https://api.playfab.com/Documentation/Entity/method/GetGroup
    /// </summary>
    public static function GetGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/GetGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Retrieves objects from an entity's profile.
    /// https://api.playfab.com/Documentation/Entity/method/GetObjects
    /// </summary>
    public static function GetObjects($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Object/GetObjects", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Retrieves the entity's profile.
    /// https://api.playfab.com/Documentation/Entity/method/GetProfile
    /// </summary>
    public static function GetProfile($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/GetProfile", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Initiates file uploads to an entity's profile.
    /// https://api.playfab.com/Documentation/Entity/method/InitiateFileUploads
    /// </summary>
    public static function InitiateFileUploads($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/File/InitiateFileUploads", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Invites a player to join a group
    /// https://api.playfab.com/Documentation/Entity/method/InviteToGroup
    /// </summary>
    public static function InviteToGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/InviteToGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Checks to see if an entity is a member of a group or role within the group
    /// https://api.playfab.com/Documentation/Entity/method/IsMember
    /// </summary>
    public static function IsMember($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/IsMember", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all outstanding requests to join a group
    /// https://api.playfab.com/Documentation/Entity/method/ListGroupApplications
    /// </summary>
    public static function ListGroupApplications($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListGroupApplications", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all entities blocked from joining a group
    /// https://api.playfab.com/Documentation/Entity/method/ListGroupBlocks
    /// </summary>
    public static function ListGroupBlocks($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListGroupBlocks", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all outstanding invitations for a group
    /// https://api.playfab.com/Documentation/Entity/method/ListGroupInvitations
    /// </summary>
    public static function ListGroupInvitations($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListGroupInvitations", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all members for a group
    /// https://api.playfab.com/Documentation/Entity/method/ListGroupMembers
    /// </summary>
    public static function ListGroupMembers($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListGroupMembers", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all groups and roles for an entity
    /// https://api.playfab.com/Documentation/Entity/method/ListMembership
    /// </summary>
    public static function ListMembership($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListMembership", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all outstanding invitations and group applications for an entity
    /// https://api.playfab.com/Documentation/Entity/method/ListMembershipOpportunities
    /// </summary>
    public static function ListMembershipOpportunities($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListMembershipOpportunities", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Removes an application to join a group
    /// https://api.playfab.com/Documentation/Entity/method/RemoveGroupApplication
    /// </summary>
    public static function RemoveGroupApplication($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/RemoveGroupApplication", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Removes an invitation join a group
    /// https://api.playfab.com/Documentation/Entity/method/RemoveGroupInvitation
    /// </summary>
    public static function RemoveGroupInvitation($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/RemoveGroupInvitation", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Removes members from a group.
    /// https://api.playfab.com/Documentation/Entity/method/RemoveMembers
    /// </summary>
    public static function RemoveMembers($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/RemoveMembers", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Sets the global title access policy
    /// https://api.playfab.com/Documentation/Entity/method/SetGlobalPolicy
    /// </summary>
    public static function SetGlobalPolicy($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/SetGlobalPolicy", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Sets objects on an entity's profile.
    /// https://api.playfab.com/Documentation/Entity/method/SetObjects
    /// </summary>
    public static function SetObjects($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Object/SetObjects", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Sets the profiles access policy
    /// https://api.playfab.com/Documentation/Entity/method/SetProfilePolicy
    /// </summary>
    public static function SetProfilePolicy($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Profile/SetProfilePolicy", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Unblocks a list of entities from joining a group
    /// https://api.playfab.com/Documentation/Entity/method/UnblockEntity
    /// </summary>
    public static function UnblockEntity($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/UnblockEntity", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Updates non-membership data about a group.
    /// https://api.playfab.com/Documentation/Entity/method/UpdateGroup
    /// </summary>
    public static function UpdateGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/UpdateGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Updates metadata about a role.
    /// https://api.playfab.com/Documentation/Entity/method/UpdateRole
    /// </summary>
    public static function UpdateRole($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/UpdateRole", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
