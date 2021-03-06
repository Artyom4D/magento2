<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     Mage_Centinel
 * @subpackage  integration_tests
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Test class for Mage_Centinel_Helper_Data
 */
class Mage_Centinel_Helper_DataTest extends PHPUnit_Framework_TestCase
{
    public function testGetInfoBlock()
    {
        /** @var $block Mage_Payment_Helper_Data */
        $block = Mage::helper('Mage_Payment_Helper_Data');
        /** @var $paymentInfo Mage_Payment_Model_Info */
        $paymentInfo = Mage::getModel('Mage_Payment_Model_Info');
        $paymentInfo->setMethod('checkmo');
        $result = $block->getInfoBlock($paymentInfo);
        $this->assertInstanceOf('Mage_Payment_Block_Info_Checkmo', $result);
    }
}
