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

class Google_Service_Prediction_AnalyzeDataDescriptionOutputFeature extends Google_Collection
{
    protected $collection_key = 'text';
    protected $internal_gapi_mappings = array(
    );
    protected $numericType = 'Google_Service_Prediction_AnalyzeDataDescriptionOutputFeatureNumeric';
    protected $numericDataType = '';
    protected $textType = 'Google_Service_Prediction_AnalyzeDataDescriptionOutputFeatureText';
    protected $textDataType = 'array';


    public function setNumeric(Google_Service_Prediction_AnalyzeDataDescriptionOutputFeatureNumeric $numeric)
    {
        $this->numeric = $numeric;
    }
    public function getNumeric()
    {
        return $this->numeric;
    }
    public function setText($text)
    {
        $this->text = $text;
    }
    public function getText()
    {
        return $this->text;
    }
}
