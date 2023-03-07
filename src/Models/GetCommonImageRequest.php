<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetCommonImageRequest extends Model
{
    /**
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example singularity
     *
     * @var string
     */
    public $containType;

    /**
     * @example tensorflow-21.09-tf1-py3.sif
     *
     * @var string
     */
    public $imageName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'containType' => 'ContainType',
        'imageName'   => 'ImageName',
        'regionId'    => 'RegionId',
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
        if (null !== $this->containType) {
            $res['ContainType'] = $this->containType;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCommonImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ContainType'])) {
            $model->containType = $map['ContainType'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
