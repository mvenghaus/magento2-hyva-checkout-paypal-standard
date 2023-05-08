<?php

declare(strict_types=1);

namespace Hyva\PaypalStandard\Model\Magewire\Payment;

use Hyva\Checkout\Model\Magewire\Payment\AbstractPlaceOrderService;
use Magento\Quote\Api\CartManagementInterface;
use Magento\Quote\Model\Quote;
use Magento\Framework\UrlInterface;

class PlaceOrderService extends AbstractPlaceOrderService
{
    public function __construct(
        private readonly UrlInterface $url,
        CartManagementInterface $cartManagement
    ) {
        parent::__construct($cartManagement);
    }

    public function placeOrder(Quote $quote): int
    {
        return 1;
    }

    public function canRedirect(): bool
    {
        return true;
    }

    public function getRedirectUrl(Quote $quote, ?int $orderId = null): string
    {
        return $this->url->getUrl('paypal/express/start');
    }
}
