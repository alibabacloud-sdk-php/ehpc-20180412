<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\InvokeShellCommandRequest\instance;
use AlibabaCloud\Tea\Model;

class InvokeShellCommandRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $command;

    /**
     * @var instance[]
     */
    public $instance;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'command'    => 'Command',
        'instance'   => 'Instance',
        'timeout'    => 'Timeout',
        'workingDir' => 'WorkingDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->instance) {
            $res['Instance'] = [];
            if (null !== $this->instance && \is_array($this->instance)) {
                $n = 0;
                foreach ($this->instance as $item) {
                    $res['Instance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeShellCommandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['Instance'])) {
            if (!empty($map['Instance'])) {
                $model->instance = [];
                $n               = 0;
                foreach ($map['Instance'] as $item) {
                    $model->instance[$n++] = null !== $item ? instance::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
