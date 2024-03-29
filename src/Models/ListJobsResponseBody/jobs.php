<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsResponseBody\jobs\jobInfo;
use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @var jobInfo[]
     */
    public $jobInfo;
    protected $_name = [
        'jobInfo' => 'JobInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobInfo) {
            $res['JobInfo'] = [];
            if (null !== $this->jobInfo && \is_array($this->jobInfo)) {
                $n = 0;
                foreach ($this->jobInfo as $item) {
                    $res['JobInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobInfo'])) {
            if (!empty($map['JobInfo'])) {
                $model->jobInfo = [];
                $n              = 0;
                foreach ($map['JobInfo'] as $item) {
                    $model->jobInfo[$n++] = null !== $item ? jobInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
