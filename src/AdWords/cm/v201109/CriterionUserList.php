<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Criterion;


class CriterionUserList extends Criterion
{
    /**
     * Id of this user list. This is a required field.
     * This field can be selected using the value &quot;UserListId&quot;.
     * @var string
     */
    public $userListId;
    /**
     * This field can be selected using the value &quot;UserListName&quot;.
     * @var string
     */
    public $userListName;
    /**
     * This field can be selected using the value &quot;UserListMembershipStatus&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\CriterionUserListMembershipStatus
     */
    public $userListMembershipStatus;
}