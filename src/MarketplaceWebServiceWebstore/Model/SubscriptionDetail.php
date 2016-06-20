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
 * MarketplaceWebServiceWebstore_Model_SubscriptionDetail
 * 
 * Properties:
 * <ul>
 * 
 * <li>Date: string</li>
 * <li>SubscriptionCount: int</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceWebstore_Model_SubscriptionDetail extends MarketplaceWebServiceWebstore_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Date' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SubscriptionCount' => array('FieldValue' => null, 'FieldType' => 'int'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Date property.
     *
     * @return XMLGregorianCalendar Date.
     */
    public function getDate()
    {
        return $this->_fields['Date']['FieldValue'];
    }

    /**
     * Set the value of the Date property.
     *
     * @param string date
     * @return this instance
     */
    public function setDate($value)
    {
        $this->_fields['Date']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Date is set.
     *
     * @return true if Date is set.
     */
    public function isSetDate()
    {
                return !is_null($this->_fields['Date']['FieldValue']);
            }

    /**
     * Set the value of Date, return this.
     *
     * @param date
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDate($value)
    {
        $this->setDate($value);
        return $this;
    }

    /**
     * Get the value of the SubscriptionCount property.
     *
     * @return Integer SubscriptionCount.
     */
    public function getSubscriptionCount()
    {
        return $this->_fields['SubscriptionCount']['FieldValue'];
    }

    /**
     * Set the value of the SubscriptionCount property.
     *
     * @param int subscriptionCount
     * @return this instance
     */
    public function setSubscriptionCount($value)
    {
        $this->_fields['SubscriptionCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SubscriptionCount is set.
     *
     * @return true if SubscriptionCount is set.
     */
    public function isSetSubscriptionCount()
    {
                return !is_null($this->_fields['SubscriptionCount']['FieldValue']);
            }

    /**
     * Set the value of SubscriptionCount, return this.
     *
     * @param subscriptionCount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSubscriptionCount($value)
    {
        $this->setSubscriptionCount($value);
        return $this;
    }

}
