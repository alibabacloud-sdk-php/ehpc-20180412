<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class StopJobsRequest extends Model
{
    /**
     * @description Specifies whether to use an asynchronous link to stop the job.
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $async;

    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The list of jobs that you want to stop. Maximum number of jobs: 100. Minimum number of jobs: 1.
     *
     * Format: `[{"Id": "0.sched****"},{"Id": "1.sched****"}]`. Separate multiple jobs with commas (,).
     *
     * >  You can stop only jobs that are in the RUNNING or QUEUED state.
     * @example [{"Id":"1.sched****"},{"Id":"0.sched****"}]
     *
     * @var string
     */
    public $jobs;
    protected $_name = [
        'async'     => 'Async',
        'clusterId' => 'ClusterId',
        'jobs'      => 'Jobs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->jobs) {
            $res['Jobs'] = $this->jobs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Jobs'])) {
            $model->jobs = $map['Jobs'];
        }

        return $model;
    }
}
