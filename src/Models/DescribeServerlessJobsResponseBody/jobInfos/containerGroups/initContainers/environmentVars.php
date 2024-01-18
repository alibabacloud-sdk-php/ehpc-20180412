<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\initContainers;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\initContainers\environmentVars\valueFrom;
use AlibabaCloud\Tea\Model;

class environmentVars extends Model
{
    /**
     * @description The name of the environment variable.
     *
     * @example PATH
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the environment variable.
     *
     * @example /usr/local/bin
     *
     * @var string
     */
    public $value;

    /**
     * @description The source of the environment variable value. This parameter can be used only when the variable value is not specified.
     *
     * @var valueFrom
     */
    public $valueFrom;
    protected $_name = [
        'key'       => 'Key',
        'value'     => 'Value',
        'valueFrom' => 'ValueFrom',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueFrom) {
            $res['ValueFrom'] = null !== $this->valueFrom ? $this->valueFrom->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return environmentVars
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueFrom'])) {
            $model->valueFrom = valueFrom::fromMap($map['ValueFrom']);
        }

        return $model;
    }
}
