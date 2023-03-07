<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\InspectImageResponseBody\imageStatus;
use AlibabaCloud\Tea\Model;

class InspectImageResponseBody extends Model
{
    /**
     * @description The status of the image.
     *
     * @var imageStatus
     */
    public $imageStatus;

    /**
     * @description The ID of the request.
     *
     * @example 896D338C-E4F4-41EC-A154-D605E5DE****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageStatus' => 'ImageStatus',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageStatus) {
            $res['ImageStatus'] = null !== $this->imageStatus ? $this->imageStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InspectImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageStatus'])) {
            $model->imageStatus = imageStatus::fromMap($map['ImageStatus']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
