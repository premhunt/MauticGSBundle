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

class Google_Service_Datastore_PropertyFilter extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $operator;
    protected $propertyType = 'Google_Service_Datastore_PropertyReference';
    protected $propertyDataType = '';
    protected $valueType = 'Google_Service_Datastore_Value';
    protected $valueDataType = '';


    public function setOperator($operator)
    {
        $this->operator = $operator;
    }
    public function getOperator()
    {
        return $this->operator;
    }
    public function setProperty(Google_Service_Datastore_PropertyReference $property)
    {
        $this->property = $property;
    }
    public function getProperty()
    {
        return $this->property;
    }
    public function setValue(Google_Service_Datastore_Value $value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
