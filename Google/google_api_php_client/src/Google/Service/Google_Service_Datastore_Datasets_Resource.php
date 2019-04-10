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
 * The "datasets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datastoreService = new Google_Service_Datastore(...);
 *   $datasets = $datastoreService->datasets;
 *  </code>
 */
class Google_Service_Datastore_Datasets_Resource extends Google_Service_Resource
{

    /**
     * Allocate IDs for incomplete keys (useful for referencing an entity before it
     * is inserted). (datasets.allocateIds)
     *
     * @param string $datasetId Identifies the dataset.
     * @param Google_AllocateIdsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Datastore_AllocateIdsResponse
     */
    public function allocateIds($datasetId, Google_Service_Datastore_AllocateIdsRequest $postBody, $optParams = array())
    {
        $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('allocateIds', array($params), "Google_Service_Datastore_AllocateIdsResponse");
    }

    /**
     * Begin a new transaction. (datasets.beginTransaction)
     *
     * @param string $datasetId Identifies the dataset.
     * @param Google_BeginTransactionRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Datastore_BeginTransactionResponse
     */
    public function beginTransaction($datasetId, Google_Service_Datastore_BeginTransactionRequest $postBody, $optParams = array())
    {
        $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('beginTransaction', array($params), "Google_Service_Datastore_BeginTransactionResponse");
    }

    /**
     * Commit a transaction, optionally creating, deleting or modifying some
     * entities. (datasets.commit)
     *
     * @param string $datasetId Identifies the dataset.
     * @param Google_CommitRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Datastore_CommitResponse
     */
    public function commit($datasetId, Google_Service_Datastore_CommitRequest $postBody, $optParams = array())
    {
        $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('commit', array($params), "Google_Service_Datastore_CommitResponse");
    }

    /**
     * Look up some entities by key. (datasets.lookup)
     *
     * @param string $datasetId Identifies the dataset.
     * @param Google_LookupRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Datastore_LookupResponse
     */
    public function lookup($datasetId, Google_Service_Datastore_LookupRequest $postBody, $optParams = array())
    {
        $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('lookup', array($params), "Google_Service_Datastore_LookupResponse");
    }

    /**
     * Roll back a transaction. (datasets.rollback)
     *
     * @param string $datasetId Identifies the dataset.
     * @param Google_RollbackRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Datastore_RollbackResponse
     */
    public function rollback($datasetId, Google_Service_Datastore_RollbackRequest $postBody, $optParams = array())
    {
        $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('rollback', array($params), "Google_Service_Datastore_RollbackResponse");
    }

    /**
     * Query for entities. (datasets.runQuery)
     *
     * @param string $datasetId Identifies the dataset.
     * @param Google_RunQueryRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Datastore_RunQueryResponse
     */
    public function runQuery($datasetId, Google_Service_Datastore_RunQueryRequest $postBody, $optParams = array())
    {
        $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('runQuery', array($params), "Google_Service_Datastore_RunQueryResponse");
    }
}


