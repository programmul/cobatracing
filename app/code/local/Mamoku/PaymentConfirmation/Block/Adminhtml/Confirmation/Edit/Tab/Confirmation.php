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
 * @category    Mamoku
 * @package     Mamoku_PaymentConfirmation
 * @copyright   Copyright (c) 2015 mamoku
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Installer to create table mamoku_payment_confirmation
 *
 * @author      mamoku <info@mamoku.com>
 */

class Mamoku_PaymentConfirmation_Block_Adminhtml_Confirmation_Edit_Tab_Confirmation extends Mage_Adminhtml_Block_Widget_Form
{
    
    public function __construct() 
    {
        $this->setTemplate("mamoku/paymentconfirmation/edit/tab/confirmation.phtml");
    }
}
