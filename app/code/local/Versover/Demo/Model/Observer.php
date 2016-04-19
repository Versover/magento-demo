<?php

class Versover_Demo_Module_Observer
{
	public function logCustomer($observer)
	{
		$customer = $observer->getCustomer();
		Mage::log($customer->getName() . ' has logged in!', null, 'customer.log');
	}
}
