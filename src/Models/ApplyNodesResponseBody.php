<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesResponseBody\instanceIds;
use AlibabaCloud\Tea\Model;

class ApplyNodesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $satisfiedAmount;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var instanceIds
     */
    public $instanceIds;
    protected $_name = [
        'requestId'       => 'RequestId',
        'satisfiedAmount' => 'SatisfiedAmount',
        'taskId'          => 'TaskId',
        'detail'          => 'Detail',
        'instanceIds'     => 'InstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->satisfiedAmount) {
            $res['SatisfiedAmount'] = $this->satisfiedAmount;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SatisfiedAmount'])) {
            $model->satisfiedAmount = $map['SatisfiedAmount'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
        }

        return $model;
    }
}
