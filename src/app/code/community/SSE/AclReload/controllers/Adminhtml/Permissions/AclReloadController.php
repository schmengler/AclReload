<?php
/**
 * This file is part of SSE_AclReload for Magento.
 *
 * @license http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @author Fabian Schmengler <fabian@schmengler-se.de>
 * @category SSE
 * @package SSE_AclReload
 * @copyright Copyright (c) 2014 Schmengler Software Engineering (http://www.schmengler-se.de/)
 */

class SSE_AclReload_Adminhtml_Permissions_AclReloadController extends Mage_Adminhtml_Controller_Action
{
    protected function _isAllowed()
    {
        return true;
    }

    public function indexAction()
    {
        $session = Mage::getSingleton('admin/session');
        $session->setAcl(Mage::getResourceModel('admin/acl')->loadAcl());

        Mage::getSingleton('adminhtml/session')->addSuccess($this->__('ACL reloaded'));
        $this->_redirectReferer();
    }
}