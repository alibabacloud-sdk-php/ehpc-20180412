<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListPreferredEcsTypesRequest extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $instanceChargeType;
    protected $_name = [
        'zoneId'             => 'ZoneId',
        'spotStrategy'       => 'SpotStrategy',
        'instanceChargeType' => 'InstanceChargeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPreferredEcsTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        return $model;
    }
}
