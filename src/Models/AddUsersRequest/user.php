<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\AddUsersRequest;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @example users
     *
     * @var string
     */
    public $group;

    /**
     * @example user1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1@a2****
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'group'    => 'Group',
        'name'     => 'Name',
        'password' => 'Password',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
