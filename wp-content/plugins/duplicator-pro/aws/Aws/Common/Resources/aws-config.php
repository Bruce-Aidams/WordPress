<?php
/**
 * Copyright 2010-2013 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

return array(
    'class' => 'DuplicatorPro\Aws\Common\Aws',
    'services' => array(

        'default_settings' => array(
            'params' => array()
        ),

        'autoscaling' => array(
            'alias'   => 'AutoScaling',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\AutoScaling\AutoScalingClient'
        ),

        'cloudformation' => array(
            'alias'   => 'CloudFormation',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\CloudFormation\CloudFormationClient'
        ),

        'cloudfront' => array(
            'alias'   => 'CloudFront',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\CloudFront\CloudFrontClient'
        ),

        'cloudfront_20120505' => array(
            'extends' => 'cloudfront',
            'params' => array(
                'version' => '2012-05-05'
            )
        ),

        'cloudhsm' => array(
            'alias'   => 'CloudHsm',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\CloudHsm\CloudHsmClient'
        ),

        'cloudsearch' => array(
            'alias'   => 'CloudSearch',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\CloudSearch\CloudSearchClient'
        ),

        'cloudsearch_20110201' => array(
            'extends' => 'cloudsearch',
            'params' => array(
                'version' => '2011-02-01'
            )
        ),

        'cloudsearchdomain' => array(
            'alias'   => 'CloudSearchDomain',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\CloudSearchDomain\CloudSearchDomainClient'
        ),

        'cloudtrail' => array(
            'alias'   => 'CloudTrail',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\CloudTrail\CloudTrailClient'
        ),

        'cloudwatch' => array(
            'alias'   => 'CloudWatch',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\CloudWatch\CloudWatchClient'
        ),

        'cloudwatchlogs' => array(
            'alias'   => 'CloudWatchLogs',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\CloudWatchLogs\CloudWatchLogsClient'
        ),

        'cognito-identity' => array(
            'alias'   => 'CognitoIdentity',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\CognitoIdentity\CognitoIdentityClient'
        ),

        'cognitoidentity' => array('extends' => 'cognito-identity'),

        'cognito-sync' => array(
            'alias'   => 'CognitoSync',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\CognitoSync\CognitoSyncClient'
        ),

        'cognitosync' => array('extends' => 'cognito-sync'),

        'codecommit' => array(
            'alias'   => 'CodeCommit',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\CodeCommit\CodeCommitClient'
        ),

        'codedeploy' => array(
            'alias'   => 'CodeDeploy',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\CodeDeploy\CodeDeployClient'
        ),

        'codepipeline' => array(
            'alias'   => 'CodePipeline',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\CodePipeline\CodePipelineClient'
        ),

        'config' => array(
            'alias'   => 'ConfigService',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\ConfigService\ConfigServiceClient'
        ),

        'datapipeline' => array(
            'alias'   => 'DataPipeline',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\DataPipeline\DataPipelineClient'
        ),

        'devicefarm' => array(
            'alias'   => 'DeviceFarm',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\DeviceFarm\DeviceFarmClient'
        ),

        'directconnect' => array(
            'alias'   => 'DirectConnect',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\DirectConnect\DirectConnectClient'
        ),

        'ds' => array(
            'alias'   => 'DirectoryService',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\DirectoryService\DirectoryServiceClient'
        ),

        'dynamodb' => array(
            'alias'   => 'DynamoDb',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\DynamoDb\DynamoDbClient'
        ),

        'dynamodb_20111205' => array(
            'extends' => 'dynamodb',
            'params' => array(
                'version' => '2011-12-05'
            )
        ),

        'dynamodbstreams' => array(
            'alias'   => 'DynamoDbStreams',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\DynamoDbStreams\DynamoDbStreamsClient'
        ),

        'ec2' => array(
            'alias'   => 'Ec2',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Ec2\Ec2Client'
        ),

        'ecs' => array(
            'alias'   => 'Ecs',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Ecs\EcsClient'
        ),

        'elasticache' => array(
            'alias'   => 'ElastiCache',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\ElastiCache\ElastiCacheClient'
        ),

        'elasticbeanstalk' => array(
            'alias'   => 'ElasticBeanstalk',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\ElasticBeanstalk\ElasticBeanstalkClient'
        ),

        'efs' => array(
            'alias'   => 'Efs',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Efs\EfsClient'
        ),

        'elasticloadbalancing' => array(
            'alias'   => 'ElasticLoadBalancing',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\ElasticLoadBalancing\ElasticLoadBalancingClient'
        ),

        'elastictranscoder' => array(
            'alias'   => 'ElasticTranscoder',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\ElasticTranscoder\ElasticTranscoderClient'
        ),

        'emr' => array(
            'alias'   => 'Emr',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Emr\EmrClient'
        ),

        'glacier' => array(
            'alias'   => 'Glacier',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Glacier\GlacierClient'
        ),

        'kinesis' => array(
            'alias'   => 'Kinesis',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Kinesis\KinesisClient'
        ),

        'kms' => array(
            'alias'   => 'Kms',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Kms\KmsClient'
        ),

        'lambda' => array(
            'alias'   => 'Lambda',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Lambda\LambdaClient'
        ),

        'iam' => array(
            'alias'   => 'Iam',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Iam\IamClient'
        ),

        'importexport' => array(
            'alias'   => 'ImportExport',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\ImportExport\ImportExportClient'
        ),

        'machinelearning' => array(
            'alias'   => 'MachineLearning',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\MachineLearning\MachineLearningClient'
        ),

        'opsworks' => array(
            'alias'   => 'OpsWorks',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\OpsWorks\OpsWorksClient'
        ),

        'rds' => array(
            'alias'   => 'Rds',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Rds\RdsClient'
        ),

        'redshift' => array(
            'alias'   => 'Redshift',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Redshift\RedshiftClient'
        ),

        'route53' => array(
            'alias'   => 'Route53',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Route53\Route53Client'
        ),

        'route53domains' => array(
            'alias'   => 'Route53Domains',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Route53Domains\Route53DomainsClient'
        ),

        's3' => array(
            'alias'   => 'S3',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\S3\S3Client'
        ),

        'sdb' => array(
            'alias'   => 'SimpleDb',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\SimpleDb\SimpleDbClient'
        ),

        'ses' => array(
            'alias'   => 'Ses',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Ses\SesClient'
        ),

        'sns' => array(
            'alias'   => 'Sns',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Sns\SnsClient'
        ),

        'sqs' => array(
            'alias'   => 'Sqs',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Sqs\SqsClient'
        ),

        'ssm' => array(
            'alias'   => 'Ssm',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Ssm\SsmClient'
        ),

        'storagegateway' => array(
            'alias'   => 'StorageGateway',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\StorageGateway\StorageGatewayClient'
        ),

        'sts' => array(
            'alias'   => 'Sts',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Sts\StsClient'
        ),

        'support' => array(
            'alias'   => 'Support',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Support\SupportClient'
        ),

        'swf' => array(
            'alias'   => 'Swf',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\Swf\SwfClient'
        ),

        'workspaces' => array(
            'alias'   => 'WorkSpaces',
            'extends' => 'default_settings',
            'class'   => 'DuplicatorPro\Aws\WorkSpaces\WorkSpacesClient'
        ),
    )
);
