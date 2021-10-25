<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListImagesResponseBody\osTags;
use AlibabaCloud\Tea\Model;

class ListImagesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var osTags
     */
    public $osTags;
    protected $_name = [
        'requestId' => 'RequestId',
        'osTags'    => 'OsTags',
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
        if (null !== $this->osTags) {
            $res['OsTags'] = null !== $this->osTags ? $this->osTags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListImagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OsTags'])) {
            $model->osTags = osTags::fromMap($map['OsTags']);
        }

        return $model;
    }
}
