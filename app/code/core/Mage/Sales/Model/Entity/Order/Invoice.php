<?php

/**
 * @copyright  For copyright and license information, read the COPYING.txt file.
 * @link       /COPYING.txt
 * @license    Open Software License (OSL 3.0)
 * @package    Mage_Sales
 */

/**
 * Invoice entity resource model
 *
 * @extends Mage_Eav_Model_Entity_Abstract<Mage_Sales_Model_Order_Invoice>
 * @package    Mage_Sales
 */
class Mage_Sales_Model_Entity_Order_Invoice extends Mage_Eav_Model_Entity_Abstract
{
    public function __construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('invoice')->setConnection(
            $resource->getConnection('sales_read'),
            $resource->getConnection('sales_write'),
        );
    }
}
