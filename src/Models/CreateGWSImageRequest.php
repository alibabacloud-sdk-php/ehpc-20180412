<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class CreateGWSImageRequest extends Model
{
    /**
     * @description The ID of the visualization instance.
     *
     * @example i-bp66guhybgtrftpa1****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The image name of the visualization instance.
     *
     * @example EHPC-TEST
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'name'       => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGWSImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
