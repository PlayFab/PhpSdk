<?php
include 'PlayFabHttp.php';

class PlayFabGroupsApi
{
    /// <summary>
    /// Accepts an outstanding invitation to to join a group
    /// https://api.playfab.com/Documentation/Groups/method/AcceptGroupApplication
    /// </summary>
    public static function AcceptGroupApplication($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/AcceptGroupApplication", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Accepts an invitation to join a group
    /// https://api.playfab.com/Documentation/Groups/method/AcceptGroupInvitation
    /// </summary>
    public static function AcceptGroupInvitation($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/AcceptGroupInvitation", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Adds members to a group or role.
    /// https://api.playfab.com/Documentation/Groups/method/AddMembers
    /// </summary>
    public static function AddMembers($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/AddMembers", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Applies to join a group
    /// https://api.playfab.com/Documentation/Groups/method/ApplyToGroup
    /// </summary>
    public static function ApplyToGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ApplyToGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Blocks a list of entities from joining a group.
    /// https://api.playfab.com/Documentation/Groups/method/BlockEntity
    /// </summary>
    public static function BlockEntity($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/BlockEntity", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Changes the role membership of a list of entities from one role to another.
    /// https://api.playfab.com/Documentation/Groups/method/ChangeMemberRole
    /// </summary>
    public static function ChangeMemberRole($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ChangeMemberRole", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a new group.
    /// https://api.playfab.com/Documentation/Groups/method/CreateGroup
    /// </summary>
    public static function CreateGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/CreateGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a new group role.
    /// https://api.playfab.com/Documentation/Groups/method/CreateRole
    /// </summary>
    public static function CreateRole($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/CreateRole", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes a group and all roles, invitations, join requests, and blocks associated with it.
    /// https://api.playfab.com/Documentation/Groups/method/DeleteGroup
    /// </summary>
    public static function DeleteGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/DeleteGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes an existing role in a group.
    /// https://api.playfab.com/Documentation/Groups/method/DeleteRole
    /// </summary>
    public static function DeleteRole($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/DeleteRole", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets information about a group and its roles
    /// https://api.playfab.com/Documentation/Groups/method/GetGroup
    /// </summary>
    public static function GetGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/GetGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Invites a player to join a group
    /// https://api.playfab.com/Documentation/Groups/method/InviteToGroup
    /// </summary>
    public static function InviteToGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/InviteToGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Checks to see if an entity is a member of a group or role within the group
    /// https://api.playfab.com/Documentation/Groups/method/IsMember
    /// </summary>
    public static function IsMember($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/IsMember", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all outstanding requests to join a group
    /// https://api.playfab.com/Documentation/Groups/method/ListGroupApplications
    /// </summary>
    public static function ListGroupApplications($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListGroupApplications", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all entities blocked from joining a group
    /// https://api.playfab.com/Documentation/Groups/method/ListGroupBlocks
    /// </summary>
    public static function ListGroupBlocks($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListGroupBlocks", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all outstanding invitations for a group
    /// https://api.playfab.com/Documentation/Groups/method/ListGroupInvitations
    /// </summary>
    public static function ListGroupInvitations($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListGroupInvitations", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all members for a group
    /// https://api.playfab.com/Documentation/Groups/method/ListGroupMembers
    /// </summary>
    public static function ListGroupMembers($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListGroupMembers", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all groups and roles for an entity
    /// https://api.playfab.com/Documentation/Groups/method/ListMembership
    /// </summary>
    public static function ListMembership($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListMembership", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all outstanding invitations and group applications for an entity
    /// https://api.playfab.com/Documentation/Groups/method/ListMembershipOpportunities
    /// </summary>
    public static function ListMembershipOpportunities($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListMembershipOpportunities", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Removes an application to join a group
    /// https://api.playfab.com/Documentation/Groups/method/RemoveGroupApplication
    /// </summary>
    public static function RemoveGroupApplication($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/RemoveGroupApplication", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Removes an invitation join a group
    /// https://api.playfab.com/Documentation/Groups/method/RemoveGroupInvitation
    /// </summary>
    public static function RemoveGroupInvitation($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/RemoveGroupInvitation", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Removes members from a group.
    /// https://api.playfab.com/Documentation/Groups/method/RemoveMembers
    /// </summary>
    public static function RemoveMembers($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/RemoveMembers", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Unblocks a list of entities from joining a group
    /// https://api.playfab.com/Documentation/Groups/method/UnblockEntity
    /// </summary>
    public static function UnblockEntity($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/UnblockEntity", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Updates non-membership data about a group.
    /// https://api.playfab.com/Documentation/Groups/method/UpdateGroup
    /// </summary>
    public static function UpdateGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/UpdateGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Updates metadata about a role.
    /// https://api.playfab.com/Documentation/Groups/method/UpdateRole
    /// </summary>
    public static function UpdateRole($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/UpdateRole", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
