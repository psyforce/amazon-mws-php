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
 * MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountByNextTokenResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MarketplaceId: string</li>
 * <li>StartDate: string</li>
 * <li>EndDate: string</li>
 * <li>SubscriptionList: array</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountByNextTokenResult extends MarketplaceWebServiceWebstore_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'StartDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'EndDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SubscriptionList' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceWebstore_Model_Subscription'), 'ListMemberName' => 'Subscription'),
    'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
                return !is_null($this->_fields['SellerId']['FieldValue']);
            }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return this instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
                return !is_null($this->_fields['MarketplaceId']['FieldValue']);
            }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
    }

    /**
     * Get the value of the StartDate property.
     *
     * @return XMLGregorianCalendar StartDate.
     */
    public function getStartDate()
    {
        return $this->_fields['StartDate']['FieldValue'];
    }

    /**
     * Set the value of the StartDate property.
     *
     * @param string startDate
     * @return this instance
     */
    public function setStartDate($value)
    {
        $this->_fields['StartDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if StartDate is set.
     *
     * @return true if StartDate is set.
     */
    public function isSetStartDate()
    {
                return !is_null($this->_fields['StartDate']['FieldValue']);
            }

    /**
     * Set the value of StartDate, return this.
     *
     * @param startDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withStartDate($value)
    {
        $this->setStartDate($value);
        return $this;
    }

    /**
     * Get the value of the EndDate property.
     *
     * @return XMLGregorianCalendar EndDate.
     */
    public function getEndDate()
    {
        return $this->_fields['EndDate']['FieldValue'];
    }

    /**
     * Set the value of the EndDate property.
     *
     * @param string endDate
     * @return this instance
     */
    public function setEndDate($value)
    {
        $this->_fields['EndDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EndDate is set.
     *
     * @return true if EndDate is set.
     */
    public function isSetEndDate()
    {
                return !is_null($this->_fields['EndDate']['FieldValue']);
            }

    /**
     * Set the value of EndDate, return this.
     *
     * @param endDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEndDate($value)
    {
        $this->setEndDate($value);
        return $this;
    }

    /**
     * Get the value of the SubscriptionList property.
     *
     * @return List<Subscription> SubscriptionList.
     */
    public function getSubscriptionList()
    {
        if ($this->_fields['SubscriptionList']['FieldValue'] == null)
        {
            $this->_fields['SubscriptionList']['FieldValue'] = array();
        }
        return $this->_fields['SubscriptionList']['FieldValue'];
    }

    /**
     * Set the value of the SubscriptionList property.
     *
     * @param array subscriptionList
     * @return this instance
     */
    public function setSubscriptionList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['SubscriptionList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear SubscriptionList.
     */
    public function unsetSubscriptionList()
    {
        $this->_fields['SubscriptionList']['FieldValue'] = array();
    }

    /**
     * Check to see if SubscriptionList is set.
     *
     * @return true if SubscriptionList is set.
     */
    public function isSetSubscriptionList()
    {
                return !empty($this->_fields['SubscriptionList']['FieldValue']);
            }

    /**
     * Add values for SubscriptionList, return this.
     *
     * @param subscriptionList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withSubscriptionList()
    {
        foreach (func_get_args() as $SubscriptionList)
        {
            $this->_fields['SubscriptionList']['FieldValue'][] = $SubscriptionList;
        }
        return $this;
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return this instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
                return !is_null($this->_fields['NextToken']['FieldValue']);
            }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }

}
