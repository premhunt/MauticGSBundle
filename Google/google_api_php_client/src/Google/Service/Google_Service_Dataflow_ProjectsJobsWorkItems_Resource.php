<?php
namespace MauticPlugin\MauticGSBundle\Google\google_api_php_client\src\Google\Service;
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */



/**
 * The "workItems" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataflowService = new Google_Service_Dataflow(...);
 *   $workItems = $dataflowService->workItems;
 *  </code>
 */
class Google_Service_Dataflow_ProjectsJobsWorkItems_Resource extends Google_Service_Resource
{

    /**
     * Leases a dataflow WorkItem to run. (workItems.lease)
     *
     * @param string $projectId
     * @param string $jobId
     * @param Google_LeaseWorkItemRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Dataflow_LeaseWorkItemResponse
     */
    public function lease($projectId, $jobId, Google_Service_Dataflow_LeaseWorkItemRequest $postBody, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'jobId' => $jobId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('lease', array($params), "Google_Service_Dataflow_LeaseWorkItemResponse");
    }

    /**
     * Reports the status of dataflow WorkItems leased by a worker.
     * (workItems.reportStatus)
     *
     * @param string $projectId
     * @param string $jobId
     * @param Google_ReportWorkItemStatusRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Dataflow_ReportWorkItemStatusResponse
     */
    public function reportStatus($projectId, $jobId, Google_Service_Dataflow_ReportWorkItemStatusRequest $postBody, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'jobId' => $jobId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('reportStatus', array($params), "Google_Service_Dataflow_ReportWorkItemStatusResponse");
    }
}