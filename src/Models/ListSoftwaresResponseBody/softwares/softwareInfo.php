<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody\softwares;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody\softwares\softwareInfo\applications;
use AlibabaCloud\Tea\Model;

class softwareInfo extends Model
{
    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $schedulerVersion;

    /**
     * @var string
     */
    public $accountVersion;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $ehpcVersion;

    /**
     * @var applications
     */
    public $applications;
    protected $_name = [
        'schedulerType'    => 'SchedulerType',
        'osTag'            => 'OsTag',
        'schedulerVersion' => 'SchedulerVersion',
        'accountVersion'   => 'AccountVersion',
        'accountType'      => 'AccountType',
        'ehpcVersion'      => 'EhpcVersion',
        'applications'     => 'Applications',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->schedulerVersion) {
            $res['SchedulerVersion'] = $this->schedulerVersion;
        }
        if (null !== $this->accountVersion) {
            $res['AccountVersion'] = $this->accountVersion;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
        }
        if (null !== $this->applications) {
            $res['Applications'] = null !== $this->applications ? $this->applications->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return softwareInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['SchedulerVersion'])) {
            $model->schedulerVersion = $map['SchedulerVersion'];
        }
        if (isset($map['AccountVersion'])) {
            $model->accountVersion = $map['AccountVersion'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
        }
        if (isset($map['Applications'])) {
            $model->applications = applications::fromMap($map['Applications']);
        }

        return $model;
    }
}
