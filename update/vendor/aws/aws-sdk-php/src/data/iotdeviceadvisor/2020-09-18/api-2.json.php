<?php
// This file was auto-generated from sdk-root/src/data/iotdeviceadvisor/2020-09-18/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2020-09-18', 'endpointPrefix' => 'api.iotdeviceadvisor', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'AWSIoTDeviceAdvisor', 'serviceFullName' => 'AWS IoT Core Device Advisor', 'serviceId' => 'IotDeviceAdvisor', 'signatureVersion' => 'v4', 'signingName' => 'iotdeviceadvisor', 'uid' => 'iotdeviceadvisor-2020-09-18', ], 'operations' => [ 'CreateSuiteDefinition' => [ 'name' => 'CreateSuiteDefinition', 'http' => [ 'method' => 'POST', 'requestUri' => '/suiteDefinitions', ], 'input' => [ 'shape' => 'CreateSuiteDefinitionRequest', ], 'output' => [ 'shape' => 'CreateSuiteDefinitionResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DeleteSuiteDefinition' => [ 'name' => 'DeleteSuiteDefinition', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/suiteDefinitions/{suiteDefinitionId}', ], 'input' => [ 'shape' => 'DeleteSuiteDefinitionRequest', ], 'output' => [ 'shape' => 'DeleteSuiteDefinitionResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetEndpoint' => [ 'name' => 'GetEndpoint', 'http' => [ 'method' => 'GET', 'requestUri' => '/endpoint', ], 'input' => [ 'shape' => 'GetEndpointRequest', ], 'output' => [ 'shape' => 'GetEndpointResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetSuiteDefinition' => [ 'name' => 'GetSuiteDefinition', 'http' => [ 'method' => 'GET', 'requestUri' => '/suiteDefinitions/{suiteDefinitionId}', ], 'input' => [ 'shape' => 'GetSuiteDefinitionRequest', ], 'output' => [ 'shape' => 'GetSuiteDefinitionResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetSuiteRun' => [ 'name' => 'GetSuiteRun', 'http' => [ 'method' => 'GET', 'requestUri' => '/suiteDefinitions/{suiteDefinitionId}/suiteRuns/{suiteRunId}', ], 'input' => [ 'shape' => 'GetSuiteRunRequest', ], 'output' => [ 'shape' => 'GetSuiteRunResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetSuiteRunReport' => [ 'name' => 'GetSuiteRunReport', 'http' => [ 'method' => 'GET', 'requestUri' => '/suiteDefinitions/{suiteDefinitionId}/suiteRuns/{suiteRunId}/report', ], 'input' => [ 'shape' => 'GetSuiteRunReportRequest', ], 'output' => [ 'shape' => 'GetSuiteRunReportResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListSuiteDefinitions' => [ 'name' => 'ListSuiteDefinitions', 'http' => [ 'method' => 'GET', 'requestUri' => '/suiteDefinitions', ], 'input' => [ 'shape' => 'ListSuiteDefinitionsRequest', ], 'output' => [ 'shape' => 'ListSuiteDefinitionsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListSuiteRuns' => [ 'name' => 'ListSuiteRuns', 'http' => [ 'method' => 'GET', 'requestUri' => '/suiteRuns', ], 'input' => [ 'shape' => 'ListSuiteRunsRequest', ], 'output' => [ 'shape' => 'ListSuiteRunsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'StartSuiteRun' => [ 'name' => 'StartSuiteRun', 'http' => [ 'method' => 'POST', 'requestUri' => '/suiteDefinitions/{suiteDefinitionId}/suiteRuns', ], 'input' => [ 'shape' => 'StartSuiteRunRequest', ], 'output' => [ 'shape' => 'StartSuiteRunResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ConflictException', ], ], ], 'StopSuiteRun' => [ 'name' => 'StopSuiteRun', 'http' => [ 'method' => 'POST', 'requestUri' => '/suiteDefinitions/{suiteDefinitionId}/suiteRuns/{suiteRunId}/stop', ], 'input' => [ 'shape' => 'StopSuiteRunRequest', ], 'output' => [ 'shape' => 'StopSuiteRunResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UpdateSuiteDefinition' => [ 'name' => 'UpdateSuiteDefinition', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/suiteDefinitions/{suiteDefinitionId}', ], 'input' => [ 'shape' => 'UpdateSuiteDefinitionRequest', ], 'output' => [ 'shape' => 'UpdateSuiteDefinitionResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], ], 'shapes' => [ 'AmazonResourceName' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'CreateSuiteDefinitionRequest' => [ 'type' => 'structure', 'members' => [ 'suiteDefinitionConfiguration' => [ 'shape' => 'SuiteDefinitionConfiguration', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'CreateSuiteDefinitionResponse' => [ 'type' => 'structure', 'members' => [ 'suiteDefinitionId' => [ 'shape' => 'UUID', ], 'suiteDefinitionArn' => [ 'shape' => 'AmazonResourceName', ], 'suiteDefinitionName' => [ 'shape' => 'SuiteDefinitionName', ], 'createdAt' => [ 'shape' => 'Timestamp', ], ], ], 'DeleteSuiteDefinitionRequest' => [ 'type' => 'structure', 'required' => [ 'suiteDefinitionId', ], 'members' => [ 'suiteDefinitionId' => [ 'shape' => 'UUID', 'location' => 'uri', 'locationName' => 'suiteDefinitionId', ], ], ], 'DeleteSuiteDefinitionResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeviceUnderTest' => [ 'type' => 'structure', 'members' => [ 'thingArn' => [ 'shape' => 'AmazonResourceName', ], 'certificateArn' => [ 'shape' => 'AmazonResourceName', ], ], ], 'DeviceUnderTestList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceUnderTest', ], 'max' => 2, 'min' => 0, ], 'Endpoint' => [ 'type' => 'string', 'max' => 75, 'min' => 45, ], 'ErrorReason' => [ 'type' => 'string', ], 'Failure' => [ 'type' => 'string', ], 'GetEndpointRequest' => [ 'type' => 'structure', 'members' => [ 'thingArn' => [ 'shape' => 'AmazonResourceName', 'location' => 'querystring', 'locationName' => 'thingArn', ], 'certificateArn' => [ 'shape' => 'AmazonResourceName', 'location' => 'querystring', 'locationName' => 'certificateArn', ], ], ], 'GetEndpointResponse' => [ 'type' => 'structure', 'members' => [ 'endpoint' => [ 'shape' => 'Endpoint', ], ], ], 'GetSuiteDefinitionRequest' => [ 'type' => 'structure', 'required' => [ 'suiteDefinitionId', ], 'members' => [ 'suiteDefinitionId' => [ 'shape' => 'UUID', 'location' => 'uri', 'locationName' => 'suiteDefinitionId', ], 'suiteDefinitionVersion' => [ 'shape' => 'SuiteDefinitionVersion', 'location' => 'querystring', 'locationName' => 'suiteDefinitionVersion', ], ], ], 'GetSuiteDefinitionResponse' => [ 'type' => 'structure', 'members' => [ 'suiteDefinitionId' => [ 'shape' => 'UUID', ], 'suiteDefinitionArn' => [ 'shape' => 'AmazonResourceName', ], 'suiteDefinitionVersion' => [ 'shape' => 'SuiteDefinitionVersion', ], 'latestVersion' => [ 'shape' => 'SuiteDefinitionVersion', ], 'suiteDefinitionConfiguration' => [ 'shape' => 'SuiteDefinitionConfiguration', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'lastModifiedAt' => [ 'shape' => 'Timestamp', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'GetSuiteRunReportRequest' => [ 'type' => 'structure', 'required' => [ 'suiteDefinitionId', 'suiteRunId', ], 'members' => [ 'suiteDefinitionId' => [ 'shape' => 'UUID', 'location' => 'uri', 'locationName' => 'suiteDefinitionId', ], 'suiteRunId' => [ 'shape' => 'UUID', 'location' => 'uri', 'locationName' => 'suiteRunId', ], ], ], 'GetSuiteRunReportResponse' => [ 'type' => 'structure', 'members' => [ 'qualificationReportDownloadUrl' => [ 'shape' => 'QualificationReportDownloadUrl', ], ], ], 'GetSuiteRunRequest' => [ 'type' => 'structure', 'required' => [ 'suiteDefinitionId', 'suiteRunId', ], 'members' => [ 'suiteDefinitionId' => [ 'shape' => 'UUID', 'location' => 'uri', 'locationName' => 'suiteDefinitionId', ], 'suiteRunId' => [ 'shape' => 'UUID', 'location' => 'uri', 'locationName' => 'suiteRunId', ], ], ], 'GetSuiteRunResponse' => [ 'type' => 'structure', 'members' => [ 'suiteDefinitionId' => [ 'shape' => 'UUID', ], 'suiteDefinitionVersion' => [ 'shape' => 'SuiteDefinitionVersion', ], 'suiteRunId' => [ 'shape' => 'UUID', ], 'suiteRunArn' => [ 'shape' => 'AmazonResourceName', ], 'suiteRunConfiguration' => [ 'shape' => 'SuiteRunConfiguration', ], 'testResult' => [ 'shape' => 'TestResult', ], 'startTime' => [ 'shape' => 'Timestamp', ], 'endTime' => [ 'shape' => 'Timestamp', ], 'status' => [ 'shape' => 'SuiteRunStatus', ], 'errorReason' => [ 'shape' => 'ErrorReason', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'GroupName' => [ 'type' => 'string', ], 'GroupResult' => [ 'type' => 'structure', 'members' => [ 'groupId' => [ 'shape' => 'UUID', ], 'groupName' => [ 'shape' => 'GroupName', ], 'tests' => [ 'shape' => 'TestCaseRuns', ], ], ], 'GroupResultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupResult', ], ], 'IntendedForQualificationBoolean' => [ 'type' => 'boolean', ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'ListSuiteDefinitionsRequest' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'Token', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListSuiteDefinitionsResponse' => [ 'type' => 'structure', 'members' => [ 'suiteDefinitionInformationList' => [ 'shape' => 'SuiteDefinitionInformationList', ], 'nextToken' => [ 'shape' => 'Token', ], ], ], 'ListSuiteRunsRequest' => [ 'type' => 'structure', 'members' => [ 'suiteDefinitionId' => [ 'shape' => 'UUID', 'location' => 'querystring', 'locationName' => 'suiteDefinitionId', ], 'suiteDefinitionVersion' => [ 'shape' => 'SuiteDefinitionVersion', 'location' => 'querystring', 'locationName' => 'suiteDefinitionVersion', ], 'maxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'Token', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListSuiteRunsResponse' => [ 'type' => 'structure', 'members' => [ 'suiteRunsList' => [ 'shape' => 'SuiteRunsList', ], 'nextToken' => [ 'shape' => 'Token', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'AmazonResourceName', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagMap', ], ], ], 'LogUrl' => [ 'type' => 'string', ], 'MaxResults' => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ], 'Message' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'ParallelRun' => [ 'type' => 'boolean', ], 'QualificationReportDownloadUrl' => [ 'type' => 'string', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'RootGroup' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'SelectedTestList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UUID', ], 'max' => 100, 'min' => 0, ], 'StartSuiteRunRequest' => [ 'type' => 'structure', 'required' => [ 'suiteDefinitionId', ], 'members' => [ 'suiteDefinitionId' => [ 'shape' => 'UUID', 'location' => 'uri', 'locationName' => 'suiteDefinitionId', ], 'suiteDefinitionVersion' => [ 'shape' => 'SuiteDefinitionVersion', ], 'suiteRunConfiguration' => [ 'shape' => 'SuiteRunConfiguration', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'StartSuiteRunResponse' => [ 'type' => 'structure', 'members' => [ 'suiteRunId' => [ 'shape' => 'UUID', ], 'suiteRunArn' => [ 'shape' => 'AmazonResourceName', ], 'createdAt' => [ 'shape' => 'Timestamp', ], ], ], 'Status' => [ 'type' => 'string', 'enum' => [ 'PASS', 'FAIL', 'CANCELED', 'PENDING', 'RUNNING', 'STOPPING', 'STOPPED', 'PASS_WITH_WARNINGS', 'ERROR', ], ], 'StopSuiteRunRequest' => [ 'type' => 'structure', 'required' => [ 'suiteDefinitionId', 'suiteRunId', ], 'members' => [ 'suiteDefinitionId' => [ 'shape' => 'UUID', 'location' => 'uri', 'locationName' => 'suiteDefinitionId', ], 'suiteRunId' => [ 'shape' => 'UUID', 'location' => 'uri', 'locationName' => 'suiteRunId', ], ], ], 'StopSuiteRunResponse' => [ 'type' => 'structure', 'members' => [], ], 'String128' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'String256' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'SuiteDefinitionConfiguration' => [ 'type' => 'structure', 'members' => [ 'suiteDefinitionName' => [ 'shape' => 'SuiteDefinitionName', ], 'devices' => [ 'shape' => 'DeviceUnderTestList', ], 'intendedForQualification' => [ 'shape' => 'IntendedForQualificationBoolean', ], 'rootGroup' => [ 'shape' => 'RootGroup', ], 'devicePermissionRoleArn' => [ 'shape' => 'AmazonResourceName', ], ], ], 'SuiteDefinitionInformation' => [ 'type' => 'structure', 'members' => [ 'suiteDefinitionId' => [ 'shape' => 'UUID', ], 'suiteDefinitionName' => [ 'shape' => 'SuiteDefinitionName', ], 'defaultDevices' => [ 'shape' => 'DeviceUnderTestList', ], 'intendedForQualification' => [ 'shape' => 'IntendedForQualificationBoolean', ], 'createdAt' => [ 'shape' => 'Timestamp', ], ], ], 'SuiteDefinitionInformationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SuiteDefinitionInformation', ], ], 'SuiteDefinitionName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'SuiteDefinitionVersion' => [ 'type' => 'string', 'max' => 255, 'min' => 2, ], 'SuiteRunConfiguration' => [ 'type' => 'structure', 'members' => [ 'primaryDevice' => [ 'shape' => 'DeviceUnderTest', ], 'selectedTestList' => [ 'shape' => 'SelectedTestList', ], 'parallelRun' => [ 'shape' => 'ParallelRun', ], ], ], 'SuiteRunInformation' => [ 'type' => 'structure', 'members' => [ 'suiteDefinitionId' => [ 'shape' => 'UUID', ], 'suiteDefinitionVersion' => [ 'shape' => 'SuiteDefinitionVersion', ], 'suiteDefinitionName' => [ 'shape' => 'SuiteDefinitionName', ], 'suiteRunId' => [ 'shape' => 'UUID', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'startedAt' => [ 'shape' => 'Timestamp', ], 'endAt' => [ 'shape' => 'Timestamp', ], 'status' => [ 'shape' => 'SuiteRunStatus', ], 'passed' => [ 'shape' => 'SuiteRunResultCount', ], 'failed' => [ 'shape' => 'SuiteRunResultCount', ], ], ], 'SuiteRunResultCount' => [ 'type' => 'integer', 'max' => 500, 'min' => 0, ], 'SuiteRunStatus' => [ 'type' => 'string', 'enum' => [ 'PASS', 'FAIL', 'CANCELED', 'PENDING', 'RUNNING', 'STOPPING', 'STOPPED', 'PASS_WITH_WARNINGS', 'ERROR', ], ], 'SuiteRunsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SuiteRunInformation', ], ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String128', ], 'max' => 50, 'min' => 0, ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String128', ], 'value' => [ 'shape' => 'String256', ], 'max' => 50, 'min' => 0, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'AmazonResourceName', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TestCaseDefinitionName' => [ 'type' => 'string', ], 'TestCaseRun' => [ 'type' => 'structure', 'members' => [ 'testCaseRunId' => [ 'shape' => 'UUID', ], 'testCaseDefinitionId' => [ 'shape' => 'UUID', ], 'testCaseDefinitionName' => [ 'shape' => 'TestCaseDefinitionName', ], 'status' => [ 'shape' => 'Status', ], 'startTime' => [ 'shape' => 'Timestamp', ], 'endTime' => [ 'shape' => 'Timestamp', ], 'logUrl' => [ 'shape' => 'LogUrl', ], 'warnings' => [ 'shape' => 'Warnings', ], 'failure' => [ 'shape' => 'Failure', ], ], ], 'TestCaseRuns' => [ 'type' => 'list', 'member' => [ 'shape' => 'TestCaseRun', ], ], 'TestResult' => [ 'type' => 'structure', 'members' => [ 'groups' => [ 'shape' => 'GroupResultList', ], ], ], 'Timestamp' => [ 'type' => 'timestamp', ], 'Token' => [ 'type' => 'string', 'max' => 2000, ], 'UUID' => [ 'type' => 'string', 'max' => 36, 'min' => 12, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'AmazonResourceName', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateSuiteDefinitionRequest' => [ 'type' => 'structure', 'required' => [ 'suiteDefinitionId', ], 'members' => [ 'suiteDefinitionId' => [ 'shape' => 'UUID', 'location' => 'uri', 'locationName' => 'suiteDefinitionId', ], 'suiteDefinitionConfiguration' => [ 'shape' => 'SuiteDefinitionConfiguration', ], ], ], 'UpdateSuiteDefinitionResponse' => [ 'type' => 'structure', 'members' => [ 'suiteDefinitionId' => [ 'shape' => 'UUID', ], 'suiteDefinitionArn' => [ 'shape' => 'AmazonResourceName', ], 'suiteDefinitionName' => [ 'shape' => 'SuiteDefinitionName', ], 'suiteDefinitionVersion' => [ 'shape' => 'SuiteDefinitionVersion', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'lastUpdatedAt' => [ 'shape' => 'Timestamp', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'Warnings' => [ 'type' => 'string', ], ],];
