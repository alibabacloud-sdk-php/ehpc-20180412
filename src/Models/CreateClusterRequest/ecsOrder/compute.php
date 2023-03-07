<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\ecsOrder;

use AlibabaCloud\Tea\Model;

class compute extends Model
{
    /**
     * @description The number of the compute nodes. Valid values: 1 to 99.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The instance type of the compute nodes.
     *
     * You can call the [ListPreferredEcsTypes](~~188592~~) operation to query the recommended instance types.
     * @example ecs.n1.tiny
     *
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'count'        => 'Count',
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return compute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
