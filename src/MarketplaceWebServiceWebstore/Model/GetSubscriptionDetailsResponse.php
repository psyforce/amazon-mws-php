<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Webstore
 * @version  2014-09-01
 * Library Version: 2015-06-18
 * Generated: Thu Jun 18 19:29:42 GMT 2015
 */

/**
 *  @see MarketplaceWebServiceWebstore_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceWebstore_Model_GetSubscriptionDetailsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetSubscriptionDetailsResult: MarketplaceWebServiceWebstore_Model_GetSubscriptionDetailsResult</li>
 * <li>ResponseMetadata: MarketplaceWebServiceWebstore_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MarketplaceWebServiceWebstore_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceWebstore_Model_GetSubscriptionDetailsResponse extends MarketplaceWebServiceWebstore_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'GetSubscriptionDetailsResult' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceWebstore_Model_GetSubscriptionDetailsResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceWebstore_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceWebstore_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the GetSubscriptionDetailsResult property.
     *
     * @return GetSubscriptionDetailsResult GetSubscriptionDetailsResult.
     */
    public function getGetSubscriptionDetailsResult()
    {
        return $this->_fields['GetSubscriptionDetailsResult']['FieldValue'];
    }

    /**
     * Set the value of the GetSubscriptionDetailsResult property.
     *
     * @param MarketplaceWebServiceWebstore_Model_GetSubscriptionDetailsResult getSubscriptionDetailsResult
     * @return this instance
     */
    public function setGetSubscriptionDetailsResult($value)
    {
        $this->_fields['GetSubscriptionDetailsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetSubscriptionDetailsResult is set.
     *
     * @return true if GetSubscriptionDetailsResult is set.
     */
    public function isSetGetSubscriptionDetailsResult()
    {
                return !is_null($this->_fields['GetSubscriptionDetailsResult']['FieldValue']);
            }

    /**
     * Set the value of GetSubscriptionDetailsResult, return this.
     *
     * @param getSubscriptionDetailsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetSubscriptionDetailsResult($value)
    {
        $this->setGetSubscriptionDetailsResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param MarketplaceWebServiceWebstore_Model_ResponseMetadata responseMetadata
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
                return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param MarketplaceWebServiceWebstore_Model_ResponseHeaderMetadata responseHeaderMetadata
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
                return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }
    /**
     * Construct MarketplaceWebServiceWebstore_Model_GetSubscriptionDetailsResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MarketplaceWebServiceWebstore_Model_GetSubscriptionDetailsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetSubscriptionDetailsResponse']");
        if ($response->length == 1) {
            return new MarketplaceWebServiceWebstore_Model_GetSubscriptionDetailsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MarketplaceWebServiceWebstore_Model_GetSubscriptionDetailsResponse from provided XML. 
                                  Make sure that GetSubscriptionDetailsResponse is a root element");
        }
    }
    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<GetSubscriptionDetailsResponse xmlns=\"http://mws.amazonservices.com/schema/Webstore/2014-09-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetSubscriptionDetailsResponse>";
        return $xml;
    }

}
