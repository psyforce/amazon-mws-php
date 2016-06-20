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
 * MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>MarketplaceId: string</li>
 * <li>SubscriptionState: string</li>
 * <li>DateRangeStart: string</li>
 * <li>DateRangeEnd: string</li>
 * <li>SellerSKUList: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceWebstore_Model_ListSubscriptionsCountRequest extends MarketplaceWebServiceWebstore_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SubscriptionState' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DateRangeStart' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DateRangeEnd' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SellerSKUList' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'SellerSKU'),
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
     * Get the value of the MWSAuthToken property.
     *
     * @return String MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
                return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
            }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
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
     * Get the value of the SubscriptionState property.
     *
     * @return String SubscriptionState.
     */
    public function getSubscriptionState()
    {
        return $this->_fields['SubscriptionState']['FieldValue'];
    }

    /**
     * Set the value of the SubscriptionState property.
     *
     * @param string subscriptionState
     * @return this instance
     */
    public function setSubscriptionState($value)
    {
        $this->_fields['SubscriptionState']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SubscriptionState is set.
     *
     * @return true if SubscriptionState is set.
     */
    public function isSetSubscriptionState()
    {
                return !is_null($this->_fields['SubscriptionState']['FieldValue']);
            }

    /**
     * Set the value of SubscriptionState, return this.
     *
     * @param subscriptionState
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSubscriptionState($value)
    {
        $this->setSubscriptionState($value);
        return $this;
    }

    /**
     * Get the value of the DateRangeStart property.
     *
     * @return XMLGregorianCalendar DateRangeStart.
     */
    public function getDateRangeStart()
    {
        return $this->_fields['DateRangeStart']['FieldValue'];
    }

    /**
     * Set the value of the DateRangeStart property.
     *
     * @param string dateRangeStart
     * @return this instance
     */
    public function setDateRangeStart($value)
    {
        $this->_fields['DateRangeStart']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DateRangeStart is set.
     *
     * @return true if DateRangeStart is set.
     */
    public function isSetDateRangeStart()
    {
                return !is_null($this->_fields['DateRangeStart']['FieldValue']);
            }

    /**
     * Set the value of DateRangeStart, return this.
     *
     * @param dateRangeStart
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDateRangeStart($value)
    {
        $this->setDateRangeStart($value);
        return $this;
    }

    /**
     * Get the value of the DateRangeEnd property.
     *
     * @return XMLGregorianCalendar DateRangeEnd.
     */
    public function getDateRangeEnd()
    {
        return $this->_fields['DateRangeEnd']['FieldValue'];
    }

    /**
     * Set the value of the DateRangeEnd property.
     *
     * @param string dateRangeEnd
     * @return this instance
     */
    public function setDateRangeEnd($value)
    {
        $this->_fields['DateRangeEnd']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DateRangeEnd is set.
     *
     * @return true if DateRangeEnd is set.
     */
    public function isSetDateRangeEnd()
    {
                return !is_null($this->_fields['DateRangeEnd']['FieldValue']);
            }

    /**
     * Set the value of DateRangeEnd, return this.
     *
     * @param dateRangeEnd
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDateRangeEnd($value)
    {
        $this->setDateRangeEnd($value);
        return $this;
    }

    /**
     * Get the value of the SellerSKUList property.
     *
     * @return List<String> SellerSKUList.
     */
    public function getSellerSKUList()
    {
        if ($this->_fields['SellerSKUList']['FieldValue'] == null)
        {
            $this->_fields['SellerSKUList']['FieldValue'] = array();
        }
        return $this->_fields['SellerSKUList']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKUList property.
     *
     * @param array sellerSKUList
     * @return this instance
     */
    public function setSellerSKUList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['SellerSKUList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear SellerSKUList.
     */
    public function unsetSellerSKUList()
    {
        $this->_fields['SellerSKUList']['FieldValue'] = array();
    }

    /**
     * Check to see if SellerSKUList is set.
     *
     * @return true if SellerSKUList is set.
     */
    public function isSetSellerSKUList()
    {
                return !empty($this->_fields['SellerSKUList']['FieldValue']);
            }

    /**
     * Add values for SellerSKUList, return this.
     *
     * @param sellerSKUList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withSellerSKUList()
    {
        foreach (func_get_args() as $SellerSKUList)
        {
            $this->_fields['SellerSKUList']['FieldValue'][] = $SellerSKUList;
        }
        return $this;
    }

}
