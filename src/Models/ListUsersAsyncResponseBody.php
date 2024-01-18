<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListUsersAsyncResponseBody\users;
use AlibabaCloud\Tea\Model;

class ListUsersAsyncResponseBody extends Model
{
    /**
     * @description The ID of the asynchronous task.
     *
     * @example t-sh03egi3mls****
     *
     * @var string
     */
    public $asyncId;

    /**
     * @description The status of the asynchronous task.
     *
     * @example Success
     *
     * @var string
     */
    public $asyncStatus;

    /**
     * @description The number of the page returned. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 9A05F620-ED46-4A57-95F1-C67D6D3C5DD2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of users.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The list of users.
     *
     * @var users
     */
    public $users;
    protected $_name = [
        'asyncId'     => 'AsyncId',
        'asyncStatus' => 'AsyncStatus',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
        'users'       => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncId) {
            $res['AsyncId'] = $this->asyncId;
        }
        if (null !== $this->asyncStatus) {
            $res['AsyncStatus'] = $this->asyncStatus;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->users) {
            $res['Users'] = null !== $this->users ? $this->users->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUsersAsyncResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncId'])) {
            $model->asyncId = $map['AsyncId'];
        }
        if (isset($map['AsyncStatus'])) {
            $model->asyncStatus = $map['AsyncStatus'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Users'])) {
            $model->users = users::fromMap($map['Users']);
        }

        return $model;
    }
}
