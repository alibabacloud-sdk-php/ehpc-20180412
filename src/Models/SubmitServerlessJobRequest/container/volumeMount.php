<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\container;

use AlibabaCloud\Tea\Model;

class volumeMount extends Model
{
    /**
     * @description The driver type when you use the FlexVolume plug-in to mount the volume. Valid values:
     *
     *   alicloud/nas: a NAS driver.
     *   alicloud/oss: an OSS driver.
     *
     * @example alicloud/oss
     *
     * @var string
     */
    public $flexVolumeDriver;

    /**
     * @description The options when you set the Type parameter to FlexVolume. Each option is a key-value pair in a JSON string.
     *
     * @example \"{"bucket":"hpctest","url": "oss-cn-hangzhou-internal.aliyuncs.com
     * ","path":"/data","ramRole":"AliyunECSInstanceForEHPCRole"}\"
     * @var string
     */
    public $flexVolumeOptions;

    /**
     * @description The directory to which the volume is mounted.
     *
     * >  The data stored in this directory is overwritten by the data on the volume. Specify the parameter with caution.
     * @example /data
     *
     * @var string
     */
    public $mountPath;
    protected $_name = [
        'flexVolumeDriver'  => 'FlexVolumeDriver',
        'flexVolumeOptions' => 'FlexVolumeOptions',
        'mountPath'         => 'MountPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flexVolumeDriver) {
            $res['FlexVolumeDriver'] = $this->flexVolumeDriver;
        }
        if (null !== $this->flexVolumeOptions) {
            $res['FlexVolumeOptions'] = $this->flexVolumeOptions;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volumeMount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlexVolumeDriver'])) {
            $model->flexVolumeDriver = $map['FlexVolumeDriver'];
        }
        if (isset($map['FlexVolumeOptions'])) {
            $model->flexVolumeOptions = $map['FlexVolumeOptions'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        return $model;
    }
}
