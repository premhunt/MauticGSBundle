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

class Google_Service_MapsEngine_Border extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $color;
    public $opacity;
    public $width;


    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;
    }
    public function getOpacity()
    {
        return $this->opacity;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getWidth()
    {
        return $this->width;
    }
}
