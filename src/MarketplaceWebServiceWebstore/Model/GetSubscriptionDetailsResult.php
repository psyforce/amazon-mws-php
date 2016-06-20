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
 * MarketplaceWebServiceWebstore_Model_GetSubscriptionDetailsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MarketplaceId: string</li>
 * <li>SellerSKU: string</li>
 * <li>SubscriptionState: string</li>
 * <li>TotalSubscriptionCount: int</li>
 * <li>SubscriptionDetailList: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceWebstore_Model_GetSubscriptionDetailsResult extends MarketplaceWebServiceWebstore_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SubscriptionState' => array('FieldValue' => null, 'FieldType' => 'string'),
    'TotalSubscriptionCount' => array('FieldValue' => null, 'FieldType' => 'int'),
    'SubscriptionDetailList' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceWebstore_Model_SubscriptionDetail'), 'ListMemberName' => 'SubscriptionDetail'),
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
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return this instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
                return !is_null($this->_fields['SellerSKU']['FieldValue']);
            }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
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
     * Get the value of the TotalSubscriptionCount property.
     *
     * @return Integer TotalSubscriptionCount.
     */
    public function getTotalSubscriptionCount()
    {
        return $this->_fields['TotalSubscriptionCount']['FieldValue'];
    }

    /**
     * Set the value of the TotalSubscriptionCount property.
     *
     * @param int totalSubscriptionCount
     * @return this instance
     */
    public function setTotalSubscriptionCount($value)
    {
        $this->_fields['TotalSubscriptionCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TotalSubscriptionCount is set.
     *
     * @return true if TotalSubscriptionCount is set.
     */
    public function isSetTotalSubscriptionCount()
    {
                return !is_null($this->_fields['TotalSubscriptionCount']['FieldValue']);
            }

    /**
     * Set the value of TotalSubscriptionCount, return this.
     *
     * @param totalSubscriptionCount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTotalSubscriptionCount($value)
    {
        $this->setTotalSubscriptionCount($value);
        return $this;
    }

    /**
     * Get the value of the SubscriptionDetailList property.
     *
     * @return List<SubscriptionDetail> SubscriptionDetailList.
     */
    public function getSubscriptionDetailList()
    {
        if ($this->_fields['SubscriptionDetailList']['FieldValue'] == null)
        {
            $this->_fields['SubscriptionDetailList']['FieldValue'] = array();
        }
        return $this->_fields['SubscriptionDetailList']['FieldValue'];
    }

    /**
     * Set the value of the SubscriptionDetailList property.
     *
     * @param array subscriptionDetailList
     * @return this instance
     */
    public function setSubscriptionDetailList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['SubscriptionDetailList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear SubscriptionDetailList.
     */
    public function unsetSubscriptionDetailList()
    {
        $this->_fields['SubscriptionDetailList']['FieldValue'] = array();
    }

    /**
     * Check to see if SubscriptionDetailList is set.
     *
     * @return true if SubscriptionDetailList is set.
     */
    public function isSetSubscriptionDetailList()
    {
                return !empty($this->_fields['SubscriptionDetailList']['FieldValue']);
            }

    /**
     * Add values for SubscriptionDetailList, return this.
     *
     * @param subscriptionDetailList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withSubscriptionDetailList()
    {
        foreach (func_get_args() as $SubscriptionDetailList)
        {
            $this->_fields['SubscriptionDetailList']['FieldValue'][] = $SubscriptionDetailList;
        }
        return $this;
    }

}
