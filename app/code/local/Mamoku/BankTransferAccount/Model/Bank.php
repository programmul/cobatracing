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
 * @package     Mamoku_BankTransferAccount
 * @copyright   Copyright (c) 2015 Mamoku Services (http://www.mamoku.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Installer to create table ks_bank_transfer_account
 *
 * @author      Team Mamoku <info@mamoku.com>
 */

class Mamoku_BankTransferAccount_Model_Bank extends Mage_Core_Model_Abstract
{
    /**
     * Initialize resource model
     *
     */
    public function _construct()
    {
        $this->_init('banktransferaccount/bank');
    }

    public function getBankLabel($bankId)
    {
    	$collection = $this->load($bankId);
        $bankLabel = '';
        if($collection->getBankName()) $bankLabel = '<strong>'.$collection->getBankName().'</strong><br>'.$collection->getAccountName().'<br>'.$collection->getAccountNo();
        return $bankLabel;
    }

    public function getBankLabelOneLine($bankId)
    {
        $collection = $this->load($bankId);
        $bankLabel = $collection->getBankName().' - '.$collection->getAccountName().' - '.$collection->getAccountNo();
        return $bankLabel;
    }

}
