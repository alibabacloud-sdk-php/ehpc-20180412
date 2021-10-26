<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetClusterVolumesResponseBody\volumes;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetClusterVolumesResponseBody\volumes\volumeInfo\roles;
use AlibabaCloud\Tea\Model;

class volumeInfo extends Model
{
    /**
     * @var string
     */
    public $jobQueue;

    /**
     * @var string
     */
    public $localDirectory;

    /**
     * @var string
     */
    public $location;

    /**
     * @var bool
     */
    public $mustKeep;

    /**
     * @var string
     */
    public $remoteDirectory;

    /**
     * @var roles
     */
    public $roles;

    /**
     * @var string
     */
    public $volumeId;

    /**
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @var string
     */
    public $volumeProtocol;

    /**
     * @var string
     */
    public $volumeType;
    protected $_name = [
        'jobQueue'         => 'JobQueue',
        'localDirectory'   => 'LocalDirectory',
        'location'         => 'Location',
        'mustKeep'         => 'MustKeep',
        'remoteDirectory'  => 'RemoteDirectory',
        'roles'            => 'Roles',
        'volumeId'         => 'VolumeId',
        'volumeMountpoint' => 'VolumeMountpoint',
        'volumeProtocol'   => 'VolumeProtocol',
        'volumeType'       => 'VolumeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->localDirectory) {
            $res['LocalDirectory'] = $this->localDirectory;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->mustKeep) {
            $res['MustKeep'] = $this->mustKeep;
        }
        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
        }
        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toMap() : null;
        }
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }
        if (null !== $this->volumeMountpoint) {
            $res['VolumeMountpoint'] = $this->volumeMountpoint;
        }
        if (null !== $this->volumeProtocol) {
            $res['VolumeProtocol'] = $this->volumeProtocol;
        }
        if (null !== $this->volumeType) {
            $res['VolumeType'] = $this->volumeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volumeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['LocalDirectory'])) {
            $model->localDirectory = $map['LocalDirectory'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['MustKeep'])) {
            $model->mustKeep = $map['MustKeep'];
        }
        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
        }
        if (isset($map['Roles'])) {
            $model->roles = roles::fromMap($map['Roles']);
        }
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }
        if (isset($map['VolumeMountpoint'])) {
            $model->volumeMountpoint = $map['VolumeMountpoint'];
        }
        if (isset($map['VolumeProtocol'])) {
            $model->volumeProtocol = $map['VolumeProtocol'];
        }
        if (isset($map['VolumeType'])) {
            $model->volumeType = $map['VolumeType'];
        }

        return $model;
    }
}
