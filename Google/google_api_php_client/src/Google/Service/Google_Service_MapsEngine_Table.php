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

class Google_Service_MapsEngine_Table extends Google_Collection
{
    protected $collection_key = 'tags';
    protected $internal_gapi_mappings = array(
    );
    public $bbox;
    public $creationTime;
    public $creatorEmail;
    public $description;
    public $draftAccessList;
    public $etag;
    protected $filesType = 'Google_Service_MapsEngine_MapsengineFile';
    protected $filesDataType = 'array';
    public $id;
    public $lastModifiedTime;
    public $lastModifierEmail;
    public $name;
    public $processingStatus;
    public $projectId;
    public $publishedAccessList;
    protected $schemaType = 'Google_Service_MapsEngine_Schema';
    protected $schemaDataType = '';
    public $sourceEncoding;
    public $tags;
    public $writersCanEditPermissions;


    public function setBbox($bbox)
    {
        $this->bbox = $bbox;
    }
    public function getBbox()
    {
        return $this->bbox;
    }
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }
    public function getCreationTime()
    {
        return $this->creationTime;
    }
    public function setCreatorEmail($creatorEmail)
    {
        $this->creatorEmail = $creatorEmail;
    }
    public function getCreatorEmail()
    {
        return $this->creatorEmail;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDraftAccessList($draftAccessList)
    {
        $this->draftAccessList = $draftAccessList;
    }
    public function getDraftAccessList()
    {
        return $this->draftAccessList;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setFiles($files)
    {
        $this->files = $files;
    }
    public function getFiles()
    {
        return $this->files;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->lastModifiedTime = $lastModifiedTime;
    }
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }
    public function setLastModifierEmail($lastModifierEmail)
    {
        $this->lastModifierEmail = $lastModifierEmail;
    }
    public function getLastModifierEmail()
    {
        return $this->lastModifierEmail;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setProcessingStatus($processingStatus)
    {
        $this->processingStatus = $processingStatus;
    }
    public function getProcessingStatus()
    {
        return $this->processingStatus;
    }
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
    public function getProjectId()
    {
        return $this->projectId;
    }
    public function setPublishedAccessList($publishedAccessList)
    {
        $this->publishedAccessList = $publishedAccessList;
    }
    public function getPublishedAccessList()
    {
        return $this->publishedAccessList;
    }
    public function setSchema(Google_Service_MapsEngine_Schema $schema)
    {
        $this->schema = $schema;
    }
    public function getSchema()
    {
        return $this->schema;
    }
    public function setSourceEncoding($sourceEncoding)
    {
        $this->sourceEncoding = $sourceEncoding;
    }
    public function getSourceEncoding()
    {
        return $this->sourceEncoding;
    }
    public function setTags($tags)
    {
        $this->tags = $tags;
    }
    public function getTags()
    {
        return $this->tags;
    }
    public function setWritersCanEditPermissions($writersCanEditPermissions)
    {
        $this->writersCanEditPermissions = $writersCanEditPermissions;
    }
    public function getWritersCanEditPermissions()
    {
        return $this->writersCanEditPermissions;
    }
}
