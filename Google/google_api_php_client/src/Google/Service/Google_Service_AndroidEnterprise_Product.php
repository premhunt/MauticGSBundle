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



class Google_Service_AndroidEnterprise_Product extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $authorName;
    public $detailsUrl;
    public $iconUrl;
    public $kind;
    public $productId;
    public $title;
    public $workDetailsUrl;


    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
    }
    public function getAuthorName()
    {
        return $this->authorName;
    }
    public function setDetailsUrl($detailsUrl)
    {
        $this->detailsUrl = $detailsUrl;
    }
    public function getDetailsUrl()
    {
        return $this->detailsUrl;
    }
    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;
    }
    public function getIconUrl()
    {
        return $this->iconUrl;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    public function getProductId()
    {
        return $this->productId;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setWorkDetailsUrl($workDetailsUrl)
    {
        $this->workDetailsUrl = $workDetailsUrl;
    }
    public function getWorkDetailsUrl()
    {
        return $this->workDetailsUrl;
    }
}