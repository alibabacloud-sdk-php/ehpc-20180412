<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommandsResponseBody\commands;

use AlibabaCloud\Tea\Model;

class command extends Model
{
    /**
     * @description The content of the command.
     *
     * @example echo "hello world"
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The ID of the command.
     *
     * @example c-hz01v8vudql****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The timeout period. Unit: seconds.
     *
     * @example 60
     *
     * @var string
     */
    public $timeout;

    /**
     * @description The working directory of the command.
     *
     * @example /root
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'commandContent' => 'CommandContent',
        'commandId'      => 'CommandId',
        'timeout'        => 'Timeout',
        'workingDir'     => 'WorkingDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
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
     * @return command
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
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
