<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesResponseBody\queues;
use AlibabaCloud\Tea\Model;

class ListQueuesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var queues[]
     */
    public $queues;
    protected $_name = [
        'requestId' => 'RequestId',
        'queues'    => 'Queues',
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
        if (null !== $this->queues) {
            $res['Queues'] = [];
            if (null !== $this->queues && \is_array($this->queues)) {
                $n = 0;
                foreach ($this->queues as $item) {
                    $res['Queues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQueuesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Queues'])) {
            if (!empty($map['Queues'])) {
                $model->queues = [];
                $n             = 0;
                foreach ($map['Queues'] as $item) {
                    $model->queues[$n++] = null !== $item ? queues::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
