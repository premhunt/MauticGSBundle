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



class Google_Service_Bigquery_Table extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $creationTime;
    public $description;
    public $etag;
    public $expirationTime;
    public $friendlyName;
    public $id;
    public $kind;
    public $lastModifiedTime;
    public $numBytes;
    public $numRows;
    protected $schemaType = 'Google_Service_Bigquery_TableSchema';
    protected $schemaDataType = '';
    public $selfLink;
    protected $tableReferenceType = 'Google_Service_Bigquery_TableReference';
    protected $tableReferenceDataType = '';
    public $type;
    protected $viewType = 'Google_Service_Bigquery_ViewDefinition';
    protected $viewDataType = '';


    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }
    public function getCreationTime()
    {
        return $this->creationTime;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setExpirationTime($expirationTime)
    {
        $this->expirationTime = $expirationTime;
    }
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
    }
    public function getFriendlyName()
    {
        return $this->friendlyName;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->lastModifiedTime = $lastModifiedTime;
    }
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }
    public function setNumBytes($numBytes)
    {
        $this->numBytes = $numBytes;
    }
    public function getNumBytes()
    {
        return $this->numBytes;
    }
    public function setNumRows($numRows)
    {
        $this->numRows = $numRows;
    }
    public function getNumRows()
    {
        return $this->numRows;
    }
    public function setSchema(Google_Service_Bigquery_TableSchema $schema)
    {
        $this->schema = $schema;
    }
    public function getSchema()
    {
        return $this->schema;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTableReference(Google_Service_Bigquery_TableReference $tableReference)
    {
        $this->tableReference = $tableReference;
    }
    public function getTableReference()
    {
        return $this->tableReference;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setView(Google_Service_Bigquery_ViewDefinition $view)
    {
        $this->view = $view;
    }
    public function getView()
    {
        return $this->view;
    }
}