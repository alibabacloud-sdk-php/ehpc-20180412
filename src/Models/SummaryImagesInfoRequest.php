<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class SummaryImagesInfoRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example ehpc-hz-ibug699XXX
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The detailed information about the image.
     *
     * @example singularity
     *
     * @var string
     */
    public $containerType;

    /**
     * @example test.sif
     *
     * @var string
     */
    public $imageName;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'containerType' => 'ContainerType',
        'imageName'     => 'ImageName',
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
        if (null !== $this->containerType) {
            $res['ContainerType'] = $this->containerType;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SummaryImagesInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ContainerType'])) {
            $model->containerType = $map['ContainerType'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        return $model;
    }
}
