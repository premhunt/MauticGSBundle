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

class Google_Service_GamesManagement_Player extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $avatarImageUrl;
    public $displayName;
    protected $experienceInfoType = 'Google_Service_GamesManagement_GamesPlayerExperienceInfoResource';
    protected $experienceInfoDataType = '';
    public $kind;
    protected $lastPlayedWithType = 'Google_Service_GamesManagement_GamesPlayedResource';
    protected $lastPlayedWithDataType = '';
    protected $nameType = 'Google_Service_GamesManagement_PlayerName';
    protected $nameDataType = '';
    public $playerId;
    public $title;


    public function setAvatarImageUrl($avatarImageUrl)
    {
        $this->avatarImageUrl = $avatarImageUrl;
    }
    public function getAvatarImageUrl()
    {
        return $this->avatarImageUrl;
    }
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setExperienceInfo(Google_Service_GamesManagement_GamesPlayerExperienceInfoResource $experienceInfo)
    {
        $this->experienceInfo = $experienceInfo;
    }
    public function getExperienceInfo()
    {
        return $this->experienceInfo;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLastPlayedWith(Google_Service_GamesManagement_GamesPlayedResource $lastPlayedWith)
    {
        $this->lastPlayedWith = $lastPlayedWith;
    }
    public function getLastPlayedWith()
    {
        return $this->lastPlayedWith;
    }
    public function setName(Google_Service_GamesManagement_PlayerName $name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPlayerId($playerId)
    {
        $this->playerId = $playerId;
    }
    public function getPlayerId()
    {
        return $this->playerId;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
}
