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

class Google_Service_Datastore_LookupResponse extends Google_Collection
{
    protected $collection_key = 'missing';
    protected $internal_gapi_mappings = array(
    );
    protected $deferredType = 'Google_Service_Datastore_Key';
    protected $deferredDataType = 'array';
    protected $foundType = 'Google_Service_Datastore_EntityResult';
    protected $foundDataType = 'array';
    protected $headerType = 'Google_Service_Datastore_ResponseHeader';
    protected $headerDataType = '';
    protected $missingType = 'Google_Service_Datastore_EntityResult';
    protected $missingDataType = 'array';


    public function setDeferred($deferred)
    {
        $this->deferred = $deferred;
    }
    public function getDeferred()
    {
        return $this->deferred;
    }
    public function setFound($found)
    {
        $this->found = $found;
    }
    public function getFound()
    {
        return $this->found;
    }
    public function setHeader(Google_Service_Datastore_ResponseHeader $header)
    {
        $this->header = $header;
    }
    public function getHeader()
    {
        return $this->header;
    }
    public function setMissing($missing)
    {
        $this->missing = $missing;
    }
    public function getMissing()
    {
        return $this->missing;
    }
}
