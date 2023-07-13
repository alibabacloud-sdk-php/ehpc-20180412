<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series\seriesInfo\roles;
use AlibabaCloud\Tea\Model;

class seriesInfo extends Model
{
    /**
     * @description Recommended instance types for nodes in an E-HPC cluser.
     *
     * @var roles
     */
    public $roles;

    /**
     * @description The ECS instance series ID. Valid values:
     *
     *   HighCompute: compute-optimized instance families
     *   HighMem: memory-optimized instance families
     *   GPU: GPU-accelerated instance families
     *   All: all instance families
     *
     * @example All
     *
     * @var string
     */
    public $seriesId;

    /**
     * @description The instance series name. Valid values:
     *
     *   SeriesHighCompute
     *   SeriesHighMem
     *   SeriesGPU
     *   SeriesAll
     *
     * @example SeriesAll
     *
     * @var string
     */
    public $seriesName;
    protected $_name = [
        'roles'      => 'Roles',
        'seriesId'   => 'SeriesId',
        'seriesName' => 'SeriesName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toMap() : null;
        }
        if (null !== $this->seriesId) {
            $res['SeriesId'] = $this->seriesId;
        }
        if (null !== $this->seriesName) {
            $res['SeriesName'] = $this->seriesName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return seriesInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Roles'])) {
            $model->roles = roles::fromMap($map['Roles']);
        }
        if (isset($map['SeriesId'])) {
            $model->seriesId = $map['SeriesId'];
        }
        if (isset($map['SeriesName'])) {
            $model->seriesName = $map['SeriesName'];
        }

        return $model;
    }
}
