<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class SummaryImagesResponseBody extends Model
{
    /**
     * @description The names of all images in the cluster.
     *
     * @example {"summaryImages":["gromacs.sif","linpack.sif","sccIntelMPI1.sif","test.sif","usergromac.sif.user"]}
     *
     * @var string
     */
    public $imagesName;

    /**
     * @description The request ID.
     *
     * @example 896D338C-E4F4-41EC-A154-D605E5DE****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imagesName' => 'ImagesName',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imagesName) {
            $res['ImagesName'] = $this->imagesName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SummaryImagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImagesName'])) {
            $model->imagesName = $map['ImagesName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
