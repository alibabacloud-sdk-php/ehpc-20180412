<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetSchedulerInfoRequest;

use AlibabaCloud\Tea\Model;

class scheduler extends Model
{
    /**
     * @description The name of the scheduler. Valid values:
     *
     *   pbs
     *   pbs19
     *   slurm
     *   slurm19
     *   slurm20
     *
     * Valid values of N: 0 to 100
     * @example pbs
     *
     * @var string
     */
    public $schedName;
    protected $_name = [
        'schedName' => 'SchedName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedName) {
            $res['SchedName'] = $this->schedName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduler
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SchedName'])) {
            $model->schedName = $map['SchedName'];
        }

        return $model;
    }
}
