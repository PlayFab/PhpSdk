<?php
include 'PlayFabHttp.php';

class PlayFabGroupsApi
{
    /// <summary>
    /// Accepts an outstanding invitation to to join a group
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/acceptgroupapplication
    /// </summary>
    public static function AcceptGroupApplication($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/AcceptGroupApplication", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Accepts an invitation to join a group
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/acceptgroupinvitation
    /// </summary>
    public static function AcceptGroupInvitation($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/AcceptGroupInvitation", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Adds members to a group or role.
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/addmembers
    /// </summary>
    public static function AddMembers($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/AddMembers", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Applies to join a group
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/applytogroup
    /// </summary>
    public static function ApplyToGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ApplyToGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Blocks a list of entities from joining a group.
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/blockentity
    /// </summary>
    public static function BlockEntity($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/BlockEntity", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Changes the role membership of a list of entities from one role to another.
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/changememberrole
    /// </summary>
    public static function ChangeMemberRole($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ChangeMemberRole", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a new group.
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/creategroup
    /// </summary>
    public static function CreateGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/CreateGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Creates a new group role.
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/createrole
    /// </summary>
    public static function CreateRole($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/CreateRole", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes a group and all roles, invitations, join requests, and blocks associated with it.
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/deletegroup
    /// </summary>
    public static function DeleteGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/DeleteGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Deletes an existing role in a group.
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/deleterole
    /// </summary>
    public static function DeleteRole($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/DeleteRole", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Gets information about a group and its roles
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/getgroup
    /// </summary>
    public static function GetGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/GetGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Invites a player to join a group
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/invitetogroup
    /// </summary>
    public static function InviteToGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/InviteToGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Checks to see if an entity is a member of a group or role within the group
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/ismember
    /// </summary>
    public static function IsMember($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/IsMember", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all outstanding requests to join a group
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/listgroupapplications
    /// </summary>
    public static function ListGroupApplications($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListGroupApplications", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all entities blocked from joining a group
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/listgroupblocks
    /// </summary>
    public static function ListGroupBlocks($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListGroupBlocks", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all outstanding invitations for a group
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/listgroupinvitations
    /// </summary>
    public static function ListGroupInvitations($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListGroupInvitations", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all members for a group
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/listgroupmembers
    /// </summary>
    public static function ListGroupMembers($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListGroupMembers", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all groups and roles for an entity
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/listmembership
    /// </summary>
    public static function ListMembership($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListMembership", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Lists all outstanding invitations and group applications for an entity
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/listmembershipopportunities
    /// </summary>
    public static function ListMembershipOpportunities($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/ListMembershipOpportunities", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Removes an application to join a group
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/removegroupapplication
    /// </summary>
    public static function RemoveGroupApplication($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/RemoveGroupApplication", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Removes an invitation join a group
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/removegroupinvitation
    /// </summary>
    public static function RemoveGroupInvitation($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/RemoveGroupInvitation", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Removes members from a group.
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/removemembers
    /// </summary>
    public static function RemoveMembers($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/RemoveMembers", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Unblocks a list of entities from joining a group
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/unblockentity
    /// </summary>
    public static function UnblockEntity($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/UnblockEntity", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Updates non-membership data about a group.
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/updategroup
    /// </summary>
    public static function UpdateGroup($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/UpdateGroup", $request, "X-EntityToken", $entityToken);
        return $result;
    }

    /// <summary>
    /// Updates metadata about a role.
    /// https://docs.microsoft.com/rest/api/playfab/groups/groups/updaterole
    /// </summary>
    public static function UpdateRole($titleId, $entityToken, $request)
    {
        //TODO: Check the entityToken

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Group/UpdateRole", $request, "X-EntityToken", $entityToken);
        return $result;
    }

}
?>
