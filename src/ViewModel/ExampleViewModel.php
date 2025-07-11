<?php

declare(strict_types=1);

namespace JosephLeedy\TestActions\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class ExampleViewModel implements ArgumentInterface
{
    public function __construct(private readonly ScopeConfigInterface $scopeConfig) {}

    public function getStoreName(): string
    {
        return $this->scopeConfig->getValue('general/store_information/name') ?? '';
    }

    public function getStorePhoneNumber(): string
    {
        return $this->scopeConfig->getValue('general/store_information/phone') ?? '';
    }
}
