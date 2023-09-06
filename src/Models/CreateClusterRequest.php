<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\additionalVolumes;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\addOns;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\application;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\ecsOrder;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\postInstallScript;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @var ecsOrder
     */
    public $ecsOrder;

    /**
     * @description The type of the domain account service. Valid values:
     *
     *   nis
     *   ldap
     *
     * Default value: nis.
     * @example nis
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The custom component service.
     *
     * @var addOns[]
     */
    public $addOns;

    /**
     * @description The information of the NAS file system.
     *
     * @var additionalVolumes[]
     */
    public $additionalVolumes;

    /**
     * @description The application information.
     *
     * @var application[]
     */
    public $application;

    /**
     * @description Specifies whether to enable auto-renewal. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The auto-renewal period of the subscription compute nodes. The parameter takes effect when AutoRenew is set to true.
     *
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but make sure that the value is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The version of the E-HPC client. By default, the parameter is set to the latest version number.
     *
     * You can call the [ListCurrentClientVersion](~~87223~~) operation to query the latest version of the E-HPC client.
     * @example 1.0.64
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The version of the E-HPC cluster.
     *
     * Default value: 1.0.
     * @example 1.0
     *
     * @var string
     */
    public $clusterVersion;

    /**
     * @description Specifies whether to enable hyper-threading for the compute node. Valid values:
     *
     *   true
     *   false
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $computeEnableHt;

    /**
     * @description The maximum hourly price of the compute nodes. A maximum of three decimal places can be used in the value of the parameter. The parameter is valid only when the ComputeSpotStrategy parameter is set to SpotWithPriceLimit.
     *
     * @example 0.034
     *
     * @var string
     */
    public $computeSpotPriceLimit;

    /**
     * @description The bidding method of the compute nodes. Valid values:
     *
     *   NoSpot: The compute nodes are pay-as-you-go instances.
     *   SpotWithPriceLimit: The compute nodes are preemptible instances that have a user-defined maximum hourly price.
     *   SpotAsPriceGo: The compute nodes are preemptible instances for which the market price at the time of purchase is used as the bid price.
     *
     * Default value: NoSpot.
     * @example NoSpot
     *
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @description The mode in which the E-HPC cluster is deployed. Valid values:
     *
     *   Standard: An account node, a scheduling node, a logon node, and multiple compute nodes are separately deployed.
     *   Simple: A management node, which consists of an account node and a scheduling node, is deployed, while a logon node and multiple compute nodes are separately deployed.
     *   Tiny: A management node and multiple compute nodes are deployed. The management node consists of an account node, a scheduling node, and a logon node. The compute nodes are separately deployed.
     *
     * Default value: Standard.
     * @example Simple
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The ID of the deployment set in which to deploy the instance. You can obtain the deployment set ID by calling the [DescribeDeploymentSets](~~91313~~) operation. Only the deployment sets that use low latency policy are supported.
     *
     * @example ds-bp1frxuzdg87zh4pzq****
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description The description of the E-HPC cluster. The description must be 2 to 256 characters in length and cannot start with [http:// or https://](http://https://。).
     *
     * @example TestDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The domain name of the on-premises E-HPC cluster.
     *
     * This parameter takes effect only when the AccountType parameter is set to Idap.
     * @example ldap
     *
     * @var string
     */
    public $domain;

    /**
     * @description The billing method of the nodes. Valid values:
     *
     *   PostPaid: pay-as-you-go.
     *   PrePaid: subscription.
     *
     * If you set the parameter to PrePaid, auto-renewal is enabled by default.
     * @example PostPaid
     *
     * @var string
     */
    public $ecsChargeType;

    /**
     * @description The version of E-HPC. By default, the parameter is set to the latest version number.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $ehpcVersion;

    /**
     * @description Specifies whether to enable the high availability feature. Valid values:
     *
     *   true
     *   false
     *
     * > If high availability is enabled, a primary management node and a secondary management node are used.
     * @example true
     *
     * @var bool
     */
    public $haEnable;

    /**
     * @description The image IDs.
     *
     * You can call the [ListImages](~~87213~~) and [ListCustomImages](~~87215~~) operations to query the images that are supported by E-HPC.
     * @example centos_7_02_64_20G_alibase_20170818****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of the image. Valid values:
     *
     *   system: public image
     *   self: custom image
     *   others: shared image
     *
     * Default value: system.
     * @example self
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The URL of the job file that is uploaded to an Object Storage Service (OSS) bucket.
     *
     * @example https://ehpc-tianshui.oss-cn-beijing.aliyuncs.com/test-u****\/testlist_ehpc.sh
     *
     * @var string
     */
    public $inputFileUrl;

    /**
     * @description Specifies whether to enable auto scaling. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $isComputeEss;

    /**
     * @description The queue to which the compute nodes are added.
     *
     * @example workq
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @description The name of the key pair.
     *
     * > For more information, see [Create an SSH key pair](~~51793~~).
     * @example test
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The name of the E-HPC cluster. The name must be 2 to 64 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The communication model of the ENI. Valid values:
     *
     *   Standard: The TCP communication mode is used.
     *   HighPerformance: uses the remote direct memory access (RDMA) communication mode with the Elastic RDMA Interface (ERI) enabled.
     *
     * @example Standard
     *
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @description The operating system tag of the image.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $osTag;

    /**
     * @description The root password of the logon node. The password must be 8 to 30 characters in length and contain at least three of the following items: uppercase letters, lowercase letters, digits, and special characters. Special characters include:
     *
     * `( ) ~ ! @ # $ % ^ & * - + = | { } [ ] : ; ‘ < > , . ? /`
     *
     * > We recommend that you use HTTPS to call the API operation to prevent password leakage.
     * @example 123****
     *
     * @var string
     */
    public $password;

    /**
     * @description The duration of the subscription. The unit of the duration is specified by the `PeriodUnit` parameter.
     *
     *   Valid values if PriceUnit is set to Year: 1, 2, and 3.
     *   Valid values if PriceUnit is set to Month: 1, 2, 3, 4, 5, 6, 7, 8, and 9.
     *   Valid value if PriceUnit is set to Hour: 1.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration. Valid values:
     *
     *   Year
     *   Month
     *   Hour
     *
     * Default value: Month.
     * @example Year
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The mode configurations of the plug-in. This parameter takes effect only when the SchedulerType parameter is set to custom.
     *
     * The value must be a JSON string. The parameter contains the following parameters: pluginMod, pluginLocalPath, and pluginOssPath.
     *
     *   pluginMod: the plug-in mode. The following modes are supported:
     *
     *   oss: The plug-in is downloaded and decompressed from OSS to a local path that is specified by the pluginLocalPath parameter.
     *   image: By default, the plug-in is stored in a pre-defined local path that is specified by the pluginLocalPath parameter.
     *
     *   pluginLocalPath: the local path where the plug-in is stored. We recommend that you select a shared directory in oss mode and a non-shared directory in image mode.
     *
     *   pluginOssPath: the remote path where the plug-in is stored in OSS. This parameter takes effect only when the pluginMod parameter is set to oss.
     *
     * @example {"pluginMod": "oss","pluginLocalPath": "/opt/plugin","pluginOssPath": "https://bucket.oss-cn-hangzhou.aliyuncs.com/plugin/plugin.tgz"}
     *
     * @var string
     */
    public $plugin;

    /**
     * @description The information of the post-installation script.
     *
     * @var postInstallScript[]
     */
    public $postInstallScript;

    /**
     * @description The node of the RAM role.
     *
     * @example Standard
     *
     * @var string[]
     */
    public $ramNodeTypes;

    /**
     * @description The name of the Resource Access Management (RAM) role.
     *
     * You can call the [ListRoles](~~28713~~) operation provided by RAM to query the instance RAM roles that you created.
     * @example testRamRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The remote directory to which the NAS file system is mounted.
     *
     * @example NasMountpoint:/RemoteDirectory
     *
     * @var string
     */
    public $remoteDirectory;

    /**
     * @description Specifies whether to enable Virtual Network Computing (VNC). Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var string
     */
    public $remoteVisEnable;

    /**
     * @description The resource group ID.
     *
     * You can call the [ListResourceGroups](~~158855~~) operation to obtain the ID of the resource group.
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The Super Computing Cluster (SCC) instance ID.
     *
     * If you specify the parameter, the SCC instance is moved to a new SCC cluster.
     * @example 00b648b****
     *
     * @var string
     */
    public $sccClusterId;

    /**
     * @description The type of the scheduler. Valid values:
     *
     *   pbs
     *   slurm
     *   opengridscheduler
     *   deadline
     *
     * Default value: pbs.
     * @example pbs
     *
     * @var string
     */
    public $schedulerType;

    /**
     * @description The ID of the security group to which the E-HPC cluster belongs.
     *
     * You can call the [DescribeSecurityGroups](~~25556~~) operation to query available security groups in the current region.
     * @example sg-bp13n61xsydodfyg****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description If you do not use an existing security group, set the parameter to the name of a new security group. A default policy is applied to the new security group.
     *
     * @example ehpc-SecurityGroup
     *
     * @var string
     */
    public $securityGroupName;

    /**
     * @description The performance level of the ESSD to be used as the system disk. Default value: PL1. Valid values:
     *
     *   PL0: An ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: An ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: An ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: An ESSD delivers up to 1,000,000 random read/write IOPS.
     *
     * For more information, see [ESSDs](~~122389~~).
     * @example PL0
     *
     * @var string
     */
    public $systemDiskLevel;

    /**
     * @description The system disk size. Unit: GB.
     *
     * Default value: 40.
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The type of the system disk. Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: enhanced SSD (ESSD)
     *   cloud: basic disk. Disks of this type are retired.
     *
     * Default value: cloud_ssd.
     * @example cloud_ssd
     *
     * @var string
     */
    public $systemDiskType;

    /**
     * @description The array of the tags.
     *
     * @example Standard
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The vSwitch ID. E-HPC supports only VPC networks.
     *
     * You can call the [DescribeVSwitches](~~35748~~) operation to query available vSwitches.
     * @example vsw-bp1lfcjbfb099rrjn****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the NAS file system. If you leave the parameter empty, a Performance NAS file system is created by default.
     *
     * You can call the [ListFileSystemWithMountTargets](~~204364~~) operation to query available mount targets.
     * @example 008b64****
     *
     * @var string
     */
    public $volumeId;

    /**
     * @description The mount options of the NFS file system that you want to mount by running the mount command.
     *
     * For more information, see [Mount an NFS file system on a Linux ECS instance](https://www.alibabacloud.com/help/en/nas/latest/mount-an-nfs-file-system-on-a-linux-ecs-instance#section-jyi-hyd-hbr).
     * @example -t nfs -o vers=4
     *
     * @var string
     */
    public $volumeMountOption;

    /**
     * @description The mount target of the NAS file system. The mount target is of the VPC type. Take note of the following information:
     *
     *   If the VolumeId parameter is not specified, you can leave the VolumeMountpoint parameter empty. In this case, a mount target is created by default.
     *   When the VolumeId parameter is specified, the VolumeMountpoint parameter is required. You can call the [ListFileSystemWithMountTargets](~~204364~~) operation to query available mount targets.
     *
     * @example 008b648bcb-s****.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @description The type of the protocol that is used by the NAS file system. Valid values:
     *
     *   NFS
     *   SMB
     *
     * Default value: NFS.
     * @example NFS
     *
     * @var string
     */
    public $volumeProtocol;

    /**
     * @description The type of the shared storage. Set the value to `nas`, which indicates NAS file system.
     *
     * @example nas
     *
     * @var string
     */
    public $volumeType;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the E-HPC cluster belongs.
     *
     * You can call the [DescribeVpcs](~~35739~~) operation to query available VPCs.
     * @example vpc-b3f3edefefeep0760yju****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Specifies whether not to install the agent.
     *
     *   true: does not install the agent.
     *   false: installs the agent.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $withoutAgent;

    /**
     * @description Specifies whether the logon node uses an elastic IP address (EIP). Default value: false.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $withoutElasticIp;

    /**
     * @description Indicates whether to use NAS as a shared storage. Valid values:
     *
     *   true: does not use NAS.
     *   false: use NAS.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $withoutNas;

    /**
     * @description The ID of the zone in which the resource resides.
     *
     * You can call the [ListRegions](~~188593~~) and [DescribeZones](~~25610~~) operations to query the IDs of the zones where E-HPC is supported.
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'ecsOrder'                    => 'EcsOrder',
        'accountType'                 => 'AccountType',
        'addOns'                      => 'AddOns',
        'additionalVolumes'           => 'AdditionalVolumes',
        'application'                 => 'Application',
        'autoRenew'                   => 'AutoRenew',
        'autoRenewPeriod'             => 'AutoRenewPeriod',
        'clientToken'                 => 'ClientToken',
        'clientVersion'               => 'ClientVersion',
        'clusterVersion'              => 'ClusterVersion',
        'computeEnableHt'             => 'ComputeEnableHt',
        'computeSpotPriceLimit'       => 'ComputeSpotPriceLimit',
        'computeSpotStrategy'         => 'ComputeSpotStrategy',
        'deployMode'                  => 'DeployMode',
        'deploymentSetId'             => 'DeploymentSetId',
        'description'                 => 'Description',
        'domain'                      => 'Domain',
        'ecsChargeType'               => 'EcsChargeType',
        'ehpcVersion'                 => 'EhpcVersion',
        'haEnable'                    => 'HaEnable',
        'imageId'                     => 'ImageId',
        'imageOwnerAlias'             => 'ImageOwnerAlias',
        'inputFileUrl'                => 'InputFileUrl',
        'isComputeEss'                => 'IsComputeEss',
        'jobQueue'                    => 'JobQueue',
        'keyPairName'                 => 'KeyPairName',
        'name'                        => 'Name',
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'osTag'                       => 'OsTag',
        'password'                    => 'Password',
        'period'                      => 'Period',
        'periodUnit'                  => 'PeriodUnit',
        'plugin'                      => 'Plugin',
        'postInstallScript'           => 'PostInstallScript',
        'ramNodeTypes'                => 'RamNodeTypes',
        'ramRoleName'                 => 'RamRoleName',
        'remoteDirectory'             => 'RemoteDirectory',
        'remoteVisEnable'             => 'RemoteVisEnable',
        'resourceGroupId'             => 'ResourceGroupId',
        'sccClusterId'                => 'SccClusterId',
        'schedulerType'               => 'SchedulerType',
        'securityGroupId'             => 'SecurityGroupId',
        'securityGroupName'           => 'SecurityGroupName',
        'systemDiskLevel'             => 'SystemDiskLevel',
        'systemDiskSize'              => 'SystemDiskSize',
        'systemDiskType'              => 'SystemDiskType',
        'tag'                         => 'Tag',
        'vSwitchId'                   => 'VSwitchId',
        'volumeId'                    => 'VolumeId',
        'volumeMountOption'           => 'VolumeMountOption',
        'volumeMountpoint'            => 'VolumeMountpoint',
        'volumeProtocol'              => 'VolumeProtocol',
        'volumeType'                  => 'VolumeType',
        'vpcId'                       => 'VpcId',
        'withoutAgent'                => 'WithoutAgent',
        'withoutElasticIp'            => 'WithoutElasticIp',
        'withoutNas'                  => 'WithoutNas',
        'zoneId'                      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsOrder) {
            $res['EcsOrder'] = null !== $this->ecsOrder ? $this->ecsOrder->toMap() : null;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->addOns) {
            $res['AddOns'] = [];
            if (null !== $this->addOns && \is_array($this->addOns)) {
                $n = 0;
                foreach ($this->addOns as $item) {
                    $res['AddOns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->additionalVolumes) {
            $res['AdditionalVolumes'] = [];
            if (null !== $this->additionalVolumes && \is_array($this->additionalVolumes)) {
                $n = 0;
                foreach ($this->additionalVolumes as $item) {
                    $res['AdditionalVolumes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->application) {
            $res['Application'] = [];
            if (null !== $this->application && \is_array($this->application)) {
                $n = 0;
                foreach ($this->application as $item) {
                    $res['Application'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->clusterVersion) {
            $res['ClusterVersion'] = $this->clusterVersion;
        }
        if (null !== $this->computeEnableHt) {
            $res['ComputeEnableHt'] = $this->computeEnableHt;
        }
        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }
        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ecsChargeType) {
            $res['EcsChargeType'] = $this->ecsChargeType;
        }
        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
        }
        if (null !== $this->haEnable) {
            $res['HaEnable'] = $this->haEnable;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->inputFileUrl) {
            $res['InputFileUrl'] = $this->inputFileUrl;
        }
        if (null !== $this->isComputeEss) {
            $res['IsComputeEss'] = $this->isComputeEss;
        }
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkInterfaceTrafficMode) {
            $res['NetworkInterfaceTrafficMode'] = $this->networkInterfaceTrafficMode;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->plugin) {
            $res['Plugin'] = $this->plugin;
        }
        if (null !== $this->postInstallScript) {
            $res['PostInstallScript'] = [];
            if (null !== $this->postInstallScript && \is_array($this->postInstallScript)) {
                $n = 0;
                foreach ($this->postInstallScript as $item) {
                    $res['PostInstallScript'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ramNodeTypes) {
            $res['RamNodeTypes'] = $this->ramNodeTypes;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
        }
        if (null !== $this->remoteVisEnable) {
            $res['RemoteVisEnable'] = $this->remoteVisEnable;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sccClusterId) {
            $res['SccClusterId'] = $this->sccClusterId;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->systemDiskLevel) {
            $res['SystemDiskLevel'] = $this->systemDiskLevel;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->systemDiskType) {
            $res['SystemDiskType'] = $this->systemDiskType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }
        if (null !== $this->volumeMountOption) {
            $res['VolumeMountOption'] = $this->volumeMountOption;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->withoutAgent) {
            $res['WithoutAgent'] = $this->withoutAgent;
        }
        if (null !== $this->withoutElasticIp) {
            $res['WithoutElasticIp'] = $this->withoutElasticIp;
        }
        if (null !== $this->withoutNas) {
            $res['WithoutNas'] = $this->withoutNas;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsOrder'])) {
            $model->ecsOrder = ecsOrder::fromMap($map['EcsOrder']);
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AddOns'])) {
            if (!empty($map['AddOns'])) {
                $model->addOns = [];
                $n             = 0;
                foreach ($map['AddOns'] as $item) {
                    $model->addOns[$n++] = null !== $item ? addOns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AdditionalVolumes'])) {
            if (!empty($map['AdditionalVolumes'])) {
                $model->additionalVolumes = [];
                $n                        = 0;
                foreach ($map['AdditionalVolumes'] as $item) {
                    $model->additionalVolumes[$n++] = null !== $item ? additionalVolumes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Application'])) {
            if (!empty($map['Application'])) {
                $model->application = [];
                $n                  = 0;
                foreach ($map['Application'] as $item) {
                    $model->application[$n++] = null !== $item ? application::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ClusterVersion'])) {
            $model->clusterVersion = $map['ClusterVersion'];
        }
        if (isset($map['ComputeEnableHt'])) {
            $model->computeEnableHt = $map['ComputeEnableHt'];
        }
        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }
        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EcsChargeType'])) {
            $model->ecsChargeType = $map['EcsChargeType'];
        }
        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
        }
        if (isset($map['HaEnable'])) {
            $model->haEnable = $map['HaEnable'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['InputFileUrl'])) {
            $model->inputFileUrl = $map['InputFileUrl'];
        }
        if (isset($map['IsComputeEss'])) {
            $model->isComputeEss = $map['IsComputeEss'];
        }
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkInterfaceTrafficMode'])) {
            $model->networkInterfaceTrafficMode = $map['NetworkInterfaceTrafficMode'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['Plugin'])) {
            $model->plugin = $map['Plugin'];
        }
        if (isset($map['PostInstallScript'])) {
            if (!empty($map['PostInstallScript'])) {
                $model->postInstallScript = [];
                $n                        = 0;
                foreach ($map['PostInstallScript'] as $item) {
                    $model->postInstallScript[$n++] = null !== $item ? postInstallScript::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RamNodeTypes'])) {
            if (!empty($map['RamNodeTypes'])) {
                $model->ramNodeTypes = $map['RamNodeTypes'];
            }
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
        }
        if (isset($map['RemoteVisEnable'])) {
            $model->remoteVisEnable = $map['RemoteVisEnable'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SccClusterId'])) {
            $model->sccClusterId = $map['SccClusterId'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['SystemDiskLevel'])) {
            $model->systemDiskLevel = $map['SystemDiskLevel'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['SystemDiskType'])) {
            $model->systemDiskType = $map['SystemDiskType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }
        if (isset($map['VolumeMountOption'])) {
            $model->volumeMountOption = $map['VolumeMountOption'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['WithoutAgent'])) {
            $model->withoutAgent = $map['WithoutAgent'];
        }
        if (isset($map['WithoutElasticIp'])) {
            $model->withoutElasticIp = $map['WithoutElasticIp'];
        }
        if (isset($map['WithoutNas'])) {
            $model->withoutNas = $map['WithoutNas'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
