<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest;

use AlibabaCloud\Tea\Model;

class postInstallScript extends Model
{
    /**
     * @description The parameter that is used to run the script after the cluster is created.
     *
     * Valid values of N: 0 to 16.
     * @example bashfile.sh
     *
     * @var string
     */
    public $args;

    /**
     * @description The URL that is used to download the script after the E-HPC cluster is created.
     *
     * Valid values of N: 0 to 16
     * @example /opt/job.sh
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'args' => 'Args',
        'url'  => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return postInstallScript
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
