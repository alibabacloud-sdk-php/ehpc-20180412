<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyClusterAttributesRequest;

use AlibabaCloud\Tea\Model;

class winAdPar extends Model
{
    /**
     * @description The domain name of the Windows AD server.
     *
     * @example ehpcad.com
     *
     * @var string
     */
    public $adDc;

    /**
     * @description The IP address of the Windows AD server.
     *
     * @example 192.168.1.2
     *
     * @var string
     */
    public $adIp;

    /**
     * @description The Windows AD server administrator.
     *
     * @example administrator
     *
     * @var string
     */
    public $adUser;

    /**
     * @description The administrator password of the Windows AD server.
     *
     * @example xxxxxxx
     *
     * @var string
     */
    public $adUserPasswd;

    /**
     * @description The home directory of the Linux server.
     *
     * @example /home
     *
     * @var string
     */
    public $fallbackHomeDir;
    protected $_name = [
        'adDc'            => 'AdDc',
        'adIp'            => 'AdIp',
        'adUser'          => 'AdUser',
        'adUserPasswd'    => 'AdUserPasswd',
        'fallbackHomeDir' => 'FallbackHomeDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adDc) {
            $res['AdDc'] = $this->adDc;
        }
        if (null !== $this->adIp) {
            $res['AdIp'] = $this->adIp;
        }
        if (null !== $this->adUser) {
            $res['AdUser'] = $this->adUser;
        }
        if (null !== $this->adUserPasswd) {
            $res['AdUserPasswd'] = $this->adUserPasswd;
        }
        if (null !== $this->fallbackHomeDir) {
            $res['FallbackHomeDir'] = $this->fallbackHomeDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return winAdPar
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdDc'])) {
            $model->adDc = $map['AdDc'];
        }
        if (isset($map['AdIp'])) {
            $model->adIp = $map['AdIp'];
        }
        if (isset($map['AdUser'])) {
            $model->adUser = $map['AdUser'];
        }
        if (isset($map['AdUserPasswd'])) {
            $model->adUserPasswd = $map['AdUserPasswd'];
        }
        if (isset($map['FallbackHomeDir'])) {
            $model->fallbackHomeDir = $map['FallbackHomeDir'];
        }

        return $model;
    }
}
