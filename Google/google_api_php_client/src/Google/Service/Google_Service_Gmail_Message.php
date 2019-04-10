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


class Google_Service_Gmail_Message extends Google_Collection
{
    protected $collection_key = 'labelIds';
    protected $internal_gapi_mappings = array(
    );
    public $historyId;
    public $id;
    public $labelIds;
    protected $payloadType = 'Google_Service_Gmail_MessagePart';
    protected $payloadDataType = '';
    public $raw;
    public $sizeEstimate;
    public $snippet;
    public $threadId;


    public function setHistoryId($historyId)
    {
        $this->historyId = $historyId;
    }
    public function getHistoryId()
    {
        return $this->historyId;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setLabelIds($labelIds)
    {
        $this->labelIds = $labelIds;
    }
    public function getLabelIds()
    {
        return $this->labelIds;
    }
    public function setPayload(Google_Service_Gmail_MessagePart $payload)
    {
        $this->payload = $payload;
    }
    public function getPayload()
    {
        return $this->payload;
    }
    public function setRaw($raw)
    {
        $this->raw = $raw;
    }
    public function getRaw()
    {
        return $this->raw;
    }
    public function setSizeEstimate($sizeEstimate)
    {
        $this->sizeEstimate = $sizeEstimate;
    }
    public function getSizeEstimate()
    {
        return $this->sizeEstimate;
    }
    public function setSnippet($snippet)
    {
        $this->snippet = $snippet;
    }
    public function getSnippet()
    {
        return $this->snippet;
    }
    public function setThreadId($threadId)
    {
        $this->threadId = $threadId;
    }
    public function getThreadId()
    {
        return $this->threadId;
    }
}