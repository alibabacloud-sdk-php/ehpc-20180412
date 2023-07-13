<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetAutoScaleConfigRequest\queues;

use AlibabaCloud\Tea\Model;

class instanceTypes extends Model
{
    /**
     * @description The maximum hourly price of the compute nodes that are automatically added in the queue. The value can be accurate to three decimal places. The parameter takes effect only when `Queues.N.InstanceTypes.N.SpotStrategy` is set to `SpotWithPriceLimit`.
     *
     * The maximum hourly prices of N compute nodes in the queue can be set at the same time when auto scaling is performed in the queue. Valid values of N: 0 to 500.
     * @example ecs.n1.tiny
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The bidding method of the compute nodes that are automatically added in the queue. Valid values:
     *
     *   NoSpot: The compute nodes are pay-as-you-go instances.
     *   SpotWithPriceLimit: The compute nodes are preemptible instances that have a user-defined maximum hourly price.
     *   SpotAsPriceGo: The compute nodes are preemptible instances for which the market price at the time of purchase is used as the bid price.
     *
     * The bidding methods of N compute nodes in the queue can be set at the same time when auto scaling is performed in the queue. Valid values of N: 0 to 500.
     * @example 0
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The protection period of the preemptible instance. Unit: hours. Valid values: 0 to 1. A value of 0 means that no protection period is specified. Default value: 1.
     *
     * @example Terminate
     *
     * @var string
     */
    public $spotInterruptionBehavior;

    /**
     * @description The zone ID of the compute nodes that are automatically added to the queues.
     *
     * The zone IDs of N compute nodes in the queue can be set at the same time when auto scaling is performed in the queue. Valid values of N: 0 to 500.
     * @example 0.660
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The instance type of the compute nodes that are automatically added in the queue.
     *
     * The instance types of N compute nodes in the queue can be set at the same time when auto scaling is performed in the queue. Valid values of N: 0 to 500.
     * @example SpotWithPriceLimit
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The array of node information.
     *
     * @example vsw-bp1lfcjbfb099rrjn****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The vSwitch ID of the compute nodes that are automatically added to the queues.
     *
     * The vSwitch IDs of N compute nodes in the queue can be set at the same time when auto scaling is performed in the queue. Valid values of N: 0 to 500.
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'instanceType'             => 'InstanceType',
        'spotDuration'             => 'SpotDuration',
        'spotInterruptionBehavior' => 'SpotInterruptionBehavior',
        'spotPriceLimit'           => 'SpotPriceLimit',
        'spotStrategy'             => 'SpotStrategy',
        'vSwitchId'                => 'VSwitchId',
        'zoneId'                   => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->spotInterruptionBehavior) {
            $res['SpotInterruptionBehavior'] = $this->spotInterruptionBehavior;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['SpotInterruptionBehavior'])) {
            $model->spotInterruptionBehavior = $map['SpotInterruptionBehavior'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
