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

class Google_Service_Datastore_Query extends Google_Collection
{
    protected $collection_key = 'projection';
    protected $internal_gapi_mappings = array(
    );
    public $endCursor;
    protected $filterType = 'Google_Service_Datastore_Filter';
    protected $filterDataType = '';
    protected $groupByType = 'Google_Service_Datastore_PropertyReference';
    protected $groupByDataType = 'array';
    protected $kindsType = 'Google_Service_Datastore_KindExpression';
    protected $kindsDataType = 'array';
    public $limit;
    public $offset;
    protected $orderType = 'Google_Service_Datastore_PropertyOrder';
    protected $orderDataType = 'array';
    protected $projectionType = 'Google_Service_Datastore_PropertyExpression';
    protected $projectionDataType = 'array';
    public $startCursor;


    public function setEndCursor($endCursor)
    {
        $this->endCursor = $endCursor;
    }
    public function getEndCursor()
    {
        return $this->endCursor;
    }
    public function setFilter(Google_Service_Datastore_Filter $filter)
    {
        $this->filter = $filter;
    }
    public function getFilter()
    {
        return $this->filter;
    }
    public function setGroupBy($groupBy)
    {
        $this->groupBy = $groupBy;
    }
    public function getGroupBy()
    {
        return $this->groupBy;
    }
    public function setKinds($kinds)
    {
        $this->kinds = $kinds;
    }
    public function getKinds()
    {
        return $this->kinds;
    }
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }
    public function getLimit()
    {
        return $this->limit;
    }
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }
    public function getOffset()
    {
        return $this->offset;
    }
    public function setOrder($order)
    {
        $this->order = $order;
    }
    public function getOrder()
    {
        return $this->order;
    }
    public function setProjection($projection)
    {
        $this->projection = $projection;
    }
    public function getProjection()
    {
        return $this->projection;
    }
    public function setStartCursor($startCursor)
    {
        $this->startCursor = $startCursor;
    }
    public function getStartCursor()
    {
        return $this->startCursor;
    }
}
