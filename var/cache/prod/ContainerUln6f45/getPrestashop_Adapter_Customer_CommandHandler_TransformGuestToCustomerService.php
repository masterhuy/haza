<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.customer.command_handler.transform_guest_to_customer' shared service.

return $this->services['prestashop.adapter.customer.command_handler.transform_guest_to_customer'] = new \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\TransformGuestToCustomerHandler(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->language->id);
