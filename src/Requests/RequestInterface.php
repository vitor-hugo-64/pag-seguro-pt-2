<?php

namespace BrPayments\Requests;

use BrPayments\OrderInterface as Order;

Interface RequestInterface
{
	public function getUrl( Order $code, bool $sandbox = null) : string;
	public function getMethod() : string;
}