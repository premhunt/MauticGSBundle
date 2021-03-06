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



class Google_Service_Audit_ActivityEvents extends Google_Collection
{
    protected $collection_key = 'parameters';
    protected $internal_gapi_mappings = array(
    );
    public $eventType;
    public $name;
    protected $parametersType = 'Google_Service_Audit_ActivityEventsParameters';
    protected $parametersDataType = 'array';


    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }
    public function getEventType()
    {
        return $this->eventType;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }
    public function getParameters()
    {
        return $this->parameters;
    }
}